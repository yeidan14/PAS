@extends('layouts.default')

@section('vistaLogin')
<div class="container">
    <form action="{{ route('auth_login_path') }}" class="formulario" method="post">
        {{ csrf_field() }}
                @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
        <h1>
            Login
        </h1>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="exampleInputEmail1">
                Correo electrónico
            </label>
            <input class="form-control" id="exampleInputEmail1" name="email" placeholder="myemail@example.com" type="email" value="{{ old('email') }}">
            </input>
        </div>
        <div class="form-group{{ $errors->has('pass') ? ' has-error' : '' }}">
            <label for="exampleInputPassword1">
                Contraseña
            </label>
            <input class="form-control" id="exampleInputPassword1" name="pass" placeholder="Ingrese una contraseña" type="password">
            </input>
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label>
                     <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Recordarme
                </label>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">
            Iniciar Sesión
        </button>
        <a href="{{ route('password.request') }}">
            ¿Olvidó Su contraseña?
        </a>
    </form>
</div>
@endsection
