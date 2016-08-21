@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Category</div>

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
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div><!--- end row -->

@endsection