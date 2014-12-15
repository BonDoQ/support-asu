@extends('SupportWebsite.template')

@section('content')
      @include('SupportWebsite.slider-template')
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
      <div class="col-sm-12">
      <ul class="sponcont cs-style-3">
        <li class="col-sm-2 holder2 user-img">
            <div class="avatar2">             
            <img src="../assets/img/events/droop_off.png" class="user2 img-responsive"/>
            </div>
            <a href="#myModal" data-toggle="modal">
            <div class="user-drop">
              <p>User name</p>
            </div></a>
        </li>
        <li class="col-sm-2 holder2 user-img">
            <div class="avatar2">
            <img src="../assets/img/events/droop_off.png" class="user2 img-responsive"/>
            <!--<span><p class="spon-title">Sponsor</p></span>-->
            </div>
             <a href="#myModal" data-toggle="modal">
            <div class="user-drop">
              <p>User name</p>
            </div>
             </a>
        </li>
        <li class="col-sm-2 holder2 user-img">
            <div class="avatar2">
            <img src="../assets/img/events/droop_off.png" class="user2 img-responsive"/>
            </div>
             <a href="#myModal" data-toggle="modal">
            <div class="user-drop">
              <p>User name</p>
            </div>
             </a>
        </li>
        <li class="col-sm-2 holder2 user-img">
            <div class="avatar2">
            <img src="../assets/img/events/droop_off.png" class="img-responsive user2"/>
            </div>
             <a href="#myModal" data-toggle="modal">
            <div class="user-drop">
              <p>User name</p>
            </div>
             </a>
        </li>
        <li class="col-sm-2 holder2 user-img">
            <div class="avatar2">
            <img src="../assets/img/events/droop_off.png" class="user2 img-responsive"/>
            </div>
             <a href="#myModal" data-toggle="modal">
            <div class="user-drop">
              <p>User name</p>
            </div>
             </a>
        </li>
        <li class="col-sm-2 holder2 user-img">
            <div class="avatar2">
            <img src="../assets/img/events/droop_off.png" class="user2 img-responsive"/>
            </div>
             <a href="#myModal" data-toggle="modal">
            <div class="user-drop">
              <p>User name</p>
            </div>
             </a>
        </li>
        <li class="col-sm-2 holder2 user-img">
            <div class="avatar2">
            <img src="../assets/img/events/droop_off.png" class="user2 img-responsive"/>
            </div>
             <a href="#myModal" data-toggle="modal">
            <div class="user-drop">
              <p>User name</p>
            </div>
             </a>
        </li>
      </ul>
      </div>
      </div>
<!-- Modal -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <center><h3 id="myModalLabel">Supportien Name</h3></center>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-2"><img src="../assets/img/sponsors/example.png"></div>
            <div class="col-sm-8">
              <div class="col-sm-12"><h4 class="col-sm-3">Position:</h4> <h5 class="col-sm-5">Media member</h5></div>
              <div class="col-sm-12"><h4 class="col-sm-3">Faculty:</h4> <h5 class=" col-sm-5">Fcis</h5></div>
              <div class="col-sm-12"><h4 class="col-sm-3">Age:</h4> <h5 class=" col-sm-5">27</h5></div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

      
    

      <!-- /END THE FEATURETTES -->

@stop