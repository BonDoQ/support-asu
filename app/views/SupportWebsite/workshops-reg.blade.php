@extends('SupportWebsite.template')

@section('content')

    <div class="container no-slider">
        <div class="col-sm-5">
           <form class="form-signin" method="POST" action="" enctype="multipart/form-data">
            {{Form::token()}}
        <h2 class="form-signin-heading">Workshop Registration</h2>
        <hr/>
        <div id="errorDiv1" class="error-div"></div>

        <input type="text"  required class="form-control req-min req-full-name" minlength="3" maxlength="60" placeholder="Full Name" name="name" value="{{Input::old('name')}}">
        <input type="email" required class="form-control req-min req-email" minlength="3" maxlength="40" placeholder="Email address" name="email" value="{{Input::old('email')}}">
        <input type="tel"  pattern="[0-9]+" required class="form-control req-numeric req-min" minlength="3" maxlength="14" placeholder="Mobile" name="mobile" value="{{Input::old('mobile')}}">
        <!--<hr />
        <p style="color: blue;"><small>Date of birth ?</small></p>
        <input type="date"  required class="form-control req-numeric req-min"  placeholder="Date of birth" name="birthday" value="{{Input::old('birthdate')}}">
        <hr />-->
        <!--<input type="text"  required class="form-control req-numeric req-min" minlength="0" maxlength="200" placeholder="Address" name="address" value="{{Input::old('address')}}">-->
        <!--<input type="text"  pattern="[0-9]+" required class="form-control req-numeric req-min" minlength="4" maxlength="6" placeholder="Year of participation" name="year">-->
        <select class="form-control" name="oldposition" >
          <option>-Choose Academic Year-</option>
          <option>1<small>st</small> Year</option>
          <option>2<small>nd</small> Year</option>
          <option>3<small>rd</small> Year</option>
          <option>4<small>th</small> Year</option>
        </select>
        <hr/>
        <div id="newteam_div">
          <p style="color: blue;"><small>Which team are you looking forward to participating in ?</small></p>
          <select class="form-control" name="newteams" id="newteams">    
          </select>
        </div>

        <select class="form-control" name="oldcommittee" onchange="show_teams(this.value,'old')" >
          <option>-Choose Workshop-</option>
          <option>Game Development</option>
          <option>Web Development</option>
        </select>
        <hr/>
        <div id="newteam_div" style="display:none">
          <p style="color: blue;"><small>Which team are you looking forward to participating in ?</small></p>
          <select class="form-control" name="newteams" id="newteams">    
          </select>
        </div>

        <select class="form-control" name="newposition" >
          <option>-Choose New Position-</option>
          <option>Member</option>
          <option>Head</option>
          <option>President</option>
        </select>
        <hr />
        <div class="form-group">
            <input type="file" name="image" style="display:none;" class="form-control" id="img-upload" placeholder="Upload your personal photo">
            <label class="btn btn-primary" for="img-upload">Your personal photo (Optional)</label>
        </div>
          <textarea class="form-control" placeholder="Comments" name="comments"></textarea><br />
          <button class="btn btn-primary" type="submit" id="send">Send</button>
      </form>
        </div><!--/span-->
        <!--description body-->
        <div class="col-sm-6" id="event_des_body">
          <h1 class="form-signin-heading">Let's begin a new season..</h1>
         <img src="{{ URL::asset('assets/SupportWebsite/img/join-graphic.png')}}">

            
        </div><!--/span-->
    </div><!--/.fluid-container-->

@stop
