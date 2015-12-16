<!DOCTYPE html>
<html lang="en" encoding="utf-8">
  <head>
    <title>SUPPORT | Mini Jam Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" /> 

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/bootstrap.css')}}">
    <!--<link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/bootstrap-theme.css')}}">-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/bounce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/style.css?version=1.1')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/site.css?version=1.1')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/socialicious.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/supportiens.css')}}">
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="{{asset('assets/SupportWebsite/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/SupportWebsite/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/SupportWebsite/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/SupportWebsite/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/SupportWebsite/ico/apple-touch-icon-57-precomposed.png')}}">

    <style type="text/css">
        .no-slider
        {
            padding-top: 30px;
            padding-bottom: 30px;
           /* background-color: #f5f5f5;*/
        }
        .com_logo
        {
            border-radius: 50px;
            /*background-color: #282828*/
            width: 100px;
        }
    </style>

  </head>

  <body id="page-top">
    <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
    <div class="container no-slider">
        <div class="col-sm-5">
          <form id="reg-form" class="form-signin" method="POST" action="{{URL::route('postRegistrationMiniJam')}}" enctype="multipart/form-data">
              {{Form::token()}}
          <h2 class="form-signin-heading">Mini Jam Registration</h2>
          <hr/>
          <div id="errorDiv1" class="error-div"></div>
          
          <div id="Mem">
            <input id="name" name="name" type="text"  required class="form-control req-min req-full-name" minlength="3" maxlength="60" placeholder="Full Name">
            <input id="uni_fac" name="uni_fac" type="text"  required class="form-control req-min req-full-name" minlength="3" maxlength="200" placeholder="Faculty-University">
            <input id="e-mail" type="email" required class="form-control req-min req-email" minlength="3" maxlength="40" placeholder="Email address" name="email">
            <input id="tel" type="tel"  pattern="[0-9]+" required class="form-control req-numeric req-min" minlength="3" maxlength="14" placeholder="Mobile" name="mobile">
          </div>
          <hr/>
          <textarea class="form-control" placeholder="Comments (optional)" name="comments"></textarea><br />
          
          <input type="button" value="Send" class="btn btn-primary" id="send">
          <script type="text/javascript">
            window.onload = function(){
              $(function(){
                $("#send").click(function(){
                  if($("#name").val() != ""
                  && $("#uni_fac").val() != ""
                  && $("#e-mail").val() != ""
                  && $("#tel").val() != ""){
                    $("#reg-form").submit();
                  } else{
                    $("#send").notify("Make sure you filled required fields", 
                      {
                        elementPosition:'bottom left',
                        className:'error', 
                        showAnimation: 'slideDown',
                        autoHide: true,
                        clickToHide: true,
                        autoHideDelay: 1500,

                      })
                  }
                });
              });
            };
          </script>
        </form>
      </div>
      <!--description body-->
      <div class="col-sm-6" id="event_des_body">
       <img class="img-responsive" src="{{ URL::asset('assets/SupportWebsite/img/mini-jam.jpg')}}">   
      </div>
    </div><!--/.container-->

    <!--<a id="scroll-top" href="#page-top"><h1>^</h1></a>-->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('assets/SupportWebsite/js/jquery.js')}}"></script>
    <script src="{{asset('assets/SupportWebsite/js/bootstrap.min.js')}}"></script>
    <!--<script src="{{asset('assets/SupportWebsite/js/slide-top.js')}}"></script>-->
    <script src="{{asset('assets/SupportWebsite/js/notify-min.js')}}"></script>
    <script type="text/javascript">
      @if(Session::has('success'))
        success_notif("{{Session::get('success')}}");
      @elseif(Session::has('fail'))
        fail_notif("{{Session::get('fail')}}");
      @elseif(Session::has('warn'))
        warn_notif("{{Session::get('warn')}}");
      @endif
    </script>
    
    <!--<script type="text/javascript" src="{{asset('assets/SupportWebsite/js/jquery.ufvalidator-1.0.7.js')}}"></script>-->
    <!--<script type="text/javascript" src="{{asset('assets/SupportWebsite/js/reg.js')}}"></script>-->
  </body>
</html>
