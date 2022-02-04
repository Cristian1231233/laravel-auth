@extends('layouts.admin')

@section('content')

    <div class="container">
       
            <h1>Show</h1>
            <div><strong>Titolo:</strong> {{ $post->title }}</div>
            <div><strong>Descrizione:</strong> {{ $post->content }}</div>
            <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-success">Edit</a>
            <button class="btn btn-danger">Delete</button>
    </div>
    
@endsection