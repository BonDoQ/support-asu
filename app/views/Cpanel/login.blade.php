<!DOCTYPE html>
<html>
<head>
	<!-- Styles -->
    <link rel="stylesheet" href="{{URL::asset('assets/Cpanel/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/Cpanel/css/bootstrap-theme.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/Cpanel/css/bootstrap.min.css')}}">
	
	<link rel="stylesheet" href="{{URL::asset('assets/Cpanel/css/bootstrap-switch.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/Cpanel/css/style.css')}}">
    <!-- Scripts -->
	<!-- == -->
    <meta charset="UTF-8">
	<title>Admin's Panel | Login</title>
</head>
<body>           

<div class="container">
    
        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">    
                <form class="omb_loginForm" action="" autocomplete="off" method="POST" action="{{URL::route('postlogin')}}">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" name="username" placeholder="Email address or Username" required>
                    </div>
                    <span class="help-block"></span>
                                        
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input  type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                      <label class="checkbox">
                         <input type="checkbox" name='remember' checked>Remember Me
                      </label>
                    </div>
                     @if ( $errors->count() > 0 )
                    <span class="help-block">Password error</span>
                     @endif
                    {{ Form::token() }}
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                </form>
 
            </div>
        </div>
        <div class="row omb_row-sm-offset-3">
            
            <div class="col-xs-12 col-sm-3">
                <p class="omb_forgotPwd">
                    <a href="#">Forgot password?</a>
                </p>
            </div>
    
	</div><!-- End Container-->
	   
       <script src="{{URL::asset('assets/Cpanel/js/jquery.js')}}"></script>
       <script src="{{asset('assets/SupportWebsite/js/notify-min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/Cpanel/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('assets/Cpanel/js/site.js')}}"></script>
    <script type="text/javascript">
     @if(Session::has('fail'))
        fail_notif("{{Session::get('fail')}}");
      @elseif(Session::has('warn'))
        warn_notif("{{Session::get('warn')}}");
      @endif
    </script>
</body>
</html>
