@extends('layouts.master')
@section('name','Crear un Estudiant')
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <h1 class="text-center my-4">Crear un Estudiant</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('new') }}" method="POST">
            @csrf
            <div>
                <label for="name">Nom:</label>
                <input type="text" name="name" value="{{ old('name') }}" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div>
                <label for="address">Adreça</label>
                <input type="text" name="address" value="{{ old('address') }}" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-3">Afegir Estudiant</button>
        </form>
    </div>
</div>
@endsection