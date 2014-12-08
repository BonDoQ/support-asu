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
    <link href="../assets/css/bootstrap-theme.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/site.css">
    
        <link rel="stylesheet" type="text/css" href="../assets/css/socialicious.css">

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
    <style type="text/css">
    #Timer{
      font-size: 48pt;
      color: #f8b619;
      text-align: center;
    }
    .soon{
      font-size: 72pt;
      color: #f8b619;
      text-align: center;
    }
    .landing-page
    {
      margin-top: 200px;
    }
    .landing-logo
    {
      margin-left: 45%;
      margin-top: 10px !important;
      display: inline-block;
    }
    .section1
    {
      display: inline-block;
      min-height: 100% !important;
      min-width: 100%;
      background-color: #303030;
    }
    </style>
  </head>

  <body  id="page-top">

      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <a class="landing-logo" href="http://support-asu.org/"><img src="../assets/img/support_logo.png"></a>
        </div><!-- /.navbar-inner-->
      </div>
      <!-- /.navbar --> 
<div class="section1">


<div class="landing-page">
  <div class="soon">
    SOON
  </div>
  <div id="Timer"></div>
  </div>
</div>
  <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/slide-top.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
  <script type="text/javascript">
    var myVar = setInterval(function(){myTimer()}, 1000);

function myTimer() {
    var d = new Date();
    var t = d.toLocaleTimeString();
    document.getElementById("Timer").innerHTML = t;
}
  </script>
  </body>
</html>
