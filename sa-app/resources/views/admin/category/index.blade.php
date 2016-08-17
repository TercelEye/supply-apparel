@extends('layouts.app')

@section('content')

    <div class="row">
    	<div class="col-md-12">
    		
    		<table class="table table-bordered table-striped">
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Created at</th>
				<th>Updated at</th>
				<th></th>
			</tr>

			@foreach($categories_list as $row)
				<tr>
					<td>{{ $row->id }}</td>
					<td>{{ $row->title }}</td>
					<td>{{ $row->created_at->format("M j, Y, g:i a") }}</td>
					<td>{{ $row->updated_at->format("M j, Y, g:i a") }}</td>
					<td><a href="{{ url("category/".$row->id."/edit") }}" class="btn btn-success btn-sm">Edit</a></td>
				</tr>
			@endforeach

			</table>

    	</div><!-- end col -->
     </div>

</div><!-- end container -->


@endsection