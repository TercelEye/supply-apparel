	@extends('layouts.admin')
	@section('admin_content')
	<h2>Colours <a href="{{ url('admin/colour/create') }}" class="btn btn-sm btn-success">New</a></h2>
    		<table class="table table-bordered table-striped">
			<tr>
				<th>#</th>
				<th>Color Name</th>
				<th>Hexa code</th>
				<th></th>
			</tr>

			@foreach($colours as $row)
				<tr>
					<td>{{ $row->id }}</td>
					<td>{{ $row->name }}</td>
					<td>{{ $row->hexa_code }}</td>
					
					<td><a href="{{ url("admin/colour/".$row->id."/edit") }}" class="btn btn-success btn-sm">Edit</a></td>
				</tr>
			@endforeach

			</table>
@stop			