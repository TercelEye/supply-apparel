@extends('layouts.app')

@section('title','Women Clothing | Women Clothing Stores | Women Apparel')

@section('meta')
    <meta name="description" content="Find the latest women clothing stores and women clothing
collections at Supply Apparel.">
    <meta name="keywords" content="women clothing stores, women clothing, women collection,">
@endsection

@section('content')

<main class="mens_page">
    <section class="section_1">
        <div class="container">
            <div class="row">
                <h2>Women</h2>
                <h5>Explore trendy designs from coolest around the world</h5>
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
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

@push('scripts')
<script type="text/javascript">
    $( ".product_filter" ).change(function() {
        $('.product_items').css({opacity: '0.5'});
        var form_items = $( ".product_filter" ).serialize();

    $.post( "{{url('women-clothing')}}", form_items).done(function( json ) {
        $('.product_items').css({opacity: '1'});
        $('.product_items').html(json.html);
    });
});
</script>
@endpush