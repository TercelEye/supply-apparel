@extends('layouts.app')

@section('content')
<main class="womens_page">
<section class="section_1" >
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>My Wishlist</h2>
			</div>
		</div>
		<div class="row product_side" style="border:none;">
			@if(count($favorites)==0)
				<div class="alert alert-info">there is no item in whishlist</div>
			@endif

			@foreach($favorites as $favorite)
				@include('componets.product.single_item',array('product'=>$favorite->product))
			@endforeach
		</div>
	</div>
	</section>
</main>
@stop