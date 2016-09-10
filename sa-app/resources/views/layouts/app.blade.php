<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Supply </title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link href="{{ url('assets') }}/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('assets') }}/css/style.css" rel="stylesheet">
    <link href="{{ url('assets') }}/libs/toastr-master/build/toastr.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ url('lib') }}/zoom/eagle.gallery/eagle.gallery.min.css">

    

    <style type="text/css">
        .wishlist_add.active {
            opacity: 1 !important;
        }
    </style>
</head> 
<body>
@include("layouts.header")
    @yield("content")
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-xs-4 menu_quick_links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Size Guide</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Returns & Exchanges</a></li>
                </ul>
            </div>
            <div class="col-sm-2  col-xs-4 menu_browsing">
                <h3>Browsing Menu</h3>
                <ul>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Kids</a></li>
                    <li><a href="#">Boutiques</a></li>
                    <li><a href="#">Look Books</a></li>
                </ul>
            </div>
            <div class="col-sm-2 col-xs-4 menu_help">
                <h3>Help</h3>
                <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Track Orders</a></li>
                    <li><a href="#">FAQ's</a></li>
                    <li><a href="#">Shipping & Delivery</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-sm-2 col-xs-4 menu_social">
                <h3>Connect with Us</h3>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Google +</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Pinterest</a></li>
                </ul>
            </div>
            <div class="col-sm-4 col-xs-8  menu_payments_newsletter">
                <h3>Newsletter Sign Up</h3>
                <div class="newsletter_block">
                    <p>Subscribe to our newsletter to get the latest news about
                        our sales and promotions</p>
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Your Email Address"/>
                        <input type="submit" value="Submit"/>
                    </form>
                </div>
                <div class="payments_block">
                    <div class="payment visa"></div>
                    <div class="payment mastercard"></div>
                    <div class="payment paypal"></div>
                </div>
            </div>
        </div>
    </div>
</footer>


{{-- <script src="{{ url('assets') }}/libs/jquery/jquery.min.js"></script> --}}
<script src="{{ url('lib') }}/jquery-1.10.2.js"></script>
<script src="{{ url('lib') }}/zoom/eagle.gallery/eagle.gallery.min.js"></script>

<script src="{{ url('assets') }}/libs/jquery_ui/jquery-ui.min.js"></script>
<script src="{{ url('assets') }}/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ url('assets') }}/libs/date_picker/picker.js"></script>
<script src="{{ url('assets') }}/libs/semantic/components/dropdown.min.js"></script>
<script src="{{ url('assets') }}/libs/semantic/components/transition.min.js"></script>
<script src="{{ url('assets') }}/js/custom.js"></script>




<script src="{{ url('assets') }}/libs/toastr-master/build/toastr.min.js"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

function load_cart(open_cart = false){
    $('.cart_block').load('{{url('my-cart')}}',function(){
        var cart_total_items = $('.cart_total_items').val();
        $('.cart_icon').attr('data-product',cart_total_items)
        
        if(open_cart){
             $('.cart_modal').addClass('open');    
        }
    });

   
    
}

//delete cart
function delete_cart(item){
    
    $.post('{{url('cart-remove-item')}}', {item_id: item}, function(data, textStatus, xhr) {
        load_cart(true);
       
    });
}

//Cart open
    $('.icons .cart_open_trigger').on('click', function () {
        $('.cart_block .cart_modal').toggleClass('open');
    });
 $(document.body).on('click', '.cart_modal .close ,.cart_modal .back' ,function(e){
    e.preventDefault();
    $('.cart_block .cart_modal').removeClass('open');
  });


    $('.cart_modal .close').on('click', function () {
       
       
    });

</script>
@stack('scripts')
<script type="text/javascript">
    $('#login-form button[type=submit]').click(function(e){
 

    var $btn = $(this).button('loading');

    e.preventDefault();

    if($('#login-form #login--email').hasClass('has-error')){
        $('#login-form #login--email').removeClass('has-error');
    }

    if($('#login-form #login--password').hasClass('has-error')){
        $('#login-form #login--password').removeClass('has-error');
    }

    var form = jQuery(this).parents("form:first");
    var dataString = form.serialize();
    var formAction = form.attr('action');

    $.ajax({
        type: "POST",
        url : formAction,
        data : dataString,
        success : function(json){
            $btn.button('reset');
            if(json.auth == true){
                //login success
                toastr.success(json.message)
                location.reload();
                
           }else {
                //login failed
                toastr.error(json.message,'Error!')
                $('#login-form .email_block').addClass('has-error');
                $("#login-form input[name='password']'").val("sadasdas");
                $('#login-form .password_block').addClass('has-error');
                    
           }

        },
        error : function(data){
         

            setTimeout(
                function()
                {

                    $btn.button('reset');

                }, 1500);

        }

    },"json");
});

</script>

<script type="text/javascript">

$(document.body).on('click', '.wishlist_add .clickable_block' ,function(){


   // jQuery(".wishlist_add .clickable_block").click(function(event) {
       //alert($(this).parent('.wishlist_add').toggleClass('active'));
       var icon = $(this);
       
       var id = $(this).attr('data-id');
       
       $.post("{{url("favorites")}}/"+id, { secure_id: "{{uniqid()}}", })
          .done(function( response ) {
              if(response.guest == true){
                $("#loginModal").modal('show');
              }else{
                $(icon).parent('.wishlist_add').toggleClass('active');
             }
          });
    });


// Javascript to enable link to tab
var url = document.location.toString();
if (url.match('#')) {
    $('.nav-tabs a[href="#' + url.split('#')[1] + '"]').tab('show');
} 

// Change hash for page-reload
$('.nav-tabs a').on('shown.bs.tab', function (e) {
    // window.location.hash = e.target.hash;
})




</script>


  
</body>
</html>
