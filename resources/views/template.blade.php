
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">


    <title></title>
    <!-- App css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="card-box">
            <h4> Bienvenido </h4>
            <div><a href="{{action('UserController@index')}}"> Usuarios </a></div><div> <a href="{{action('RolController@index')}}"> Roles </a></div>
        </div>
    </div>
    <div class="row">
        <div class="card-box">
        @yield('content')
            <div class="pull-right"><a href="{{action('LoginController@logout')}}"> Salir </a></div>
        </div>
    </div>
    <!-- end card-box-->
</div>
</body>