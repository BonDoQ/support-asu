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
              <li><a href="#myModal" data-toggle="modal">Contact us</a></li>
              <li><a href="registration"><span style="color:#f8b619;">Registration</span></a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->
<!------------------------------------------------contact us modal------------------------------------------------------------------------------>
<!------------------------------------------------contact us modal------------------------------------------------------------------------------>
<!------------------------------------------------contact us modal------------------------------------------------------------------------------>
<!--modal-->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <center><h3 id="myModalLabel">Contact Us</h3></center>
      </div>
       <form class="form-horizontal" method="POST" action="{{URL::route('contactus')}}">
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

    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>