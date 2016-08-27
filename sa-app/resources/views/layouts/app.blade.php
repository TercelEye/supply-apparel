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

<script src="{{ url('assets') }}/js/base-min.js"></script>
<script src="{{ url('assets') }}/libs/toastr-master/build/toastr.min.js"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
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
       $(this).parent('.wishlist_add').toggleClass('active');
       var id = $(this).attr('data-id');
       
       $.post("{{url("favorites")}}/"+id, { secure_id: "{{uniqid()}}", })
          .done(function( response ) {
              if(response.guest == true){
                $("#loginModal").modal('show');
              }
          });
    });

</script>

  
</body>
</html>
