<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/bootstrap-theme.css" rel="stylesheet">
    <link href="/assets/css/site.css" rel="stylesheet">
    <link href="/assets/css/socialicious.css" rel="stylesheet">
    <style type="text/css">
     body {
        padding-top: 40px;
        background-color: #f5f5f5;
      }
      .com_logo
      {
        border-radius: 50px;
        background-color: #282828;
        width: 100px;
      }
</style>
    <link href="/assets/css/style.css" rel="stylesheet">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="/a  ssets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body onload="event_body()">

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
          <a class="navbar-header" href="http://support-asu.org/"><img src="/assets/img/support_logo.png"></a>
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
              <li><a href="sponsors.html">Sponsors</a></li>
              <li><a href="about.html">About us</a></li>
              <li><a href="#myModal" data-toggle="modal">Contact us</a></li>
              <li><a href="registration.html"><span style="color:#f8b619;">Registration</span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->

<!------------------------------------------------contact us modal------------------------------------------------------------------------------>
<!------------------------------------------------contact us modal------------------------------------------------------------------------------>
<!------------------------------------------------contact us modal------------------------------------------------------------------------------>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <center><h3 id="myModalLabel">Contact Us</h3></center>
      </div>
      <div class="modal-body">
       <input type="text" class="form-control" placeholder="Full Name">
        <input type="text" class="form-control" placeholder="Email address">
        <input type="text" class="form-control" placeholder="Subject">
        <textarea class="form-control" placeholder="Message"></textarea>
      </div>
      <div class="modal-footer">
        <button class="btn btn-branded">submit</button>
      </div>
    </div>
  </div>
</div>
    

    <div class="container">
        <div class="col-sm-5">
           <form class="form-signin" method="post" action="{{URL::route('postreg')}}" >
        <h2 class="form-signin-heading">Registration</h2>
        <hr/>
        <div id="errorDiv1" class="error-div"></div>

        <input type="text" name="name" class="form-control req-min req-full-name" minlength="3" maxlength="60" placeholder="Full Name">
        <input type="text" name="email" class="form-control req-min req-email" minlength="3" maxlength="40" placeholder="Email address">
        <input type="text" name="mobile" class="form-control req-numeric req-min" minlength="3" maxlength="14" placeholder="Mobile">
        <select class="form-control" name="university">
          <option >Choose University</option>
          <option>Ain Shams</option>
          <option>Cairo</option>
          <option>Helwan</option>
          <option>Other</option>
        </select>
        <select class="form-control" name="faculty">
          <option>Choose Faculty</option>
          <option>Computer Science</option>
          <option>Science</option>
          <option>Law</option>
          <option>Art</option>
          <option>Commerce</option>
          <option>Alsun</option>
          <option>Pharmacy</option>
          <option>Fine Arts</option>
          <option>Applied Arts</option>
          <option>Engineering</option>
          <option>Media</option>
          <option>Others</option>
        </select>
        <select class="form-control" name="committee">
          <option>Choose Committee</option>
          <option>HR</option>
          <option>PR</option>
          <option>FR</option>
          <option>IT</option>
          <option>Logistics</option>
          <option>Media</option>
        </select>

        <select class="form-control" name="day">
          <option>Interview Day</option>
          <option> Saturday</option>
          <option> Sunday</option>
          <option> Monday</option>
          <option> Tuesday</option>
          <option> Wednesday</option>
          <option> Thursday</option>
        </select>

        <select class="form-control" name="time">
          <option>Interview Time</option>
          <option> 10:00 AM</option>
          <option> 11:00 AM</option>
          <option> 1:00 AM</option>
          <option> 2:00 AM</option>
          <option> 3:00 AM</option>
          <option> 4:00 AM</option>
        </select>
        <textarea class="form-control" placeholder="Comments" name="comment"></textarea>
        <div>
        	<label for="FileID" style="background-color: orange; text-align: center; padding: 10px; color: white; font-size: 18px; font-weight: 400;">Upload CV (Optional)</label>
			<input style="display:none;" type="file" id="FileID" name="cv">
        </div>
        {{ Form::token() }}
      <button  class="btn btn-primary" id="Button" type="submit" >Send</button>
      </form>
        </div><!--/span-->
        <!--description body-->
        <div class="col-sm-6" id="event_des_body">
         
            
        </div><!--/span-->
    </div><!--/.fluid-container-->


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


<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="" class="text-error">Regestration Done</h3>
  </div>
  <div class="modal-body">
    <p id='thanks_msg'>Thanks, your regestration saved</p>
  </div>
</div>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/assets/js/jquery.js"></script>
    <script src="/assets/js/bootstrap-transition.js"></script>
    <script src="/assets/js/bootstrap-alert.js"></script>
    <script src="/assets/js/bootstrap-modal.js"></script>
    <script src="/assets/js/bootstrap-dropdown.js"></script>
    <script src="/assets/js/bootstrap-scrollspy.js"></script>
    <script src="/assets/js/bootstrap-tab.js"></script>
    <script src="/assets/js/bootstrap-tooltip.js"></script>
    <script src="/assets/js/bootstrap-popover.js"></script>
    <script src="/assets/js/bootstrap-button.js"></script>
    <script src="/assets/js/bootstrap-collapse.js"></script>
    <script src="/assets/js/bootstrap-carousel.js"></script>
    <script src="/assets/js/bootstrap-typeahead.js"></script>
    <script src="/assets/js/jquery.ufvalidator-1.0.7.js"></script>
    <script src="/assets/js/reg.js"></script>

  </body>
</html>
