@extends('cpanel.template')

@section('content')

	<!-- Events Panel -->

<div class="col-sm-12">
<a href="sliders/create"><div class="btn btn-success col-sm-3 col-sm-offset-9">Create Slider</div></a>

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
                        <th><input type="text" class="form-control" placeholder="Slider" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Last Update" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Updated By" disabled></th>
                    	<th><input type="text" class="form-control" placeholder="Options" disabled></th>
                    </tr>
                </thead>
                <tbody>
                <?php $i=1; ?>                 
                    @foreach($sliders as $slider)
                      <td>{{$i}}</td>
                        <td>{{$slider->name }}</td>
                        <td>{{$slider->updated_at->format('d-m-Y') }}</td>

                        <td>{{$slider->updated_by}}</td>
                        <td>
                          <a href="/cpanel/sliders/{{$slider->id}}/edit">
                          <div class="glyphicon glyphicon-edit"></div></a> |
                          <a href="#" data-target="#Modal{{$slider->id}}" data-toggle="modal">
                             <div class="glyphicon glyphicon-trash" ></div>
                          </a>
                        </td>
                        </tr>
                        <?php ++$i; ?>
                        @endforeach
                </tbody>
            </table>
        </div>

   @foreach ($sliders as $slider)

        <div id="Modal{{$slider->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close btn-primary" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Delete slider "{{$slider->name}}"</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="/cpanel/sliders/{{$slider->id}}">
                <input name="_method" type="hidden" value="DELETE">
                {{Form::token()}}
                <h3>Are you sure you want to delete this event ?</h3>
                <h4>Delete "{{$slider->name}}" ?</h4><br />
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