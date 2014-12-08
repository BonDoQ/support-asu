<!DOCTYPE html>
<html lang="en" encoding="utf-8">
  <head>
    <title>register to &middot; SUPPORT</title>
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

      <form class="form-signin" method='post' action="{{ URL::route('postregister') }}">

        <h2 class="form-signin-heading">Please Register</h2>
        <input type="text" name="email" class="input-block-level" placeholder="Email"{{($errors->has('email')) ? 'has-error' : ""}}>
        @if($errors->has('email'))
           {{ $errors->first('email') }}
        @endif
        <input type="text" name="username" class="input-block-level" placeholder="Username"{{($errors->has('username')) ? 'has-error' : ""}}>
        @if($errors->has('username'))
           {{ $errors->first('username') }}
        @endif
        <input type="password" name="password" class="input-block-level" placeholder="Password"{{($errors->has('password')) ? 'has-error' : ""}}>
        @if($errors->has('password'))
           {{ $errors->first('password') }}
        @endif
        <input type="text" name="phone" class="input-block-level" placeholder="Phonenumber"{{($errors->has('phone')) ? 'has-error' : ""}}>
        @if($errors->has('phone'))
           {{ $errors->first('phone') }}
        @endif
        <input type="text" name="college" class="input-block-level" placeholder="college"{{($errors->has('college')) ? 'has-error' : ""}}>
        @if($errors->has('college'))
           {{ $errors->first('college') }}
        @endif
        <input type="text" name="committee" class="input-block-level" placeholder="Committee"{{($errors->has('committee')) ? 'has-error' : ""}}>
        @if($errors->has('committee'))
           {{ $errors->first('committee') }}
        @endif
        {{ Form::token() }}
        <button class="btn btn-primary" type="submit">Register</button>
      </form>
      @if(Session::has('success'))
       <div><li>{{Session::get('success')}} has been registered successfully</li></div>
       @endif
       @if(Session::has('fail'))
       <div><li>{{Session::get('fail')}} </li></div>
       @endif
    </div> <!-- /container -->
</body>
    </html>