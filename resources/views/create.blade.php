@extends('layout.app')

<<<<<<< HEAD

@section('title')
    Create Post
@stop

@section('body')

    <h1>Create Post</h1>
    <form action="{{ route('post.store') }}" method="post">
        {{ csrf_field() }}
        
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="body">Body</label>
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
=======
@section('title')
    Halaman Create Post
@stop

@section('body')
    <h1>Halaman Create Post</h1>
        <form action="{{ route('post.store') }}" method="post">
            {{ csrf_field() }}
            <label for="title">Judul</label>
            <input type="text" name="title" id="title">
            <br>
            <label for="body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10"></textarea>
            <br>
            <button type="submit">Submit</button>
        </form>
>>>>>>> 378ff517e5acd8512358a9f2fbb30aea6cde5e5a
@stop