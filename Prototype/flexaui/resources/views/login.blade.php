@extends('layout')

@section('content')
<h1>Login</h1>

<form action="login" method="post">
		@csrf
	  	<div class="form-group col-sm-6">
	    	<input type="email" name="email" class="form-control" placeholder="Email">
	  	</div>
	  	<div class="form-group col-sm-6">
	    	<input type="password" name="password" class="form-control" placeholder="Password">
	  	</div>
	  <button type="submit" class="btn btn-primary">Login</button>
	</form>

@stop