@extends('SupportWebsite.template')

@section('content')

 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <?php $i =0; ?>
        @if($sliders !=null)
        @foreach ($sliders as $slider)
        @if ($i == 0)
          <div class="item active">
        @else
          <div class="item">
        @endif
          <img src="{{asset($slider->imgPath)}}" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>{{$slider->name}}</h1>
              <p class="lead">{{$slider->description}}</p>
              <a class="btn btn-large btn-primary" href="/events/{{$slider->name}}">Read more</a>
            </div>
          </div>
        </div>
        <?php $i = 1; ?>
        @endforeach
        @endif
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="featurette">
        <img class="featurette-image pull-left" src="{{ URL::asset('assets/SupportWebsite/img/logolarge.png')}}">
        <div><h2 class="featurette-heading">SUPPORT</h2><p class="lead">For 6 years of achievements, Support has worked hard and made the dream come true. The journey of success will be continued.</p><p class="lead">A dream, an Idea, which started in 2009 and will continue to exist... A concept and a principle that we all believe in and we hope to share it with the whole world.</p><p class="lead">You may think it’s just an activity like other student activities, but actually, <span style="color:#f8b619;">Support </span>is like no other; we are different. We are a group of students that once believed and still believe in making a difference, making change happen, supporting each other, so always keep it in your mind, stay updated with our events, and contact us if you have any new suggestions and ideas, support <span style="color:#f8b619;">Support </span>and let <span style="color:#f8b619;">Support </span>support you. </p></div>
      </div>


      <!-- /END THE FEATURETTES -->
      </div><!-- /.container -->

@stop