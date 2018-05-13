@extends('layouts.admin')

@section('contenido')


<h1>EDITAR ROLE</h1>

@if( session()->has('info'))
<div class="alert alert-success">{{ session('info')}}</div>

@endif

<form method="POST" action=" {{ route('roles.update', $roles->id)}} ">
	{!! method_field('PUT') !!}

	{!! csrf_field() !!}
	
<p><label for="nombre">
	Nombre

	<input class="form-control" type="text" name="name" value="{{ $roles->name }}">

	{!! $errors->first('name','<span class=error>:message</span>')!!}
</label></p>

<p><label for="email">
	Display Name
	<input class="form-control" type="text" name="display_name" value="{{ $roles->display_name}}">

	{!! $errors->first('display_name','<span class=error>:message</span>')!!}
</label></p>

<p><label for="email">
	Description
	<input class="form-control" type="text" name="description" value="{{ $roles->description}}">

	{!! $errors->first('description','<span class=error>:message</span>')!!}
</label></p>




<input class="btn btn-primary" type="submit" name="Enviar">

</form>

@stop