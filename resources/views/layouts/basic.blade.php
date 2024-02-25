<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title') - Prueba técnica Protec</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
		@yield('css')
		<link href="{{ asset('css/styles.css?t=time()') }}" rel="stylesheet" />
	</head>
	<body class="d-flex flex-column min-vh-100">
		<header class="border-bottom">
			<div class="container">
				<div class="d-flex flex-wrap justify-content-center py-3">
        			<a href="{{ url('posts') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-4 link-body-emphasis text-decoration-none">
        				<img alt="Logo Protec" src="{{ asset('images/logo.png') }}" class="logo" />
        			</a>
        			
        			<ul class="nav nav-pills align-items-center">
        				<li class="nav-item"><a href="{{ url('posts') }}" class="nav-link">Home</a></li>
        				<li class="nav-item"><a href="{{ url('post/new') }}" class="nav-link">Nueva entrada</a></li>
        			</ul>
				</div>
			</div>
		</header>
		<main class="container py-5">
    		@yield('content')
    	</main>
    	<footer class="mt-auto">
    		<div class="container py-4">
    			<div class="row justify-content-center">
    				<div class="col-sm-3">
    					<strong class="me-sm-3">Implementado por Raúl Medina.</strong>
					</div>
					<div class="col-sm-3">
        				<i class="fa-regular fa-envelope"></i> raulmedinacampos@yahoo.com.mx
        			</div>
        			<div class="col-sm-3">
        				<i class="fa-brands fa-whatsapp"></i> +52 55 1006 2644
        			</div>
    			</div>
    		</div>
    	</footer>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    	@yield('scripts')
    </body>
</html>
