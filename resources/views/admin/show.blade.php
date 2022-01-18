@extends('layouts.admin');

@section('content')
    <div class="container">
        <h1>pagina show</h1>
        <h1>{{ $post['title'] }}</h1>
        <p>{{ $post['text'] }}</p>
        <br>
        <div class="d-flex">

            <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->id) }}">Modifica</a>
            
            <form action="{{ route('admin.posts.destroy', $post->id) }}" 
                method="post">
                @csrf
                @method('delete') 
                <input class="btn btn-danger" type="submit" value="Elimina">            
            </form>
        </div>
        <br>
        <a href="{{ route('admin.posts.index') }}">Torna alla lista</a>
    </div>
@endsection