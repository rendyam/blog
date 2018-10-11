@extends('layout.app')

@section('title')
<<<<<<< HEAD
    Halaman Create Post
@stop

@section('body')
    <h1>Halaman Post</h1>
    @if(count($posts) > 0)
        <ul>
            @foreach($posts as $post)
                <a href="{{ route('post.show', $post['id']) }}"><li>{{ $post['title']}}</li></a>
            @endforeach
        </ul>
        @else
        <p>Tidak ada data</p>
    @endif
=======
    Halaman Data Post
@stop

@section('body')
    <h1>Halaman Posts</h1>
        @if(count($posts) > 0)
            <ul>
                @foreach($posts as $post)
                    <a href="{{ route('post.show', $post['id']) }}"><li> {{$post['title']}} </li></a>
                @endforeach
            </ul>
            @else
                <p>Tidak ada data</p>
        @endif
>>>>>>> 378ff517e5acd8512358a9f2fbb30aea6cde5e5a
@stop