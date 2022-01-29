@extends('layouts.admin');

@section('content')
<div class="container">

    <h1>Pagina modifica post</h1>
    <form action=" {{ route('admin.posts.update', $post->id)}} " method="post">
        @csrf
        @method('put')

        <div>
            <label for="title" class="form-label">titolo</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
        </div>
        <div>
            <label for="text" class="form-label">testo</label>
            <textarea name="text" id="" cols="30" rows="10" class="form-control">{{ $post->text }}</textarea>
            
        </div>
        <div class="form-group">
            <label class="form-label">Categoria</label>
            <select name="category_id" class="form-control">
              @foreach($categories as $category)
              <option value="{{$category->id}}" @if($category->id ===
                $post->category_id) selected @endif>{{$category->name}}</option>
              @endforeach
            </select>
          </div>
          <div>
            
          </div>
          <div>
            {{-- @dump($post->tags) --}}
            @foreach($tags as $tag)
            <label for="tags">{{ $tag->name}}</label>
              <input type="checkbox" id="tags" name="tags[]" value="{{$tag->id}}" @if ($post->tags->contains($tag)) checked
                  
              @endif>
              @endforeach
              {{-- <label for="">Tag</label>
              <select name="tags[]" class="form-control" multiple>
                @foreach ($tags as $tag)   
                <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
              </select> --}}
          </div>
        <div>
            <button type="submit" class="btn btn-primary my-3">Conferma Modifiche</button>
        </div>
    </form>
</div>
@endsection