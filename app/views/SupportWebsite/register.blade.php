<!DOCTYPE html>
<html lang="en" encoding="utf-8">
  <head>
    <title>
    SUPPORT | Registration
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
              <li >
                <a href="{{{ URL::to('/home')  }}}">Home</a>
              </li>
              <li >
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
              <li >
                <a href="{{{ URL::to('/sponsors')  }}}">Sponsors</a>
              </li>
              <li >
                <a href="{{{ URL::to('/about')  }}}">About us</a>
              </li>
              <li>
                <a href="#myModal" data-toggle="modal">Contact us</a>
              </li>
              <li class="active" >
                <a href="/registration">
                  <span style="color:#f8b619;">Registration</span>
                </a>
              </li>
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
                <button class="btn btn-branded" >submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--end of modal-->

      </div><!-- /.navbar -->

    <div class="container">
        <div class="col-sm-5">
           <form class="form-signin" method="POST" action="{{{ URL::to('submit')  }}}" enctype="multipart/form-data">
            {{Form::token()}}
        <h2 class="form-signin-heading">Registration</h2>
        <hr/>
        <div id="errorDiv1" class="error-div"></div>

        <input type="text"  pattern="[a-zA-Z\s]+" required class="form-control req-min req-full-name" minlength="3" maxlength="60" placeholder="Full Name" name="name" value="{{Input::old('name')}}">
        <input type="email" required class="form-control req-min req-email" minlength="3" maxlength="40" placeholder="Email address" name="email" value="{{Input::old('email')}}">
        <input type="tel"  pattern="[0-9]+" required class="form-control req-numeric req-min" minlength="3" maxlength="14" placeholder="Mobile" name="mobile" value="{{Input::old('mobile')}}">
        <select class="form-control" name="university">
          <option>-Choose University-</option>
          <option>Ain Shams</option>
          <option>Cairo</option>
          <option>Helwan</option>
          <option>Other</option>
        </select>
        <select class="form-control" name="faculty">
          <option>-Choose Faculty-</option>
          <option>Computer Science</option>
          <option>Science</option>
          <option>Engineering</option>
          <option>Other</option>
        </select>
        <select class="form-control" name="year" >
          <option>-Academic Year-</option>
          <option>1st</option>
          <option>2nd</option>
          <option>3rd</option>
          <option>4th</option>
        </select>
        <select class="form-control" name="workshop" onchange="show_tracks(this.value)">
          <option>-Choose Committee-</option>
          <option>Fundraising</option>
          <option>IT- Web Committee</option>
          <option>IT- Game Committee</option>
          <option>Logistics</option>         
          <option>Media</option>
          <option>Social Media</option>
        </select>
        <!--- time -->
      <!--- tracks -->
      <div id="trackid" style="display:none">
        <select id="trackidinput" class="form-control" name="track">
          <option>-Choose Track-</option>
          <option>Art Team</option>
          <option>Development Team</option>
        </select>
      </div>
      <div id="linkid" style="display:none">
         <hr />
         <p style="color: black;"><small>Paste a link of your behance profile or any work profile</small></p>
         <input type="url" id="linkinputid"  class="form-control" minlength="3" placeholder="Link of your works" name="link">
      </div>
        <div id="day_div" style="display:none">
          <hr />
          <p>Choose interview time:</p>
          <p style="color: red;"><small>You're seeing only available times</small></p>
          <select class="form-control" name="day" id="day" onchange="show_times(this.value)">    
          </select>
        </div>
       
        <div id="time_div" style="display:none">
          <select class="form-control" name="time" id="time">
          </select>
        </div>
        <hr />

          <textarea class="form-control" placeholder="Comments" name="comments"></textarea><br />
          <button class="btn btn-primary disabled" type="submit" id="send">Send</button>
      </form>
        </div><!--/span-->
        <!--description body-->
        <div class="col-sm-6" id="event_des_body">
          <h1 class="form-signin-heading">Become one of us..</h1>
         <img src="{{ URL::asset('assets/SupportWebsite/img/join-graphic.png')}}">

            
        </div><!--/span-->
    </div><!--/.fluid-container-->

    <script type="text/javascript">
    function show_tracks(workshop)
    { 
      var div;
      if(workshop=="Media")
      {
        document.getElementById("trackid").style.display="none";
        document.getElementById("trackidinput").value="-Choose Track-";
        div= document.getElementById("linkid");
        if (div.style.display == "none") 
        {
            $(div).slideToggle("fast");
        }
      }
      else if(workshop=="IT- Game Committee")
      {     
             document.getElementById("linkinputid").value=null;
           document.getElementById("linkid").style.display="none";
         div = document.getElementById("trackid");
        if (div.style.display == "none") 
        {
            $(div).slideToggle("fast");
        }
      }
      else
      {
        document.getElementById("trackid").style.display="none";
        document.getElementById("trackidinput").value="-Choose Track-";

          document.getElementById("linkinputid").value=null;
          document.getElementById("linkid").style.display="none";
      }
      show_days(workshop);
    }
    function show_days(workshop) 
    {
      window.workshop = workshop; 
      if (workshop=="-Choose Workshop-") {
        document.getElementById("day").innerHTML="";
        document.getElementById("time").innerHTML="";
        var div = document.getElementById("day_div");
        var div2 = document.getElementById("time_div");
        // $(div).fadeOut("fast");
        // $(div2).fadeOut("fast");
        if (div.style.display != "none") {
          $(div).slideToggle("fast");
        }
        if (div2.style.display != "none") {
          $(div2).slideToggle("fast");
        }
        document.getElementById("send").className = "btn btn-primary disabled";
        return;
      } 
      if (window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
      } else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) 
        {
          var op_json = xmlhttp.responseText;
          var parsed_days = JSON.parse(op_json);
          var list_com = "<option>-Choose Day-</option>";
          var i;
          for (i=0; i<parsed_days.length; i++) {
            if(parsed_days[i]=="Wednesday")
            {
               list_com = list_com + "<option value=Wednesday>" + parsed_days[i] +", February 11, 2015"+ "</option>";
            }
            else
              {
               list_com = list_com + "<option value=Thursday>" + parsed_days[i] +", February 12, 2015"+ "</option>";
               
              }
          }
          document.getElementById("day").innerHTML=list_com;
          var div = document.getElementById("day_div");
          if (div.style.display == "none") {
            $(div).slideToggle("fast");
          }
          var div2 = document.getElementById("time_div");
          // $(div2).fadeOut("fast");
          if (div2.style.display != "none") {
            $(div2).slideToggle("fast");
          }
        }
      }
      xmlhttp.open("GET", "/get_days/"+workshop, true);
      xmlhttp.send();
    }
    function show_times(day) 
    {
      if (day=="-Choose Day-") {
        document.getElementById("time").innerHTML="";
        var div2 = document.getElementById("time_div");
        // $(div2).fadeOut("fast");
        if (div2.style.display != "none") {
          $(div2).slideToggle("fast");
        }
        document.getElementById("send").className = "btn btn-primary disabled";
        return;
      } 
      if (window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
      } else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState== 4 && xmlhttp.status==200) 
        {
          var op_json2 = xmlhttp.responseText;
          var parsed_time = JSON.parse(op_json2);
          var list_com2 = "<option>-Choose Time-</option>";
          var i;
          for (i=0; i<parsed_time.length; i++) {
            list_com2 = list_com2 + "<option>" + parsed_time[i] + "</option>";
          }
          document.getElementById("time").innerHTML=list_com2;
          var div2 = document.getElementById("time_div");
          if (div2.style.display == "none") {
            $(div2).slideToggle("fast");
          };
          document.getElementById("send").className = "btn btn-primary";
        }
      }
      xmlhttp.open("GET", "/get_time/"+window.workshop+"/"+day, true);
      xmlhttp.send();
    }
    </script>

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

         

          <div class="col-sm-5">
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
