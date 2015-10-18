@extends('SupportWebsite.template')

@section('title', 'Workshop Registration')

@section('content')

    <div class="container no-slider">
        <div class="col-sm-5">
          <form id="reg-form" class="form-signin" method="POST" action="{{URL::route('postRegistrationFormrecruit')}}" enctype="multipart/form-data">
              {{Form::token()}}
          <h2 class="form-signin-heading">Recruitment Application</h2>
          <hr/>
          <div id="errorDiv1" class="error-div"></div>

          <input id="name" type="text"  required class="form-control req-min req-full-name" minlength="3" maxlength="60" placeholder="Full Name" name="name">
          <input id="e-mail" type="email" required class="form-control req-min req-email" minlength="3" maxlength="40" placeholder="Email address" name="email">
          <input id="tel" type="tel"  pattern="[0-9]+" required class="form-control req-numeric req-min" minlength="3" maxlength="14" placeholder="Mobile" name="mobile">
          <input id="uni_fac" type="text"  required class="form-control req-min req-full-name" minlength="3" maxlength="200" placeholder="Faculty-University" name="uni_fac">
          <select id="academic-year" class="form-control" name="academicyear">
            <option>-Choose Academic Year-</option>
            <option>1st Year</option>
            <option>2nd Year</option>
            <option>3rd Year</option>
            <option>4th Year</option>
          </select>
          <select id="committee" class="form-control" name="committee">
            <option>-Choose Committee-</option>
            <option value="HR">Human Resources</option>
            <option value="PR">Public Relations</option>
            <option value="LR">Logistics and Receptionists</option>
            <option value="Media">Media</option> 
            <option value="Web">IT-Web</option> 
            <option value="Game">IT-Game</option>
            <option value="Android">IT-Android</option> 
            <option value="FR">Fundraising</option>
          </select>
          <select id="day" class="form-control" name="day">
            <option>-Choose Interview Day-</option>
            <option value="Monday">Monday - 19/10</option>
            <option value="Tuesday">Tuesday - 20/10</option>
            <option value="Wednesday">Wednesday - 21/10</option>
            <option value="Thursday">Thursday - 22/10</option>
          </select>
          <select id="time" class="form-control" name="time">
            <option value="">-Choose Interview Time-</option>
            <option>09:00 AM</option>
            <option>10:00 AM</option>
            <option>11:00 AM</option>
            <option>01:00 PM</option>
            <option>02:00 PM</option>
            <option>03:00 PM</option>
            <option>04:00 PM</option>
          </select>
          <textarea class="form-control" placeholder="Comments (optional)" name="comments"></textarea><br />
          <input type="button" value="Send" class="btn btn-primary" id="send">
          <script type="text/javascript">
            window.onload = function(){
              $(function(){
                $("#send").click(function(){
                  if($("#name").val() != ""
                  && $("#e-mail").val() != ""
                  && $("#tel").val() != ""
                  && $("#uni_fac").val() != ""
                  && $("#academic-year option:selected").text() != "-Choose Academic Year-"
                  && $("#committee option:selected").text() != "-Choose Committee-"
                  && $("#day option:selected").text() != "-Choose Interview Day-"
                  && $("#time option:selected").text() != "-Choose Interview Time-"){
                    $("#reg-form").submit();
                  } else{
                    $("#send").notify("Make sure you filled required fields", 
                      {
                        elementPosition:'bottom left',
                        className:'error', 
                        showAnimation: 'slideDown',
                        autoHide: true,
                        clickToHide: true,
                        autoHideDelay: 1500,

                      })
                  }
                });
              });
            };
          </script>
        </form>
      </div>
      <!--description body-->
      <div class="col-sm-6" id="event_des_body">
      <br><br>
       <img src="{{ URL::asset('assets/SupportWebsite/img/join-graphic.png')}}">   
      </div>
    </div><!--/.container-->

@stop
