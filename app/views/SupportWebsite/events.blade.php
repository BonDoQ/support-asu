@extends('SupportWebsite.template')

@section('content')

    @include('SupportWebsite.slider')

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
      <div class="col-sm-12">
      <ul class="imgcont cs-style-3">
        @foreach($vents as $vent)
        <li class="col-sm-3">
          <div class="img-polaroid">
          <figure>
            <img class="fixed-size-250x250 img-responsive col-sm-12 no_padding" src="{{$vent->image_logo}}">
            <figcaption>
              <h3>{{Str::limit($vent->name,11)}}</h3>
              <p>{{Str::limit($vent->short_description,40)}}</p>
              <a class="btn btn-branded" href="events/{{$vent->name}}">Read more</a>
            </figcaption>
          </figure></div>
        </li>
        @endforeach
      </ul>

      </div>


      
      <hr class="col-sm-12 featurette-divider">

      <!-- /END THE FEATURETTES -->
    </div><!-- /.container -->

@stop