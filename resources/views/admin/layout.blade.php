<!DOCTYPE html>

<html lang="en">
  <head>

    <title>
	 @yield('title')
	</title>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
    @yield('css')
  </head>
  <body>  
      <div>
        @yield('content') 
        @include('shared.footer')
      </div> 
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"></script>
    @yield('javascript')

  </body>
</html>