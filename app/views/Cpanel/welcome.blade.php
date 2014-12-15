@extends('Cpanel.template')

@section('content')
<div class="col-sm-12">
	<div class="row">
		<div class="col-sm-6"><br />
			<div class="jumbotron">
			  	<h2>Welcome {{Auth::user()->username}}!</h2><br />
			  	<ul class="list-group">
				  <li class="list-group-item">
				    <span class="badge">E-mail</span>
				    <strong>{{Auth::user()->email}}</strong>
				  </li>
				  <li class="list-group-item">
				    <span class="badge">Position</span>
				    <strong>{{Auth::user()->position}}</strong>
				  </li>
				</ul>
				<p>
					<a href="{{{ URL::to('cpanel/logout')  }}}" class="btn btn-primary btn-sm" role="button">Log out</a>
				</p>
			</div>
		</div>	

		<div class="col-sm-6">
        	<img class="featurette-image pull-right" src="{{ URL::asset('assets/SupportWebsite/img/logolarge.png')}}">
		</div>

	</div>
</div>
@stop