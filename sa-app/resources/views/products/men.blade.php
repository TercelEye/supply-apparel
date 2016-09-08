@extends('layouts.app')

@section('title','Men Clothing | Men Clothing Stores | Men Apparel')

@section('meta')
    <meta name="description" content="Find the best men clothing collections and men clothing
stores on the web at Supply Apparel.">
    <meta name="keywords" content="men clothing, men clothing stores, men collection, men apparel">
@endsection

@section('content')

<main class="mens_page">
    <section class="section_1">
        <div class="container">
            <div class="row">
                <h2>Men</h2>
                <h5>Style yourself with the best fashion  apparel for men</h5>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">
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
                                <div class="row product_list">
                                    <div class="col-xs-12">
                                        <h3>Products</h3>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="product_item_1" type="checkbox">
                                                    <label for="product_item_1">Coat's & Jackets</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="product_item_2" type="checkbox">
                                                    <label for="product_item_2">Dresses</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="product_item_3" type="checkbox">
                                                    <label for="product_item_3">Jeans</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="product_item_4" type="checkbox">
                                                    <label for="product_item_4">Jumpsuits</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="product_item_10" type="checkbox">
                                                    <label for="product_item_10">Shirts & Blouses</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="product_item_9" type="checkbox">
                                                    <label for="product_item_9">Tops & T-Shirts</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="product_item_5" type="checkbox">
                                                    <label for="product_item_5">Trousers & Leggings</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="product_item_6" type="checkbox">
                                                    <label for="product_item_6">Shorts & Skirts</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="product_item_7" type="checkbox">
                                                    <label for="product_item_7">Lingerie & Nightware</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="remember" id="product_item_8" type="checkbox">
                                                    <label for="product_item_8">Shoes</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row brand_list">
                                    <div class="col-xs-12">
                                        <h3>Brands</h3>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="brand_item_1" type="checkbox">
                                                    <label for="brand_item_1">Nike</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="brand_item_2" type="checkbox">
                                                    <label for="brand_item_2">Puma</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="brand_item_3" type="checkbox">
                                                    <label for="brand_item_3">American Eagle</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="brand_item_4" type="checkbox">
                                                    <label for="brand_item_4">Chanel</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="brand_item_10" type="checkbox">
                                                    <label for="brand_item_10">Adidas</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="brand_item_9" type="checkbox">
                                                    <label for="brand_item_9">Hello Kitty</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="brand_item_5" type="checkbox">
                                                    <label for="brand_item_5">Gap</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row size_list">
                                    <div class="col-xs-12">
                                        <h3>Sizes</h3>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="size_item_1" type="checkbox">
                                                    <label for="size_item_1">Xs</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="size_item_2" type="checkbox">
                                                    <label for="size_item_2">S</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="size_item_3" type="checkbox">
                                                    <label for="size_item_3">M</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="size_item_4" type="checkbox">
                                                    <label for="size_item_4">L</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="size_item_10" type="checkbox">
                                                    <label for="size_item_10">Xl</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="size_item_9" type="checkbox">
                                                    <label for="size_item_9">Xxl</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row color_list">
                                    <div class="col-xs-12">
                                        <h3>Colors</h3>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="color_item_1" type="checkbox">
                                                    <label for="color_item_1">Black</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="color_item_2" type="checkbox">
                                                    <label for="color_item_2">Orange</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="color_item_5" type="checkbox">
                                                    <label for="color_item_5">Yellow</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="color_item_6" type="checkbox">
                                                    <label for="color_item_6">Red</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="color_item_3" type="checkbox">
                                                    <label for="color_item_3">Green</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="color_item_4" type="checkbox">
                                                    <label for="color_item_4">Pink</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="color_item_10" type="checkbox">
                                                    <label for="color_item_10">Purple</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="color_item_9" type="checkbox">
                                                    <label for="color_item_9">Blue</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="color_item_7" type="checkbox">
                                                    <label for="color_item_7">White</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="color_item_8" type="checkbox">
                                                    <label for="color_item_8">Brown</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row price_range">
                                    <div class="col-xs-12">
                                        <h3>Price</h3>
                                        <div class="slider_block">
                                            <div id="slider" class="slider"></div>
                                            <div class="first_value"></div>
                                            <div class="second_value"></div>
                                        </div>
                                    </div>
                                </div>
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
                            <div class="row">
                                <div class="item col-md-4 col-sm-6 col-xs-12">
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
                                        <a href="#">
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
                                <div class="item col-md-4 col-sm-6 col-xs-12">
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
                                <div class="item col-md-4 col-sm-6 col-xs-12">
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
                                <div class="item col-md-4 col-sm-6 col-xs-12">
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
                                <div class="item col-md-4 col-sm-6 col-xs-12">
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
                                <div class="item col-md-4 col-sm-6 col-xs-12">
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
                                <div class="item col-md-4 col-sm-6 col-xs-12">
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
                                <div class="item col-md-4 col-sm-6 col-xs-12">
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
                                <div class="item col-md-4 col-sm-6 col-xs-12">
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
                                <div class="item col-md-4 col-sm-6 col-xs-12">
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
                                <div class="item col-md-4 col-sm-6 col-xs-12">
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
                                <div class="item col-md-4 col-sm-6 col-xs-12">
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
            </div>
        </div>
    </section>
</main>

@endsection