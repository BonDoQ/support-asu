@extends('Cpanel.template')

@section('content')

  <!-- Events Panel -->
<div class="col-sm-12">
<a href="applicants/download"><div class="btn btn-success col-sm-3 col-sm-offset-9">Download .csv File</div></a>

<div class="col-sm-12">
  <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Applicants</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table table-striped">
                <colgroup>
                  <col class="col-xs-1">
                  <col class="col-xs-2">
                  <col class="col-xs-1">
                  <col class="col-xs-1">
                  <col class="col-xs-2">
                  <col class="col-xs-1">
                  <col class="col-xs-1">
                </colgroup>
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Workshop" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Track" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Link" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Date" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Registered at" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Options" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Status" disabled></th>
                    </tr>
                </thead>
                
                <tbody>
                  <?php $i=1; ?>  
                @foreach($apps as $app)
                    <tr>
                        <td>{{$i}}</td>
                        <td style="white-space: nowrap;">{{ Str::limit($app->name, 25) }}</td>
                        <td>{{$app->workshop}}</td>
                        <td>{{$app->track}}</td>
                        <td>{{$app->link}}</td>
                        <td>{{substr($app->day, 0, 3)}} {{$app->time}}</td>
                        <td>{{$app->registered_at}}</td>
                        <td><a href="#{{$app->id}}" data-toggle="modal"><div class="glyphicon glyphicon-file"></div></a> | <a href="#ModalDelete{{$app->id}}" data-toggle="modal"><div class="glyphicon glyphicon-trash"></div> </a></td>
                        <td>
                          @if($app->status == 1)
                          <a class="label label-success" href="#Acc{{$app->id}}" data-toggle="modal">Accepted</a>
                          @elseif ($app->status == 2)
                          <a class="label label-danger" href="#Acc{{$app->id}}" data-toggle="modal">Rejected</a>
                          @else
                          <a class="label label-default" href="#Acc{{$app->id}}" data-toggle="modal">Queued</a>
                          @endif
                        </td>
                    </tr>
                    <?php ++$i; ?>
                    @endforeach
                    
                </tbody>                
            </table>
        </div>

        <!-- Modals -->
        <!-- Modal Delete -->
         @foreach($apps as $app)
          <div id="ModalDelete{{$app->id}}" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close btn-primary" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Delete Applicant "{{$app->name}}"</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/cpanel/applicants/{{$app->id}}">
                <input name="_method" type="hidden" value="DELETE">
                {{Form::token()}}
                <h3>Are you sure you want to delete this applicant ?</h3>
                <h4>Delete "{{$app->name}}" ?</h4><br />
                
              
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
        @foreach($apps as $app)
        <div id="{{$app->id}}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content"> 
                  <div class="modal-header">
                     <button type="button" class="close btn-primary" data-dismiss="modal" aria-hidden="true">&times;</button>
                     <h4 class="modal-title">{{$app->name}}</h4>
                 </div>
                 <div class="table-responsive">
                      <table class="table table-bordered table-striped">
                        <colgroup>
                          <col class="col-xs-1">
                          <col class="col-xs-5">
                        </colgroup>
                        <tr>
                          <th>Email</td>
                          <td>{{$app->email}}</td>
                        </tr>
                        <tr>
                          <th>Mobile</td>
                          <td>{{$app->mobile}}</td>
                        </tr>
                        <tr>
                          <th>Workshop</td>
                          <td>{{$app->workshop}}</td>
                        </tr>
                        @if($app->workshop=="IT- Game Committee")
                        <tr>
                          <th>Track</td>
                          <td>{{$app->track}}</td>
                        </tr>
                        @endif
                        @if($app->workshop=="Media")
                        <tr>
                          <th>Link</td>
                          <td>{{$app->link}}</td>
                        </tr>
                        @endif
                        <tr>
                          <th>University</td>
                          <td>{{$app->university}}</td>
                        </tr>
                        <tr>
                          <th>College</td>
                          <td>{{$app->college}}</td>
                        </tr>
                        <tr>
                          <th>Academic Year</td>
                          <td>{{$app->year}}</td>
                        </tr>
                        <tr>
                          <th>Comments</td>
                          <td>{{$app->comments}}</td>
                        </tr>
                        <tr>
                          <th>Status</td>
                          <td>
                            @if($app->status == 1)
                            <span class="label label-success">Accepted</span>
                            @elseif ($app->status == 2)
                            <span class="label label-danger">Rejected</span>
                            @else
                            <span class="label label-default">Queued</span>
                            @endif
                          </td>
                        </tr>
                      </table>
                 </div>
                </div>
            </div>
        </div>
        @endforeach 

        <!-- accept modal --> 
        @foreach($apps as $app)
        <div id="Acc{{$app->id}}" class="modal fade">
            <div class="modal-dialog modal-sm">
                <div class="modal-content"> 
                  <div class="modal-header">
                     <button type="button" class="close btn-primary" data-dismiss="modal" aria-hidden="true">&times;</button>
                     <h4 class="modal-title" style="white-space: nowrap;">{{$app->name}}</h4>
                 </div>
                 <div class="modal-body">
                     
                <form class="form-horizontal" method="POST" action="/cpanel/applicants/{{$app->id}}" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
                Status: 
                {{Form::token()}}
                @if($app->status == 1)
                {{Form::select('status', array('Q' => 'Queued', 'A' => 'Accepted', 'R' => 'Rejected'), 'A');}}
                @elseif($app->status == 2)
                {{Form::select('status', array('Q' => 'Queued', 'A' => 'Accepted', 'R' => 'Rejected'), 'R');}}
                @else
                {{Form::select('status', array('Q' => 'Queued', 'A' => 'Accepted', 'R' => 'Rejected'), 'Q');}}
                @endif
                 </div>

                 <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                  </form>
                </div>
            </div>
        </div>

        @endforeach     
</div>
</div><!-- End Container-->

@stop