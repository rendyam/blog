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

Route::get('/', function(){
    //return view('welcome');
    //return 'Hello, World!';
    //$a = 1;
    //$b = 2;
    //$c = $a + $b;
    //return $c;
    return redirect('/about');
});


Route::get('/about', function(){
    return 'Hi, this is about page';
});

Route::get('/blog', 'PostController@index');
// Route::get('/post/create', 'PostController@create');
// Route::post('/post/store', 'PostController@store');

//  Route::get('/post/{id}',['as' => 'post.detail', function($id) {
//      echo "Post $id";
//      echo "</br>";
//      echo "Body post in ID $id";
//  }]);

Route::resource('post', 'PostController');