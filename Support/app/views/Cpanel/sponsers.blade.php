@extends('cpanel.template')

@section('content')

	<!-- Events Panel -->

<div class="col-sm-12">
<a href="/cpanel/sponsors/create"><div class="btn btn-success col-sm-3 col-sm-offset-9">Create Sponser</div></a>

</div>
		<div class="col-sm-12">
	<div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Users</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="#" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Sponser" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Last Update" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Updated By" disabled></th>
                    	<th><input type="text" class="form-control" placeholder="Options" disabled></th>
                    </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                    @foreach ($sponsers as $sponser)
                    <tr>
                        <td><?php echo $i; $i = $i + 1; ?></td>
                        <td>{{$sponser->name}}</td>
                        <td>{{$sponser->updated_at->format('d-m-Y')}}</td>
                        <td>{{$sponser->updated_by}}</td>
                        <td>
                          <a href="/cpanel/sponsors/{{$sponser->id}}/edit">
                          <div class="glyphicon glyphicon-edit"></div></a> | 
                          <a href="#Modal{{$sponser->id}}" data-toggle="modal">
                          <div class="glyphicon glyphicon-trash"></div></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @foreach ($sponsers as $sponser)
          <!-- Modal {{$sponser->id}} -->
        <div id="Modal{{$sponser->id}}" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close btn-primary" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Delete sponser "{{$sponser->name}}"</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/cpanel/sponsors/{{$sponser->id}}">
                <input name="_method" type="hidden" value="DELETE">
                {{Form::token()}}
                <h3>Are you sure you want to delete this sponser ?</h3>
                <h4>Delete "{{$sponser->name}}" ?</h4><br />
                <button type="submit" class="btn btn-primary">Delete</button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        @endforeach

	</div><!-- End Container-->
</div>

@stop