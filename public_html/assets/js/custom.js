/* Login & Register */
$(document).ready(function() {
	/*$('#login').click(function() {
		$('.register-box').hide();
		$('.login-box').show();
		$('.overlay').show();
	});*/
	$('#signup, #user_reg').click(function() {
		$('.login-box').hide();
		$('#user_reg').show();
		$('.overlay').show();
	});
	$('#signup_seller, #seller_reg').click(function() {
		$('.login-box').hide();
		$('#seller_reg').show();
		$('.overlay').show();
	});
	
	$('#pass').click(function() {
		$('.login-box').hide();
		$('.register-box').hide();
		$('.overlay').show();
		$('.pass-box').show();
	});
	$('.overlay, .exit').click(function() {
		$('.login-box').hide();
		$('.register-box').hide();
		$('.overlay').hide();
		$('.pass-box').hide();	
	});
	$('.step-1 .submit').click(function(e) {
		$(".step-1 form").submit(function(e){
			e.preventDefault();
		});
		$('.step-1').hide();
		$('.step-2').show();
		$('.step-3').hide();
		$('.step-4').hide();
	});	
	$('.step-2 .submit').click(function(e) {
		$(".step-2 form").submit(function(e){
			e.preventDefault();
		});
		$('.step-1').hide();
		$('.step-2').hide();
		$('.step-3').show();
		$('.step-4').hide();
	});
	$('.step-3 .submit').click(function(e) {
		$(".step-3 form").submit(function(e){
			e.preventDefault();
		});
		$('.step-1').hide();
		$('.step-2').hide();
		$('.step-3').hide();
		$('.step-4').show();
	});	
 /*Checkout*/	
	$('.checkout-box .step-2 .submit').click(function(e) {
		$(".checkout-box .step-2 form").submit(function(e){
			e.preventDefault();
		});
		$('.checkout-box .step-1').hide();
		$('.checkout-box .step-2').hide();
		$('.checkout-box .step-3').show();
		$('.checkout-box .step-4').hide();
	});
	$('.checkout-box .step-3 .submit').click(function(e) {
		$(".checkout-box.step-3 form").submit(function(e){
			e.preventDefault();
		});
		$('.checkout-box .step-1').hide();
		$('.checkout-box .step-2').hide();
		$('.checkout-box .step-3').hide();
		$('.checkout-box .step-4').show();
	});	
});

/*My account menu*/
$(document).ready(function() {
	$('#option-bp').click(function() {
		$('.settings-option').removeClass('active');
		$('#option-bp').addClass('active');
		$('#boutique-profile').show();
		$('#change-password').hide();
		$('#upgrade-package').hide();
		$('#delete-account').hide();
	});
	$('#option-cp').click(function() {
		$('.settings-option').removeClass('active');
		$('#option-cp').addClass('active');
		$('#boutique-profile').hide();
		$('#change-password').show();
		$('#upgrade-package').hide();
		$('#delete-account').hide();
	});
	$('#option-up').click(function() {
		$('.settings-option').removeClass('active');
		$('#option-up').addClass('active');
		$('#boutique-profile').hide();
		$('#change-password').hide();
		$('#upgrade-package').show();
		$('#delete-account').hide();
	});
	$('#option-da').click(function() {
		$('.settings-option').removeClass('active');
		$('#option-da').addClass('active');
		$('#boutique-profile').hide();
		$('#change-password').hide();
		$('#upgrade-package').hide();
		$('#delete-account').show();
	});
});
	
/*Qnt increment*/
jQuery(document).ready(function(){
    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});

/*Close checkout*/
jQuery(document).ready(function(){
	$('#cartclose').click(function() {
		$('#cart-lightbox').hide('fast');
	});
});
$("#sub-category-pick").click(function () {
    $header = $(this);
    //getting the next element
    $content = $header.next();
    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    $content.slideToggle(350, function () {
        //execute this after slideToggle is done
        //change color of header based on visibility of content div
        // $header.text(function () {
            //change color based on condition
            return $content.is(":visible") ? $header.css("color", "black") : $header.css("color", "lightgrey");
        // });
    });
});

$("#brands-pick").click(function () {
    $header = $(this);
    //getting the next element
    $content = $header.next();
    //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
    $content.slideToggle(350, function () {
        //execute this after slideToggle is done
        //change color of header based on visibility of content div
        // $header.text(function () {
            //change color based on condition
            return $content.is(":visible") ? $header.css("color", "black") : $header.css("color", "lightgrey");
        // });
    });
});
/*Toggle reply review*/
$(".reply").click(function(){
    $(".review-reply").toggle('fast');
});

/*pick coloer*/
$("#single-product-colour .colour").click(function(){
    $(this).addClass("active");
    $(this).siblings(".colour").removeClass("active");
});

/*pick size*/
$("#single-product-size .size").click(function(){
    $(this).addClass( "active");
    $(this).siblings(".size").removeClass("active");
});


/*dashboard tabs*/
$(".dashmenu").click(function(){
    var id = $(this).attr("id");
    console.log(id);
    $(this).addClass( "active");
    $(this).siblings().removeClass( "active");
    if(id == "btq"){
        $("#myacc-sec-btq").show()
        $("#myacc-sec-mes").hide();
        $("#myacc-sec-ord").hide();
        $("#myacc-sec-set").hide();
    }else if(id == "ord"){
        $("#myacc-sec-btq").hide();
        $("#myacc-sec-mes").hide();
        $("#myacc-sec-ord").show()
        $("#myacc-sec-set").hide();
    }else if(id == "mes"){
        $("#myacc-sec-btq").hide();
        $("#myacc-sec-mes").show()
        $("#myacc-sec-ord").hide();
        $("#myacc-sec-set").hide();
    }else if(id == "set"){
        $("#myacc-sec-btq").hide();
        $("#myacc-sec-mes").hide();
        $("#myacc-sec-ord").hide();
        $("#myacc-sec-set").show()
    }
});

$("#b-type .btypesel").click(function(){
    $(this).addClass( "active");
    $(this).siblings(".btypesel").removeClass("active");
});

$("#b-forw .bforwsel").click(function(){
    $(this).addClass( "active");
    $(this).siblings(".bforwsel").removeClass("active");
});

