@extends('SupportWebsite.template')

@section('content')

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
      <div class="col-sm-12">
      <ul class="sponcont cs-style-3">
        @foreach($sponsers as $sponser)
        <li class="col-sm-3 holder2">
            <div class="avatar2">
             <a href="#Modal{{$sponser->id}}" data-toggle="modal">
            <img src="{{$sponser->image_logo}}" class="fixed-size-250x250 img-responsive user2 no_padding"/>
             </a>
            </div>
        </li>
        @endforeach
      </ul>
      </div>
      </div>
<!-- Modal -->
@foreach($sponsers as $sponser)
  <?php
    $vents = Event::all();
    $sponser = Sponser::whereid($sponser->id)->first();
    $ventsofsponser = $sponser->Vents()->get();
  ?>
<div id="Modal{{$sponser->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <center><h3 id="myModalLabel">{{$sponser->name}}</h3></center>
      </div>
      <div class="modal-body">
        <div>
          <ul class="list-inline">
            <li><img src="{{asset($sponser->image_logo)}}" class="fixed-size-100x100"></li>
            <li><p class="muted">{{$sponser->information}}</p></li>
          </ul>
        </div>
        <hr class="featurette-divider">
        <div id="sponsorevents">
          <center><h3>Events</h3>
          <ul class="row">
            @foreach($ventsofsponser as $ventofsponser)
            @if ($ventofsponser->availibility == true)
            <li class="col-sm-2 eventthumb no_padding"><a href="events/{{$ventofsponser->name}}"><img class="img-responsive fixed-size-90x90"  src="{{asset($ventofsponser->image_logo)}}"/></a></li>
            @endif
            @endforeach
          </ul>
          </center>
        </div>
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" href="http://{{$sponser->website}}">View site</a>
      </div>
    </div>
  </div>
</div>
@endforeach
      
    

      <!-- /END THE FEATURETTES -->

@stop