@extends('layouts.admin')

@section('content')

    <div class="container">
       
            <h1>Elenco posts</h1>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Text</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td>{{$post->title}}</td>
                            <td>{{$post->content}}</td>
                            <td><a href="{{ route('admin.posts.show', $post) }}" class="btn btn-info">Show</a></td>
                            <td><a href="" class="btn btn-success">Edit</a></td>
                            <td><a href="" class="btn btn-danger">Delete</a></td>
                        </tr>
                  @endforeach
                  <tr>
                </tbody>
              </table>
                        
                  
    </div>
    
@endsection