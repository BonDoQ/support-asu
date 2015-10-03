@extends('SupportWebsite.template')

@section('title', $thisvent->name)

@section('content') 

    <div class="container-fluid no-slider">
      <div class="row-fluid">
        <div class="col-sm-2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              
              @foreach ($events as $key => $value)
               
              <li class="nav-header">{{$key}}</li>
              @foreach ($value as $vent)
                <li><a href="{{$vent->name}}">{{$vent->name}}</a></li>

              @endforeach
              @endforeach
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="col-sm-9">
          <div class="row-fluid featurette" id="droop-off">
            <div class="holder featurette-image pull-left ">
              <div class="avatar">
               <a>
                <img src="{{$thisvent->image_logo}}" class="fixed-size-250x250 user event-logo"/>
               </a>
              </div>
            </div>
            <h2 class="featurette-heading event-name">{{$thisvent->name}} <span class="slogan small">{{$thisvent->slogan}}</span></h2>
            <p class="lead short-des">
              {{$thisvent->short_description}}
            </p>
          </div>
        <div class="row description">
          {{$thisvent->description}}
        </div>

          <hr/>
          
    </div><!--/.fluid-container-->
  </div>
</div>

@stop
