@extends('layouts.admin')

@section('admin_content')

        <h2>Featured Lookbooks</h2>
            <div class="panel panel-default">
                <div class="panel-heading">Lookbook</div>

                <div class="panel-body">
                		<form method="post">

                     {{ csrf_field() }}

                			<div class="form-group">
                				<label>Select lookbook</label>
                				<input type="text" class="form-control lookbook_select" required>
                        <input type="hidden" name="lookbook_id" class="lookbook_id">
                			</div>
                      <div class="form-group">
                      <input type="submit" name="save" class="btn btn-success" value="Mark as Featured
">
                      </div>

                			
                		</form>
	                 <div id="log"></div>


                   <table class="table table-bordered table-striped product_details" style="display: none;">


<tr>
  <td colspan="3" id="pd_cover_image"></td>
</tr>
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

  <tr>
    <td>Shop </td>
    <td>:</td>
    <td id="pd_shop"></td>
  </tr>


</table>


                </div>
            </div><!-- end panel -->

            <table class="table table-bordered table-striped">
                  <tr>
                    <td>#</td>
                    <td>Lookbook</td>
                    {{-- <td>email</td> --}}
                    <td></td>
                  </tr>
                @foreach($featured_lookbooks as $row)
                <?=print_r($row);?>
                  <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->title}}</td>
                    {{-- <td>{{$row->product->shop->shop_name}}</td> --}}
                    <td>
                    <form method="post" action="{{url('admin/featured-lookbook/delete')}}">
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
      $('#pd_shop').html(item.shop)
      $('#pd_cover_image').html('<img src="'+item.cover_image+'" class="img-responsive" />')

      $('.product_details').fadeIn('slow');
    }
  // $('.product_details').fadeOut('fast');
    $( ".lookbook_select" ).autocomplete({

      source: "{{ url('admin/ajax/get-lookbooks')}}",
      minLength: 2,
      select: function( event, ui ) {
        $('.lookbook_id').val(ui.item.id)
        genarate_table(ui.item);
      }
    });
  } );
  </script>

  @endpush