@foreach($product->images->chunk(4) as $images) 
<div class="row">
	@foreach($images as $image)
	<div class="col-md-3 image-box image_id_{{$image->id}}">
		<img src="{{ url($image->name) }}" class="img-thumbnail">
		<br>
		<div style="border: solid 1px;
    display: inline-block;
    padding: 5px;
    width: 100%;
    text-align: center;">
    <div class="col-md-12" style="padding:0;">
		<div class="col-md-8">
			<select class="color_select input-sm form-control">
				<option></option>
				@foreach($colurs as $colour)
				<option style="width:5px;height:5px;background-color:{{$colour->hexa_code}}" value="{{$colour->id}}">{{$colour->name}} <div ></div></option>
				@endforeach
			</select>
		</div><!-- end col -->
		<div class="col-md-4" style="padding:0;">
			<a class="btn btn-success btn-sm" data-product_id = "{{$product->id}}" data-image_id= "{{$image->id}}" onclick="save_product_colour(this)"><i class="glyphicon glyphicon-floppy-disk"></i></a>
			<a class="btn btn-danger btn-sm" onclick="delete_image({{$image->id}})"><i class="glyphicon glyphicon-trash
" aria-hidden="true"></i></a>
		</div><!-- end col -->
	</div><!-- end row -->	
		</div><!-- footer-->
	</div>
	@endforeach
</div><!-- end row -->
@endforeach