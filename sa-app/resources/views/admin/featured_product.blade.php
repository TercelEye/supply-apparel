@extends('layouts.admin')

@section('admin_content')

        <h2>Featured Product</h2>
            <div class="panel panel-default">
                <div class="panel-heading">Product</div>

                <div class="panel-body">
                		<form method="post">

                     {{ csrf_field() }}

                			<div class="form-group">
                				<label>Product</label>
                				<input type="text" class="form-control product_select" required>
                        <input type="hidden" name="product_id" class="product_id">
                			</div>
                      <div class="form-group">
                      <input type="submit" name="save" class="btn btn-success" value="Mark as Featured
">
                      </div>

                			
                		</form>
	                 <div id="log"></div>


                   <table class="table table-bordered table-striped product_details" style="display: none;">

  <tr>
    <td>Product ID </td>
    <td>:</td>
    <td id="pd_id">#</td>
  </tr>
  
  <tr>
    <td>Title </td>
    <td>:</td>
    <td id="pd_title"></td>
  </tr>

  <tr>
    <td>Shop </td>
    <td>:</td>
    <td id="pd_seller"></td>
  </tr>


</table>


                </div>
            </div><!-- end panel -->

            <table class="table table-bordered table-striped">
                  <tr>
                    <td>#</td>
                    <td>Product Title</td>
                    <td>Shop</td>
                    <td></td>
                  </tr>
                @foreach($featured_products as $row)
                  <tr>
                    <td>{{$row->id}}</td>
                    <td><a href="{{url('product/'.$row->product->slug)}}" target="_blank"> {{$row->product->title}}</a></td>
                    <td>{{$row->product->shop->shop_name}}</td>
                    <td>
                    <form method="post" action="{{url('admin/featured-product/delete')}}">
                     {{ csrf_field() }}
                      <input type="hidden" value="{{$row->id}}"  name="id">
                      <input type="submit" name="delete" value="Remove" class="btn btn-danger btn-sm">
                    </form>
                    </td>
                  </tr>
                @endforeach
            </table>



@stop


@push('scripts')

<script>
  $( function() {
    function genarate_table( item ) {
      $('#pd_id').html(item.id)
      $('#pd_title').html(item.value)
      $('#pd_seller').html(item.seller)
      $('.product_details').fadeIn('slow');
    }
  // $('.product_details').fadeOut('fast');
    $( ".product_select" ).autocomplete({

      source: "{{ url('admin/ajax/get-products')}}",
      minLength: 2,
      select: function( event, ui ) {
        $('.product_id').val(ui.item.id)
        genarate_table(ui.item);
      }
    });
  } );
  </script>

  @endpush