@extends('layouts.admin')

@section('content')

    <div class="container">
       
      @if(session('delete'))
        <div class="alert alert-info" role="alert">
            {{session('delete')}}
        </div>
      @endif

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
                            <td><a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-success">Edit</a></td>
                            <td>
                              <form onsubmit="return confirm('Confermi eliminazione di: {{ $post->title }}?')" action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                 <button type="submit" class="btn btn-danger">Delete</button> 
                            </form>
                            </td>

                        </tr>
                  @endforeach
                  <tr>
                </tbody>
              </table>
                        
                  {{ $posts->links() }}
    </div>
    
@endsection