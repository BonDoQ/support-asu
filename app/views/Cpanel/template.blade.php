<!DOCTYPE html>
<html>
<head>
    <!-- Styles -->

    <link rel="stylesheet" type="text/css" href="{{asset('assets/Cpanel/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/Cpanel/css/bootstrap-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/Cpanel/css/bootstrap-switch.css')}}"> 
    <link rel="stylesheet" type="text/css" href="{{asset('assets/Cpanel/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/Cpanel/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/Cpanel/css/switch-highlight.css')}}"> 
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">  

    <!-- Scripts -->


    <!-- == -->
    <meta charset="UTF-8">
    <title>
      Admin's Panel | 
      @if(Request::is('cpanel/events')) Events
      @elseif(Request::is('cpanel/events/create')) Event Create
      @elseif(Request::is('cpanel/events/*')) Event Edit
      @elseif(Request::is('cpanel/sponsers')) Sponsers
      @elseif(Request::is('cpanel/sponsers/create')) Sponser Create
      @elseif(Request::is('cpanel/sponsers/*')) Sponser Edit
      @elseif(Request::is('cpanel/sliders')) Sliders
      @elseif(Request::is('cpanel/sliders/create')) Slide Create
      @elseif(Request::is('cpanel/sliders/*')) Slide Edit
      @elseif(Request::is('cpanel/messages')) Messages
      @elseif(Request::is('cpanel')) Profile
      @endif
    </title>
</head>
<body>
    <div class="container">
            <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{{ URL::to('cpanel/')  }}}">Admin Panel</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li {{{ (Request::is('cpanel/events') ? 'class=active' : '') }}} >
                <a href="{{{ URL::to('cpanel/events')  }}}">Events</a>
              </li>
              <li {{{ (Request::is('cpanel/sponsors') ? 'class=active' : '') }}} >
                <a href="{{{ URL::to('cpanel/sponsors')  }}}">Sponsors</a>
              </li>
              <li {{{ (Request::is('cpanel/sliders') ? 'class=active' : '') }}} >
                <a href="{{{ URL::to('cpanel/sliders')  }}}">Sliders</a>
              </li>
              <li {{{ (Request::is('cpanel/reg') ? 'class=active' : '') }}} >
                <a href="#">Register</a>
              </li>
              <li {{{ (Request::is('cpanel/supportians') ? 'class=active' : '') }}} >
                <a href="#">Supportians</a>
              </li>
              <li {{{ (Request::is('cpanel/post') ? 'class=active' : '') }}} >
                <a href="#">Post</a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class=" message-btn"><a href="{{{ URL::to('cpanel/messages')  }}}"><i class="glyphicon glyphicon-envelope"></i></a></li>
              <li class="dropdown user-option-btn">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="glyphicon glyphicon-user"></i><i class="caret"></i></a>
                        <ul class="dropdown-menu">
                          @if(Auth::user()->position=="president")
                            <li><a href="{{{ URL::to('cpanel/create-account')  }}}">Create Account</a></li>
                          @endif
                            <li><a href="{{{ URL::to('cpanel/change')  }}}">Change Password</a></li>
                            <li><a href="{{{ URL::to('cpanel/')  }}}">Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="{{{ URL::to('cpanel/logout')  }}}">Logout</a></li>
                        </ul>   
                    </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

      @yield('content')


    </div>

    <script type="text/javascript" src="{{asset('assets/Cpanel/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/Cpanel/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/Cpanel/js/site.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/Cpanel/js/bootstrap-switch.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/Cpanel/js/switch.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/Cpanel/js/switch-highlight.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/Cpanel/text-editor/tinymce/js/tinymce/tinymce.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/Cpanel/js/description-field.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/Cpanel/js/filter.js')}}"></script>
    <script type="text/javascript">tinymce.init({selector:'.event-description'});</script>
    <script type="text/javascript">
      $(document).ready(function(){
              $('.filterable .btn-filter').click(function(){
                  var $panel = $(this).parents('.filterable'),
                  $filters = $panel.find('.filters input'),
                  $tbody = $panel.find('.table tbody');
                  if ($filters.prop('disabled') == true) {
                      $filters.prop('disabled', false);
                      $filters.first().focus();
                  } else {
                      $filters.val('').prop('disabled', true);
                      $tbody.find('.no-result').remove();
                      $tbody.find('tr').show();
                  }
              });

              $('.filterable .filters input').keyup(function(e){
                  /* Ignore tab key */
                  var code = e.keyCode || e.which;
                  if (code == '9') return;
                  /* Useful DOM data and selectors */
                  var $input = $(this),
                  inputContent = $input.val().toLowerCase(),
                  $panel = $input.parents('.filterable'),
                  column = $panel.find('.filters th').index($input.parents('th')),
                  $table = $panel.find('.table'),
                  $rows = $table.find('tbody tr');
                  /* Dirtiest filter function ever ;) */
                  var $filteredRows = $rows.filter(function(){
                      var value = $(this).find('td').eq(column).text().toLowerCase();
                      return value.indexOf(inputContent) === -1;
                  });
                  /* Clean previous no-result if exist */
                  $table.find('tbody .no-result').remove();
                  /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
                  $rows.show();
                  $filteredRows.hide();
                  /* Prepend no-result row if all rows are filtered */
                  if ($filteredRows.length === $rows.length) {
                      $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
                  }
              });
          });
    </script>

</body>
</html>