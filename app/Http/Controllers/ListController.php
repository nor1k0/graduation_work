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
    public function index(Request $request , Favorite $favorite) {
        if($request->search) {
            $books = Book::where('title', '=', $request->search)->get();
        } else {
            $books = Book::all();
        }    
        
        // $books = Book::latest('updated_at')->take(5)->get();
        // book_idが多い3件のFavoriteモデルを取得
        $favorites = Favorite::select('book_id')
            ->groupBy('book_id')
            ->orderByRaw('COUNT(*) DESC')
            ->take(5)
            ->get();

        // リレーションを使ってBookモデルを取得
        $favorite_books = $favorites->map(function ($favorite) {
            return $favorite->book;
        });
        

        // $books = Book::all();
       return view('welcome', compact('books', 'favorite_books'));
    }
    
    public function show(Request $request ,Book $book)
    {
         $books = Book::all();
         return view('open',compact('book'));
    }
    
    public function hasFavorite(Book $book)
{
    return $this->favorites->contains(function ($favorite) use ($book) {
    return $favorite->book_id === $book->id;
    });
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
        if (!$is_favorite) {
            $book->favorite()->attach(['user_id' => $user_id]);
        }
        return back();
    } else {
        return redirect()->route('login');
    }}

public function unfavorite(Book $book)
{
    if (auth()->check()) {
        $user_id = auth()->user()->id;
        $is_favorite = Favorite::where('user_id', $user_id)->where('book_id', $book->id)->exists();
        if ($is_favorite) {
            $book->favorite()->detach($user_id);
        }
    }
        return back();  
}}