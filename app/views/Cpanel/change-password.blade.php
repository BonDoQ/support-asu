@extends('Cpanel.template')

@section('title', 'Change password')

@section('content')

        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">    
                <form class="omb_loginForm" action="{{URL::route('postchange')}}" autocomplete="off" method="POST">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="email" name="email" class="form-control" placeholder="email address" required>
                    </div>
                    <span class="help-block"></span>
                                        
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input  type="password" class="form-control" name="password" placeholder="new Password" required>
                    </div>
                    <span class="help-block"></span>
                    {{ Form::token() }}
                    <button class="btn btn-lg btn-primary btn-block" type="submit">change password</button>
                </form>
            </div>
        </div>
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

@stop