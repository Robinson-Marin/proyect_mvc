@extends('layout.app')
@section('content')

    <div class="container">
        <h3>Detalles de categoría</h3>

        <div class ="card">
             <div class="car-body">
                 {{ $category->id }}
                 {{ $category->category_name }}
                 @if ($category->active)
                    Activa
                 @else
                    Inactiva
                 @endif
            </div>
            <a class="btn btn-primary" hret="{{ route('categories.edit', $category->id) }}">Edit</a>
            <form action="{{ route('categories.destroy', $category->id) }}" method="post" style=display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class=btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@endsection
