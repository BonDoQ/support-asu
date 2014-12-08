<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap-theme.css" rel="stylesheet">
    <link href="../assets/css/bounce.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/site.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/subevent.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/socialicious.css">
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>
    


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

  <body>

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
              <li><a href="events">Events</a></li>
              <!--<li><a href="galary.html">Galary</a></li>-->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Supportians <b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu">
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

    

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="col-sm-2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">2013</li>
              <li class="active"><a href="#droop-off">Droop Off</a></li>
              <li><a href="#smartech">SmarTech</a></li>
              <li><a href="#">Pen Talk</a></li>
              <li><a href="#">Kabar Mo5ak</a></li>
              <li><a href="#">Recruitment'13</a></li>
              <li class="nav-header">2012</li>
              <li><a href="#">U-Earn</a></li>
              <li><a href="#">Suppology</a></li>
              <li><a href="#">Recruitment'12</a></li>
              <li class="nav-header">2011</li>
              <li><a href="#">Technology Day</a></li>
              <li class="nav-header">2010</li>
              <li><a href="#">Career Key</a></li>
              <li><a href="#">Recruitment'10</a></li>
              <li class="nav-header">2009</li>
              <li><a href="#">Support Academy</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="col-sm-9">
          <div class="row-fluid featurette" id="droop-off">
            <div class="holder featurette-image pull-left ">
              <div class="avatar">
               <a>
                <img src="../assets/img/events/sub/{{$event->logo}}" class="user event-logo"/>
               </a>
              </div>
            </div>
            <h2 class="featurette-heading event-name">{{$event->name}}</h2>
            <p class="lead short-des">{{$event->shortDescription}}
            </p>
          </div>
        <div class="row description">
          {{$event->description}}
        </div>

          <hr/>
          
    </div><!--/.fluid-container-->
  </div>
</div>
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


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
  </body>
</html>
