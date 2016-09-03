@extends('layouts.app')

@section('content')
<main class="add_product_step_1">
    <div class="row border_has">
        <div class="container">
            <div class="row">
                <div class="form-group colour_block">
                    <h3>
                        COLOUR
                    </h3>
                    <div class="color_list product_color_list">
                        <div class="color c1" data-color-id="1">
                        </div>
                        <div class="color c2" data-color-id="2">
                        </div>
                        <div class="color c3" data-color-id="3">
                        </div>
                        <div class="color c4" data-color-id="4">
                        </div>
                        <div class="color none" data-color-id="5">
                            None
                        </div>
                        <input class="color_input" name="color" type="hidden"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row border_has">
        <div class="container">
            <div class="row">
                <div class="form-group file_block">
                    <h3>
                        UPLOAD PHOTOS (minimum size 504 x 504 px)
                    </h3>
                    <div class="file_input">
                        <label for="product_photos" title="Upload photo">
                            <i>
                            </i>
                        </label>
                        <input id="product_photos" name="product_photos" type="file">
                        </input>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="buttons_block">
        <button class="btn_pusblish" type="submit" value="publish">
            Publish
        </button>
        <a class="btn_pusblish" href="#">
            Publish
        </a>
        <a class="btn_add_publish" href="add_product_step_1.html">
            Publish & Add Another
                                            Apparel
        </a>
    </div>
</main>
@endsection
