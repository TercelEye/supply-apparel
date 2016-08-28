@extends("layouts.app")

@section('content')

<main class="owner_create_step_3">
    <section class="section_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-offset-0">
                    <div class="row">
                        <div class="col-sm-3 col-xs-4 left_bar">
                            <div class="menu_block">
                                <div class="item"><span>Profile</span> <i class="icon"></i></div>
                                <div class="item active"><span>Contact Details</span><i class="icon"></i></div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-xs-8 right_bar">
                            <h2>Your Boutique's Profile</h2>
                            <h5>Introduce your boutique to our community</h5>
                            <div class="progress_block">
                                <span>50% completed</span>
                                <div class="progress_input step_2"></div>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                               @include('shared.errors')

                                <div class="form-group">
                                    <h3>CONTACT NUMBER</h3>
                                    <div class="contact_number_block">
                                        <div class="country_prefix">
                                            <div class="ui selection dropdown" id="country_prefix_dropdown">
                                                <i class="dropdown icon"></i>
                                                <div class="default text">
                                                    <div class="logo"
                                                         style="background-image: url('img/icons/us.png')"></div>
                                                </div>
                                                <div class="menu">
                                               @foreach(Countries::all() as $row)
                                                    <div class="item" data-logo="{{ url('flags/'.$row->flag) }}" data-value="{{ $row->calling_code }}">
                                                        <span>{{ $row->name }}</span>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <input type="text" value="{{old('number_prefix')}}" readonly placeholder="+1" name="number_prefix" id="number_prefix"/>
                                        </div>
                                        <input type="text" value="{{ old('contact_number') }}" name="contact_number" id="contact_number"
                                               placeholder="000 - 000 - 0000"/>
                                    </div>
                                </div>
                                <div class="form-group email_block">
                                    <h3>EMAIL ADDRESS</h3>
                                    <input type="email" value="{{old('email_address')}}" name="email_address" id="email_address"
                                           placeholder="boutique@email.com"/>
                                </div>
                                <div class="form-group social_block">
                                    <h3>SOCIAL MEDIA PAGES</h3>
                                    <div class="social_item">
                                        <i class="icon fb"></i>
                                        <input type="text" value="{{old('facebook_url')}}" name="facebook_url" id="fb_url"
                                               placeholder="http://www.facebook.com/"/>
                                    </div>
                                    <div class="social_item">
                                        <i class="icon tw"></i>
                                        <input type="text" value="{{old('twitter_url')}}" name="twitter_url" id="tw_url"
                                               placeholder="http://www.twitter.com/"/>
                                    </div>
                                    <div class="social_item">
                                        <i class="icon insta"></i>
                                        <input type="text" value="{{old('instagram_url')}}" name="instagram_url" id="insta_url"
                                               placeholder="http://www.instagram.com/"/>
                                    </div>
                                    <div class="social_item">
                                        <i class="icon pt"></i>
                                        <input type="text" value="{{old('pinterest_url')}}" name="pinterest_url" id="pt_url"
                                               placeholder="http://www.pinterest.com/"/>
                                    </div>
                                </div>
                                <a onclick="$(this).closest('form').submit();" class="btn-step">Create your boutique</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection