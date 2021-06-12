@extends('layout')

@section('content')
<h1>Add Restraunt</h1>

<div class="col-sm-6">
	<form action="add" method="post">
		@csrf
	  	<div class="form-group">
	    	<input type="text" name="rname" class="form-control" placeholder="Name">
	  	</div>
	  	<div class="form-group">
	    	<input type="email" name="email" class="form-control" placeholder="Email">
	  	</div>
	  	<div class="form-group">
	    	<input type="txet" name="address" class="form-control" placeholder="Address">
	  	</div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>



@stop