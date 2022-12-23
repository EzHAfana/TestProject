
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="" >
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet"href="{{ asset('assets/css/quicksand.css') }}">
    <link rel="stylesheet"href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet"href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet"href="{{ asset('assets/css/fontawesome.css') }}">
    <title>Online Sopping Admin</title>
  </head>
  <body class="login-body">
    <div class="container-fluid login-wrapper">
        <div class="login-box">
            <h1 class="text-center mb-5"><i class="fa fa-rocket text-primary"></i> Online Sopping Admin</h1>    
            <div class="row">
            <div class="col-md-6 col-sm-6 col-12 login-box-info">
                <h3 class="mb-4">Welcome</h3>
                <p class="mb-4">Hello, please enter your username and password to go to the admin page, wolf moon officia aute,brunch For a special page for revealing responsible for the Brotherhood and combatant pages that are run on Facebook and any other page that. Page admin of the page, profile Log in.</p>
            </div>
            <div class="col-md-6 col-sm-6 col-12 login-box-form p-4">
                <h3 class="mb-2">Login</h3>
                <small class="text-muted bc-description">Sign in with your credentials</small>
            <form method="POST" action="{{ route('login') }}" class="mt-2">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                    </div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>
                <div class="form-group">
                <button type="submit" id="signin" class="btn btn-theme btn-block p-2 mb-1">
                            {{ __('Login') }}
                        </button>
                </div>
            </form>
        </div>
    </div>
</div>
     

  </body>
</html>
