@extends('layouts.app')

@section('content')

<div id="delivered_modal" class="modal fade delivered_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group title_block">
                <span>View Details</span>
            </div>
            <div class="form-group first_block">
                <h4>Delivery Date</h4>
                <input type="text" name="delivery_date" value="04 - November - 2015">
            </div>
            <div class="form-group">
                <h4>Tracking Number</h4>
                <input type="text" name="tracking_number" value="0189902990384">
            </div>
            <div class="form-group">
                <h4>Logistics Provider</h4>
                <input type="text" name="logistics_provider" value="DedEX">
            </div>
        </form>
    </div>
</div>
<div id="update_modal" class="modal fade update_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group title_block">
                <span>Update Order</span>
            </div>
            <div class="form-group first_block">
                <h4>Tracking Number</h4>
                <input type="text" name="tracking_number" placeholder="Enter Tracking Number">
            </div>
            <div class="form-group">
                <h4>Logistics Provider</h4>
                <input type="text" name="logistics_provider" placeholder="Enter Logistics Provider">
            </div>
            <div class="form-group save_block">
                <button type="submit" class="btn_update">Update</button>
            </div>
            <div class="form-group terms_block">
                <p>
                    Clicking on “update” will sent the customer a notification about the shipping details.
                </p>
            </div>
        </form>
    </div>
</div>
<div id="reject_modal" class="modal fade reject_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group title_block">
                <span>Reject Order</span>
            </div>
            <div class="form-group first_block">
                <h4>Reason for Rejecting Order</h4>
                <div class="ui selection dropdown" id="reject_reason_select">
                    <input type="hidden" name="reason">
                    <i class="dropdown icon"></i>
                    <div class="default text">Out Of Stock</div>
                    <div class="menu">
                        <div class="item active selected" data-value="1">Out Of Stock</div>
                        <div class="item" data-value="2">Problem with Logistics</div>
                        <div class="item" data-value="0">Order Placed by Mistake</div>
                    </div>
                </div>
            </div>
            <div class="form-group save_block">
                <button type="submit" class="btn_reject_order">Reject Order</button>
            </div>
            <div class="form-group terms_block">
                <p>
                    Clicking on “Reject Order” will send the a refund to the customer and a notification about the
                    status.
                </p>
            </div>
        </form>
    </div>
</div>


<main class="boutique_orders">
    <section class="section_1 owner_menu">
        @include('layouts.seller_navigation')
    </section>
    <section class="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">
                    <ul class="nav nav-tabs orders_tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#products_bought" aria-controls="bought" role="tab"
                               data-toggle="tab">Products Bought</a>
                        </li>
                        <li role="presentation">
                            <a href="#products_sold" aria-controls="sold" role="tab" data-toggle="tab">Products Sold</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="products_bought">
                    		@include('order.products_bought')
                        </div>
                        <div role="tabpanel" class="tab-pane" id="products_sold">
                          	@include('order.products_sold')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@stop