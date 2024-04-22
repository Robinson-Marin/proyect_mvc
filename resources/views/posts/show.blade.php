@extends('layouts.app')
@section('content')
<div class="container">
    <div class ="card">
        <div class="car-body">
            <h3>Detalles de categoría</h3>
            <br>
            <h4>Titulo</h4>
            <p>{{ $post->title }}</p>
            <h4>Contenido</h4>
            <p>{{ $post->content }}</p>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Editar</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection