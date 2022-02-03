@extends('layouts.admin')

@section('content')

    <div class="container">
       
            <h1>Show</h1>
            <div><strong>Titolo:</strong> {{ $post->title }}</div>
            <div><strong>Descrizione:</strong> {{ $post->content }}</div>
            <a href="" class="btn btn-success">Edit</a>
            
    </div>
    
@endsection