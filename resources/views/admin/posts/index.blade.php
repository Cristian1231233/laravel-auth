@extends('layouts.app')

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
                        </tr>
                  @endforeach
                  <tr>
                </tbody>
              </table>
                        {{-- @foreach ($posts as $post)
                        <tr>
                            <th>{{$post->id}}</th>
                            <th>{{$post->title}}</th>
                            <th>{{$post->content}}</th>
                        </tr>
                        @endforeach --}}
                  
    </div>
    
@endsection