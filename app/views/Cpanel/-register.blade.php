@extends('Cpanel.template')

@section('content')

  <!-- Events Panel -->
<div class="col-sm-12">
<a href="applicants/download"><div class="btn btn-success col-sm-3 col-sm-offset-9">Download .csv File</div></a>

<div class="col-sm-12">
  <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Crew</h3>
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
                        <th><input type="text" class="form-control" placeholder="Email" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Mobile" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Old Committee" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Old Position" disabled></th>
                        <th><input type="text" class="form-control" placeholder="New Committee" disabled></th>
                        <th><input type="text" class="form-control" placeholder="New Position" disabled></th>
                    </tr>
                </thead>
                
                <tbody>
                  <?php $i=1; ?>
                @foreach($apps as $app)
                    <tr>
                        <td>{{$i}}</td>
                        <td style="white-space: nowrap;"><a href="applicants/profile/{{$app->id}}">{{ Str::limit($app->name, 20) }}</a></td>
                        <td>{{$app->email}}</td>
                        <td>{{$app->mobile}}</td>
                        <td>{{ Str::limit($app->oldcommittee, 10) }}</td>
                        <td>{{$app->oldposition}}</td>
                        <td>{{ Str::limit($app->newcommittee, 10) }}</td>
                        <td>{{$app->newposition}}</td>
                    </tr>
                    <?php ++$i; ?>
                    @endforeach
                </tbody>                
            </table>
        </div>
  
    </div>
  </div>
</div><!-- End Container-->

@stop