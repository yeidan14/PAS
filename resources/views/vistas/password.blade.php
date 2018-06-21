@extends('layouts.default')

@section('vistaEmail')
<div class="container">
    <h2>
        Restablecer Contraseña
    </h2>
    <h3>
        Por favor siga el enlace para reestablecer la contraseña
        <a href="{{ url(config('app.url') .':8000'. route('password.reset', $token, false)) }}">
            Link
        </a>
    </h3>
</div>
@endsection
