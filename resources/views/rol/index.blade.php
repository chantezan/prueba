@extends('template')
@section('content')
<div>
    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($roles as $rol)
                <tr>
                    <td>{{$rol->nombre}}</td>
                    <td>
                        <a href="{{ action('RolController@edit',[$rol->id]) }}" class="on-default remove-row">editar</a>
                        <a href="{{ action('RolController@destroy',[$rol->id]) }}" class="on-default remove-row">eliminar</a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <a class="button" href="{{ action('RolController@create') }}">Crear</a>
</div>
@endsection