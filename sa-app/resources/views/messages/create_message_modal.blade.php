<!-- Modal -->
<div class="modal fade" id="contact_seller" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-contenteee">
     <form method="post" action="{{url('product/'.$product->slug.'/contact-seller')}}">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ask  seller a question</h4>
      </div>
      <div class="modal-body">
         
            <!-- Subject Form Input -->
              <div class="form-group">
                  {!! Form::label('subject', 'Subject', ['class' => 'control-label']) !!}
                  {!! Form::text('subject', $product->title, ['class' => 'form-control']) !!}
              </div>

              <!-- Message Form Input -->
              <div class="form-group">
                  {!! Form::label('message', 'Message', ['class' => 'control-label contact_seller_msg']) !!}
                  {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
              </div>

          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="contact_seller_submit" class="btn  btn-red">Send Message</button>
      </div>
      </form>
    </div>
  </div>
</div>

@push('scripts')
<!-- gallery hear End -->
<script>
    $("#contact_seller_submit").click(function(e) {
        e.preventDefault();
        var form = $(this).closest('form');
         var $btn = $(this).button('loading')

      
    $.ajax({
        url     : form.attr("action"),
        type    : form.attr("method"),
        data    : form.serialize(),
        dataType: "json",
        success : function ( json ) {
            $btn.button('reset')
            toastr.success( json.message , "" ); 
            $("#contact_seller").modal('hide');
            $('.contact_seller_msg').val('');
        },
        error   : function ( jqXhr, json, errorThrown ) 
        {
            $btn.button('reset')
             if(jqXhr.status  ==0) {
                  toastr.error( 'could not connect to server' , "Connection Error " );
             }
            var errors = jqXhr.responseJSON.error;
            var errorsHtml= '';
            $.each( errors, function( key, value ) {
                errorsHtml += '<li>' + value + '</li>'; 
            });
            toastr.error( errorsHtml , "Validation Error " );
        }
    })
    .done(function(response){})
    .fail(function( jqXHR, json ) {});

       
      
});
</script>
@endpush