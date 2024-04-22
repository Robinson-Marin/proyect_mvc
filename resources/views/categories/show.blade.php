@extends('layouts.app')
@section('content')

    <div class="container">
        <h3>Detalles de categoría</h3>

        <div class ="card">
            <div class="car-body">
                <h1>{{ $category->id }}</h1>
                <h1>{{ $category->category_name }}</h1>
                <h1>{{$category->create}}</h1>
                @if ($category->active)
                    Activa
                @else
                    Inactiva
                @endif
                <br><a class="btn btn-primary" hret="{{ route('categories.edit', $category->id) }}">Edit</a>
            </div>
            <form action="{{ route('categories.destroy', $category->id) }}">
                @csrf
                @method('DELETE')
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Atrás</a>
            </form>
        </div>
    </div>
@endsection
