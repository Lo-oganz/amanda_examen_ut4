@extends('adminlte::page')

@section('title', 'Calificaciones')

@section('content_header')
    <h1>Calificaciones</h1>
@endsection

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Módulo</th>
            <th>Nota</th>
            <th>Fecha registro</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->module }}</td>
                    <td>{{ $student->score }}</td>
                    <td>{{ $student->created_at }}</td>
                </tr>
            @endforeach
          </tbody>
       </table>
    </div>
@stop