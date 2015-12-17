 <!DOCTYPE html>
 <html lang="en" encoding="utf-8">
	<head>

		
		<title>SUPPORT</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" /> 

 		<link href="{{asset('assets/else/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
 		<link href="{{asset('assets/else/css/mystyle.css?version=1.2')}}" rel="stylesheet" type="text/css" />
		
		<!-- Fav and touch icons -->
		<link rel="shortcut icon" href="{{asset('assets/SupportWebsite/ico/favicon.ico')}}">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/SupportWebsite/ico/apple-touch-icon-144-precomposed.png')}}">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/SupportWebsite/ico/apple-touch-icon-114-precomposed.png')}}">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/SupportWebsite/ico/apple-touch-icon-72-precomposed.png')}}">
		<link rel="apple-touch-icon-precomposed" href="{{asset('assets/SupportWebsite/ico/apple-touch-icon-57-precomposed.png')}}">
		
	</head>
	<body>

	<div class="my_container">
		<div class="Main-screen active screen1">
			<div class="container-fluid">
				<div class="support col-md-5 text-center">
					<h1>Support SUPPORT And Let SUPPORT Supports You</h1>
				</div>
			</div>
		</div>
		<div class="Main-screen screen2">
			<div class="container-fluid">
				
				<div class="main-txt col-md-12 text-center">
				<div class="col-md-12 text-center">
					<p style="color: black;">Registration ended on 17 Dec 2015.</p>
					<a class="btn btn-primary disabled" href="{{URL::route('getRegistrationMiniJam')}}">Register Single</a>
					<a class="btn btn-warning disabled" href="{{URL::route('getRegistrationMiniJamTeam')}}">Register Team</a>
				</div>
				<div class="col-md-12 text-center">

					<img src="{{asset('assets/else/img/Appsinnovate_logo.jpg')}}" class="img-responsive">
				</div>
				</div>
			</div>
		</div>
		
	</div>
		<script src="{{asset('assets/else/js/jquery-2.1.4.min.js')}}"></script>
		<script src="{{asset('assets/else/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/else/js/jquery.mousewheel.js')}}"></script>
		<script src="{{asset('assets/else/js/jquery.scrollTo.js')}}"></script>
		<script src="{{asset('assets/else/js/jquery.touchSwipe.js')}}"></script>
		<script src="{{asset('assets/else/js/pageScroll.js')}}"></script>
		<script src="{{asset('assets/SupportWebsite/js/notify-min.js')}}"></script>
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
