<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        $posts = [
            ['id' => '1', 'title' => 'Post Title 1', 'body' => 'Post Body 1'],
            ['id' => '2', 'title' => 'Post Title 2', 'body' => 'Post Body 2'],
            ['id' => '3', 'title' => 'Post Title 3', 'body' => 'Post Body 3'],
            ['id' => '4', 'title' => 'Post Title 4', 'body' => 'Post Body 4']
        ];

        return view ('index', compact('posts'));
=======
        $posts =[
            ['id'=>'1', 'title'=>'Post Title 1', 'body'=>'Post Body 1'],
            ['id'=>'2', 'title'=>'Post Title 2', 'body'=>'Post Body 2'],
            ['id'=>'3', 'title'=>'Post Title 3', 'body'=>'Post Body 3'],
            ['id'=>'4', 'title'=>'Post Title 4', 'body'=>'Post Body 4'],
            ['id'=>'5', 'title'=>'Post Title 5', 'body'=>'Post Body 5']
        ];
        return view('index', compact('posts'));
>>>>>>> 378ff517e5acd8512358a9f2fbb30aea6cde5e5a
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        //
=======
>>>>>>> 378ff517e5acd8512358a9f2fbb30aea6cde5e5a
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        //
=======
>>>>>>> 378ff517e5acd8512358a9f2fbb30aea6cde5e5a
        return dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< HEAD
        //
        return "Ini adalah halaman show dengan ID: " . $id;
=======
        return 'Ini halaman show dengan id: '. $id;
>>>>>>> 378ff517e5acd8512358a9f2fbb30aea6cde5e5a
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< HEAD
        //
=======
        return 'Halaman edit data dengan ID ' .$id;
>>>>>>> 378ff517e5acd8512358a9f2fbb30aea6cde5e5a
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
