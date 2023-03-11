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
        
        // $books = Book::all();
        return view('welcome', compact('books'));
// 　　// 検索フォームで入力された値を取得する
//     // $search = $books->input('search');
        
//         //
    }
}