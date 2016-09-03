@extends('layouts.app')

@section('content')
<main class="add_product_step_1">
    <section class="section_1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form action="" method="post">
                    {{ csrf_field() }}
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
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="category_item_1" type="checkbox">
                                                    <label for="category_item_1">Coat's & Jackets</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="category_item_2" type="checkbox">
                                                    <label for="category_item_2">Dresses</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="category_item_3" type="checkbox">
                                                    <label for="category_item_3">Jeans</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="category_item_4" type="checkbox">
                                                    <label for="category_item_4">Jumpsuits</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="category_item_10" type="checkbox">
                                                    <label for="category_item_10">Shirts & Blouses</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="category_item_9" type="checkbox">
                                                    <label for="category_item_9">Tops & T-Shirts</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="category_item_5" type="checkbox">
                                                    <label for="category_item_5">Trousers & Leggings</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="category_item_6" type="checkbox">
                                                    <label for="category_item_6">Shorts & Skirts</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="filter" id="category_item_7" type="checkbox">
                                                    <label for="category_item_7">Lingerie & Nightware</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox">
                                                    <input name="remember" id="category_item_8" type="checkbox">
                                                    <label for="category_item_8">Shoes</label>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="input_block">
                                            <label for="category">Don't See it listed? Enter the category below</label>
                                            <input type="text" name="category" id="category">
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
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection