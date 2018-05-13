@extends('layouts.admin')

@section('contenido')


<h1>EDITAR USUARIO</h1>

@if( session()->has('info'))
<div class="alert alert-success">{{ session('info')}}</div>

@endif



<form method="POST" action=" {{ route('users.update', $user->id)}} ">
	{!! method_field('PUT') !!}

	{!! csrf_field() !!}
	
<p><label for="nombre">
	Nombre

	<input class="form-control" type="text" name="name" value="{{ $user->name }}">

	{!! $errors->first('name','<span class=error>:message</span>')!!}
</label></p>

<p><label for="email">
	Email
	<input class="form-control" type="text" name="email" value="{{ $user->email}}">

	{!! $errors->first('email','<span class=error>:message</span>')!!}
</label></p>

<div class="form-group">
    <label for="exampleSelect1" class="form-control-label">Example Assignar Student</label>
        <select class="form-control" id="exampleSelect1" name="student">
           @foreach ($students as $student)
            <option value="{{ $student->id }}"> {{ $student->email }} </option>
            @endforeach
        </select>

        {!! $errors->first('student','<span class=error>:message</span>')!!}
</div>


<input class="btn btn-primary" type="submit" name="Enviar">

</form>

@stop