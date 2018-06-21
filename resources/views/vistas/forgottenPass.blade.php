@extends('layouts.default')

@section('vistaEnviarLink')
<div class="container">
    <h2>
        Restablecer Contraseña
    </h2>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <a href="{{ route('password.email') }}"></a>
    <form action="{{ route('password.email') }}" class="" method="POST" role="form">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="" for="email">
                Correo Electrónico
            </label>
            <div class="">
                <input class="form-control" id="email" name="email" required="" type="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>
                            {{ $errors->first('email') }}
                        </strong>
                    </span>
                    @endif
                </input>
            </div>
        </div>
        <div class="form-group">
            <div class="">
                <button class="btn btn-primary" type="submit">
                    Enviarme link de restablecimiento
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
