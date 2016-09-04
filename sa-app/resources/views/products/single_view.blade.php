@extends('layouts.app')

@section('content')

<main class="product_page">
    <section class="section_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-offset-0">
                    <div class="row product_block_details">


<div class="col-md-8 products_gallery">
    @include('products.image-gallery',['images'=>$product->images])
</div><!-- end col -->

                        {{-- <div class="col-sm-2">
                            <div class="row">
                                <div class="photo_list">     
                                    <div class="photo p2" data-target="#product_carousel" data-slide-to="1"></div>
                                    <div class="photo p3" data-target="#product_carousel" data-slide-to="2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-5">
                            <div id="product_carousel" data-interval="false" class="carousel slide"
                                 data-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <div class="big_photo"></div>
                                    </div>
                                    <div class="item">
                                        <div class="big_photo"></div>
                                    </div>
                                    <div class="item">
                                        <div class="big_photo"></div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-md-4 col-sm-5 product_attributes">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="product_name_block">
                                        <div class="product_name">{{ $product->title }}</div>

             @if($product->is_sale ==1)
                <div class="product_price">${{ $product->price_discounts }} <s> ${{ $product->price }}</s>  </div>
            @else 
                <div class="product_price">${{ $product->price }}</div>
            @endif

                                       
                                    </div>
                                    <div class="product_boutique">
                                        <a href="boutique_page.html"><i
                                                class="item_icon"></i><span>{{ $product->shop->shop_name }}</span></a>
                                    </div>
                                    <div class="review_block">
                                        <span class="glyphicon glyphicon-star active"></span>
                                        <span class="glyphicon glyphicon-star active"></span>
                                        <span class="glyphicon glyphicon-star active"></span>
                                        <span class="glyphicon glyphicon-star active"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <p>(39 Reviews)</p>
                                    </div>
                                    <div class="product_desc">
                                       {{ $product->description }}
                                    </div>
                                    <form action="" method="post">
                                        @if(count($available_colours)>0)
                                        <div class="colour_block">
                                            <h4>Colour</h4>
                                            <div class="color_list product_color_list">
                                              @foreach($available_colours as $colour)

                                                <div class="color" style="background:{{$colour['hexa_code']}}" data-color-id="{{$colour['id']}}"></div>
                                              @endforeach  
                                                <input type="hidden" name="color" class="color_input"/>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="size_block">
                                            <h4>Size</h4>
                                            <div class="size_list">
                                                @foreach($product->sizes as $size)
                                                <div class="size" data-size="{{$size->id}}">{{$size->title}}</div>
                                                @endforeach
                                                <input type="hidden" name="size" class="size_input">
                                            </div>
                                        </div>
                                        <div class="question_block">
                                            <a href="#"><i></i><span>Ask the seller a question</span></a>
                                        </div>
                                        <div class="quantity_block">
                                            <input type="hidden" class="quantity_input_val" name="quantity" value="1"/>
                                            <div class="quantity_input" data-max="10">
                                                <div class="input">1</div>
                                                <span class="up"></span>
                                                <span class="down"></span>
                                            </div>
                                            <input type="submit" value="Add to cart" class="btn_submit">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h2>Products from the same boutique</h2>
                        <div class="item col-md-3 col-sm-4 col-xs-6">
                            <div class="item_block">
                                <div class="item_header">
                                    <a href="boutique_page.html"><i
                                            class="item_icon"></i><span>Sally's Boutique</span></a>
                                </div>
                                <div class="item_body">
                                    <div class="wishlist_add">
                                        <span class="heart"></span>
                                        <span class="clickable_block"
                                              title="Add to wishlist"></span>
                                    </div>
                                </div>
                                <a href="view_product.html">
                                    <div class="item_footer">
                                        <div class="rewiew_block">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <p>(39 Reviews)</p>
                                        </div>
                                        <div class="name_block">Olivine Heels</div>
                                        <div class="price_block">$45</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-4 col-xs-6">
                            <div class="item_block">
                                <div class="item_header">
                                    <a href="#"><i
                                            class="item_icon"></i><span>Sally's Boutique</span></a>
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
                                    <div class="name_block">Olivine Heels</div>
                                    <div class="price_block">$45</div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-4 col-xs-6">
                            <div class="item_block">
                                <div class="item_header">
                                    <a href="#"><i
                                            class="item_icon"></i><span>Sally's Boutique</span></a>
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
                                    <div class="name_block">Olivine Heels</div>
                                    <div class="price_block">$45</div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-4 col-xs-6">
                            <div class="item_block">
                                <div class="item_header">
                                    <a href="#"><i
                                            class="item_icon"></i><span>Sally's Boutique</span></a>
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
                                    <div class="name_block">Olivine Heels</div>
                                    <div class="price_block">$45</div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-4 col-xs-6">
                            <div class="item_block">
                                <div class="item_header">
                                    <a href="#"><i
                                            class="item_icon"></i><span>Sally's Boutique</span></a>
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
                                    <div class="name_block">Olivine Heels</div>
                                    <div class="price_block">$45</div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-4 col-xs-6">
                            <div class="item_block">
                                <div class="item_header">
                                    <a href="#"><i
                                            class="item_icon"></i><span>Sally's Boutique</span></a>
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
                                    <div class="name_block">Olivine Heels</div>
                                    <div class="price_block">$45</div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-4 col-xs-6">
                            <div class="item_block">
                                <div class="item_header">
                                    <a href="#"><i
                                            class="item_icon"></i><span>Sally's Boutique</span></a>
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
                                    <div class="name_block">Olivine Heels</div>
                                    <div class="price_block">$45</div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-4 col-xs-6">
                            <div class="item_block">
                                <div class="item_header">
                                    <a href="#"><i
                                            class="item_icon"></i><span>Sally's Boutique</span></a>
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
                                    <div class="name_block">Olivine Heels</div>
                                    <div class="price_block">$45</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h2>Similar products</h2>
                        <div class="item col-md-3 col-sm-4 col-xs-6">
                            <div class="item_block">
                                <div class="item_header">
                                    <a href="boutique_page.html"><i
                                            class="item_icon"></i><span>Sally's Boutique</span></a>
                                </div>
                                <div class="item_body">
                                    <div class="wishlist_add">
                                        <span class="heart"></span>
                                        <span class="clickable_block"
                                              title="Add to wishlist"></span>
                                    </div>
                                </div>
                                <a href="view_product.html">
                                    <div class="item_footer">
                                        <div class="rewiew_block">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <p>(39 Reviews)</p>
                                        </div>
                                        <div class="name_block">Olivine Heels</div>
                                        <div class="price_block">$45</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-4 col-xs-6">
                            <div class="item_block">
                                <div class="item_header">
                                    <a href="#"><i
                                            class="item_icon"></i><span>Sally's Boutique</span></a>
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
                                    <div class="name_block">Olivine Heels</div>
                                    <div class="price_block">$45</div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-4 col-xs-6">
                            <div class="item_block">
                                <div class="item_header">
                                    <a href="#"><i
                                            class="item_icon"></i><span>Sally's Boutique</span></a>
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
                                    <div class="name_block">Olivine Heels</div>
                                    <div class="price_block">$45</div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-4 col-xs-6">
                            <div class="item_block">
                                <div class="item_header">
                                    <a href="#"><i
                                            class="item_icon"></i><span>Sally's Boutique</span></a>
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
                                    <div class="name_block">Olivine Heels</div>
                                    <div class="price_block">$45</div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-4 col-xs-6">
                            <div class="item_block">
                                <div class="item_header">
                                    <a href="#"><i
                                            class="item_icon"></i><span>Sally's Boutique</span></a>
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
                                    <div class="name_block">Olivine Heels</div>
                                    <div class="price_block">$45</div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-4 col-xs-6">
                            <div class="item_block">
                                <div class="item_header">
                                    <a href="#"><i
                                            class="item_icon"></i><span>Sally's Boutique</span></a>
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
                                    <div class="name_block">Olivine Heels</div>
                                    <div class="price_block">$45</div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-4 col-xs-6">
                            <div class="item_block">
                                <div class="item_header">
                                    <a href="#"><i
                                            class="item_icon"></i><span>Sally's Boutique</span></a>
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
                                    <div class="name_block">Olivine Heels</div>
                                    <div class="price_block">$45</div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-md-3 col-sm-4 col-xs-6">
                            <div class="item_block">
                                <div class="item_header">
                                    <a href="#"><i
                                            class="item_icon"></i><span>Sally's Boutique</span></a>
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
                                    <div class="name_block">Olivine Heels</div>
                                    <div class="price_block">$45</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

@push('scripts')


<!-- gallery hear End -->
<script>
function initialize_product_gallery(){
     $('#products_gallery').eagleGallery({
            miniSliderArrowPos: 'inside',
            changeMediumStyle: true,
            autoPlayMediumImg: true,
            openGalleryStyle: 'transform',
            bottomControlLine: true
        });
}

    $(document).ready(function() {
       initialize_product_gallery();
        //new WOW().init();
    });
  $('.product_color_list .color').on('click', function () {
    $id = $(this).data('color-id');
    if ($(this).hasClass('active')) {
        //show all images
        load_products_gallery('');
        
    }else {
        //show colour only
        load_products_gallery($id);
    }
  }); 

function load_products_gallery(id){
    $('.products_gallery').load('{{ url('product/'.$product->slug.'/image-gallery') }}',{
    colour_id: id} ,
        function(){
        initialize_product_gallery();
    });
    
}

</script>


@endpush