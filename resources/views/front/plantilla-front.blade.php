<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Minireia</title>

    @include('front.style-front')
    @yield('style')	
  
  </head>
  <body>	
	<header id="header">
        @include('front.menu-front')
    </header><!--/header-->	
	
	<div class="slider">
		@yield('slider')
	</div><!--/#slider-->
	
	@yield('content')	<!-- Contenido de la pagina front	-->
	
	<div class="gallery">
		@yield('gallery')
	</div>
		
	<footer>
		@include('front.footer-front')
	</footer>
	
	<div class="sub-footer">
		@include('front.redes-sociales-front')
	</div>
	@include('front.script-front')	
	<br>
    @yield('script')
</body>
</html>