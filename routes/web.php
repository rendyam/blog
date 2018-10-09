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

Route::get('/', function () {
    return redirect('/about');
});

Route::get('/about', function(){
    return 'Ini page about';
});

Route::get('/blog', 'PostController@index');
// Route::get('/post/create', 'PostController@create');
// Route::post('/post/store/', 'PostController@store');

// Route::get('/post/{id}', ['as'=>'post.detail', function($id){
//     echo "Post $id";
//     echo "</br>";
//     echo "Body post in ID $id";
// }]);

Route::resource('post', 'PostController');


Route::get('/insert', function(){
    //DB::insert('insert into posts(title, body, user_id) values (?,?,?)', ['Belajar PHP dengan Laravel', 'Laravel Best Framework!', '1']);
    $data = [
        'title' => 'Isian Title',
        'body' => 'Ini Body',
        'user_id' => 2
    ];
    DB::table('posts')->insert($data);
    echo "Data berhasil ditambahkan!!!";
});