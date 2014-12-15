@extends('SupportWebsite.template')

@section('content')
    @include('SupportWebsite.slider-template')
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
     


    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row">
        <div class="col-sm-4">
           <div class="holder">
            <div class="avatar">
             <a>
              <img src="{{ URL::asset('assets/SupportWebsite/img/about.png')}}" class="user"/>
             </a>
            </div>
          </div>
        </div>
        <div class="col-sm-8 aout1">
          <h4> “ <span style="color:#f8b619;">SUPPORT </span>isn’t just a Word we say, <span style="color:#f8b619;">SUPPORT </span>is a World we live ”</h4>
          <p class="lead"><span style="color:#f8b619;">SUPPORT </span>is a non-profit organization and a student activity which began in 2009 at the faculty of Computer and Information Sciences. It started with a group of young students who have a major dream and aim of supporting others to be the best in their lives, putting them on the right track and managing to reduce the gap between their academic life and postgraduate life.</p>
          <p class="lead">Over the past five years of achievements, <span style="color:#f8b619;">SUPPORT </span>has worked hard and made the dream come true. <span style="color:#f8b619;">SUPPORT </span>will keep going and the journey of the success will be continued.</p>
        </div>
      </div>
      <hr>
      <div class="row lastrow">
          <div class="col-sm-8 abot2">
            <h4><span style="color:#f8b619;">Vision</span></h4>
            <p class="lead">Our vision is to qualify students in computer science field for the career market needs and to drive our country towards the way of development.</p>
            <h4><span style="color:#f8b619;">Mission</span></h4>
            <p class="lead">Our mission is to provide various events and activities mainly for computer sciences students and other faculties' students if available which will enhance their technical and soft skills to prepare them for the bigger challenge in their postgraduate life. </p>
          </div>
          <div class="col-sm-4">
            <div class="holder">
              <div class="avatar">
               <a>
                <img src="{{ URL::asset('assets/SupportWebsite/img/about.png')}}" class="user"/>
               </a>
              </div>
            </div>
          </div>
        </div>

        <hr class="featurette-divider">

      </div><!-- /END THE FEATURETTES -->

@stop