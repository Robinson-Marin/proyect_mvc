@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="card">
                        <div class="card-header">Lista de Categorias</div>
                            <div class="card-body">
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
                                                    <a href="{{ route('categories.show', $categorie->id) }}" class="btn btn-primary">Ver</a>
                                                    <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-primary">Editar</a>
                                                    <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST" style="display: inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                                    </form>
                                                </tb>
                                            </tr>
                                        @endforeach
                                    </tbody>
                            </div>
                        </div>
                    
            </div>
        
    </div>
@endsection