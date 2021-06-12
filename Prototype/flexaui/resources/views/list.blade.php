@extends('layout')

@section('content')
<h1>List of Restraunt</h1>

@if(session('status'))
<div class="alert alert-success" role="alert">
  {{session('status')}}
</div>
@endif

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Actiom</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($data as $val)
    <tr>
      <th scope="row">{{$val->id}}</th>
      <td>{{$val->name}}</td>
      <td>{{$val->email}}</td>
      <td>{{$val->address}}</td>
      <td>
      	<a href="/delete{{$val->id}}"><i class="fa fa-trash"></i></a>
      	<a href="/edit{{$val->id}}"><i class="fa fa-edit"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop