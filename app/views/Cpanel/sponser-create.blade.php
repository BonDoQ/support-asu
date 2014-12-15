@extends('Cpanel.template')

@section('content')
  
  <!-- Events Panel -->
    <div class="col-sm-9">
        <form class="form-horizontal" method="POST" action="/cpanel/sponsors" enctype="multipart/form-data">
          {{Form::token()}}
          <div class="form-group">
              <label for="inputEmail" class="control-label col-xs-2">Availibility :</label>
              <div>
                <input type="checkbox" id="Available" name="availibility" checked data-size="large" data-on-text="On" data-off-text="Off">
              </div>
          </div>
          <div class="form-group">
              <label for="inputEmail" class="control-label col-xs-2">Name :</label>
              <div class="col-xs-10">
                <input type="text" class="form-control" id="inputEmail" placeholder="Type the Sponser Name" name="name" required>
              </div>
          </div>
          <div class="form-group">
            <label for="inputslogan" class="control-label col-xs-2">Slogan :</label>
              <div class="col-xs-10">
                <input type="text" class="form-control" id="inputslogan" placeholder="Type the Sponser Slogan" name="slogan" required>
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-xs-2">Image Logo :</label>
              <div class="col-xs-10">
                <input type="file" class="form-control" name="image_logo" id="img-upload" >
                <label class="btn btn-primary col-sm-2" for="img-upload">Upload logo</label>
                <!-- <div class="col-sm-2 "><img class="img-responsive" src=""></div> -->
              </div>
          </div>
          <div class="form-group">
            <label for="inputlink" class="control-label col-xs-2">Website :</label>
              <div class="col-xs-10">
                <input type="text" class="form-control" id="inputlink" placeholder="Paste the Event Link " name="website">
                <p style="color:red;">Do not write "http://" or "https://"</p>
              </div>
          </div>
          <div class="form-group">
            <label for="short-des" class="control-label col-xs-2">Information :</label>
              <div class="col-xs-10">
                <textarea class="form-control" id="short-des" name="information" required></textarea>
              </div>
          </div>
          <div class="form-group">
            <label for="short-des" class="control-label col-xs-2">Events :</label>
              <div class="col-xs-10">
              <a href="#EventsModal" data-toggle="modal" class="btn btn-primary col-xs-3" >Choose Events</a>
              <!-- <ul class="list-inline">
                @foreach($vents as $vent)
                <li class="col-sm-6">
                <input name="{{$vent->id}}" type="checkbox">
                  {{$vent->name}}
                </li>
                @endforeach
              </ul> -->
              </div>
          </div>

          <div class="form-group">
              <div class="col-xs-offset-2 col-xs-10 text-right">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
          </div>

        <!-- Modal -->
        <div id="EventsModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close btn-primary" data-dismiss="modal" aria-hidden="true">&times;</button>
                     <h4 class="modal-title">Events</h4>
                 </div>
                 <div class="modal-body">
                    @foreach($vents as $vent)
                      <input name="{{$vent->id}}" type="checkbox"> {{$vent->name}} <br>
                    @endforeach
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
            </div>
        </div>          

      </form>     
      </div>
    </div>

  </div><!-- End Main Panel -->

@stop