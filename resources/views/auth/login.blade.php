<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Masuk</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>MyList</b></a>
  </div>
  
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Masuk untuk memulai</p>

      <form action="{{ route('login') }}" method="post">
        {{ csrf_field() }}

        <div class="input-group mb-3{{ $errors->has('name') ? ' has-error' : '' }}">
          <input type="text" class="form-control" placeholder="Username" id="name" name="name" value="{{ old('name') }}" required autofocus>

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>

          @if ($errors->has('name'))
            <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif

        </div>

        <div class="input-group mb-3{{ $errors->has('password') ? ' has-error' : '' }}">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>

          @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif

        </div>

        <div class="row">
          <div class="col-8">
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">Remember Me</label>
          </div>
        </div>
      
        <div class="social-auth-links text-center mb-3">
          <button type="submit" class="btn btn-block btn-primary"> Masuk </button>
          <p> Belum punya akun? <a href="register" class="text-center">Daftar disini</a></p>
        </div>

      </form>

    </div>
  </div>
</div>

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/adminlte.min.js"></script>

</body>
</html>
