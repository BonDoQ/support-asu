
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>HOME &middot; SUPPORT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">   

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body  id="page-top">



    <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
    <div class="container navbar-wrapper">

      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="http://support-asu.org/"><img src="../assets/img/support_logo.png"></a>
          <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="home">Home</a></li>
              <li><a href="events">Events</a></li>
              <!--<li><a href="galary.html">Galary</a></li>-->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Supportians <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="supportians2013">2013</a></li>
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
              @if(!Auth::check())
               <li><a href="admin/login">Login</a></li>
              @else              
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome {{Auth::user()->username}} ! <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  @if(Auth::user()->committee=="President")
                  <li><a href="register">Create Members Accounts</a></li>
                  @endif
                   @if(Auth::user()->committee=="PR"||Auth::user()->committee=="President")
                  <li><a href="addevent">Add Event</a></li>
                  <li><a href="editevent">Edit Event</a></li>
                  <li><a href="editevent">Write Facebook Status</a></li>
                  @endif
                   @if(Auth::user()->committee=="Media"||Auth::user()->committee=="President")
                  <li><a href="addgallary">Add Gallary</a></li>
                  <li><a href="editgallary">Edit Gallary</a></li>
                  @endif
                   @if(Auth::user()->committee=="HR"||Auth::user()->committee=="President")
                  <li><a href="addregistrationform">Add Registration Form</a></li>
                  <li><a href="editregistrationform">Edit Registration Form</a></li>
                  @endif
                   <li><a href="logout">logout</a></li>
                </ul>
              
               @endif
            </ul>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->

    </div><!-- /.container -->



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
       
        <div class="item active">
          <img src="../assets/img/slider/cover.png" alt="">
          <div class="container">
            <div class="carousel-caption">
              
              <!--<p class="lead">Smartech ”The best you can get” Is a technical event that aims to achieve the maximum benefit for computer sciences and engineering’s students in various technical fields.</p>-->
              <a class="btn btn-large btn-primary" href="#">Read more</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../assets/img/slider/slide-03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Kabar Mo5ak.</h1>
              <p class="lead">“Kabr Mo5K”was an event for the first year students of The Faculty of Computer and Information Sciences. </p>
              <a class="btn btn-large btn-primary" href="#">Read more</a>
            </div>
          </div>
        </div>
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

      <div class="featurette">
        <img class="featurette-image pull-left" src="../assets/img/logolarge.png">
        <div>
        <h2 class="featurette-heading">SUPPORT</h2>
        <p class="lead">For 5 years of achievements, Support has worked hard and made the dream come true. The journey of success will be continued.</p>
        <p class="lead">A dream, an Idea, which started in 2009 and will continue to exist... A concept and a principle that we all believe in and we hope to share it with the whole world.</p>
        <p class="lead">You may think it’s just an activity like other student activities, but actually, <span style="color:#f8b619;">Support </span>is like no other; we are different. We are a group of students that once believed and still believe in making a difference, making change happen, supporting each other, so always keep it in your mind, stay updated with our events, and contact us if you have any new suggestions and ideas, support <span style="color:#f8b619;">Support </span>and let <span style="color:#f8b619;">Support </span>support you. </p></div>
      </div>


      <!-- /END THE FEATURETTES -->
      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer>

      <div class"container" id="footer">
        <div class="row footer-container">
          <div class="span3" id="fotrclm3">
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

          <a href=""><div class="span2" id="feedback"></div></a>

          <div class="span3" id="subscribe">
            <h4>Subscribe us now</h4>
             <input class="input-block-level" type="text" placeholder="Your Name"></input>
            <input class="input-block-level" type="text" placeholder="Email address"></input>
            <button class="btn btn-primary pull-right" type="submit">Subscribe</button> <br/><br/> 
            <hr class="featurette-divider">
            <p>add your e-mail to know the latest updates.</p>
          </div>

          <div class="span1 social-container">
            <ul>
              <a href="#"><li class="social" id="fb">Facebook</li></a>
              <a href="#"><li class="social" id="twitter">Twitter</li></a>
              <a href="#"><li class="social" id="google">Google+</li></a>
            </ul>
          </div>

          <div class="span1 social-container">
            <ul>
              <a href="#"><li class="social" id="youtube">Youtube</li></a>
              <a href="#"><li class="social" id="mail">Mail</li></a>
              <a href="#"><li class="social" id="behance">Behance</li></a>
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
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
    <script src="../assets/js/slide-top.js"></script>

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
