@extends('layouts.admin');

@section('content')
    <div class="container">
        
        <h1>posts index</h1>
        <a href=" {{ route('admin.posts.create') }} ">crea nuovo post</a>
        <hr>
        <h2 class="text-center">Lista post</h2>
        @dump($posts)
        @foreach ($posts as $post)
        <div>
            <h3> {{ $post['title']}} </h3>
            <h6>Autore: {{ $post->user->name}} </h6>
            <h6>categoria: {{ $post->category->name }} </h6>
            
            <p> {{ $post['text']}} </p>
            <a href=" {{ route('admin.posts.show', $post->id)}} ">dettagli</a>
            <hr>
        </div>
        @endforeach
        <div>
            {!! $posts->links() !!}
        </div>
    </div>
@endsection