@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <h2>{{ $category->title }}</h2>
            <div class="panel panel-default">
                <div class="panel-heading">Category Edit</div>

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

               		{!! Form::model($category, ['action' => ['CategoryController@update',$id ]] ) !!}
                    	@include("admin.category.form_fields")
                        <input type="hidden" name="_method" value="PATCH">
                    	<button class="btn btn-success" type="submit">Save</button>
                        <a href="" class="btn btn-danger">Close</a>
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div><!--- end row -->
</div>
@endsection