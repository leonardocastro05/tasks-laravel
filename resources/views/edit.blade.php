@extends('layouts.master')
@section('name', 'Editar Estudiant')
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <h2 class="text-center my-4">Editar Estudiant</h2>
        <form action="{{ route('update', ['id' => $student->id]) }}" method="POST">
            @csrf
            <div>
                <label for="name">Nom:</label>
                <input type="text" name="name" value="{{ $student->name }}" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ $student->email }}" required>
            </div>
            <div>
                <label for="address">Adreça</label>
                <input type="text" name="address" value="{{ $student->address }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Actualitzar</button>
        </form>
    </div>
</div>
@endsection