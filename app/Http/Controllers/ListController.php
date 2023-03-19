<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

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
    return $this->belongsToMany(User::class, 'favorite');

    $book->favorite()->attach(auth()->user()->id);
    return back();
}
    
    public function unfavorite(Book $book)
{
        $likes = $book->favorite;
    $isLiked = LikeHelper::isLikedBy($book, auth()->user());
    $book->favorit()->detach(auth()->user()->id);
    return back();
}

}