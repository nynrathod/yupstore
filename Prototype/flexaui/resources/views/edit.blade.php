@extends('layout')

@section('content')
<h1>Edit Restraunt</h1>

<div class="col-sm-6">
	<form action="/edit" method="post">
		@csrf
	  	<div class="form-group">
	  		<input type="hidden" name="id" value="{{$data->id}}">
	    	<input type="text" name="rname" class="form-control" value="{{$data->name}}" placeholder="Name">
	  	</div>
	  	<div class="form-group">
	    	<input type="email" name="email" class="form-control" value="{{$data->email}}" placeholder="Email">
	  	</div>
	  	<div class="form-group">
	    	<input type="txet" name="address" class="form-control" value="{{$data->address}}" placeholder="Address">
	  	</div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>



@stop