@extends('layouts.app')

@section('content')

<main class="owner_create_step_4">
    <section class="section_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-offset-0">
                    <div class="row">
                        <h2>Membership Packages</h2>
                        <h5>You're almost there! Select the package that best suits you setup your boutique</h5>
                        <div class="col-md-4 col-sm-6 col-xs-6 item">
                            <div class="item_block">
                                <div class="item_header free">
                                    Free
                                </div>
                                <div class="item_body">
                                    <div class="plan_features">
                                        Unlimited products
                                    </div>
                                    <div class="plan_features">
                                        1 look book
                                    </div>
                                    <div class="plan_features">
                                        9am - 6pm customer support
                                    </div>
                                    <div class="plan_features">
                                        <span>20% commission per purchase</span>
                                        <form method="post" action="{{ url('membership/plans/1') }}">
                                        {{ csrf_field() }}

                                        <button type="submit" name="save" class="btn-select">Select</button> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 item">
                            <div class="item_block">
                                <div class="item_header">
                                    <h3>$10</h3>
                                    <p>per month</p>
                                </div>
                                <div class="item_body">
                                    <div class="plan_features">
                                        Unlimited products
                                    </div>
                                    <div class="plan_features">
                                        3 look books
                                    </div>
                                    <div class="plan_features">
                                        24 x 7 customer support
                                    </div>
                                    <div class="plan_features">
                                        <span>15% commission per purchase</span>
                                        <form method="post" action="{{ url('membership/plans/2') }}">
                                        {{ csrf_field() }}

                                        <button type="submit" name="save" class="btn-select">Select</button> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-6 item">
                            <div class="item_block">
                                <div class="item_header">
                                    <h3>$30</h3>
                                    <p>per month</p>
                                </div>
                                <div class="item_body">
                                    <div class="plan_features">
                                        Unlimited products
                                    </div>
                                    <div class="plan_features">
                                        Unlimited look books
                                    </div>
                                    <div class="plan_features">
                                        24 x 7 customer support
                                    </div>
                                    <div class="plan_features">
                                        <span>0% commission per purchase</span>
                                         <form method="post" action="{{ url('membership/plans/3') }}">
                                        {{ csrf_field() }}

                                        <button type="submit" name="save" class="btn-select">Select</button> 
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection