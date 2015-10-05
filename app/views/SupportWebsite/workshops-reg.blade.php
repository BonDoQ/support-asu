@extends('SupportWebsite.template')

@section('title', 'Workshop Registration')

@section('content')

    <div class="container no-slider">
        <div class="col-sm-5">
          <form id="reg-form" class="form-signin" method="POST" action="{{URL::route('postRegistrationForm')}}" enctype="multipart/form-data">
              {{Form::token()}}
          <h2 class="form-signin-heading">Workshop Registration</h2>
          <hr/>
          <div id="errorDiv1" class="error-div"></div>

          <input id="name" type="text"  required class="form-control req-min req-full-name" minlength="3" maxlength="60" placeholder="Full Name" name="name">
          <input id="e-mail" type="email" required class="form-control req-min req-email" minlength="3" maxlength="40" placeholder="Email address" name="email">
          <input id="tel" type="tel"  pattern="[0-9]+" required class="form-control req-numeric req-min" minlength="3" maxlength="14" placeholder="Mobile" name="mobile">
          <select id="academic-year" class="form-control" name="academicyear">
            <option>-Choose Academic Year-</option>
            <option>1st Year</option>
            <option>2nd Year</option>
            <option>3rd Year</option>
            <option>4th Year</option>
          </select>
          <hr/>
          <div>
            <p><small>Choose workshop to register in</small></p>
            <select id="workshop" class="form-control" name="workshop">
              <option>-Choose Workshop-</option>
              <option value="Game">Game Development</option>
              <option value="Web">Web Development</option>
              <option value="Android">Android Development</option>  
            </select>
            <div id="questions-div" style="display: none;">
              <br>
              <p><small>Do you have previous experience in <span id="workshop-name"></span>?</small></p>
              <select id="ws-exp" class="form-control" name="workshop-experience">
                <option>-Select-</option>
                <option>Yes</option>
                <option>No</option>   
              </select>
              <br>
              <p><small>Do you have previous experience in Programming?</small></p>
              <select id="prog-exp" class="form-control" name="programming-experience">
                <option>-Select-</option>
                <option>Yes</option>
                <option>No</option>   
              </select>
            </div>
            <br>
          </div>
          <textarea class="form-control" placeholder="Comments (optional)" name="comments"></textarea><br />
          <input type="button" value="Send" class="btn btn-primary" id="send">
          <script type="text/javascript">
            window.onload = function(){
              $(function(){
                $("#workshop").change(function(){
                  if($("#workshop option:selected").text() == "-Choose Workshop-"){
                    $("#questions-div").slideUp();
                  } else {
                    $("#workshop-name").html($("#workshop option:selected").text());
                    $("#questions-div").slideDown();
                  }
                });

                $("#send").click(function(){
                  if($("#name").val() != ""
                  && $("#e-mail").val() != ""
                  && $("#tel").val() != ""
                  && $("#academic-year option:selected").text() != "-Choose Academic Year-"
                  && $("#workshop option:selected").text() != "-Choose Workshop-"
                  && $("#ws-exp option:selected").text() != "-Select-"
                  && $("#prog-exp option:selected").text() != "-Select-"){
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
