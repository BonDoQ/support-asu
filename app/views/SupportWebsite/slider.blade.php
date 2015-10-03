<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <?php $i =0; ?>
        @foreach ($sliders as $slider)
        @if ($i == 0)
          <div class="item active">
        @else
          <div class="item">
        @endif
          <img src="{{$slider->imgPath}}" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>{{$slider->name}}</h1>
              @if($slider->IsDescriptionNull()!=null)
              <p class="lead">{{$slider->description}}</p>
              @endif
              @if($slider->IsEventSlider())
              <a class="btn btn-large btn-primary" href="/events/{{$slider->name}}">Read more</a>
              @endif
            </div>
          </div>
        </div>
        <?php $i = 1; ?>
        @endforeach
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->

    <!-- /.carousel -->