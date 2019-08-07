<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/show', 'Manager@show');
//Route::get('/book/{id}', 'Manager@book');
Route::get('/delete/{id}', 'Manager@delete');
Route::get('/edit/{id}', 'Manager@edit');
//Route::get('/books/{id}', 'Manager@update');
//Route::put('/books/{id}', 'Manager@update');
Route::get("/create", "Manager@create");
Route::post("/store", "Manager@store");

//Route::resource('/books', 'Manager');
Route::resource('/users', 'UserController');
Route::resource('/article', 'ArticleController');
// Route::get('/article', 'ArticleController');

Route::resource('/books', 'BooksController');




