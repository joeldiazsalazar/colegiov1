@extends('layouts.admin')

@section('contenido')


<h1>Usuarios</h1>

<table class="table">
	

<thead>
	<tr>
	<th>ID</th>
	<th>Nombre</th>
	<th>Display_name</th>
	<th>Description</th>
	<th>Acciones</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($roles as $rol)
<tr>
	<td>{{ $rol->id }}</td>

	<td>{{ $rol->name }}</td>

	<td>{{ $rol->display_name }}</td>

	<td>{{ $rol->description}}</td>

	<td>
		<a class="btn btn-info btn-xs" href="{{ route('roles.edit', $rol->id) }}">Editar</a>
				<form style="display: inline;" method="POST" action=" {{ route('roles.destroy', $rol->id) }}">

					{!! csrf_field() !!}
					{!! method_field('DELETE') !!}
					
					<button class="btn btn-danger btn-xs" type="submit">Eliminar</button>

				</form>
	</td>

</tr>
	@endforeach
</tbody>
</table>
@stop