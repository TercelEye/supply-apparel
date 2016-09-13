	@extends('layouts.admin')
	@section('admin_content')
	<h2>Categories <a href="{{ url('admin/category/create') }}" class="btn btn-sm btn-success">New</a></h2>
    		<table class="table table-bordered table-striped">
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Product Type</th>
				<th></th>
			</tr>

			@foreach($categories_list as $row)
				<tr>
					<td>{{ $row->id }}</td>
					<td>{{ $row->title }}</td>
					<td>{{ $row->type->name }}</td>
					<td><a href="{{ url("admin/category/".$row->id."/edit") }}" class="btn btn-success btn-sm">Edit</a></td>
				</tr>
			@endforeach
		</table>

		{{ $categories_list->links() }}
@stop			