@extends('template')
@section('content')
    <br>
<form class="form-horizontal" action="{{action('RolController@store')}}" method="POST">
    {{ csrf_field() }}
    <input name="id" class="form-control" type="hidden" required="" value="@if(!empty($rol)){{ $rol->id }}@endif">
    <div class="form-group ">
        <div class="col-xs-12">
            <input name="nombre" class="form-control" type="text" required="" value="@if(!empty($rol)){{ $rol->nombre }}@endif" placeholder="nombre">
        </div>
    </div>
    <div class="form-group text-center m-t-30">
        <div class="col-xs-12">
            <button id="enviar" class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Guardar</button>
        </div>
    </div>

</form>
@endsection