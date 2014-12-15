@extends('Cpanel.template')

@section('content')
      
	<!-- Events Panel -->
		<div class="col-sm-9">
	    	<form class="form-horizontal" method="post" action="/cpanel/sliders/{{$slider->id}}" enctype="multipart/form-data">
    	     <input name="_method" type="hidden" value="PATCH">
          <div class="form-group">
        			<label for="inputEmail" class="control-label col-xs-2">Availibility :</label>
        			<div class="">
            		<input type="checkbox" name="availibility" id="Available" name="download-version" @if ($slider->IsEnable()==true) checked @endif data-size="large" data-on-text="On" data-off-text="Off" >
        			</div>
    			</div>
    			<div class="form-group">
                <label for="inputlink"  class="control-label col-xs-2">Name :</label>
                    <div class="col-xs-10">
                    <input type="text" name="name" class="form-control" id="inputlink" placeholder= "name" value="{{$slider->name}}" required>
                    </div>
                </div>
           <div class="form-group">
              <label class="control-label col-xs-2">Image Logo :</label>
              <div class="col-xs-10">
                <input type="file" class="form-control" name="image" id="img-upload" >
                <label class="btn btn-primary col-sm-2" for="img-upload">Upload Slider</label>
                <div class="col-sm-2 "><img class="img-responsive" src="{{asset($slider->imgPath)}}"></div>
              </div>
          </div>
    			<div class="form-group">
        		<label for="short-des" class="control-label col-xs-2">Short Description:</label>
	        		<div class="col-xs-10">
	            	<textarea class="form-control" name="description" id="short-des" required>{{$slider->description }} </textarea>
            	</div>
    			</div>
          {{ Form::token() }}
    			<div class="form-group">
        			<div class="col-xs-offset-2 col-xs-10 text-right">
            		<button type="submit" class="btn btn-primary">Update</button>
        			</div>
    			</div>
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
	    </div>
	  </div>
	  <!-- Modal -->
	  
	  	
	</div><!-- End Main Panel -->

@stop