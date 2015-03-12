<!DOCTYPE html>
<html lang="en" encoding="utf-8">
  <head>
    <title>
    SUPPORT | Events {{$thisvent->name}}
      </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" /> 

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/bootstrap-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/bounce.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/site.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/socialicious.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/subevent.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/SupportWebsite/css/supportiens.css')}}">
    <style type="text/css">
        body
        {
            padding-top: 60px;
           /* background-color: #f5f5f5;*/
        }
        .com_logo
        {
            border-radius: 50px;
            /*background-color: #282828*/
            width: 100px;
        }
    </style>

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
              <li>
                <a href="{{{ URL::to('/home')  }}}">Home</a>
              </li>
              <li class="active">
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
                </ul>
              </li-->
              <!--<li><a href="#about">Gallary</a></li>-->
              <li>
                <a href="{{{ URL::to('/sponsors')  }}}">Sponsors</a>
              </li>
              <li>
                <a href="{{{ URL::to('/about')  }}}">About us</a>
              </li>
              <li>
                <a href="#myModal" data-toggle="modal">Contact us</a>
              </li>
              <li>
                <a href="{{{ URL::to('/SchedualApp')  }}}">
                  <span style="color:#f8b619;">Schedual App</span>
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
              </div>
              <div class="modal-footer">
                <button class="btn btn-branded">submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--end of modal-->

      </div><!-- /.navbar -->


    <div class="container-fluid">
      <div class="row-fluid">
        <div class="col-sm-2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              
              @foreach ($events as $key => $value)
               
              <li class="nav-header">{{$key}}</li>
              @foreach ($value as $vent)
                <li><a href="{{$vent->name}}">{{$vent->name}}</a></li>

              @endforeach
              @endforeach
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="col-sm-9">
          <div class="row-fluid featurette" id="droop-off">
            <div class="holder featurette-image pull-left ">
              <div class="avatar">
               <a>
                <img src="{{$thisvent->image_logo}}" class="fixed-size-250x250 user event-logo"/>
               </a>
              </div>
            </div>
            <h2 class="featurette-heading event-name">{{$thisvent->name}} <span class="slogan small">{{$thisvent->slogan}}</span></h2>
            <p class="lead short-des">
              {{$thisvent->short_description}}
            </p>
          </div>
        <div class="row description">
          {{$thisvent->description}}
        </div>

          <hr/>
          
    </div><!--/.fluid-container-->
  </div>
</div>

 <!-- FOOTER -->
            <footer>

      <div id="footer">
        <div class="container-fluid">
          <div class="col-sm-4" id="posts">
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

         

          

          <div class="col-sm-5 social-container">
            <ul class="col-sm-12">
              <a href="https://www.facebook.com/support.fcis"><li class="social col-sm-6"><i class="icon-facebook"></i></li></a>
              <a href="https://www.youtube.com/channel/UCBJlOGsuL-tMKTvjpvP8DyQ"><li class="social col-sm-6"><i class="icon-youtube"></i></li></a>
              <a href="https://www.twitter.com/supportasu"><li class="social col-sm-6"><i class="icon-twitter"></i></li></a>
              <a href="#"><li class="social col-sm-6"><i class="icon-googleplus"></i></li></a>
              <a href="https://www.behance.net/supportasu"><li class="social col-sm-6"><i class="icon-behance"></i></li></a>
              <a href="#"><li class="social col-sm-6"><i class="icon-pinterest"></i></li></a>
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
