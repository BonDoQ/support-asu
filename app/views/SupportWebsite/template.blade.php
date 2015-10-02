<!DOCTYPE html>
<html lang="en" encoding="utf-8">
  <head>
    <title>
    SUPPORT | 
    @if(Request::is('home', '/')) Home
    @elseif(Request::is('sponsors')) Sponsors
    @elseif(Request::is('events')) Events
    @elseif(Request::is('about')) About Us
    @elseif(Request::is('events/*')) {{$thisvent->name}}
     @elseif(Request::is('registration')) Registration
    @endif
      </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" /> 

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/bootstrap.css')}}">
    <!--<link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/bootstrap-theme.css')}}">-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/bounce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/site.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/socialicious.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/subevent.css')}}">
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
                <button class="btn btn-branded" >submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--end of modal-->

      </div><!-- /.navbar -->

     <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <?php $i =0; ?>
        @foreach ($sliders as $slider)
        @if ($i == 0)
          <div class="item active">
        @else
          <div class="item">
        @endif
          <img src="{{$slider->imgPath}}" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>{{$slider->name}}</h1>
              @if($slider->IsDescriptionNull()!=null)
              <p class="lead">{{$slider->description}}</p>
              @endif
              @if($slider->IsEventSlider())
              <a class="btn btn-large btn-primary" href="/events/{{$slider->name}}">Read more</a>
              @endif
            </div>
          </div>
        </div>
        <?php $i = 1; ?>
        @endforeach
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->

    <!-- /.carousel -->
    @yield('content')

    <!-- FOOTER -->
           
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
              <a href="https://www.facebook.com/support.fcis" target="_blank"><li class="social col-sm-6 col-xs-3"><i class="icon-facebook"></i></li></a>
              <a href="https://www.youtube.com/channel/UCBJlOGsuL-tMKTvjpvP8DyQ" target="_blank"><li class="social col-sm-6 col-xs-3"><i class="icon-youtube"></i></li></a>
              <a href="https://www.twitter.com/supportasu" target="_blank"><li class="social col-sm-6 col-xs-3"><i class="icon-twitter"></i></li></a>             
              <a href="https://www.behance.net/supportasu" target="_blank"><li class="social col-sm-6 col-xs-3"><i class="icon-behance"></i></li></a>
              
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
    
    <!--<script type="text/javascript" src="{{asset('assets/SupportWebsite/js/jquery.ufvalidator-1.0.7.js')}}"></script>-->
    <!--<script type="text/javascript" src="{{asset('assets/SupportWebsite/js/reg.js')}}"></script>-->
  </body>
</html>
