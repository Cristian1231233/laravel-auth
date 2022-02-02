@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>Elenco posts</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titolo</th>
                            <th>Testo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <th>{{$post->id}}</th>
                            <th>{{$post->title}}</th>
                            <th>{{$post->content}}</th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
    
@endsection