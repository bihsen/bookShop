<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/book', 'Manager@book');

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/book' , function(){

//     $show_book = DB::select('SELECT * FROM books');
//     return $show_book;

// });

// Route::get('/insert', function($data) {

//     DB::insert('INSERT INTO books (Title, Author) VALUES (? , ?)',
//     ['ZeBook', 'ZeAuthor']);
//        return 'Insert into db';
// });

// Route::get('/form', function(){

//     return view('form');
// });
// Route::get('/form', function(){

//     return view('form');
// });

Route::get('/show', 'Manager@show');
Route::get('/book/{id}', 'Manager@book');
Route::get('/delete/{id}', 'Manager@delete');
Route::get('/edit/{id}', 'Manager@edit');
Route::get('/books/{id}', 'Manager@update');
//Route::post('/books/{id}', 'Manager@update');
Route::put('/books/{id}', 'Manager@update');


// Route::get('/login', 'Manager@login');
Route::get("/create", "Manager@create");

Route::post("/store", "Manager@store");
