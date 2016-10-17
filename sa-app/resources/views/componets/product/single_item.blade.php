<?php 
$product_image = (isset($product->images->first()->name)? url($product->images->first()->name) : url("assets/img/No-image-found.jpg")); 
?>


<div class="item col-md-3 col-sm-4 col-xs-6">
    <div class="item_block">
   

        <div class="item_header">

            <a href="{{ url('store/'.$product->shop->shop_slug) }}"><i
                   class="item_icon"></i><span>{{$product->shop->shop_name }}</span></a>
     </div>
        <div class="item_body" {{-- style="background-image:url({{$product_image }})" --}}>
             <a href="{{ url('product/'.$product->slug) }}"><img src="{{$product_image }}" style="width: 100%;height: 220px;" /></a>
            <div class="wishlist_add {{ ($product->user_favorites->contains($product->id)?"active":"") }}">
                <span class="heart"></span>
                <a data-id="{{ $product->slug }}" class="clickable_block"
                      title="Add to wishlist"></a>
            </div>
        </div>
         <a href="{{ url('product/'.$product->slug) }}">
        <div class="item_footer">
            <div class="rewiew_block">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <p>(39 Reviews)</p>
            </div>
           <div class="name_block">{{$product->title }}</div>
            @if($product->is_sale ==1)
                <div class="price_block">${{ $product->price_discounts }} <s> ${{ $product->price }}</s>  </div>
            @else 
                <div class="price_block">${{ $product->price }}</div>
            @endif
        </div><!-- end footer -->
        </a>
    </div>
</div>