@extends('layouts.app')

@section('content')
<main class="checkout checkout_step_3">
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
                                    <div class="step">Payment Method</div>
                                    >
                                    <div class="step active">Cofirmation</div>
                                </div>
                                <div class="close_button"><span></span></div>
                            </div>
                            <div class="confirmation_block">
                                <div class="icon"><span></span></div>
                                <div class="title">Thank you for shopping</div>
                                <div class="desc">
                                    Your order has been sent to the boutique and you should receive a confirmation email
                                    soon. Once your order has been shipped, you will be sent a tracking number to track
                                    your order. Continue shopping for the best apparel!
                                </div>
                                <a href="{{url('home')}}" class="btn_step">Continue</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@stop