@extends('template')
@section('content')
<div>
    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @foreach($usuarios as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->rol->nombre}}</td>
                    <td>
                        <a href="{{ action('UserController@edit',[$user->id]) }}" class="on-default remove-row">editar</a>
                        <a href="{{ action('UserController@destroy',[$user->id]) }}" class="on-default remove-row">eliminar</a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    <a class="button" href="{{ action('UserController@create') }}">Crear</a>
</div>
@endsection