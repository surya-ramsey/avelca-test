<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	{{ HTML::style('css/bootstrap.min.css')}}
	{{ HTML::style('css/style.css')}}
</head>
	<body>
		<div class="container">

			<header class="col-md-12">
				@include('includes.header')
			</header>

			<div id="main" class="col-md-12">

					@yield('content')

			</div>

			<footer class="col-md-12">
				@include('includes.footer')
			</footer>

		</div>

		{{ HTML::script('js/bootstrap.min.js')}}		
	</body>
</html>
