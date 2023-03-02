<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Book $book)
    {
    $books = Book::all(); 
    return view('dashboard',compact('book'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
         $storeData = $request->validate([
            'title' => 'required|max:255',
            's1_title' => 'required|max:255',
            's1_body' => 'required|max:255',
            
        ]);
        
        // newにして上書きできる状態が望ましい(createで保存が)
        
        $books = Book::create($storeData);
        // ディレクトリ名
        $dir = 'sample';
        
        // アップロードされたファイル名を取得
        $file_name = $request->file('s1_img')->getClientOriginalName();

        // 取得したファイル名で保存
        $request->file('s1_img')->storeAs('public/' . $dir, $file_name);
        
        // $image = new Image(); 
         $books->s1_img_name = $file_name;
         $books->s1_img = 'storage/' . $dir . '/' . $file_name;
         $books->save();
        
        return redirect('/books');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
         return view('manual',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('booksedit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
            $updateData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required|max:255',
        ]);
        $book->update($updateData);
        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
    $book->delete();
        return redirect('/books');
    }
}