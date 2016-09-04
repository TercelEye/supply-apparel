<?php 
$colour = \App\Colour::pluck('id','name');
$size = \App\Size::pluck('id','title'); 
?>
 <div class="container">
            <div class="cart_modal">
                <button type="button" class="close" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <div class="cart_header">
                    <i class="cart fa fa-shopping-cart"></i>
                </div>
                <div class="cart_body">
                    <div class="cart_elements">
                        <div class="t_head">
                            <span>Your Order</span>
                            <span>Price</span>
                        </div>
                        @foreach (Cart::contents() as $item) 
                        <div class="t_body">
                            <div class="name">
                                <div class="photo"></div>
                                <div class="product_name">{{$item->name}}  x {{ $item->quantity }}  <br>
                                @if ($item->hasOptions('color')) 
                                    Color : {{ (isset($colour[$item->options['color']]) ? $colour[$item->options['color']] :"" )}} <br>
                                @endif
                                    Size : {{ (isset($size[$item->options['size']])? $size[$item->options['size']] : "")}}
                                </div>
                            </div>
                            <div class="price">${{$item->price}}</div>
                        </div>
                        @endforeach
                    </div>
                    <div class="total_price text-right">Total<span>${{Cart::total()}}</span></div>
                </div>
                <div class="cart_footer">
                    <a href="#" class="back">
                        <i class="fa fa-angle-left"></i>
                        <span>Continue Shopping</span>
                    </a>
                    <a href="checkout_step_1.html" class="btn_checkout">Checkout</a>
                </div>
            </div>
        </div>
        <input type="hidden" class="cart_total_items" value="{{Cart::totalItems(true)}}">