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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hi', function () {
//     return "<h1>Laraval 2020</h1>";//when you want to h1 in other folder
// });
// Route::get('/{id}/{name}', function ($id,$name) {
//     return "This is id: ".$id."and this is name: " .$name;
// });

//  Route::get('/', function () {
//      return view('pages.index');
//  });
//  Route::get('/about', function () {
//      return view('pages.about');
//  });
//  Route::get('/contacct', function () {
//      return view('pages.contacct');
//  });
 
// user controller

  Route::get('/', 'PagesController@index');
  Route::get('/about', 'PagesController@about');
  Route::get('/contacct', 'PagesController@contacct');