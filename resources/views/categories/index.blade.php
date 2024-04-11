@extends('layouts.app')

@section('content')
    <div class="container">
        <h5>Lista de categorias</h5>
        <a href="{{ route('categories.create') }}" class="btn  btn-primary">Crear publicación</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Contenido</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $categorie)
                    <tr>
                        <td>{{ $categorie->id }}</td>
                        <td>{{ $categorie->category_name }}</td>
                        <td>{{ $categorie->active }}</td>
                        <td>
                            <a href="{{ route('posts.show', $categorie->id) }}" class="btn btn-primary">Ver</a>
                            <a href="{{ route('posts.edit', $categorie->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('posts.destroy', $categorie->id) }}"


                            method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </tb>
                    </tr>
                @endforeach
            </tbody>
        </div>
    @endsection
