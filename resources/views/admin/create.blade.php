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
        <div>
            <button type="submit" class="btn btn-primary my-3">crea</button>
        </div>
    </form>
</div>
@endsection