@extends('usuario.template')
@section('views_content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración</title>
</head>
<body>
    <section>
        <div>
            <a href="datospersonales">
                <img src="{{asset('imagen/Datos personales.png')}}" alt="">
            </a>
        </div>
        <div>
            <a href="contraseña">
                <img src="{{asset('imagen/contraseña.png')}}" alt="">
            </a>
        </div>
        <div>
         <form method="POST" action="{{ route('logout') }}">
           @csrf
                <x-jet-dropdown-link href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   this.closest('form').submit();">
                   <img src="{{asset('imagen/Cerrar sesión.png')}}" alt="">
                   </x-jet-dropdown-link>
            </form>
        </div>
    </section>
</body>
</html>

@stop