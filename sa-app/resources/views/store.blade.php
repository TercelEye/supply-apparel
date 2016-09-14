@extends('layouts/app')

@section('content')

<main class="boutique_store_page">
    <section class="section_photo">
        <div class="container">
            <div class="boutique_photo" style="background-image:url({{url($shop->cover_image)}})"></div>
        </div>
    </section>
    <section class="section_1">
        <div class="container">
            <div class="row">
                <h2>{{$shop->shop_name}}</h2>
                <h5>{{$shop->description}}</h5>
            </div>
            <div class="row">
                <div class="social_block">
                      @if($shop->instagram_url!="") <a target="_blank" href="{{ $shop->instagram_url }}" class="social insta"></a> @endif
                    @if($shop->facebook_url!="")  <a target="_blank" href="{{ $shop->facebook_url }}" class="social fb"></a>@endif
                    @if($shop->twitter_url!="") <a target="_blank" href="{{ $shop->twitter_url }}" class="social tw"></a>@endif
                    @if($shop->pinterest_url!="") <a target="_blank" href="{{ $shop->pinterest_url }}" class="social pt"></a>@endif
                </div>
                <div class="followers_number">0 Followers</div>
            </div>
            <div class="row">
                <ul class="nav nav-tabs boutique_tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#products_tab" aria-controls="products" role="tab"
                           data-toggle="tab">Products</a>
                    </li>
                    <li role="presentation">
                        <a href="#look_books" aria-controls="look" role="tab" data-toggle="tab">Look Books</a>
                    </li>
                    <li role="presentation">
                        <a href="#blog_tab" aria-controls="blog" role="tab"
                           data-toggle="tab">Blog</a>
                    </li>
                    <li role="presentation">
                        <a href="#review_tab" aria-controls="review" role="tab"
                           data-toggle="tab">Reviews</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="products_tab">
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul class="item_type">
                                        <li><a href="#">All</a></li>
                                        <li><a href="#">New</a></li>
                                        <li><a href="#">Top Rated</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul class="item_categories">
                                        <li><a href="#">Own Label</a></li>
                                        <li><a href="#">Pre-owned</a></li>
                                        <li><a href="#">Multi-Brand</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div id="search_b" class="search_b">
                                        <form>
                                            <input class="search_input" placeholder="Enter your search text" type="text"
                                                   value=""
                                                   name="search" id="search">
                                            <input class="search_submit" type="submit" value="">
                                            <span class="icon_search search_trigger"></span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-3 col-sm-4 col-xs-5 filter_side">
                                    <form action="" method="post" class="product_filter">
 								@include('componets.filter.category')
                                @include('componets.filter.brand')
                                @include('componets.filter.size')
                                @include('componets.filter.colour')
                                @include('componets.filter.price')
                                    </form>
                                </div>
                                <div class="col-md-9 col-sm-8 col-xs-7 product_side">
                                    <div class="row">
                                        <div class="select_block">
                                            <select name="filter_type" id="filter_select">
                                                <option>Ascending</option>
                                                <option>Descending</option>
                                                <option selected="selected">Popular</option>
                                                <option>New</option>
                                            </select>
                                            <div class="results">Showing 36 of 178 Results</div>
                                        </div>
                                    </div>
                                    <div class="row product_items">

                                    {!! $product_items['html'] !!}
                                       
                                    </div><!-- end row -->
                                  
                                </div>
                            </div>
                        </div><!-- end products_tab -->
                        <div role="tabpanel" class="tab-pane" id="look_books">
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul class="item_type">
                                        <li><a href="#">All</a></li>
                                        <li><a href="#">New</a></li>
                                        <li><a href="#">Top Rated</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul class="item_categories">
                                        <li><a href="#">Own Label</a></li>
                                        <li><a href="#">Pre-owned</a></li>
                                        <li><a href="#">Multi-Brand</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div id="search_b" class="search_b">
                                        <form>
                                            <input class="search_input" placeholder="Enter your search text" type="text"
                                                   value=""
                                                   name="search" id="search">
                                            <input class="search_submit" type="submit" value="">
                                            <span class="icon_search search_trigger"></span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-sm-4 col-xs-5 filter_side">
                                    <form action="" method="post">
                                        <div class="row gender_list">
                                            <div class="col-xs-12">
                                                <h3>Gender</h3>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="genre_item_1"
                                                                   type="checkbox">
                                                            <label for="genre_item_1">Women</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="genre_item_2"
                                                                   type="checkbox">
                                                            <label for="genre_item_2">Men</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="genre_item_3"
                                                                   type="checkbox">
                                                            <label for="genre_item_3">Kids</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row country_list">
                                            <div class="col-xs-12">
                                                <h3>Countries</h3>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="brand_item_1"
                                                                   type="checkbox">
                                                            <label for="brand_item_1">Afganistan</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="brand_item_2"
                                                                   type="checkbox">
                                                            <label for="brand_item_2">Albania</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="brand_item_3"
                                                                   type="checkbox">
                                                            <label for="brand_item_3">Algeria</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="brand_item_4"
                                                                   type="checkbox">
                                                            <label for="brand_item_4">American Samoa</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="brand_item_10"
                                                                   type="checkbox">
                                                            <label for="brand_item_10">Andorra</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="brand_item_9"
                                                                   type="checkbox">
                                                            <label for="brand_item_9">Angola</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="brand_item_5"
                                                                   type="checkbox">
                                                            <label for="brand_item_5">Anguilla</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="brand_item_11"
                                                                   type="checkbox">
                                                            <label for="brand_item_11">Bolivia</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="brand_item_12"
                                                                   type="checkbox">
                                                            <label for="brand_item_12">Butan</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row product_list">
                                            <div class="col-xs-12">
                                                <h3>Products</h3>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="product_item_1"
                                                                   type="checkbox">
                                                            <label for="product_item_1">Coat's & Jackets</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="product_item_2"
                                                                   type="checkbox">
                                                            <label for="product_item_2">Dresses</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="product_item_3"
                                                                   type="checkbox">
                                                            <label for="product_item_3">Jeans</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="product_item_4"
                                                                   type="checkbox">
                                                            <label for="product_item_4">Jumpsuits</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="product_item_10"
                                                                   type="checkbox">
                                                            <label for="product_item_10">Shirts &
                                                                Blouses</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="product_item_9"
                                                                   type="checkbox">
                                                            <label for="product_item_9">Tops & T-Shirts</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="product_item_5"
                                                                   type="checkbox">
                                                            <label for="product_item_5">Trousers &
                                                                Leggings</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="product_item_6"
                                                                   type="checkbox">
                                                            <label for="product_item_6">Shorts & Skirts</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="filter" id="product_item_7"
                                                                   type="checkbox">
                                                            <label for="product_item_7">Lingerie &
                                                                Nightware</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox">
                                                            <input name="remember" id="product_item_8"
                                                                   type="checkbox">
                                                            <label for="product_item_8">Shoes</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-9 col-sm-8 col-xs-7 product_side">





                                    <div class="row">
                                        <div class="select_block">
                                            <select name="filter_type" id="filter_select_1">
                                                <option>Ascending</option>
                                                <option>Descending</option>
                                                <option selected="selected">Popular</option>
                                                <option>New</option>
                                            </select>
                                            <div class="results">Showing 36 of 178 Results</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="item col-md-4 col-sm-6 col-xs-6">
                                            <a href="look_book_page.html">
                                                <div class="look_item">
                                                    <div class="picture_block"></div>
                                                    <div class="name_block">
                                                        <div>
                                                            <i class="item_icon"></i>
                                                            <span>Bangkok Tshirts</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="item col-md-4 col-sm-6 col-xs-6">
                                            <a href="#">
                                                <div class="look_item">
                                                    <div class="picture_block"></div>
                                                    <div class="name_block">
                                                        <div>
                                                            <i class="item_icon"></i>
                                                            <span>Bangkok Tshirts</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="item col-md-4 col-sm-6 col-xs-6">
                                            <a href="#">
                                                <div class="look_item">
                                                    <div class="picture_block"></div>
                                                    <div class="name_block">
                                                        <div>
                                                            <i class="item_icon"></i>
                                                            <span>Bangkok Tshirts</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="item col-md-4 col-sm-6 col-xs-6">
                                            <a href="#">
                                                <div class="look_item">
                                                    <div class="picture_block"></div>
                                                    <div class="name_block">
                                                        <div>
                                                            <i class="item_icon"></i>
                                                            <span>Bangkok Tshirts</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="item col-md-4 col-sm-6 col-xs-6">
                                            <a href="#">
                                                <div class="look_item">
                                                    <div class="picture_block"></div>
                                                    <div class="name_block">
                                                        <div>
                                                            <i class="item_icon"></i>
                                                            <span>Bangkok Tshirts</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="item col-md-4 col-sm-6 col-xs-6">
                                            <a href="#">
                                                <div class="look_item">
                                                    <div class="picture_block"></div>
                                                    <div class="name_block">
                                                        <div>
                                                            <i class="item_icon"></i>
                                                            <span>Bangkok Tshirts</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="item col-md-4 col-sm-6 col-xs-6">
                                            <a href="#">
                                                <div class="look_item">
                                                    <div class="picture_block"></div>
                                                    <div class="name_block">
                                                        <div>
                                                            <i class="item_icon"></i>
                                                            <span>Bangkok Tshirts</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="item col-md-4 col-sm-6 col-xs-6">
                                            <a href="#">
                                                <div class="look_item">
                                                    <div class="picture_block"></div>
                                                    <div class="name_block">
                                                        <div>
                                                            <i class="item_icon"></i>
                                                            <span>Bangkok Tshirts</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="item col-md-4 col-sm-6 col-xs-6">
                                            <a href="#">
                                                <div class="look_item">
                                                    <div class="picture_block"></div>
                                                    <div class="name_block">
                                                        <div>
                                                            <i class="item_icon"></i>
                                                            <span>Bangkok Tshirts</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="item col-md-4 col-sm-6 col-xs-6">
                                            <a href="#">
                                                <div class="look_item">
                                                    <div class="picture_block"></div>
                                                    <div class="name_block">
                                                        <div>
                                                            <i class="item_icon"></i>
                                                            <span>Bangkok Tshirts</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="item col-md-4 col-sm-6 col-xs-6">
                                            <a href="#">
                                                <div class="look_item">
                                                    <div class="picture_block"></div>
                                                    <div class="name_block">
                                                        <div>
                                                            <i class="item_icon"></i>
                                                            <span>Bangkok Tshirts</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                        <div class="item col-md-4 col-sm-6 col-xs-6">
                                            <a href="#">
                                                <div class="look_item">
                                                    <div class="picture_block"></div>
                                                    <div class="name_block">
                                                        <div>
                                                            <i class="item_icon"></i>
                                                            <span>Bangkok Tshirts</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <ul class="pagination">
                                            <li>
                                                <a href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li><a href="#">1</a></li>
                                            <li class="active"><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">19</a></li>
                                            <li>
                                                <a href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="blog_tab">
                            <div class="row">
                                <div class="item col-md-3 col-sm-4 col-xs-6">
                                    <a href="blog_page.html">
                                        <div class="blog_item">
                                            <div class="picture_block"></div>
                                            <div class="details_block">
                                                <div class="name_block">
                                                    Summer line
                                                </div>
                                                <div class="desc_block">
                                                    Fashion is what makes the whole
                                                    world look beautiful. With our new
                                                    summer collection...
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item col-md-3 col-sm-4 col-xs-6">
                                    <a href="#">
                                        <div class="blog_item">
                                            <div class="picture_block"></div>
                                            <div class="details_block">
                                                <div class="name_block">
                                                    Summer line
                                                </div>
                                                <div class="desc_block">
                                                    Fashion is what makes the whole
                                                    world look beautiful. With our new
                                                    summer collection...
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item col-md-3 col-sm-4 col-xs-6">
                                    <a href="#">
                                        <div class="blog_item">
                                            <div class="picture_block"></div>
                                            <div class="details_block">
                                                <div class="name_block">
                                                    Summer line
                                                </div>
                                                <div class="desc_block">
                                                    Fashion is what makes the whole
                                                    world look beautiful. With our new
                                                    summer collection...
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item col-md-3 col-sm-4 col-xs-6">
                                    <a href="#">
                                        <div class="blog_item">
                                            <div class="picture_block"></div>
                                            <div class="details_block">
                                                <div class="name_block">
                                                    Summer line
                                                </div>
                                                <div class="desc_block">
                                                    Fashion is what makes the whole
                                                    world look beautiful. With our new
                                                    summer collection...
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item col-md-3 col-sm-4 col-xs-6">
                                    <a href="#">
                                        <div class="blog_item">
                                            <div class="picture_block"></div>
                                            <div class="details_block">
                                                <div class="name_block">
                                                    Summer line
                                                </div>
                                                <div class="desc_block">
                                                    Fashion is what makes the whole
                                                    world look beautiful. With our new
                                                    summer collection...
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item col-md-3 col-sm-4 col-xs-6">
                                    <a href="#">
                                        <div class="blog_item">
                                            <div class="picture_block"></div>
                                            <div class="details_block">
                                                <div class="name_block">
                                                    Summer line
                                                </div>
                                                <div class="desc_block">
                                                    Fashion is what makes the whole
                                                    world look beautiful. With our new
                                                    summer collection...
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item col-md-3 col-sm-4 col-xs-6">
                                    <a href="#">
                                        <div class="blog_item">
                                            <div class="picture_block"></div>
                                            <div class="details_block">
                                                <div class="name_block">
                                                    Summer line
                                                </div>
                                                <div class="desc_block">
                                                    Fashion is what makes the whole
                                                    world look beautiful. With our new
                                                    summer collection...
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="item col-md-3 col-sm-4 col-xs-6">
                                    <a href="#">
                                        <div class="blog_item">
                                            <div class="picture_block"></div>
                                            <div class="details_block">
                                                <div class="name_block">
                                                    Summer line
                                                </div>
                                                <div class="desc_block">
                                                    Fashion is what makes the whole
                                                    world look beautiful. With our new
                                                    summer collection...
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="review_tab">
                            <div class="row">
                                <div class="item col-xs-12">
                                    <div class="person_item">
                                        <div class="person_name_block">
                                            <div class="name">Person Name</div>
                                            <div class="review_block">
                                                <span class="glyphicon glyphicon-star active"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                            </div>
                                        </div>
                                        <div class="person_desc">
                                            <p>
                                                Lorem ipsum dolor sit amet, quem probo vim eu. Et pri vidisse virtute
                                                facilis, modus harum cu mel. Ferri referrentur duo ut, cu nulla referrentur
                                                pro, mea in iudico petentium vituperatoribus. Constituto voluptatum
                                                referrentur ex nam, est eu reque virtute efficiantur, dolore alterum per at.
                                                Mel in mentitum luptatum, usu ad elitr praesent moderatius. Eos ei saperet
                                                expetenda, at falli simul tempor vis, vim modo rationibus cu. Aliquid
                                                omittantur id pro, ea autem posse decore vix, idque scripta feugiat te mea.
                                                Pri ad aliquid aliquando, qui et brute putant adolescens.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-xs-12">
                                    <div class="person_item">
                                        <div class="person_name_block">
                                            <div class="name">Person Name</div>
                                            <div class="review_block">
                                                <span class="glyphicon glyphicon-star active"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                            </div>
                                        </div>
                                        <div class="person_desc">
                                            <p>
                                                Lorem ipsum dolor sit amet, quem probo vim eu. Et pri vidisse virtute
                                                facilis, modus harum cu mel. Ferri referrentur duo ut, cu nulla referrentur
                                                pro, mea in iudico petentium vituperatoribus. Constituto voluptatum
                                                referrentur ex nam, est eu reque virtute efficiantur, dolore alterum per at.
                                                Mel in mentitum luptatum, usu ad elitr praesent moderatius. Eos ei saperet
                                                expetenda, at falli simul tempor vis, vim modo rationibus cu. Aliquid
                                                omittantur id pro, ea autem posse decore vix, idque scripta feugiat te mea.
                                                Pri ad aliquid aliquando, qui et brute putant adolescens.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-xs-12">
                                    <div class="person_item">
                                        <div class="person_name_block">
                                            <div class="name">Person Name</div>
                                            <div class="review_block">
                                                <span class="glyphicon glyphicon-star active"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                            </div>
                                        </div>
                                        <div class="person_desc">
                                            <p>
                                                Lorem ipsum dolor sit amet, quem probo vim eu. Et pri vidisse virtute
                                                facilis, modus harum cu mel. Ferri referrentur duo ut, cu nulla referrentur
                                                pro, mea in iudico petentium vituperatoribus. Constituto voluptatum
                                                referrentur ex nam, est eu reque virtute efficiantur, dolore alterum per at.
                                                Mel in mentitum luptatum, usu ad elitr praesent moderatius. Eos ei saperet
                                                expetenda, at falli simul tempor vis, vim modo rationibus cu. Aliquid
                                                omittantur id pro, ea autem posse decore vix, idque scripta feugiat te mea.
                                                Pri ad aliquid aliquando, qui et brute putant adolescens.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-xs-12">
                                    <div class="person_item">
                                        <div class="person_name_block">
                                            <div class="name">Person Name</div>
                                            <div class="review_block">
                                                <span class="glyphicon glyphicon-star active"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                            </div>
                                        </div>
                                        <div class="person_desc">
                                            <p>
                                                Lorem ipsum dolor sit amet, quem probo vim eu. Et pri vidisse virtute
                                                facilis, modus harum cu mel. Ferri referrentur duo ut, cu nulla referrentur
                                                pro, mea in iudico petentium vituperatoribus. Constituto voluptatum
                                                referrentur ex nam, est eu reque virtute efficiantur, dolore alterum per at.
                                                Mel in mentitum luptatum, usu ad elitr praesent moderatius. Eos ei saperet
                                                expetenda, at falli simul tempor vis, vim modo rationibus cu. Aliquid
                                                omittantur id pro, ea autem posse decore vix, idque scripta feugiat te mea.
                                                Pri ad aliquid aliquando, qui et brute putant adolescens.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@stop

@push('scripts')
<script type="text/javascript">
    $( ".product_filter" ).change(function() {
        $('.product_items').css({opacity: '0.5'});
        var form_items = $( ".product_filter" ).serialize();

    $.post( "{{url('store/'.$shop->shop_slug)}}", form_items).done(function( json ) {
        $('.product_items').css({opacity: '1'});
        $('.product_items').html(json.html);
    });
});
</script>
@endpush