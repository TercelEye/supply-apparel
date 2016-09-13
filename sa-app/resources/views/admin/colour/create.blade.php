@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <h2>Colours</h2>
            <div class="panel panel-default">
                <div class="panel-heading">New Colour </div>

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


               		{!! Form::model($colour, ['action' => 'ColourController@store']) !!}
                    	@include("admin.colour.form_fields")
                    	<button class="btn btn-success" type="submit">Add new Colour!</button>
                           <a href="{{ url('admin/colour') }}" class="btn btn-danger">Close</a>
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div><!--- end row -->
</div>
@endsection