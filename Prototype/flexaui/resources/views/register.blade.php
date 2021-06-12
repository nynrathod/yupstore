@extends('layout')

@section('content')
<h1>Register User</h1>

<form action="register" method="post">
		@csrf
	  	<div class="form-group col-sm-6">
	    	<input type="text" name="fname" class="form-control" placeholder="Name">
	  	</div>
	  	<div class="form-group col-sm-6">
	    	<input type="text" name="contact" class="form-control" placeholder="Password">
	  	</div>
	  	<div class="form-group col-sm-6">
	    	<input type="email" name="email" class="form-control" placeholder="Email">
	  	</div>
	  	<div class="form-group col-sm-6">
	    	<input type="password" name="password" class="form-control" placeholder="Password">
	  	</div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>

@stop