@extends('layouts/app')
<?php 
$colour = \App\Colour::pluck('name','id');
$size = \App\Size::pluck('title','id'); 
//dd($colour);
?>
@section('content')
<main class="checkout checkout_step_1">
    <section class="section_1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                    <div class="row">
                        <div class="checkout_block">
                            <div class="checkout_header">
                                <div class="title">Checkout</div>
                                <div class="breadcrumb_block">
                                    <div class="step active">Shipping</div>
                                    >
                                    <div class="step">Payment Method</div>
                                    >
                                    <div class="step">Cofirmation</div>
                                </div>
                                <div class="close_button"><span></span></div>
                            </div>
                            <div class="col-sm-push-6 col-sm-6 col-xs-push-6 col-xs-6 cart_preview_block">
                                @include('componets.cart.cart_preview_block')
                               
                            </div>
                            <div class="col-sm-pull-6 col-sm-6 col-xs-pull-6 col-xs-6 step_block">
                                <div class="row">
                                    <form action="" method="post">
                                        @include('shared.errors')
                                        <fieldset class="main_field">
                                            <legend>Address</legend>
                                            <fieldset class="field">
                                                <legend>Name</legend>
                                                <input type="text" value="{{ ($shipping!=""?$shipping->name : "")}}" name="name" id="name" placeholder="Full Name"/>
                                            </fieldset>
                                            <fieldset class="field">
                                                <legend>Street</legend>
                                                <input type="text" value="{{ ($shipping!=""?$shipping->street : "")}}" name="street" id="street"
                                                       placeholder="Your Address"/>
                                            </fieldset>
                                            <fieldset class="field">
                                                <legend>City</legend>
                                                <input value="{{ ($shipping!=""?$shipping->city : "")}}" type="text" name="city" id="city" placeholder="City"/>
                                            </fieldset>
                                            <fieldset class="field">
                                                <legend>Country</legend>
                                                  <select name="country_id" class="form-control" id="create_boutique_country">
                                        <option value="" disabled="" selected="">select your country</option>
                                        @foreach(Countries::all() as $country)
                                        <option {{ ($shipping!="" && $shipping->country_id == $country->id?"selected" : "")}} value="{{$country->id}}">{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                             {{--    <div class="ui selection dropdown country_dropdown"
                                                     id="country_dropdown_step_1">
                                                    <i class="dropdown icon"></i>
                                                    <input type="hidden" name="country" id="country">
                                                    <div class="default text">
                                                        United States of America
                                                    </div>
                                                    <div class="menu">
                                                        <div class="item active selected" data-value="1">
                                                            <span>United States of America</span>
                                                        </div>
                                                        <div class="item" data-value="2">
                                                            <span>Moldova</span>
                                                        </div>
                                                        <div class="item" data-value="2">
                                                            <span>United Arab Emirates</span>
                                                        </div>
                                                        <div class="item" data-value="2">
                                                            <span>Russia</span>
                                                        </div>
                                                        <div class="item" data-value="2">
                                                            <span>Saint Vincent and the Grenadines</span>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </fieldset>
                                               {{ csrf_field() }}
                                            <input type="submit" class="btn_step" name="" value="Continue">
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@stop