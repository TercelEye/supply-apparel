<?php 
$colour = \App\Colour::pluck('name','id');
$size = \App\Size::pluck('title','id'); 
//dd($colour);
?>
@if(Cart::totalItems(true)>0)
<div class="container">
    <div class="cart_modal">
        <button aria-label="Close" class="close" type="button">
            <span aria-hidden="true">
                ×
            </span>
        </button>
        <div class="cart_header">
            <i class="cart fa fa-shopping-cart">
            </i>
        </div>
        <div class="cart_body">
            <div class="cart_elements">
                <div class="t_head">
                    <span>
                        Your Order
                    </span>
                    <span>
                        Price
                    </span>
                </div>
                @foreach (Cart::contents() as $item)
                <div class="t_body" id="item_{{ $item->identifier}}">
                    <div class="name">
                        <a href="javascript:void(0)" onclick="delete_cart('{{ $item->identifier}}')" style="color:red;"><i class="glyphicon glyphicon-remove"></i></a>
                        <div class="photo" style="background-image: url('{{url($item->image)}}');">
                        </div>
                        <div class="product_name">
                            {{$item->name}}  x ( {{ $item->quantity }} Qty )
                                 

                        @if ($item->hasOptions()) 
                                @if (isset($item->options['color']) && isset($colour[$item->options['color']]))
                            <br>
                                Color : {{  $colour[$item->options['color']] }}
                                @endif
                                 @if (isset($item->options['size']) && isset($size[$item->options['size']]))
                                <br>
                                    Size : {{  $size[$item->options['size']] }}
                                 @endif

                        @endif
                                </br>
                            </br>
                        </div>
                    </div>
                    <div class="price">
                        ${{$item->price}}
                    </div>
                </div>
                @endforeach
            </div>
            <div class="total_price text-right">
                Total
                <span>
                    ${{Cart::total()}}
                </span>
            </div>
        </div>
        <div class="cart_footer">
            <a class="back" href="#">
                <i class="fa fa-angle-left">
                </i>
                <span>
                    Continue Shopping
                </span>
            </a>
            <a class="btn_checkout" href="#">
                Checkout
            </a>
        </div>
    </div>
</div>
@else
    <div class="container">
    <div class="cart_modal">
        <button aria-label="Close" class="close" type="button">
            <span aria-hidden="true">
                ×
            </span>
        </button>
        <div class="cart_header">
            <i class="cart fa fa-shopping-cart">
            </i>
        </div>
         <div class="cart_body" style="text-align:center;">
          <h3 style="padding: 10px ; color:white;">your cart is empty</h3>
    </div>
  </div>  
@endif
<input class="cart_total_items" type="hidden" value="{{Cart::totalItems(true)}}"/>
