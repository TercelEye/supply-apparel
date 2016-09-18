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
                                                        <div class="type">Reverse Denim + Brown Leather</div>
                                                        <div class="quantity">Quantity: {{$row->qty}}</div>
                                                    </div>
                                                    <div class="price">${{$row->total}}</div>
                                                </div>
                                            </td>
                                            <td>{{$row->product->shop->shop_name}}</td>
                                            <td>203, Silicon Oasis, New Heights Ave, Dubai, UAE, 401202</td>
                                            <td class="status"><!--  shipped |  decision    -->
                                                Purchased
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
                                            <td class="status shipped"> <!-- shipped |  decision    -->
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