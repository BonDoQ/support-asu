<!DOCTYPE html>
<html>
<head>
	<!-- Styles -->
    <link rel="stylesheet" href="../assets/cpanel/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/cpanel/css/bootstrap-theme.css">
	<link rel="stylesheet" href="../assets/cpanel/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/cpanel/css/style.css">
	<link rel="stylesheet" href="../assets/cpanel/css/bootstrap-switch.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <!-- Scripts -->
    <script type="text/javascript" src="../assets/cpanel/js/site.js"></script>
	<script type="text/javascript" src="../assets/cpanel/js/bootstrap.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<!-- == -->
    <meta charset="UTF-8">
	<title>Admin's Panel | Sliders</title>
</head>
<body>
 	<div class="container">
		  <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Admin Panel</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Events</a></li>
              <li><a href="#">Sponsers</a></li>
              <li><a href="#">Slider</a></li>
              <li><a href="#">Register</a></li>
              <li><a href="#">Supportians</a></li>
              <li><a href="#">Post</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class=" message-btn"><a href="#"><i class="glyphicon glyphicon-envelope"></i></a></li>
              <li class="dropdown user-option-btn">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="glyphicon glyphicon-user"></i><i class="caret"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Create Account</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li><a href="#">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Logout</a></li>
                        </ul>   
                    </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

	<!-- Events Panel -->

<div class="col-sm-12">
<a href="slider/create"><div class="btn btn-success col-sm-3 col-sm-offset-9">Create</div></a>

</div>
		<div class="col-sm-12">
	<div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Users</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Slider" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Last Update" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Updated By" disabled></th>
                    	<th><input type="text" class="form-control" placeholder="Options" disabled></th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; ?>                 
                    @foreach($sliders as $slider)
                      <td>{{$i}}</td>
                        <td>{{$slider->name }}</td>
                        <td>{{$slider->updated_at }}</td>
                        <td>user</td>
                        <td><a href="{{ URL::route('getupdate', array($slider->id)) }}" method="get"><div class="glyphicon glyphicon-edit"></div></a> |<a method="get" href="{{ URL::route('delete', array($slider->id)) }}" > <div class="glyphicon glyphicon-trash" ></div></a></td>
                        </tr>
                        <?php ++$i; ?>
                        @endforeach
                </tbody>
            </table>
        </div>
   
	</div><!-- End Container-->
	</div>
    </div>

	<script src="../assets/cpanel/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/cpanel/js/switch-init.js"></script>
    <script type="text/javascript" src="../assets/cpanel/bootstrap-switch.js"></script>
	<script type="text/javascript" src="../assets/cpanel/js/bootstrap.js"></script>
	<script type="text/javascript" src="../assets/cpanel/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/cpanel/js/filter.js">
    </script>
</body>
</html>