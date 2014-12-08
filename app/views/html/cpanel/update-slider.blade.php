<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="{{ URL::asset('assets/cpanel/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/cpanel/css/bootstrap-theme.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/cpanel/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/cpanel/css/style.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/cpanel/css/bootstrap-switch.css')}}">  
  <link rel="stylesheet" href="{{ URL::asset('assets/cpanel/css/switch-highlight.css')}}">  
  <script src="{{ URL::asset('assets/cpanel/text-editor/tinymce/js/tinymce/tinymce.min.js')}}"></script>
	<script>tinymce.init({selector:'.event-description'});</script>
	<meta charset="UTF-8">
	<title>Support's CPanel | Slider Edit</title>
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
		<div class="col-sm-9">
	    	<form class="form-horizontal" method="post" action="{{URL::route('postupdate',array($slider->id)) }}" enctype="multipart/form-data">
    	
          <div class="form-group">
        			<label for="inputEmail" class="control-label col-xs-2">Availibility :</label>
        			<div class="">
            		<input type="checkbox" name="availibility" id="Available" name="download-version" @if ($slider->IsEnable()==true) checked @endif data-size="large" data-on-text="On" data-off-text="Off" >
        			</div>
    			</div>
    			<div class="form-group">
                <label for="inputlink"  class="control-label col-xs-2">Name :</label>
                    <div class="col-xs-10">
                    <input type="text" name="name" class="form-control" id="inputlink" placeholder= "name" value="{{$slider->name}}">
                    </div>
                </div>
                <div class="form-group">
        			<label class="control-label col-xs-2">Image:</label>
	        		<div class="col-xs-10">
	            	<input type="file" name="image" class="form-control" id="img-upload" placeholder="Paste the Event Link "  >
	            	<label class="btn btn-primary" for="img-upload">Upload logo</label>
                
	        		</div>
    			</div>
    			<div class="form-group">
        		<label for="inputlink" class="control-label col-xs-2">Link:</label>
	        		<div class="col-xs-10">
	            	<input type="text" name="link"class="form-control" id="inputlink" placeholder="Link..." value="{{$slider->link}}" >		
              </div>
    			</div>
    			<div class="form-group">
        		<label for="short-des" class="control-label col-xs-2">Short Description :</label>
	        		<div class="col-xs-10">
	            	<textarea class="form-control" name="description" id="short-des" >{{$slider->description }} </textarea>
            	</div>
    			</div>
          {{ Form::token() }}
    			<div class="form-group">
        			<div class="col-xs-offset-2 col-xs-10 text-right">
            		<button type="submit" class="btn btn-primary">Update</button>
        			</div>
    			</div>
			</form>  	
	    </div>
	  </div>
	  <!-- Modal -->
	  
	  	
	</div><!-- End Main Panel -->
	</div><!-- End Container-->
  <script src="{{ URL::asset('assets/cpanel/js/jquery.js')}}"></script>
  <script src="{{ URL::asset('assets/cpanel/js/bootstrap.min.js')}}"></script>
  <script src="{{ URL::asset('assets/cpanel/js/bootstrap-switch.js')}}"></script>
    <script src="{{ URL::asset('assets/cpanel/js/switch.js')}}"></script>
    <script src="{{ URL::asset('assets/cpanel/js/switch-highlight.js')}}"></script>
  <script src="{{ URL::asset('assets/cpanel/js/bootstrap.js')}}"></script>
</body>
</html>