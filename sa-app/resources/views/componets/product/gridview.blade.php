 @foreach($products as $product)

<?php 
$product_image = (isset($product->images->first()->name)? url($product->images->first()->name) : url("assets/img/No-image-found.jpg")); 
?>

 <div class="item col-md-3 col-sm-4 col-xs-6">
    <div class="item_block">
   

        <div class="item_header">

            <a href="#"><i
                   class="item_icon"></i><span>{{$product->shop->shop_name }}</span></a>
     </div>
        <div class="item_body" style="background-image:url({{$product_image }})">
            <div class="wishlist_add {{ ($product->user_favorites->contains($product->id)?"active":"") }}">
                <span class="heart"></span>
                <a data-id="{{ $product->id }}" class="clickable_block"
                      title="Add to wishlist"></a>
            </div>
        </div>
        <div class="item_footer">
            <div class="rewiew_block">
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <p>(39 Reviews)</p>
            </div>
            <a href="{{ url('product/'.$product->slug) }}"><div class="name_block">{{$product->title }}</div></a>
            @if($product->is_sale ==1)
                <div class="price_block">${{ $product->price_discounts }} <s> ${{ $product->price }}</s>  </div>
            @else 
                <div class="price_block">${{ $product->price }}</div>
            @endif
        </div>
    </div>
</div>
@endforeach