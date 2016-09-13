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
                            <form action="" method="post" class="product_filter">
                                <div class="row product_list">
                                    <div class="col-xs-12">
                                        <h3>Products</h3>
                                        <ul class="list-unstyled">
                                            @foreach($categories as $row)
                                            <li>
                                                <div class="checkbox">
                                                    <input  {{ (in_array($row->id,Request::input('category',array()))?"checked":"") }} name="category[]" value="{{$row->id}}" id="product_item_{{$row->id}}" type="checkbox">
                                                    <label for="product_item_{{$row->id}}">{{ $row->title }}</label>
                                                </div>
                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                                <div class="row brand_list">
                                    <div class="col-xs-12">
                                        <h3>Brands</h3>
                                        <ul class="list-unstyled">
                                         @foreach($brands as $row)
                                            <li>
                                                <div class="checkbox">
                                                    <input {{ (in_array($row->id,Request::input('brand',array()))?"checked":"") }}  name="brand[]" value="{{$row->id}}" id="brand_item_{{$row->id}}" type="checkbox">
                                                    <label for="brand_item_{{$row->id}}">{{$row->name}}</label>
                                                </div>
                                            </li>
                                            @endforeach
                                          
                                        </ul>
                                    </div>
                                </div>
                                <div class="row size_list">
                                    <div class="col-xs-12">
                                        <h3>Sizes</h3>
                                        @foreach ($sizes->chunk($sizes->count()/2) as $size)
                                        <ul class="list-unstyled">
                                            @foreach($size as $row)
                                            <li>
                                                <div class="checkbox">
                                                    <input {{ (in_array($row->id,Request::input('size',array()))?"checked":"") }}  name="size[]" value="{{$row->id}}" id="size_item_{{$row->id}}" type="checkbox">
                                                    <label for="size_item_{{$row->id}}">{{$row->title}}</label>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                          @endforeach
                                       
                                    </div>
                                </div>
                                <div class="row color_list">
                                    <div class="col-xs-12">
                                        <h3>Colors</h3>
                                         @foreach ($colours->chunk($colours->count()/2) as $colour)
                                        <ul class="list-unstyled">
                                         @foreach($colour as $row)
                                            <li>
                                                <div class="checkbox">
                                                    <input {{ (in_array($row->id,Request::input('colour',array()))?"checked":"") }} name="colour[]" value="{{$row->id}}" id="color_item_{{$row->id}}" type="checkbox">
                                                    <label for="color_item_{{$row->id}}" class="color_item_{{$row->id}} {{ (in_array($row->id,Request::input('colour',array()))?"active":"") }}">{{$row->name}}</label>
                                                </div>
                                            </li>
                                            <style type="text/css">.color_item_{{$row->id}}:before {
                                                background: {{$row->hexa_code}} !important;
                                                }</style>
                                        @endforeach

                                        </ul>
                                        @endforeach
                                           
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

    $.post( "{{url('men-clothing')}}", form_items).done(function( json ) {
        $('.product_items').css({opacity: '1'});
        $('.product_items').html(json.html);
    });
});
</script>
@endpush