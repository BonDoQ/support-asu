<!DOCTYPE html>
<html lang="en" encoding="utf-8">
  <head>
    <title>Events &middot; SUPPORT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" /> 

    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/socialicious.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-theme.css">
    <link rel="stylesheet" href="../assets/css/site.css">
    <link rel="stylesheet" href="../assets/css/socialicious.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('assets/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('assets/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('assets/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/ico/apple-touch-icon-57-precomposed.png')}}">
  </head>

  <body id="page-top">

    <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
          <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="navbar-header" href="http://support-asu.org/"><img src="../assets/img/support_logo.png"></a>
          <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="home.html">Home</a></li>
              <li><a href="events.html">Events</a></li>
              <!--<li><a href="galary.html">Galary</a></li>-->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Supportians <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="supportians2013.html">2013</a></li>
                  <li><a href="#">2012</a></li>
                  <li><a href="#">2011</a></li>
                  <li><a href="#">2010</a></li>
                  <li><a href="#">2009</a></li>
                </ul>
              </li>
              <!--<li><a href="#about">Gallary</a></li>-->
              <li><a href="sponsors">Sponsors</a></li>
              <li><a href="about">About us</a></li>
              <li><a href="contact">Contact us</a></li>
              <li><a href="registration"><span style="color:#f8b619;">Registration</span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
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
          <img src="../assets/img/slider/slide-01.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>{{$slider->name}}</h1>
              <p class="lead">{{$slider->description}}</p>
              <a class="btn btn-large btn-primary" href="#">Read more</a>
            </div>
          </div>
        </div>
        <?php $i = 1; ?>
        @endforeach
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->




    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
      <div class="col-sm-12">
      <ul class="imgcont cs-style-3">
        @foreach ($events as $event)
          <li class="col-sm-3">
          <div class="img-polaroid">
          <figure>
            <img class="img-responsive col-sm-12 no_padding" src="../assets/img/events/droop_off.png">
            <figcaption>
              <h3>{{$event->name}}</h3>
              <p>{{$event->slug}}</p>
              <a class="btn btn-branded" href="/event/{{$event->id}}">Read more</a>
            </figcaption>
          </figure></div>
        </li>
        @endforeach
      </ul>

      </div>
      <hr class="col-sm-12 featurette-divider">

      <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->

    <!-- FOOTER -->
            <footer>

      <div id="footer">
        <div class="container-fluid">
          <div class="col-sm-5" id="posts">
            <blockquote>
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
            </blockquote>
          </div>

         

          

          <div class="col-sm-2 social-container">
            <ul class="col-sm-12">
              <a href="#"><li class="social col-sm-6"><i class="icon-facebook"></i></li></a>
              <a href="#"><li class="social col-sm-6"><i class="icon-youtube"></i></li></a>
              <a href="#"><li class="social col-sm-6"><i class="icon-twitter"></i></li></a>
              <a href="#"><li class="social col-sm-6"><i class="icon-googleplus"></i></li></a>
              <a href="#"><li class="social col-sm-6"><i class="icon-behance"></i></li></a>
              <a href="#"><li class="social col-sm-6"><i class="icon-pinterest"></i></li></a>
            </ul>
          </div>

      </div>
    </div>
        <p id="foot">© 2013 SUPPORT - All Rights Reserved</p>
      </footer>


    <a id="scroll-top" href="#page-top"><h1>^</h1></a>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/slide-top.js') }}"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
  </body>
</html>
