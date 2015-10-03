@extends('Cpanel.template')

@section('title', 'Messages')

@section('content')

  <!-- Events Panel -->

<!-- <div class="col-sm-12">
<a href="#"><div class="btn btn-success col-sm-3 col-sm-offset-9">Create</div></a>

</div> -->
    <div class="col-sm-12">
  <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Messages</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Email" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Subject" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Date" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Options" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Replied By" disabled></th>
                    </tr>
                </thead>
                <tbody>
                  <?php $i=1; ?>  
                @foreach($emails as $email)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$email->sender_name}}</td>
                        <td>{{$email->sender_email}}</td>
                        <td>{{$email->sender_subject}}</td>
                        <td>{{$email->sent_at}}</td>
                        <td><a href="#{{$email->id}}" data-toggle="modal">
                          <div class="glyphicon glyphicon-eye-open"></div></a> | 
                          <a href="#ModalDelete{{$email->id}}" data-toggle="modal"><div class="glyphicon glyphicon-trash"></div> </a> | <a href="#ModalReplay{{$email->id}}" data-toggle="modal">
                          <div class="glyphicon glyphicon-share-alt"></div></a></td>
                        <td>@if($email->replied_by!=null) {{$email->replied_by}} @else Not Replied Yet @endif</td>
                    </tr>
                    <?php ++$i; ?>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        <!-- Modals -->
        <!-- Modal Delete -->
         @foreach($emails as $email)
          <div id="ModalDelete{{$email->id}}" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close btn-primary" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Delete Message "{{$email->sender_subject}}"</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="messages/{{$email->id}}">
                <input name="_method" type="hidden" value="DELETE">
                {{Form::token()}}
                <h3>Are you sure you want to delete this Message ?</h3>
                <h4>Delete "{{$email->sender_subject}}" ?</h4><br />
                
              
              </div>
              <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Delete</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
                </form>
            </div>
          </div>
        </div>
         @endforeach

<!-- Modal 1 -->
        @foreach($emails as $email)
        <div id="{{$email->id}}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content"> 
                  <div class="modal-header">
                     <button type="button" class="close btn-primary" data-dismiss="modal" aria-hidden="true">&times;</button>
                     <h4 class="modal-title">{{$email->sender_subject}}</h4>
                 </div>
                 <div class="modal-body">
                     <p>
                     {{$email->sender_message}}
                     </p>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- Modal Replay -->
      
            @foreach($emails as $email)
        <div id="ModalReplay{{$email->id}}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content"> 
                  <div class="modal-header">
                     <button type="button" class="close btn-primary" data-dismiss="modal" aria-hidden="true">&times;</button>
                     <h4 class="modal-title">{{$email->sender_subject}}</h4>
                 </div>
                  <form class="form-horizontal" method="POST" action="messages/reply/{{$email->id}}">
                 <div class="modal-body">
                    <input type="text" class="form-control" placeholder="Subject" name="admin_message" required>
                    <button type="submit" class="btn btn-primary">Send</button>
                 </div>
                 </form>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
            </div>
        </div>
        @endforeach
        
</div>
  </div><!-- End Container-->

@stop