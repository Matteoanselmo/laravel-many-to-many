@extends('layouts.main');

@section('main-content')
<main>
    @if (session("message"))
            <div class="alert alert-danger">
                {{session("message")}}
            </div>
        @endif
    <div class="container-fluid">
        <div class="row">
            <h1>List of Post </h1>
            <div class="col-12">
                <a href="{{route('andim.posts.create')}}" class="btn btn-warning">Crea Post</a>
            </div>
            <div class="col-12 d-flex flex-wrap">
                @foreach ($posts as $post)

                        <div class="card mb-2 p-3 mx-2" style="width: 18rem;">
                            <div class="text-center">
                                @foreach ($post->categories as $category )
                                <p style="background-color: {{ $category->color }}" class="p-3  text-white badge" >Categoria: {{ $category->name }}</p>

                                @endforeach
                            </div>
                            <img src="{{$post->image_url}}" class="card-img-top" alt="{{$post->title}}">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize">{{$post->title}}</h5>
                                <h6 class="card-title">{{$post->author}}</h6>
                                <p class="card-text">{{$post->description}}</p>
                                <a href="{{route('andim.posts.show', $post)}}" class="btn btn-primary">Visualizza</a>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a href="{{route('andim.posts.edit', $post->id)}}" class="btn btn-warning">Modifica</a>
                                <form action="{{route('andim.posts.destroy', $post)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Elimina</button>
                                </form>
                            </div>
                        </div>

                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection
