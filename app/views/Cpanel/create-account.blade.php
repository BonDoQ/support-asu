@extends('Cpanel.template')

@section('content')

	<!-- Events Panel -->
	<div class="col-sm-9">
	    	<form class="form-horizontal" method="POST" action="{{URL::route('postcreate')}}">
    			
    			<div class="form-group">
                <label for="inputlink" class="control-label col-xs-2">Name :</label>
                    <div class="col-xs-10">
                    <input type="text" class="form-control" id="inputlink" name="username" placeholder="enter name " required>
                    </div>
                </div>
               
    			<div class="form-group">
        		<label for="inputlink" class="control-label col-xs-2">Email :</label>
	        		<div class="col-xs-10">
	            	<input type="email" class="form-control" id="inputlink" name="email" placeholder="email " required>
	        		</div>
    			</div>

    			<div class="form-group">
    			<label for="inputlink" class="control-label col-xs-2">Password :</label>
                    <div class="col-xs-10">
                     <input type="password" class="form-control" name="password" placeholder="new Password" required>
                    </div>
                </div>

                <div class="form-group col-sm-4 ">
	                <select class="form-control col-sm-offset-7" name="position">
						<option value="President"> President </option>
						<option value="Vice President"> Vice President </option>
            <option value="IT Head"> IT Head </option>
            <option value="Media Head" > Media Head </option>
            <option value="PR Head" > PR Head </option>
            <option value="logistics Head" > Logistics Head</option>
            <option value="HR Head" > HR Head </option>
            <option value="IT"> IT Member </option>
						<option value="Media" > Media Member </option>
            <option value="PR" > PR Member </option>
            <option value="logistics" > Logistics Member </option>
            <option value="HR Member" > HR Member </option>
					</select>
    			</div>
    			<div class="form-group">
        			<div class="col-xs-offset-2 col-xs-10 text-right">
            		<button type="submit" class="btn btn-primary">Save</button>
        			</div>
    			</div>
          {{ Form::token() }}
			</form>
      <div  class="form-group">
        @if ( $errors->count() > 0 )
          <p>The following errors have been occurred:</p>
      <ul>
        @foreach( $errors->all() as $message )
          <li>{{ $message }}</li>
        @endforeach
      </ul>
          @endif
      </div>    

@stop