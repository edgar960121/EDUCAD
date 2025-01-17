@extends('users.users_inicio')
@section('title','Bienvenidos Plataforma CACI')
@section('scripts')
  <script src="{{URL::asset('js/inscripcion.js')}}" type="text/javascript"> </script>
  <script src="{{URL::asset('js/usuarios.js')}}" type="text/javascript"> </script> 
@endsection 
@section('content')
<style>
    .margin-card {
        margin-bottom: 10%;
    }

    .btn-regresar {
        margin: 40px 20px 40px 0px;
    }

    .container {
        margin-top: 10px;
    }

    .table-plain {
        width: 100%;
        border-bottom: 1px solid #dee2e6
    }

    .table-striped .table-plain tbody tr:nth-of-type(2n+1) {
        background-color: transparent;
    }

    .table-plain tbody td {
        background-color: transparent;
        padding: 2px .75rem;
    }

    .pn {
        margin-right: 10px;
    }

    h2 {
        margin-top: 20px;
    }
</style>
<br>
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">

<link href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}" rel="stylesheet">

<link href="{{ asset('vendor/animate/animate.css') }}" rel="stylesheet">

<link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet">

<link href="{{ asset('vendor/animsition/css/animsition.min.css') }}" rel="stylesheet">

<link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet">

<link href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}" rel="stylesheet">

<link href="{{ asset('css/util.css') }}" rel="stylesheet">

<link href="{{ asset('css/main.css') }}" rel="stylesheet">

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 style="font-size: 35px;"><i class="fa fa-user"></i> Editar Usuario</h2>
        </div>
        <form id="regForm" action="{{route('update',$user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <input id="name" type="text" class="form-control" name="name" placeholder="Nombre" value="{{$user->name}}" required>
            </div>
            <div>
                <select style="font-size: 15px;" name="rol" id="rol">
                    <option value='super_educad'>Super Educad</option>
                    <option value='educad'>Educad</option>
                </select>
            </div>
            <div>
                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{$user->email}}" readonly required>                  
            </div>
            <div>
                <input id="password" type="password" class="form-control" name="password" placeholder="Nuevo password" minlength="8" required>
            </div>
            <div>
                {{--  <button type="button" onclick="editUsuario({{$user->id}})" class="btn btn-primary float-right"><i class="fa fa-save"></i> Actualizar</button>  --}}
                <span class="float-right">
                    <a class="btn btn-md btn-dark"
                    href="{{route('users.index')}}"
                    title="Regresar"><i class="fa fa-arrow-left"></i> Regresar</a>
                <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Actualizar</button>
                </span>
            </div>
        </form>
    </div>
</div>

<script>
    function getIndexCaci() {
      document.getElementById("rol").selectedIndex = {{$pos_rol}};
    }
    getIndexCaci();
</script>

<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

@endsection