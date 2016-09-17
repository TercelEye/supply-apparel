@extends('layouts.app')

@section('content')

<main class="owner_landing_page">

<section class="section_0 owner_menu">
       @include('layouts.seller_navigation')
    </section>
 
    <section class="section_1">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7 col-xs-12 col-xs-offset-0">
                    <div class="content_block">
                        <h2>Sell your Products to Millions Around The World</h2>
                        <p>
                            Setup your very own online store in less than a minute and increase your earning potential
                            with our thriving community of buyers.
                        </p>
                        <a href="{{ url("become-seller") }}" class="btn_create_boutique">Create A Boutique</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-offset-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="information_item">
                                <div class="icon safety"></div>
                                <h4>Trust & Safety</h4>
                                <p>We have your best interest and financial safety in mind so you can sell on our
                                    marketplace
                                    effortlessly.</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="information_item">
                                <div class="icon logistics"></div>
                                <h4>100% Logistics Assistance</h4>
                                <p>
                                    We help you update the logistics of every sale, keeping you and your customers
                                    informed
                                    throughout the process.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="information_item">
                                <div class="icon secure"></div>
                                <h4>Secure Payments</h4>
                                <p>
                                    Every payment made on our platform is secured so you can grow your business while we
                                    do all
                                    the heavy lifting.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section_3">
        <div class="container">
            <div class="row">
                <h2>Image Guidelines</h2>
                <h5>It’s easy to create a boutique and begin selling on our marketplace.<br/>
                    Use our simple image guidelines below when you’re uploading your apparel.
                </h5>
                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-offset-0">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 item">
                            <div class="item_block">
                                <div class="item_header">
                                    <i class="icon"></i>
                                    <span>Apparel on models with natural background</span>
                                </div>
                                <div class="item_body"></div>
                            </div>
                        </div>
                        <div class="col-md-4  col-sm-6 item">
                            <div class="item_block">
                                <div class="item_header">
                                    <i class="icon"></i>
                                    <span>Apparel on models with studio background</span>
                                </div>
                                <div class="item_body"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 item">
                            <div class="item_block">
                                <div class="item_header">
                                    <i class="icon"></i>
                                    <span>Apparel on models with studio background</span>
                                </div>
                                <div class="item_body"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="big_block">
                                <h2>Increase your earning potential.</h2>
                                <a href="{{ url("become-seller") }}" class="btn_create_boutique">Create A Boutique</a>
                                <div class="icon"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@stop