@extends('layouts.app')

@section('content')
<main class="index_page">
    <section class="section_1">
        <div class="container">
            <div class="row image">
                <div class="search_input">
                    <input type="text" name="q" placeholder="What are you looking for? eg: women's jaket or skirt"/>
                </div>
            </div>
        </div>
    </section>
    <section class="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="create_boutique_photo"></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="create_boutique_block">
                                    <p>
                                        Create your own
                                        boutique and sell your
                                        products to millions
                                        around the world.
                                    </p>
                                    <a href="#" class="btn_start_now">Start now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_3">
        <div class="container">
            <div class="row category_block">
                <h2>Apparel For Women</h2>
                <h5>Explore trendy designs from the coolest brands around the world</h5>
                <div class="col-sm-12">
                    <div class="row">
                        <ul class="nav nav-tabs women_tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#w_best_sellers" aria-controls="best" role="tab"
                                   data-toggle="tab">Best Sellers</a>
                            </li>
                            <li role="presentation">
                                <a href="#w_new_arrivals" aria-controls="arrivals" role="tab" data-toggle="tab">New
                                    Arrivals</a>
                            </li>
                            <li role="presentation">
                                <a href="#w_must_haves" aria-controls="have" role="tab"
                                   data-toggle="tab">Must Haves</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="w_best_sellers">
                                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-offset-0">
                                    <div class="row best_sellers_women"></div>
                                    <div class="row">
                                        <a href="#" data-class-name=".best_sellers_women" data-url="" class="btn_show_more">Show More</a>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="w_new_arrivals">
                                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-offset-0">
                                    <div class="row new_arrivals_women"></div>
                                    <div class="row">
                                        <a href="#" data-class-name=".new_arrivals_women" data-url="" class="btn_show_more">Show More</a>
                                    </div>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="w_must_haves">

   <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-offset-0">
                                    <div class="row must_haves_women"></div>
                                    <div class="row">
                                        <a href="#" data-class-name=".must_haves_women" data-url="" class="btn_show_more">Show More</a>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>


            <div class="row category_block">
                <h2>Apparel For Men</h2>
                <h5>Style yourself with the best fashion apparel for men</h5>
                <div class="col-sm-12">
                    <div class="row">
                        <ul class="nav nav-tabs men_tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#m_best_sellers" aria-controls="best" role="tab"
                                   data-toggle="tab">Best Sellers</a>
                            </li>
                            <li role="presentation">
                                <a href="#m_new_arrivals" aria-controls="arrivals" role="tab" data-toggle="tab">New
                                    Arrivals</a>
                            </li>
                            <li role="presentation">
                                <a href="#m_must_haves" aria-controls="have" role="tab"
                                   data-toggle="tab">Must Haves</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="m_best_sellers">
                                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-offset-0">
                                    <div class="row">
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
                            <div role="tabpanel" class="tab-pane" id="m_new_arrivals">
                            </div>
                            <div role="tabpanel" class="tab-pane" id="m_must_haves">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <a href="#" class="btn_show_more">Show More</a>
                    </div>
                </div>
            </div>
            <div class="row category_block">
                <h2>Apparel For Kids</h2>
                <h5>Style your kid early with chic fashion attire</h5>
                <div class="col-sm-12">
                    <div class="row">
                        <ul class="nav nav-tabs kid_tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#k_best_sellers" aria-controls="best" role="tab"
                                   data-toggle="tab">Best Sellers</a>
                            </li>
                            <li role="presentation">
                                <a href="#k_new_arrivals" aria-controls="arrivals" role="tab" data-toggle="tab">New
                                    Arrivals</a>
                            </li>
                            <li role="presentation">
                                <a href="#k_must_haves" aria-controls="have" role="tab"
                                   data-toggle="tab">Must Haves</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="k_best_sellers">
                                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">
                                    <div class="row">
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
                            <div role="tabpanel" class="tab-pane" id="k_new_arrivals">
                            </div>
                            <div role="tabpanel" class="tab-pane" id="k_must_haves">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <a href="#" class="btn_show_more">Show More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_4">
        <div class="container">
            <div class="row">
                <h2>Boutiques</h2>
                <h5>Browse through some of the most trending fashion boutiques online</h5>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <ul class="nav nav-tabs boutiques_tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#own_labels" aria-controls="label" role="tab"
                                   data-toggle="tab">Own-Labels</a>
                            </li>
                            <li role="presentation">
                                <a href="#pre_owned" aria-controls="owned" role="tab" data-toggle="tab">Pre-Owned</a>
                            </li>
                            <li role="presentation">
                                <a href="#multi_brand" aria-controls="brand" role="tab"
                                   data-toggle="tab">Multi-Brand</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="own_labels">
                                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-offset-0">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="boutique_item">
                                                <div class="picture_block"></div>
                                                <div class="name_block">
                                                    <a href="#">
                                                        <i class="item_icon"></i>
                                                        <span>Bangkok Tshirts</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="boutique_item">
                                                <div class="picture_block"></div>
                                                <div class="name_block">
                                                    <a href="#">
                                                        <i class="item_icon"></i>
                                                        <span>Bangkok Tshirts</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="boutique_item">
                                                <div class="picture_block"></div>
                                                <div class="name_block">
                                                    <a href="#">
                                                        <i class="item_icon"></i>
                                                        <span>Bangkok Tshirts</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="pre_owned">
                            </div>
                            <div role="tabpanel" class="tab-pane" id="multi_brand">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <a href="#" class="btn_show_more">Show More</a>
            </div>
        </div>
    </section>
    <section class="section_5">
        <div class="container">
            <div class="row">
                <h2>Look Books</h2>
                <h5>Get your look right with the best style statements from our look books</h5>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <ul class="nav nav-tabs boutiques_tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#women_tab" aria-controls="women" role="tab"
                                   data-toggle="tab">Women</a>
                            </li>
                            <li role="presentation">
                                <a href="#men_tab" aria-controls="men" role="tab" data-toggle="tab">Men</a>
                            </li>
                            <li role="presentation">
                                <a href="#kids_tab" aria-controls="kids" role="tab"
                                   data-toggle="tab">Kids</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="women_tab">
                                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-offset-0">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="look_item">
                                                <div class="picture_block"></div>
                                                <div class="name_block">
                                                    <a href="#">
                                                        <i class="item_icon"></i>
                                                        <span>Bangkok Tshirts</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="look_item">
                                                <div class="picture_block"></div>
                                                <div class="name_block">
                                                    <a href="#">
                                                        <i class="item_icon"></i>
                                                        <span>Bangkok Tshirts</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="look_item">
                                                <div class="picture_block"></div>
                                                <div class="name_block">
                                                    <a href="#">
                                                        <i class="item_icon"></i>
                                                        <span>Bangkok Tshirts</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="look_item">
                                                <div class="picture_block"></div>
                                                <div class="name_block">
                                                    <a href="#">
                                                        <i class="item_icon"></i>
                                                        <span>Bangkok Tshirts</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="look_item">
                                                <div class="picture_block"></div>
                                                <div class="name_block">
                                                    <a href="#">
                                                        <i class="item_icon"></i>
                                                        <span>Bangkok Tshirts</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="look_item">
                                                <div class="picture_block"></div>
                                                <div class="name_block">
                                                    <a href="#">
                                                        <i class="item_icon"></i>
                                                        <span>Bangkok Tshirts</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="men_tab">
                            </div>
                            <div role="tabpanel" class="tab-pane" id="kids_tab">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <a href="#" class="btn_show_more">Show More</a>
            </div>
        </div>
    </section>
</main>



@endsection


@push('scripts')
   <script type="text/javascript">

   $('.btn_show_more').click(function(event) {
       event.preventDefault();
       var url = $(this).attr('data-url');
       var class_name = $(this).data('class-name');
       load_products(url,class_name)
   });

   function load_products(url,class_name){
      var load_more = $(class_name).closest('.tab-pane').find('.btn_show_more');
       var $btn = $(load_more).button('loading');
    

         $.post( url, { name: "terceleye.com", })
          .done(function( response ) {
                $(class_name).append( response.html);
                $(load_more).attr('data-url', response.next_url);
                //console.log("url -- "+url+"  ---- "+response.next_url)
                if(response.next_url == null){
                    $(load_more).fadeOut('fast');
                }
                $btn.button('reset');
          });

   }
    $(document).ready(function(){
        //get best sellers
        load_products("{{ url('women/best-sellers') }} ",".best_sellers_women");
        load_products("{{ url('women/new-arrivals') }} ",".new_arrivals_women");
        load_products("{{ url('women/must-haves') }} ",".must_haves_women");
    });
</script>
@endpush
