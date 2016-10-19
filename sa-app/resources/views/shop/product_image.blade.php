@extends('layouts.app')


@section('content')
<main class="add_product_step_2">
    <section class="section_1">
        <div class="container" style="">
            <div class="row">
            <h2>Product Images</h2>
<form  id="fileploader" class="dropzone">
 {{ csrf_field() }}
  <div class="fallback">
    <input name="image" type="file" multiple />
  </div>
</form>
<br>
<div class="product-image-list"></div>	

<form action="{{url('seller/product/publish/'.$product->slug)}}" method="post">
 {{ csrf_field() }}
<div class="buttons_block">
	<button type="submit" name="submit" value="publish" class="btn_pusblish">Publish</button>
	<button type="submit" name="submit" value="publish-and-add" class="btn_add_publish">Publish & Add Another Apparel</button>
   
</div>
</form>
            </div><!-- end row -->
        </div><!--- end conteiner -->
    </section><!-- end section -->
</main>
@endsection

@push('scripts')

<link rel="stylesheet" type="text/css" href="{{ url('lib') }}/select2-4.0.3/dist/css/select2.min.css">
   <script src="{{ url('lib') }}/select2-4.0.3/dist/js/select2.min.js"></script>

<link rel="stylesheet" type="text/css" href="{{ url('lib/dropzone-master/dist/min/dropzone.min.css') }}">
<script type="text/javascript" src="{{ url('lib/dropzone-master/dist/min/dropzone.min.js') }}"></script>
<script type="text/javascript">

Dropzone.options.fileploader = {
	url:'{{ url('seller/product/imageupload/'.$product->slug) }}',
  paramName: "image", // The name that will be used to transfer the file
  maxFilesize: 2, // MB
  maxfilesreached:function(){
	//toastr.error('Image uploaded');
  },
  accept: function(file, done) {
   
    
     done();
  },
  complete:function(){
  	load_image_list();
	toastr.success('Image uploaded');
  }
};
$(document).ready(function(){
	 load_image_list();
})
function load_image_list(){
	$('.product-image-list').load("{{ url('seller/product/image-list/'.$product->id) }}",function (){
		  $(".color_select").select2({
   		  placeholder:"Select Color",
   		  allowClear: true,
		})
 		
	});
}
function delete_image(id){
	$.post( "{{ url('seller/product/delete-image')}}/"+id, { delete: "{{uniqid()}}" })
  .done(function( data ) {
    	$('.image_id_'+id).fadeOut('fast');
  });
}

function save_product_colour(e){
	var product_id = $(e).data('product_id');
	var image_id = $(e).data('image_id');
	var colour_id = $(e).closest('.image-box').find('.color_select').val()
	$.post( "{{ url('seller/store-product-color/')}}/"+image_id, { colour_id:colour_id, image_id: image_id })
	  .done(function( data ) {
	    	toastr.success('Color saved for image');
	  });
}


</script>

@endpush