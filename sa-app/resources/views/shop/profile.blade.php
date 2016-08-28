@extends("layouts.app")

@section('content')

<main class="owner_create_step_2">
    <section class="section_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-offset-0">
                    <div class="row">
                        <div class="col-sm-3 col-xs-4 left_bar">
                            <div class="menu_block">
                                <div class="item active"><span>Profile</span> <i class="icon"></i></div>
                                <div class="item"><span>Contact Details</span><i class="icon"></i></div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-xs-8 right_bar">
                            <h2>Your Boutique's Profile</h2>
                            <h5>Introduce your boutique to our community</h5>
                            <div class="progress_block">
                                <span>0% completed</span>
                                <div class="progress_input step_1"></div>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                            	{{ csrf_field() }}
                                <div class="form-group {{ $errors->has('shop_name') ? ' has-error' : '' }}">
                                    <h3>BOUTIQUE NAME</h3>
                                    <input type="text" name="shop_name" value="{{old('shop_name')}}" id="boutique_name"
                                           placeholder="Give your boutique a unique name"/>
                               @if ($errors->has('shop_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('shop_name') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                    <h3>ENTER A DESCRIPTION FOR YOUR BOUTIQUE</h3>
                                    <textarea name="description" id="boutique_description">{{old('description')}}</textarea>
                                    @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                	@endif
                                </div>
                                <div class="form-group file_block {{ $errors->has('cover_image') ? ' has-error' : '' }}">
                                    <h3>UPLOAD A COVER PHOTO FOR YOUR BOUTIQUE (minimum size 1440 x 500 px)</h3>
                                    <label for="boutique_photo"></label>
                                    <input type="file" name="cover_image" id="boutique_photo" hidden/>
                                       @if ($errors->has('cover_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cover_image') }}</strong>
                                    </span>
                                	@endif
                                </div>
                                <a href="#" onclick="$(this).closest('form').submit();" class="btn-step">Next</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection