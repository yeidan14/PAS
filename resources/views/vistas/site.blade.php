@extends('layouts.default')

@section('site')
<div class="container">
    <h1>
        Bienvenido Al Site personal
    </h1>
    <form action="{{ route('auth_destroy_path') }}" class="btn-logout" method="post">
        {{ csrf_field() }}
        <button class="btn btn-primary" type="submit">
            Cerrar Sesión
        </button>
    </form>
</div>
@endsection
