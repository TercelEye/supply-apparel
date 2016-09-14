@extends('layouts.app')

@section('content')
<main class="checkout checkout_step_2">
    <section class="section_1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                    <div class="row">
                        <div class="checkout_block">
                            <div class="checkout_header">
                                <div class="title">Checkout</div>
                                <div class="breadcrumb_block">
                                    <div class="step">Shipping</div>
                                    >
                                    <div class="step active">Payment Method</div>
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
                                    <ul class="nav nav-tabs  step2_tab" role="tablist">
                                        <li role="presentation" class="card active"><a href="#card" aria-controls="card"
                                                                                  role="tab" data-toggle="tab"></a>
                                        </li>
                                        <li role="presentation" class="paypal"><a href="#paypal" aria-controls="paypal" role="tab"
                                                                   data-toggle="tab"></a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="card">
                                            <form action="" method="post">
                                                <fieldset class="main_field">
                                                    <legend>Card</legend>
                                                    <fieldset class="field">
                                                        <legend>Name on Card</legend>
                                                        <input type="text" name="name" id="name"
                                                               placeholder="Full Name"/>
                                                    </fieldset>
                                                    <fieldset class="field number_block">
                                                        <input type="text" name="card_number" id="card_number"
                                                               placeholder="1111-1111-1111-1112"/>
                                                    </fieldset>
                                                    <fieldset class="field cvc_block">
                                                        <input type="text" class="expiration" name="expiration"
                                                               id="expiration"
                                                               placeholder="MM/YY"/>
                                                        <input type="text" class="cvc" name="cvc" id="cvc"
                                                               placeholder="CVC"/>
                                                    </fieldset>
                                                    <a href="#" class="btn_info"><i></i>
                                                        <span>Your payment information is encrypted</span></a>
                                                    <a href="checkout_step_3.html" class="btn_step">Continue</a>
                                                </fieldset>
                                            </form>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="paypal">
                                            <form action="" method="post">
                                                <fieldset class="main_field">
                                                    <legend>Paypal</legend>
                                                    <fieldset class="field email_block">
                                                        <input type="text" name="paypal_email" id="paypal_email"
                                                               placeholder="Paypal Email"/>
                                                    </fieldset>
                                                    <a href="#" class="btn_info"><i></i>
                                                        <span>Your payment information is encrypted</span></a>
                                                    <a href="checkout_step_3.html" class="btn_step">Continue</a>
                                                </fieldset>
                                            </form>
                                        </div>
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
@stop