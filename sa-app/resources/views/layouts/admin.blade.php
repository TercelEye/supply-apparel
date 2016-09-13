@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row">
    	<div class="col-md-4">
    		@include("admin.sidebar")
    	</div><!-- end col -->
    	<div class="col-md-8">
	 		@yield("admin_content")
    	</div><!-- end col -->
     </div>

</div><!-- end container -->


@endsection