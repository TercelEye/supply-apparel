 @foreach($products as $product)
 <div class="item col-md-3 col-sm-4 col-xs-6">
    <div class="item_block">
   

        <div class="item_header">

            <a href="#"><i
                   class="item_icon"></i><span>{{$product->shop->shop_name }}</span></a>
     </div>
        <div class="item_body" style="background-image:url({{url($product->images->first()->name)}})">
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
            <div class="name_block">{{$product->title }}</div>
            <div class="price_block">${{ $product->price }}</div>
        </div>
    </div>
</div>
@endforeach