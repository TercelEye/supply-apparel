<div class="row">
	<div class="col-md-6">

					<form action="{{url('withdrawal/request')}}" method="post">
                                        <div class="form-group">
                                            <h3 class="text-left">Your Earnings</h3>
           									
           									 <label>Paypal Email</label>
                                            <input type="text" class="form-control" name="paypal_email" id="paypal_email"
                                                   placeholder="Your Paypal Email"/>
                                        </div>

                                          <div class="form-group">
                                            <label>Amount</label>
           									
                                            <input type="text" class="form-control" name="amount" id="amount"
                                                   placeholder="Amount"/>
                                        </div>
                                        <div class="buttons_block">
                                            <a href="#" id="withdrawal_submit" class="btn btn-success btn_save">Withdraw </a>
                                        </div>
                                    </form>


	 </div><!-- end col -->

	   <div class="col-md-6">
 <div class="pull-right">
            	<small>available balance</small>
            	<h2>${{ $fund->balance or 0 }}</h2>
            </div>
<div class="col-md-12">
 <div class="alert alert-info small">
            <p class="small"><strong>Note: </strong>Your first withdrawal is delayed for 15 business days for security reasons. </p>
            
            
            Withdrawals are processed twice a week, as long as the requests are lodged before:
           
            
            Additional fees may also be charged by third party gateways such as PayPal
            </div>

         </div><!-- end col -->
                                    </div>

</div>


@push('scripts')
<!-- gallery hear End -->
<script>
    $("#withdrawal_submit").click(function(e) {
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