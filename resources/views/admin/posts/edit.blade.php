@extends('layouts.main')

@section('main-content')
    <h1 class="text-center">
        Modifica Post
    </h1>
    <div class="container mt-5">
        <form class="row g-3 bg-primary rounded shadow text-white p-4" action="{{route('andim.posts.update', $post)}}" method="POST">
            @method('PUT')
        @csrf
        <div class="col-4">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{$post->title}}">
        </div>
        <div class="col-4">
            <label for="author">Autore</label>
            <input type="text" name="author" id="author" value="{{$post->author}}">
        </div>
        <div class="col-4">
            <label for="description">Descrizione</label>
            <input type="text" name="description" id="description" value="{{$post->description}}">
        </div>
        <div class="col-4">
            <label for="image_url">Immagine</label>
            <input type="text" name="image_url" id="image_url" value="{{$post->image_url}}">
        </div>
        <div class="col-4">
            <label for="image_url">Categoria</label>
            <select class="form-select" name="category">
                @foreach ($categories as $category )

                    <option value="{{$category->id}}"
                    @if ($post->categories[0]->id === $category->id)
                        selected
                    @endif
                        >
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
        </div>


        <div class="col-12">
            <button class="btn btn-success text-white">send</button>
        </div>
        </form>
    </div>
@endsection
