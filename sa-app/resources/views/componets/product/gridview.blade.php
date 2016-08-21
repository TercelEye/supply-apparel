 @foreach($products as $product)
 <div class="item col-md-3 col-sm-4 col-xs-6">
    <div class="item_block">
        <div class="item_header">
            <a href="#"><i
                    class="item_icon"></i><span>{{$product->shop->shop_name }}</span></a>
        </div>
        <div class="item_body">
            <div class="wishlist_add">
                <span class="heart"></span>
                <span class="clickable_block"
                      title="Add to wishlist"></span>
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