
<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">

  <title> Login </title>
    
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  </head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <form class="newstyle" method="POST" action="{{ route('login') }}">
          @csrf
  <div class="form-group">
    <label class="styleLetters">SIIAU</label>
    <br>
    <label class="styleLetters">CODIGO</label>
    <input id="nip"  type="nip" placeholder="Codigo" class="form-control{{ $errors->has('nip') ? ' is-invalid' : '' }}" name="nip" value="{{ old('nip') }}" required autofocus>

    @if ($errors->has('nip'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('nip') }}</strong>
        </span>
    @endif

  </div>
  <div class="form-group">
    <label class="styleLetters">NIP</label>
    <input id="password" type="password"placeholder="Nip" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

    @if ($errors->has('password'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
  </div>
  <button type="submit" class="btn btn-primary">
      {{ __('Ingresar') }}
  </button>

</form>
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
    </div>
  </div>
</div>
</body>
</html>
