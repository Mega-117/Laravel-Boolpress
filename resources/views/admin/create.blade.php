@extends('layouts.admin');

@section('content')
<div class="container">

    <h1>Pagina create</h1>
    <form action=" {{ route('admin.posts.store') }} " method="post">
        @csrf
        
        <div>
            <label for="title" class="form-label">titolo</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div>
            <label for="text" class="form-label">testo</label>
            <textarea name="text" id="" cols="30" rows="10" class="form-control"></textarea>
            
        </div>

        <div class="form-group">
            <label class="form-label">Categoria</label>
            <select name="category_id" class="form-control">
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
        </div>
        <div class="form-group">
            <label class="form-label">Tags</label>
            
              @foreach($tags as $tag)
              <input type="checkbox" id="tags" name="tags[]" value="{{$tag->id}}" checked>
              <label for="tags">{{ $tag->name}}</label>
              @endforeach

              {{-- <select name="tag_id" class="form-control">
                @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach
              </select> --}}
        </div>
        <div>
            <button type="submit" class="btn btn-primary my-3">crea</button>
        </div>
    </form>
</div>
@endsection