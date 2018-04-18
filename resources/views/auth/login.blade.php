@extends('layouts.main')

@section('content')
<div class="container text-center">
    <img class="card-img-top mx-auto centrado" src="images/logoudg.png">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="CÓDIGO" required autofocus>

                @if ($errors->has('username'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <!--div class="form-group">
            <div class="col-md-6 offset-md-3">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="CÓDIGO" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div-->

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="NIP" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <div class="checkbox">
                    <label class="han">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Recordarme') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-3">
                <button type="submit" class="btn btn-outline-light">
                    {{ __('Iniciar Sesión') }}
                </button>

                <a class="btn btn-outline-light" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu NIP?') }}
                </a>
            </div>
        </div>
    </form>
</div>