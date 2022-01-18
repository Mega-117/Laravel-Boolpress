@extends('layouts.admin');

@section('content')
    <div class="container">
        <h1>pagina show</h1>
        <h1>{{ $post['title'] }}</h1>
        <p>{{ $post['text'] }}</p>
        <br>
        <a href="{{ route('admin.posts.edit', $post->id) }}">Modifica</a>
        <br>
        <a href="{{ route('admin.posts.index') }}">Torna alla lista</a>
    </div>
@endsection