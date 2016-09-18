 <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Product Bought</th>
                                            <th>Boutique</th>
                                            <th>Delivery Address</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                @foreach($products_bought as $order)

                                   @foreach($order->items as $row)

                                   <?php 
$product_image = (isset($row->product->images->first()->name)? url($row->product->images->first()->name) : url("assets/img/No-image-found.jpg")); 
?>

                                        <tr>
                                            <td class="product_block">
                                                <div class="product_item">
                                        <div class="photo" style="background-image:url({{$product_image }})"></div>
                                                    <div class="details">
                                                        <div class="name">{{$row->product->title}}</div>
                                                        <div class="type">{{ $row->get_colour->name or "" }} 
                                                        @if($row->get_size!="")
                                                        ( {{ $row->get_size->title or "" }} )
                                                        @endif

                                                        </div>
                                                        <div class="quantity">Quantity: {{$row->qty}}</div>
                                                    </div>
                                                    <div class="price">${{$row->total}}</div>
                                                </div>
                                            </td>
                                            <td>{{$row->product->shop->shop_name}}</td>
                                            <td>{{$order->shipping_address}}</td>
                                            <td class="status"><!--  shipped |  decision    -->
                                                Purchased

<span>Shipped</span>


                                                 <a data-toggle="modal" data-id="3" data-target="#shipped_modal_{{$row->id}}"
                                                   class="btn_view">View Details</a>

<div id="shipped_modal_{{$row->id}}" class="modal fade shipped_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group title_block">
                <span>View Details</span>
            </div>
            <div class="form-group first_block">
                <h4>Shipping Date</h4>
                <input type="text" name="shipping_date" value="04 - November - 2015">
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
                                            </td>
                                        </tr>
                                          @endforeach 
                                 @endforeach
                                        <tr>
                                            <td class="product_block">
                                                <div class="product_item">
                                                    <div class="photo"></div>
                                                    <div class="details">
                                                        <div class="name">The Twill Snap Backpack</div>
                                                        <div class="type">Reverse Denim + Brown Leather</div>
                                                        <div class="quantity">Quantity: 1</div>
                                                    </div>
                                                    <div class="price">$235</div>
                                                </div>
                                            </td>
                                            <td>The Summer Show Collection</td>
                                            <td>203, Silicon Oasis, New Heights Ave, Dubai, UAE, 401202</td>
                                            <td class="status decision"> <!-- shipped |  decision    -->
                                                <span>Shipped</span>
                                                <a data-toggle="modal" data-id="3" data-target="#shipped_modal"
                                                   class="btn_view">View Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product_block">
                                                <div class="product_item">
                                                    <div class="photo"></div>
                                                    <div class="details">
                                                        <div class="name">The Twill Snap Backpack</div>
                                                        <div class="type">Reverse Denim + Brown Leather</div>
                                                        <div class="quantity">Quantity: 1</div>
                                                    </div>
                                                    <div class="price">$235</div>
                                                </div>
                                            </td>
                                            <td>The Summer Show Collection</td>
                                            <td>203, Silicon Oasis, New Heights Ave, Dubai, UAE, 401202</td>
                                            <td class="status shipped"><!-- shipped |  decision    -->
                                                <span>Shipped</span>
                                                <a data-toggle="modal" data-id="2" data-target="#shipped_modal"
                                                   class="btn_view">View Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product_block">
                                                <div class="product_item">
                                                    <div class="photo"></div>
                                                    <div class="details">
                                                        <div class="name">The Twill Snap Backpack</div>
                                                        <div class="type">Reverse Denim + Brown Leather</div>
                                                        <div class="quantity">Quantity: 1</div>
                                                    </div>
                                                    <div class="price">$235</div>
                                                </div>
                                            </td>
                                            <td>The Summer Show Collection</td>
                                            <td>203, Silicon Oasis, New Heights Ave, Dubai, UAE, 401202</td>
                                            <td class="status shipped"><!-- shipped |  decision    -->
                                                <span>Delivered</span>
                                                <a data-toggle="modal" data-id="1" data-target="#delivered_modal"
                                                   class="btn_view">View Details</a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>