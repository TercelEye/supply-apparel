<?php 
    $column_item_classes = "col-md-3 col-sm-4 col-xs-6";
    if(isset($item_type)){
        switch ($item_type) {
            case 'filter':{ $column_item_classes = "col-md-4 col-sm-6 col-xs-12"; }
            break;
            
            default:{ $column_item_classes = "col-md-3 col-sm-4 col-xs-6"; }
            break;
        }
        
    }
?>
<div class="row">
<div class="col-md-12">
 @foreach($products as $product)

<?php 
$product_image = (isset($product->images->first()->name)? url($product->images->first()->name) : url("assets/img/No-image-found.jpg")); 
?>

 <div class="item {{$column_item_classes}}">
    <div class="item_block">
   

        <div class="item_header">

            <a href="{{ url('store/'.$product->shop->shop_slug) }}"><i
                   class="item_icon"></i><span>{{$product->shop->shop_name }}</span></a>
     </div>
        <div class="item_body" style="background-image:url({{$product_image }})">
            <div class="wishlist_add {{ ($product->user_favorites->contains($product->id)?"active":"") }}">
                <span class="heart"></span>
                <a data-id="{{ $product->id }}" class="clickable_block"
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
@endforeach
</div><!-- end col md -->
</div><!-- end row -->

@if(isset($is_pagination))
    <div class="row">
    <div class="col-md-12">
        {{$products->appends($_REQUEST)->links()}}   
        </div>                    
    </div>
@endif
