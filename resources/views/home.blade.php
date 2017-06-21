<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      
    </div>
    <ul class="nav navbar-nav">
      
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
      			
      	@if(Session::has('locale'))
      		{{session('locale')}}
      	@else
      		{{Config::get('app.locale')}}
      	@endif

      	<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{url('language/en')}}">English</a></li>
          <li><a href="{{url('language/bd')}}">Bangla</a></li>
        </ul>
      </li>
     
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>{{ __('userdetails.name') }}</h3>
  <h3>{{ __('userdetails.hometown') }}</h3>
  <h3>{{ __('userdetails.country') }}</h3>
</div>

</body>
</html>
