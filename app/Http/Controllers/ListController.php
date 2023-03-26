<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;

class ListController extends Controller
{
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
    public function index(Request $request) {
        if($request->search) {
            $books = Book::where('title', '=', $request->search)->get();
        } else {
            $books = Book::all();
        }
        
        $books = Book::latest('updated_at')->take(5)->get();
        
        // $books = Book::all();
        return view('welcome', compact('books'));
    }
    
    public function show(Request $request ,Book $book)
    {
         $books = Book::all();
         return view('open',compact('book'));
    }
    
     public function favorite(Book $book)
{
    // dd($book);
    // $user=auth()->user();
    $user = Auth::user();
    // dd($user);
    // return back();
    // // もしユーザがbookにいいねを持っていたらリターンバックする if else
    
    // // return $this->belongsToMany(User::class, 'favorite');

    // $book->favorite()->attach(auth()->user()->id);
    // return back();
    // dd($user->hasFavorite($book));
    // if(!$user->hasFavorite($book)) {
    //  $book->favorite()->attach($user->id);
    // }
    
    if (auth()->check()) {
    $user_id = auth()->user()->id;
    $is_favorite = Favorite::where('user_id', $user_id)->where('book_id', $book->id)->exists();
} else {
    $is_favorite = false;
}
    if(!$is_favorite){
        $book->favorite()->attach($user->id);
    }
    
    return back();  
}
    
    public function unfavorite(Book $book)
{
// もしユーザがbookにいいねを持っていたらリターンバックする if else

    $likes = $book->favorite;
    $isLiked = LikeHelper::isLikedBy($book, auth()->user());
    $book->favorit()->detach(auth()->user()->id);
    return back();
}

}