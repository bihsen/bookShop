<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Manager extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }



    // public function show()
    // {
    //     $books= DB::select("SELECT * FROM books");
    //     return view('show' , ['books'=>$books]);
    // }

    // public function create()
    // {
    //     return view('form');
    // }

    // public function book($id){
    //    $book= DB::select("SELECT * FROM books WHERE id_book=?", [$id]);
    //    return view('book' , ['book'=>$book[0]]);
    // }

    // public function store(Request $request)
    // {
    //    DB::insert("INSERT INTO books (Author , Title) VALUES (? , ?)",
    //     [$request->Author, $request->Title]);
    //     //echo $request->Author;
    // }


    // public function delete($id){
    //     DB::delete("DELETE FROM books WHERE id_book=?",[$id]);

    //     return redirect('show');
    // }

    // public function edit( $id){

    //     $book= DB::select("SELECT * FROM books WHERE books.id_book=?", [$id]);

    //     return view('edit' , ['books'=>$book[0], "id" => $id]);



    //     // DB::update("UPDATE books SET Author=?, Title=? WHERE id_book=?",
    //     // [$request->Author, $request->Title, $id]);



    // }

    // public function update(Request $request , $id){

    //     DB::update("UPDATE books SET Author=?, Title=? WHERE id_book=?",
    //     [$request->Author, $request->Title, $id]);

    //     return redirect('show');

    // }


}
