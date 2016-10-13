@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <h2>Featured Product</h2>
            <div class="panel panel-default">
                <div class="panel-heading">Make Product Featured</div>

                <div class="panel-body">
                		<form method="post">
                			<div class="form-group">
                				<label>Product</label>
                				<input type="text" name="product_id" class="product_id">
                			</div>

                			<div id="log"></div>
                		</form>
	        
                </div>
            </div>
        </div>
    </div><!--- end row -->
</div>
@stop


@push('scripts')

<script>
  $( function() {
    function log( message ) {
      $( "<div>" ).text( message ).prependTo( "#log" );
      $( "#log" ).scrollTop( 0 );
    }
 
    $( ".product_id" ).autocomplete({
      source: "{{ url('admin/ajax/get-products')}}",
      minLength: 2,
      select: function( event, ui ) {
        log( "Selected: " + ui.item.value + " aka " + ui.item.id );
      }
    });
  } );
  </script>

  @endpush

  [{"id":"Podiceps nigricollis","label":"Black-necked Grebe","value":"Black-necked Grebe"},{"id":"Nycticorax nycticorax","label":"Black-crowned Night Heron","value":"Black-crowned Night Heron"},{"id":"Tetrao tetrix","label":"Black Grouse","value":"Black Grouse"},{"id":"Limosa limosa","label":"Black-tailed Godwit","value":"Black-tailed Godwit"},{"id":"Chlidonias niger","label":"Black Tern","value":"Black Tern"},{"id":"Lanius collurio","label":"Red-backed Shrike","value":"Red-backed Shrike"},{"id":"Branta leucopsis","label":"Barnacle Goose","value":"Barnacle Goose"},{"id":"Larus marinus","label":"Great Black-backed Gull","value":"Great Black-backed Gull"},{"id":"Corvus monedula","label":"Western Jackdaw","value":"Western Jackdaw"},{"id":"Larus fuscus","label":"Lesser Black-backed Gull","value":"Lesser Black-backed Gull"},{"id":"Larus ridibundus","label":"Black-headed Gull","value":"Black-headed Gull"},{"id":"Turdus merula","label":"Common Blackbird","value":"Common Blackbird"}]