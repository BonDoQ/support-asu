<!DOCTYPE html>
<html lang="en" encoding="utf-8">
  <head>
    <title>log in to &middot; SUPPORT</title>
</head>
<body>
	    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <div class="container">

      <form class="form-signin" method="post" action="{{URL::route('postlogin')}}" >
        <div>{{Session::get('fail')}}</div>
        <h2 class="form-signin-heading">Please log in</h2>
        <input type="text" name="username" class="input-block-level" placeholder="Email or Username"{{($errors->has('username')) ? 'has-error' : ""}}>
         @if($errors->has('username') )
           {{ $errors->first('username') }}
        @endif
        <input type="password" name="password" class="input-block-level" placeholder="Password"{{($errors->has('password')) ? 'has-error' : ""}}>
         @if($errors->has('password'))
           {{ $errors->first('password') }}
        @endif
        <input type="checkbox" name="remember" class="input-block-level" placeholder="false">
        {{ Form::token() }}
        <button class="btn btn-primary" type="submit">login</button>
      </form>

    </div> <!-- /container -->
</body>
    </html>