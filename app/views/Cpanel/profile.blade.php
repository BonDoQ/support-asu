@extends('Cpanel.template')

@section('content')
<div class="col-sm-12">
	<div class="row">
		<div class="col-sm-6"><br />
			<div class="jumbotron">
			  	<h2>{{$profile->name}}</h2><br />
			  	<ul class="list-group">
				  <li class="list-group-item">
				    <span class="badge">E-mail</span>
				    <strong>{{$profile->email}}</strong>
				  </li>
				  <li class="list-group-item">
				    <span class="badge">Mobile</span>
				    <strong>{{$profile->mobile}}</strong>
				  </li>
				  <li class="list-group-item">
				    <span class="badge">Address</span>
				    <strong>{{$profile->address}}</strong>
				  </li>
				  <li class="list-group-item">
				    <span class="badge">Date of Birth</span>
				    <strong>{{$profile->birthday}}</strong>
				  </li>
				  <li class="list-group-item">
				    <span class="badge">Participation Year</span>
				    <strong>{{$profile->year}}</strong>
				  </li>
				  <li class="list-group-item">
				    <span class="badge">Old Committee</span>
				    <strong>{{$profile->oldcommittee}}</strong>
				  </li>
				  @if($profile->oldcommittee=="IT- Web Committee"||$profile->oldcommittee=="Media")
				  <li class="list-group-item">
				    <span class="badge">Old Team</span>
				    <strong>{{$profile->oldteam}}</strong>
				  </li>
				  @endif
				  <li class="list-group-item">
				    <span class="badge">Old Position</span>
				    <strong>{{$profile->oldposition}}</strong>
				  </li>
				  <li class="list-group-item">
				    <span class="badge">New Committee</span>
				    <strong>{{$profile->newcommittee}}</strong>
				  </li>
				  @if($profile->newcommittee=="IT- Web Committee"||$profile->newcommittee=="Media")
				  <li class="list-group-item">
				    <span class="badge">New Team</span>
				    <strong>{{$profile->newteam}}</strong>
				  </li>
				  @endif
				  <li class="list-group-item">
				    <span class="badge">New Position</span>
				    <strong>{{$profile->newposition}}</strong>
				  </li>
				  @if($profile->comment!=null)
				  <li class="list-group-item">
				    <span class="badge">Comment</span>
				    <strong>{{$profile->comment}}</strong>
				  </li>
				  @endif
				</ul>
			</div>
		</div>	

		<div class="col-sm-6">
        	<img class="featurette-image pull-right fixed-size-250x700 img-responsive col-sm-12 no_padding" src="{{$profile->imagepath}}">
		</div>

	</div>
</div>
@stop