@extends('layouts.master')
@section('name', 'Llistat Estudiants')
@section('content')

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Adreça</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($student as $estudiant)
        <tr>
            <td>{{ $estudiant->name }}</td>
            <td>{{ $estudiant->email }}</td>
            <td>{{ $estudiant->address }}</td>
            <td>
                <form action="{{ route('edit', $estudiant->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                </form>
            </td>
            <td>
                <form action="{{ route('delete', $estudiant->id) }}" method="POST" onsubmit="return confirm('Vols borrar aquest estudiant?')">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection