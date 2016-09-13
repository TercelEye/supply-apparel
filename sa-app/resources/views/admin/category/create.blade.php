@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <h2>Categories</h2>
            <div class="panel panel-default">
                <div class="panel-heading">New Category</div>

                <div class="panel-body">

	                @if (count($errors) > 0)
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif


               		{!! Form::model($category, ['action' => 'CategoryController@store']) !!}
                    	@include("admin.category.form_fields")
                    	<button class="btn btn-success" type="submit">Add new Category!</button>
                        <a href="{{ url('admin/category') }}" class="btn btn-danger">Close</a>
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div><!--- end row -->
</div>
@endsection

@push('scripts')

<script type="text/javascript">
  function load_category(type_id){

    $(".select-category").load('{{ url('admin/category-load-by-type') }}',{ type_id: type_id} ,function(){
      
    });
    
  }

</script>

@endpush