@extends('SupportWebsite.template')

@section('content')

<div class="container apppage">

<div class = "row">

           <div class="col-md-5 col-xs-12" >
              <img class="img img-circle img-responsive" src="{{asset('assets/SupportWebsite/img/main.jpg')}}">
            </div>

           <div class=" col-md-7 col-xs-12 margin-down-10">
                       <div class="btu">
                             <div class="para1 text-center">
                                   <h1>Support Schedule App</h1>
                             </div>
                             <a class="btn btn-lg col-xs-12 col-sm-6 col-sm-offset-3" href="http://download719.mediafire.com/5ctscib455zg/344hot0u15w4vfl/ScheduleSystem-v1.0.0.apk"
                              target="_blank">DOWNLOAD <span class="glyphicon glyphicon-Download"></span></a>
                       </div>
           </div>
</div>
</div>
<div class="container-fluid part2">

<div class="row">
  <div class="col-md-12 col-xs-12">
        <h2 class="text-center col-sm-12">For a closer look Click on the image<h2>
  </div>

</div>

<div class="row">
  <div class="group">
        <div class="col-sm-3 col-xs-6 margin-down-10">
          <div class="scsh1">
            <a class="href1" data-toggle="modal" data-target=".bs-example-modal-lg1">
              <img class="screenshot img-responsive" src="{{asset('assets/SupportWebsite/img/scr1.jpg')}}" >
            </a>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6 margin-down-10">
                <div class="scsh1">
                     <a class="href1" data-toggle="modal" data-target=".bs-example-modal-lg2">
                     <img class="screenshot img-responsive" src="{{asset('assets/SupportWebsite/img/scr2.jpg')}}" >
                     </a>
                </div>

        </div>

        
        <div class="col-sm-3 col-xs-6 margin-down-10">

                <div class="scsh1">
                     <a class="href1" data-toggle="modal" data-target=".bs-example-modal-lg3">
                     <img class="screenshot img-responsive" src="{{asset('assets/SupportWebsite/img/scr3.jpg')}}" >
                     </a>
                </div>

        </div>


        <div class="col-sm-3 col-xs-6 margin-down-10">

                <div class="scsh1">
                     <a class="href1" data-toggle="modal" data-target=".bs-example-modal-lg4">
                     <img class="screenshot img-responsive" src="{{asset('assets/SupportWebsite/img/scr4.jpg')}}" >
                     </a>
                </div>
        </div>
  </div>
  <div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  aria-hidden="true">
    <div class="modal-dialog modal-lg1">
      <div class="modal-content">
        <img src="{{asset('assets/SupportWebsite/img/scr1.jpg')}}" class="col-xs-12">
      </div>
    </div>
  </div>
   <div class="modal fade bs-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <img src="{{asset('assets/SupportWebsite/img/scr2.jpg')}}" class="col-xs-12">
      </div>
    </div>
  </div>
   <div class="modal fade bs-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <img src="{{asset('assets/SupportWebsite/img/scr3.jpg')}}" class="col-xs-12">
      </div>
    </div>
  </div>
   <div class="modal fade bs-example-modal-lg4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  aria-hidden="true">
    <div class="modal-dialog modal-lg4">
      <div class="modal-content">
        <img src="{{asset('assets/SupportWebsite/img/scr4.jpg')}}" class="col-xs-12">
      </div>
    </div>
  </div>
</div>


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
                <hr />
                <div class="g-recaptcha" data-sitekey="6LcvEQITAAAAAMly2I0JTuq3THwvG_uvbwYwP4l2"></div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-branded">submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--end of modal-->

<div class="row">
      <div class="group2">
            
           <div class="col-md-4 col-sm-12 col-xs-12 margin-down-10" >
        
                  <div class=" col-md-6 col-md-offset-3 col-lg-offset-4">
                   <img class="logos img-responsive img-circle" src="{{asset('assets/SupportWebsite/img/description.png')}}">
                  </div>
                   <h2 class="text-center col-sm-12">Description</h2>
                   <span class="col-sm-12 text-center display-inline-block" >
                     We have now published our new Android application "SUPPORT's schedule app" through which you can organize your day at the college easily. 
Hurry up and check it out.
                   </span>
           </div>

           <div class="col-md-4 col-sm-12 col-xs-12 margin-down-10" >
        <div class=" col-md-6 col-md-offset-3 col-lg-offset-4">
          
                   <img class="logos img-responsive img-circle" src="{{asset('assets/SupportWebsite/img/search-icon-transparent-background.gif')}}">
        </div>
                   <h2 class="text-center col-sm-12">Features</h2>
                   <span class="col-sm-12 features display-inline-block text-center">
                     <ul class="display-inline-block ">
                       <li>Manage your schedule the way that suits you.</li>
                       <li>Add notes in slots of each lecture or section.</li>
                       <li>Enjoy your schedule in an organized fancy way.</li>
                       <li>Check others years and groups schedules.</li>
                     </ul>
                   </span>
           </div>


           <div class="col-md-4 col-sm-12 col-xs-12 margin-down-10" >
        <div class="col-md-6 col-md-offset-3 col-lg-offset-4">
          <img class="logos img-responsive img-circle" src="{{asset('assets/SupportWebsite/img/18392.png')}}" >
        </div>
                   <h2 class="text-center col-sm-12">How to install</h2>
                   <span class="col-sm-12 text-center display-inline-block">
                     Download the APK to your mobile device and install it, if the mobile alerts you that it can't be installed due to security just  go to Settings --> Security, choose unknown sources and install the application.
                   </span>
           </div>
      </div>
</div>
</div>

@stop