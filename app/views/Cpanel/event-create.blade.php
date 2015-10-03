@extends('Cpanel.template')

@section('title', 'Create Event')

@section('content')

  <!-- Events Panel -->
    <div class="col-sm-9">
        <form class="form-horizontal" method="POST" action="/cpanel/events" enctype="multipart/form-data">
            {{Form::token()}}
          <div class="form-group">
            <label for="Available" class="control-label col-xs-2">Availibility :</label>

              <input type="checkbox" id="Available" name="availibility" checked data-size="large" data-on-text="On" data-off-text="Off">
            </div>
          <div class="form-group">
              <label for="inputEmail" class="control-label col-xs-2">Event Name :</label>
              <div class="col-xs-10">
                <input type="text" class="form-control" name="name" id="inputEmail" placeholder="Type the Event Name"required>
              </div>
          </div>
          <div class="form-group">
            <label for="inputslogan" class="control-label col-xs-2">Event Slogan :</label>
              <div class="col-xs-10">
                <input type="text" class="form-control" name="slogan" id="inputslogan" placeholder="Type the Evet Slogan">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-2">Image Logo :</label>
              <div class="col-xs-10">
                <input type="file" class="form-control" name="image_logo" id="img-upload" placeholder="Paste the Event Link ">
                <label class="btn btn-primary col-sm-2" for="img-upload">Upload logo</label>                
              </div>
          </div>
        
          <div class="form-group">
            <label for="inputlink" class="control-label col-xs-2">Event Date :</label>
              <div class="col-xs-10">
                <input type="date" class="form-control" name="date" id="inputlink" placeholder="Event Date" required>
              </div>
          </div>
            <div class="form-group">
            <label for="short-des" class="control-label col-xs-2">Event Short Description :</label>
              <div class="col-xs-10">
                <textarea class="form-control" id="short-des" name="short_description" required></textarea>
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-xs-2">Event Description:</label>
              <div class="col-xs-10">
                <!-- tinymce Text Editor -->
                  <div class="event-description"></div>
              </div>
              <!-- End tinymce Text Editor -->
          </div>
          <input style="display:none;" id="event_des_data" name="description" required />
          <a class="btn btn-info col-xs-offset-6" onclick="get_desc()">save Description</a>


          <div class="form-group">
              <div class="col-xs-offset-2 col-xs-10 text-right">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
          </div>
      </form>     
      </div>
    </div>
      
  </div><!-- End Main Panel -->

@stop
