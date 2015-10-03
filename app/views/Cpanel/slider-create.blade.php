@extends('Cpanel.template')

@section('title', 'Create Slide')

@section('content')

	<!-- Events Panel -->
		<div class="col-sm-9">
	    	<form class="form-horizontal" method="POST" action="/cpanel/sliders" enctype="multipart/form-data">
    			<div class="form-group">
        			<label for="inputEmail" class="control-label col-xs-2">Availibility :</label>
        			<div class="">
            		<input type="checkbox" name="availibility" id="Available" name="download-version" checked data-size="large" data-on-text="On" data-off-text="Off" >
        			</div>
    			</div>
                <div class="form-group">
                    <label for="inputEmail" class="control-label col-xs-2">Event Slider :</label>
                    <div class="">
                    <input type="checkbox" name="EventSlider" name="download-version" checked data-size="large" data-on-text="Yes" data-off-text="No" >
                    </div>
                </div>
    			<div class="form-group">
                <label for="inputlink"  class="control-label col-xs-2">Name :</label>
                    <div class="col-xs-10">
                    <input type="text" name="name" class="form-control" id="inputlink" placeholder= "name">
                    </div>
                </div>
                <div class="form-group">
        			<label class="control-label col-xs-2">Image:</label>
	        		<div class="col-xs-10">
	            	<input type="file" name="image" class="form-control" id="img-upload" placeholder="Paste the Event Link " required>
	            	<label class="btn btn-primary" for="img-upload">Upload Slider</label>
                
	        		</div>
    			</div>
    			<div class="form-group">
        		<label for="short-des" class="control-label col-xs-2">Short Description:</label>
	        		<div class="col-xs-10">
	            	<textarea class="form-control" name="description" id="short-des" ></textarea>
            	</div>
    			</div>
          {{ Form::token() }}
    			<div class="form-group">
        			<div class="col-xs-offset-2 col-xs-10 text-right">
            		<button type="submit" class="btn btn-primary">Save</button>
        			</div>
    			</div>
			</form>  	
	    </div>
	  <!-- Modal -->

@stop