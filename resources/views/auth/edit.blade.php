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

<p><label for="username">
	Username
	<input class="form-control" type="text" name="username" value="{{ $user->username}}">

	{!! $errors->first('username','<span class=error>:message</span>')!!}
</label></p>


@if (auth()->check())

@if (auth()->user()->hasRoles(['admin']))
<div class="form-group">
    <label for="student" class="form-control-label">Example Assignar Student</label>
        <select class="form-control" id="edit-asig" name="student">
           
        	<option value="">Seleccione categoria</option>
           @foreach ($students as $id =>$email)
          {{-- @foreach($user->student as $students) --}}
           {{--  <option 

            value="{{ $student->id }}" 
            {{ $user->student->pluck('id')->contains($student->id) ? 'selected' : '' }}> 

            {{ $student->email }} 

        	</option> --}}


			<option value="{{ $id }}"
			{{ $user->student->pluck('id')->contains($id) ? 'selected="selected"' : '' }}>
			{{ $email}}
			</option>
         
            @endforeach
        </select>

        {!! $errors->first('student','<span class=error>:message</span>')!!}
</div>

@endif
@endif

<input class="btn btn-primary" type="submit" name="Enviar">

</form>

@stop