@extends('layouts.admin');

@section('content')
    <div class="container">
        <div class="text-center">
            
            <h1>pagina show</h1>
        </div>
        <h2>{{ $post['title'] }}</h2>
        <h6>Categoria: {{ $post->category->name }}</h6>
        <h6>Tag:</h6>
        <ul>
            @foreach ($post->tags as $tag)
            
            <li>{{ $tag->name }}</li>            
            @endforeach
        </ul>
        <p>{{ $post['text'] }}</p>
        <br>
        
        <div class="d-flex me-3">
            <div class="mr-3">
                <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->id) }}">Modifica</a>
            </div>
            
            <div>
                <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Cancella Post">
                </form>
    
        </div>
        
        <br>
        <a href="{{ route('admin.posts.index') }}">Torna alla lista</a>
    </div>
@endsection