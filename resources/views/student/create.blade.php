@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">

            <!-- Main content starts -->
            <div>
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>General Elements</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Forms</a>
                                </li>
                                <li class="breadcrumb-item"><a href="general-elements-bootstrap.html">General Elements</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                    <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Input Types</h5>
                                <div class="f-right">
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>
                                </div>
                            </div>

<div class="card-block">
<form method="POST" action=" {{ route('students.store')}} ">

    {!! csrf_field() !!}

<div class="form-group col-md-3">
    <label for="exampleInputEmail1" class="form-control-label">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="nombres" value="{{ old('nombres')}}">

    {!! $errors->first('nombres','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
    <label for="exampleInputEmail1" class="form-control-label">apellidoPaterno</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="apellidoPaterno" value="{{ old('apellidoPaterno')}}">

    {!! $errors->first('apellidoPaterno','<span class=error>:message</span>')!!}
</div>
 
 
<div class="form-group col-md-3">
    <label for="exampleInputPassword1" class="form-control-label">apellidoMaterno</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="apellidoMaterno" value="{{ old('apellidoMaterno')}}">

        {!! $errors->first('apellidoMaterno','<span class=error>:message</span>')!!}
</div>
 
<div class="form-group col-md-3">
    <label for="exampleInputPassword1" class="form-control-label">Email</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="email" value="{{ old('email')}}">

        {!! $errors->first('email','<span class=error>:message</span>')!!}
</div>
 
<div class="form-group col-md-3">
    <label for="exampleInputPassword1" class="form-control-label">dni</label>
        <input type="number" class="form-control" id="exampleInputPassword1" placeholder=""  name="dni" value="{{ old('dni')}}">

        {!! $errors->first('dni','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
    <label for="exampleInputPassword1" class="form-control-label">sexo</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="sexo" value="{{ old('sexo')}}">

        {!! $errors->first('sexo','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
    <label for="example-date-input" class="form-control-label">Date</label>
    
        <input class="form-control" type="date" value="{{ old('fecha_nacimiento')}}" id="example-date-input" name="fecha_nacimiento">

        {!! $errors->first('fecha_nacimiento','<span class=error>:message</span>')!!}
    
</div>

<div class="form-group col-md-3">
    <label for="exampleInputPassword1" class="form-control-label">direccion</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="direccion" value="{{ old('direccion')}}">

        {!! $errors->first('direccion','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-6">
    <label for="exampleInputPassword1" class="form-control-label">distrito</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="distrito" value="{{ old('distrito')}}">

        {!! $errors->first('distrito','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-6">
    <label for="exampleInputPassword1" class="form-control-label">departamento</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="departamento" value="{{ old('departamento')}}">

        {!! $errors->first('departamento','<span class=error>:message</span>')!!}
</div>

<div class="col-md-3">
	
	<input class="btn btn-success waves-effect waves-light m-r-30" type="submit" name="Enviar">
</div>


</form>
</div>
</div>
</div>
    </div>
    </div>
    </div>
{{-- <p><label for="name">
    Nombre

    <input class="form-control" type="text" name="name" value="{{ old('name')}}">

    {!! $errors->first('name','<span class=error>:message</span>')!!}
</label></p>

<p><label for="email">
    Email
    <input class="form-control" type="text" name="email" value="{{ old('email')}}">

    {!! $errors->first('email','<span class=error>:message</span>')!!}
</label></p>



<p><label for="password">
    password
    <input class="form-control" type="password" name="password" value="{{ old('password')}}">

    {!! $errors->first('password','<span class=error>:message</span>')!!}
</label></p>


<p><label for="role">
    role
    <input class="form-control" type="text" name="role_id" value="{{ old('role_id')}}">

    {!! $errors->first('role_id','<span class=error>:message</span>')!!}
</label></p> --}}




@stop