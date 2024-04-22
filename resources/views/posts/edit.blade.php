@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDITAR POST</div>
                    <div class="card-body">
                    <h3>Realizar Cambios</h3>
                    <form method="POST" action="{{ route('posts.update',$post->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <label for="title">Titulo:</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}">
                    </div>
                        <div class="form-group mb-3">
                            <label for="content">Contenido</label>
                            <textarea name="content" id="content" cols="5"
                            rows="6" class="form-control">{{  $post->content }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="category_name">Nombre de la Categoria</label>
                            <select name="category_id" id="category" class="form-control">
                                <option value="">Seleccione una categoria</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                            <button type="submit" class="btn btn-primary mb-3">Editar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection