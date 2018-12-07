@extends('template')
@section('content')
    <br>
<form class="form-horizontal" action="{{action('UserController@store')}}" method="POST">
    {{ csrf_field() }}
    <input name="id" class="form-control" type="hidden" required="" value="@if(!empty($user)){{ $user->id }}@endif">
    <div class="form-group ">
        <div class="col-xs-12">
            <input name="user" class="form-control" type="text" required="" value="@if(!empty($user)){{ $user->name }}@endif" placeholder="Username">
        </div>
    </div>

    <div class="form-group ">
        <div class="col-xs-12">
            <input name="email" class="form-control" value="@if(!empty($user)){{ $user->email }}@endif" type="text" required="" placeholder="Email">
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-12">
            <input name="password" class="form-control" type="password" required placeholder="Password">
        </div>
    </div>

    <div class="form-group">
        <div id="camaras_container" class="col-md-7">
            <select class='select2 form-control input-sm' name='rol'>
                <option value=''>Selecciona un rol</option>
                @foreach($roles as $rol)
                    @if(!empty($user) && $user->rol_id == $rol->id)
                    <option value='{{ $rol->id }}' selected>{{ $rol->nombre }}</option>
                    @else
                        <option value='{{ $rol->id }}'>{{ $rol->nombre }}</option>
                        @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group text-center m-t-30">
        <div class="col-xs-12">
            <button id="enviar" class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Guardar</button>
        </div>
    </div>

</form>
@endsection