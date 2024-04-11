@extends('layouts.app')


@section('content')
    <h1>Crear categoría</h1>
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="form-group">

                <div class="mb-3">
                    <label for="category_name"class="form_label">Nombre Categoria</label>
                    <input class="form-control" type="text" name="category_name" id="category_name"
                    placeholder="Category Name">
                </div>

                <div class="mb-3">
                    <label for="active">Activa</label>
                    <input class="form-check-input" type="checkbox" name="active" id="active" value="0">
                </div>

                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>
        </form>
@endsection
