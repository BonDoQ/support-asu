<!DOCTYPE html>
<html>
<head>
<title>Schedule App</title>
  <meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Le styles -->
<link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/bootstrap-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/bounce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/socialicious.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/subevent.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/supportiens.css')}}">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/site.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/apppage.css')}}">
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
    <!--script src='https://www.google.com/recaptcha/api.js'></script-->
  </head>

  <body id="page-top">
    <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->

<div class="navbar navbar-inverse navbar-fixed-top" id="bar" role="navigation">
        <div class="container">
          <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
          <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="navbar-header" href="{{{ URL::to('/')  }}}"><img src="{{asset('assets/SupportWebsite/img/support_logo.png')}}"></a>
          <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li {{{ (Request::is('home', '/') ? 'class=active' : '') }}} >
                <a href="{{{ URL::to('/home')  }}}">Home</a>
              </li>
              <li {{{ (Request::is('events','events/*') ? 'class=active' : '') }}} >
                <a href="{{{ URL::to('/events')  }}}">Events</a>
              </li>
              <!--<li><a href="galary.html">Galary</a></li>-->
              <!--li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Supportians <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">2013</a></li>
                  <li><a href="#">2012</a></li>
                  <li><a href="#">2011</a></li>
                  <li><a href="#">2010</a></li>
                  <li><a href="#">2009</a></li>
                </ul-->
              </li>
              <!--<li><a href="#about">Gallary</a></li>-->
              <li {{{ (Request::is('sponsors') ? 'class=active' : '') }}} >
                <a href="{{{ URL::to('/sponsors')  }}}">Sponsors</a>
              </li>
              <li {{{ (Request::is('about') ? 'class=active' : '') }}} >
                <a href="{{{ URL::to('/about')  }}}">About us</a>
              </li>
              <li>
                <a href="#myModal" data-toggle="modal">Contact us</a>
              </li>
              <li>
                <a href="{{{ URL::to('/ScheduleApp')  }}}">
                  <span style="color:#f8b619;">Schedule App</span>
                </a>
              </li>
              <!--li {{{ (Request::is('registration') ? 'class=active' : '') }}}>
                <a href="{{{ URL::to('/registration')  }}}">
                  <span style="color:#f8b619;">Registration</span>
                </a>
              </li-->
            </ul>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->

        <!--modal-->
        

      </div><!-- /.navbar -->

<div class="container apppage">

<div class = "row">

           <div class="col-md-5 col-xs-12" >
              <img class="img img-circle img-responsive" src="{{asset('assets/SupportWebsite/img/main.jpg')}}">
            </div>

           <div class=" col-md-7 col-xs-12 margin-down-10">
                       <div class="btu">
                             <div class="para1 text-center">
                                   <h1>Support Schedule App</h1>
                             </div>
                             <a class="btn btn-lg col-xs-12 col-sm-6 col-sm-offset-3" href="http://download1405.mediafire.com/wanayc3txlrg/344hot0u15w4vfl/ScheduleSystem-v1.0.0.apk"
                              target="_blank">DOWNLOAD <span class="glyphicon glyphicon-Download"></span></a>
                       </div>
           </div>
</div>
</div>
<div class="container-fluid part2">

<div class="row">
  <div class="col-md-12 col-xs-12">
        <h2 class="text-center col-sm-12">For a closer look Click on the image<h2>
  </div>

</div>

<div class="row">
  <div class="group">
        <div class="col-sm-3 col-xs-6 margin-down-10">
          <div class="scsh1">
            <a class="href1" data-toggle="modal" data-target=".bs-example-modal-lg1">
              <img class="screenshot img-responsive" src="{{asset('assets/SupportWebsite/img/scr1.jpg')}}" >
            </a>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6 margin-down-10">
                <div class="scsh1">
                     <a class="href1" data-toggle="modal" data-target=".bs-example-modal-lg2">
                     <img class="screenshot img-responsive" src="{{asset('assets/SupportWebsite/img/scr2.jpg')}}" >
                     </a>
                </div>

        </div>

        
        <div class="col-sm-3 col-xs-6 margin-down-10">

                <div class="scsh1">
                     <a class="href1" data-toggle="modal" data-target=".bs-example-modal-lg3">
                     <img class="screenshot img-responsive" src="{{asset('assets/SupportWebsite/img/scr3.jpg')}}" >
                     </a>
                </div>

        </div>


        <div class="col-sm-3 col-xs-6 margin-down-10">

                <div class="scsh1">
                     <a class="href1" data-toggle="modal" data-target=".bs-example-modal-lg4">
                     <img class="screenshot img-responsive" src="{{asset('assets/SupportWebsite/img/scr4.jpg')}}" >
                     </a>
                </div>
        </div>
  </div>
  <div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  aria-hidden="true">
    <div class="modal-dialog modal-lg1">
      <div class="modal-content">
        <img src="{{asset('assets/SupportWebsite/img/scr1.jpg')}}" class="col-xs-12">
      </div>
    </div>
  </div>
   <div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <img src="{{asset('assets/SupportWebsite/img/scr2.jpg')}}" class="col-xs-12">
      </div>
    </div>
  </div>
   <div class="modal fade bs-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <img src="{{asset('assets/SupportWebsite/img/scr3.jpg')}}" class="col-xs-12">
      </div>
    </div>
  </div>
   <div class="modal fade bs-example-modal-lg4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  aria-hidden="true">
    <div class="modal-dialog modal-lg4">
      <div class="modal-content">
        <img src="{{asset('assets/SupportWebsite/img/scr4.jpg')}}" class="col-xs-12">
      </div>
    </div>
  </div>
</div>


 <!--modal-->
        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <center><h3 id="myModalLabel">Contact Us</h3></center>
              </div>
               <form class="form-horizontal" method="POST" action="/contactus">
              <div class="modal-body" {{$errors->has('sender_name') ? 'has->error': ''}}>
               <input type="text" class="form-control" placeholder="Full Name" name="sender_name" required >
                <input type="email" class="form-control" placeholder="Email address" name="sender_email" required>
                <input type="text" class="form-control" placeholder="Subject" name="sender_subject" required>
                <textarea class="form-control" placeholder="Message" name="sender_message" required></textarea>
                <hr />
                <div class="g-recaptcha" data-sitekey="6LcvEQITAAAAAMly2I0JTuq3THwvG_uvbwYwP4l2"></div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-branded">submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--end of modal-->

<div class="row">
      <div class="group2">
            
           <div class="col-md-4 col-sm-12 col-xs-12 margin-down-10" >
        
                  <div class=" col-md-6 col-md-offset-3 col-lg-offset-4">
                   <img class="logos img-responsive img-circle" src="{{asset('assets/SupportWebsite/img/description.png')}}">
                  </div>
                   <h2 class="text-center col-sm-12">Description</h2>
                   <span class="col-sm-12 text-center display-inline-block" >
                     We have now published our new Android application "SUPPORT's schedule app" through which you can organize your day at the college easily. 
Hurry up and check it out.
                   </span>
           </div>

           <div class="col-md-4 col-sm-12 col-xs-12 margin-down-10" >
        <div class=" col-md-6 col-md-offset-3 col-lg-offset-4">
          
                   <img class="logos img-responsive img-circle" src="{{asset('assets/SupportWebsite/img/search-icon-transparent-background.gif')}}">
        </div>
                   <h2 class="text-center col-sm-12">Features</h2>
                   <span class="col-sm-12 features display-inline-block text-center">
                     <ul class="display-inline-block ">
                       <li>Manage your schedule the way that suits you.</li>
                       <li>Add notes in slots of each lecture or section.</li>
                       <li>Enjoy your schedule in an organized fancy way.</li>
                       <li>Check others years and groups schedules.</li>
                     </ul>
                   </span>
           </div>


           <div class="col-md-4 col-sm-12 col-xs-12 margin-down-10" >
        <div class="col-md-6 col-md-offset-3 col-lg-offset-4">
          <img class="logos img-responsive img-circle" src="{{asset('assets/SupportWebsite/img/18392.png')}}" >
        </div>
                   <h2 class="text-center col-sm-12">How to install</h2>
                   <span class="col-sm-12 text-center display-inline-block">
                     Download the APK to your mobile device and install it, if the mobile alerts you that it can't be installed due to security just  go to Settings --> Security, choose unknown sources and install the application.
                   </span>
           </div>
      </div>
</div>
</div>

    <footer>
      <div id="footer">
        <div class="container-fluid">
          <div class="col-sm-5 col-xs-5" id="posts">
            <!--blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small class="pull-right">- Someone famous in <cite title="Source Title">Source Title</cite> -</small>
            </blockquote>
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small class="pull-right">- Someone famous in <cite title="Source Title">Source Title</cite> -</small>
            </blockquote>
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small class="pull-right">- Someone famous in <cite title="Source Title">Source Title</cite> -</small>
            </blockquote-->
          </div>

         

          <div class=" social-networks2">
            <ul class="">
              <a href="https://www.facebook.com/support.fcis"><li class="social col-sm-6"><i class="icon-facebook"></i></li></a>
              <a href="https://www.youtube.com/channel/UCBJlOGsuL-tMKTvjpvP8DyQ"><li class="social col-sm-6"><i class="icon-youtube"></i></li></a>
              <a href="https://www.twitter.com/supportasu"><li class="social col-sm-6"><i class="icon-twitter"></i></li></a>             
              <a href="https://www.behance.net/supportasu"><li class="social col-sm-6"><i class="icon-behance"></i></li></a>
              
            </ul>
          </div>

        </div>
       </div>
        <p id="foot">© {{date("Y")}} SUPPORT - All Rights Reserved</p>
     </footer>


    <a id="scroll-top" href="#page-top"><h1>^</h1></a>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('assets/SupportWebsite/js/jquery.js')}}"></script>
    <script src="{{asset('assets/SupportWebsite/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/SupportWebsite/js/slide-top.js')}}"></script>
    <script src="{{asset('assets/SupportWebsite/js/notify-min.js')}}"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
      <script type="text/javascript">
      @if(Session::has('success'))
        success_notif("{{Session::get('success')}}");
      @elseif(Session::has('fail'))
        fail_notif("{{Session::get('fail')}}");
      @elseif(Session::has('warn'))
        warn_notif("{{Session::get('warn')}}");
      @endif
    </script>


</body>
</html>
