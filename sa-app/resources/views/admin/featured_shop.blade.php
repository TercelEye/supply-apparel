@extends('layouts.admin')

@section('admin_content')

        <h2>Featured Boutiques</h2>
            <div class="panel panel-default">
                <div class="panel-heading">Boutique</div>

                <div class="panel-body">
                		<form method="post">

                     {{ csrf_field() }}

                			<div class="form-group">
                				<label>Select boutique</label>
                				<input type="text" class="form-control shop_select" required>
                        <input type="hidden" name="shop_id" class="shop_id">
                			</div>
                      <div class="form-group">
                      <input type="submit" name="save" class="btn btn-success" value="Mark as Featured
">
                      </div>

                			
                		</form>
	                 <div id="log"></div>


                   <table class="table table-bordered table-striped product_details" style="display: none;">

  <tr>
    <td>Shop ID </td>
    <td>:</td>
    <td id="pd_id">#</td>
  </tr>
  
  <tr>
    <td>Boutique </td>
    <td>:</td>
    <td id="pd_title"></td>
  </tr>

  <tr>
    <td>Owner </td>
    <td>:</td>
    <td id="pd_owner"></td>
  </tr>


</table>


                </div>
            </div><!-- end panel -->

            <table class="table table-bordered table-striped">
                  <tr>
                    <td>#</td>
                    <td>Boutique</td>
                    {{-- <td>email</td> --}}
                    <td></td>
                  </tr>
                @foreach($featured_shops as $row)
                  <tr>
                    <td>{{$row->id}}</td>
                    <td><a href="{{url('store/'.$row->shop->shop_slug)}}" target="_blank"> {{$row->shop->shop_name}}</a></td>
                    {{-- <td>{{$row->product->shop->shop_name}}</td> --}}
                    <td>
                    <form method="post" action="{{url('admin/featured-shop/delete')}}">
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
      $('#pd_owner').html(item.owner)
      $('#pd_email_address').html(item.email_address)
      $('.product_details').fadeIn('slow');
    }
  // $('.product_details').fadeOut('fast');
    $( ".shop_select" ).autocomplete({

      source: "{{ url('admin/ajax/get-shops')}}",
      minLength: 2,
      select: function( event, ui ) {
        $('.shop_id').val(ui.item.id)
        genarate_table(ui.item);
      }
    });
  } );
  </script>

  @endpush