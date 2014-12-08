<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>{{Session::get('event')}} </title>
  	</head>
  	<body>
  		<style type="text/css">
  		.form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      </style>
  	 <form class="form-signin" method='post' action="{{ URL::route('postaddevent') }}">
  		<link href="../assets/css/bootstrap.css" rel="stylesheet">
  		<link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
  		<input type="text" name="eventname" class="input-block-level" placeholder="Event Name">
        <input type="text" name="subdescription" class="input-block-level" placeholder="Sub-Description">
        <input type="text" name="description"class="input-block-level" placeholder="Description">
        @if(Session::has('event')=="Add Event")
        <button class="btn btn-primary" type="submit">Add</button>
        @else
        <button class="btn btn-primary" type="submit">Update</button>
        @endif
        {{Form::token()}}
    </form>
     <div><li>{{Session::get('fail')}} </li></div>
    @if(Session::has('success'))
       <div><li>{{Session::get('success')}} has been registered created</li></div>
      @endif
       @if(Session::has('fail'))
       <div><li>{{Session::get('fail')}} </li></div>
       @endif
  	</body>
  	</html>