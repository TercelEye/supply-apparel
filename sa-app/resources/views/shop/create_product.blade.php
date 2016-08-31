@extends("layouts.app")

@section('content')

  <form action="" method="post" enctype="multipart/form-data">
<main class="add_product_step_1">
    <section class="section_1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                  
                    {{ csrf_field() }}
                    	@include("shared.errors")

                        <div class="row">
                            <div class="container">
                                <div class="row">
                                    <a href="#" class="back">
                                        <i class="fa fa-angle-left"></i>
                                        <span>Back to my account</span>
                                    </a>
                                    <div class="form-group name_block">
                                        <h3>PRODUCT'S NAME</h3>
                                        <input type="text" name="name" id="name"/>
                                    </div>
                                    <div class="form-group description_block">
                                        <h3>ENTER A DESCRIPTION FOR YOUR PRODUCT (300
                                            characters)</h3>
                                        <textarea name="description" id="description"></textarea>
                                    </div>
                                    <div class="form-group category_block">
                                        <h3>CATEGORY</h3>
                                       

                                      
                                        <div class="input_block">
                                         <select style="width: 300px;padding: 10px 12px 8px;height:50px;" name="category_id" class="form-control multiple_select" >
                                         	<option></option>
                                         	@foreach($categories as $category)
                                         	<option value="{{$category->id}}">{{$category->name}}</option>
                                         	@endforeach
										</select>
										                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border_has">
                            <div class="container">
                                <div class="row">
                                    <div class="form-group brand_block">
                                        <h3>SELECT BRAND</h3>
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
                                        <div class="input_block">
                                            <label for="brand">Don't See it listed? Enter the category below</label>
                                            <input type="text" name="brand" id="brand">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border_has">
                            <div class="container">
                                <div class="row">
                                    <div class="form-group size_block">
                                        <h3>SIZE</h3>
                                        <div class="size_list">
                                            <div class="size" data-size="1">XS</div>
                                            <div class="size" data-size="2">S</div>
                                            <div class="size" data-size="3">ML</div>
                                            <div class="size" data-size="4">L</div>
                                            <div class="size" data-size="5">XL</div>
                                            <div class="size" data-size="6">XXL</div>
                                            <div class="size none" data-size="7">None</div>
                                            <a href="#" class="btn_size_guide">Size Guide</a>
                                            <input type="hidden" name="size" class="size_input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border_has">
                            <div class="container">
                                <div class="row">
                                    <div class="form-group colour_block">
                                        <h3>COLOUR</h3>
                                        <div class="color_list product_color_list">
                                            <div class="color c1" data-color-id="1"></div>
                                            <div class="color c2" data-color-id="2"></div>
                                            <div class="color c3" data-color-id="3"></div>
                                            <div class="color c4" data-color-id="4"></div>
                                            <div class="color none" data-color-id="5">None</div>
                                            <input type="hidden" name="color" class="color_input"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border_has">
                            <div class="container">
                                <div class="row">
                                    <div class="form-group file_block">
                                        <h3>UPLOAD PHOTOS (minimum size 504 x 504 px)</h3>
                                        <div class="file_input">
                                            <label title="Upload photo" for="product_photos"><i></i></label>
                                            <input type="file" name="product_photos" id="product_photos">
                                        </div>
                                        <a href="add_product_step_2.html" class="btn_step">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                  
                </div>
            </div>
        </div>
    </section>
</main>
 

<main class="add_product_step_2">
    <section class="section_1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                   
                        <div class="row">
                            <div class="container">
                                <div class="row">
                                    <a href="add_product_step_1.html" class="back">
                                        <i class="fa fa-angle-left"></i>
                                        <span>Back to product_details</span>
                                    </a>
                                    <div class="form-group discounts_block">
                                        <h3>Rate and discounts</h3>
                                        <h4>PRICE</h4>
                                        <div class="price_block">
                                            <label for="price">$</label>
                                            <input type="text" name="price" id="price">
                                        </div>
                                        <div class="sale_block">
                                            <label class="checkbox_label">Product on sale?</label>
                                            <label class="switch">
                                                <input type="checkbox" name="weekly_offers" class="switch-input">
                                                <span class="switch-label" data-on="On" data-off="Off"></span>
                                                <span class="switch-handle"></span>
                                            </label>
                                        </div>
                                        <div class="discount_block">
                                            <label for="discount_price">Discount Price : $</label>
                                            <input type="text" name="discount_price" id="discount_price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row border_has">
                            <div class="container">
                                <div class="row">
                                    <div class="form-group shipping_block">
                                        <h3>Shipping and logistics</h3>
                                        <p>
                                            All shipping and logistic responsibilities are to be managed by the
                                            boutique. Supply Apparel helps you communicate and update the buyer with the
                                            shipping details but is not responsible for any delays or failed deliveries
                                            from your logistics provider. All delivery charges are added to the buyer’s
                                            invoice at checkout. Please contact your logistics provider for details on
                                            charges and compatible delivery locations.
                                        </p>
                                        <div class="local_block">
                                            <h4>LOCAL (For deliveries within the same country)</h4>
                                            <div class="radio_block">
                                                <div class="radio">
                                                    <input type="radio" name="local_choice" id="local_free"
                                                           value="free">
                                                    <label for="local_free">Free</label>
                                                </div>
                                                <div class="radio">
                                                    <input type="radio" name="local_choice" id="local_charged"
                                                           value="charged" class="charged_shipping">
                                                    <label for="local_charged">Charged</label>
                                                </div>
                                                <div class="input_block">
                                                    <label for="local_charged_value">$</label>
                                                    <input type="text" name="charged_value" id="local_charged_value"/>
                                                </div>
                                            </div>
                                            <div class="delivery_block">
                                                <label for="delivery_duration">Delivery Duration</label>
                                                <input type="text" name="delivery_duration" id="delivery_duration"/>
                                            </div>
                                        </div>
                                        <div class="international_block">
                                            <h4>INTERNATIONAL (Deliveries to other countries)
                                                <div class="checkbox">
                                                    <input id="intern_delivery" type="checkbox"
                                                           class="international_shipping">
                                                    <label for="intern_delivery">International delivery is not available
                                                        for this product
                                                    </label>
                                                </div>
                                            </h4>
                                            <div class="radio_block">
                                                <div class="radio">
                                                    <input type="radio" name="international_choice"
                                                           id="international_free"
                                                           value="free">
                                                    <label for="international_free"> Free </label>
                                                </div>

                                                <div class="radio">
                                                    <input type="radio" name="international_choice"
                                                           id="international_charged"
                                                           value="charged" class="charged_shipping">
                                                    <label for="international_charged"> Charged</label>
                                                </div>
                                                <div class="input_block">
                                                    <label for="intern_charged_value">$</label>
                                                    <input type="text" name="charged_value" id="intern_charged_value"/>
                                                </div>
                                            </div>
                                            <div class="delivery_block">
                                                <label for="delivery_duration">Delivery Duration</label>
                                                <input type="text" name="delivery_duration" id="delivery_duration"/>
                                            </div>
                                        </div>

                                        <div class="logistic_block">
                                            <h4>LOGISTICS PROVIDER (Optional)</h4>
                                            <input type="text" name="logistics_provider"/>
                                        </div>
                                    </div>
                                    <div class="buttons_block">
                                    	<button type="submit" value="publish" class="btn_pusblish">Publish</button>
                                        <a href="#" class="btn_pusblish">Publish</a>
                                        <a href="add_product_step_1.html" class="btn_add_publish">Publish & Add Another
                                            Apparel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                  
                </div>
            </div>
        </div>
    </section>
</main>


 </form>
@endsection



@push('scripts')
   
   <link rel="stylesheet" type="text/css" href="{{ url('lib') }}/select2-4.0.3/dist/css/select2.min.css">
   <script src="{{ url('lib') }}/select2-4.0.3/dist/js/select2.min.js"></script>
   <script type="text/javascript">
   $(".multiple_select").select2({
   		  placeholder:"select",
   		    allowClear: true,
		  tags: true,
		  tokenSeparators: [',', ' ']
		})
   </script>

 @endpush