@extends("layouts.app")

@section('content')

<main class="owner_create_step_1">
    <section class="section_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-offset-0">
                    @include('shared.errors')
                    <div class="row">
                        <h2>Create a Boutique</h2>
                        <h5>Sell your product to millions around the world</h5>
                        <form action="" method="post">
                            <div class="form-group">
                                <h3>Boutique type</h3>
                                <div class="boutique_type_select">
                                    <input type="hidden" name="boutique_type" id="boutique_type"/>
                                    @foreach($boutique_types as $row)
                                        <div class="type" data-type="1">{{$row->name}}</div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <h3>Product type</h3>
                                <div class="product_type_select">
                                    <input type="hidden" name="product_type" id="product_type"/>
                                    @foreach($product_types as $row)
                                    <div class="type" data-type="{{ $row->id }}"><i class="{{ $row->icon }}"></i>{{$row->name }}</div>
                                    @endforeach
                                   
                                </div>
                            </div>
                            <div class="form-group">
                                <h3>your country</h3>
                                <div class="country_select">
                                    <i class="icon"></i>
                                    <select name="country" id="create_boutique_country">
                                    	@foreach(Countries::all() as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <a href="#" onclick="$(this).closest('form').submit();" class="btn-step">Continue</a>
                            <div class="information">
                                <h5>$2000</h5>
                                <p>That's how much you can earn every week</p>
                            </div>
                        </form>
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
</main>

@endsection