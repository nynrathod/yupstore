<!DOCTYPE html>
<html>
<head>
	<title>Restraunt App</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />

	<style type="text/css">
		.footer {
		    bottom: 0;
		    width: 100%;
		    height: 60px;
		    line-height: 60px;
		    background-color: #f5f5f5;
		}	
	</style>

</head>
<body>

	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
					<a class="nav-item nav-link" href="/list">List</a>
					<a class="nav-item nav-link" href="/add">Add</a>
					<a class="nav-item nav-link" href="#">Search</a>			
					@if(Session::get('user'))
					<a href="nav-item nav-link" href="#">Welcome {{Session::get('user')}}</a>
					@else
					<a class="nav-item nav-link" href="/login">Login</a>
					<a class="nav-item nav-link" href="/register">Register</a>
					@endif
				</div>
			</div>
		</nav>
	</header>

	<div class="container">
		@yield('content')
	</div>

	<footer class="footer">
      	<div class="container">
        	<span class="text-muted">Place sticky footer content here.</span>
      	</div>
    </footer>

</body>
</html>