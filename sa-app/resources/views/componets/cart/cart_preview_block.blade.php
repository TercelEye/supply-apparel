 <div class="row">
                                    <div class="product_block">
                                    @foreach (Cart::contents() as $item)
                                        <div class="product_item">
                                            <div class="photo" style="background-image: url('{{url($item->image)}}');"></div>
                                            <div class="details">
                                                <div class="name">{{$item->name}} </div>
                                                <div class="type"> 


                                             @if ($item->hasOptions())    
                               @if (isset($item->options['color']) && isset($colour[$item->options['color']]))
                                 {{  $colour[$item->options['color']] }} Color ,
                                @endif

                                 @if (isset($item->options['size']) && isset($size[$item->options['size']]))
                                    {{  $size[$item->options['size']] }} Size
                                 @endif

                                  @endif
                                </div>
                                                <div class="quantity">Quantity: {{ $item->quantity }}</div>
                                            </div>
                                            <div class="price">${{$item->price}}</div>
                                        </div>
                                        @endforeach
                                     
                                    </div>
                                    <div class="price_block">
                                        <div class="subtotal">
                                            <div class="property">Subtotal</div>
                                            <div class="value">${{Cart::total()}}</div>
                                        </div>
                                        <div class="shipping">
                                            <div class="property">Shipping</div>
                                            <div class="value">Free</div>
                                        </div>
                                        <div class="taxes">
                                            {{-- <div class="property">Taxes</div>
                                            <div class="value">12.12</div> --}}
                                        </div>
                                    </div>
                                    <div class="total_block">
                                        <div class="property">Total</div>
                                        <div class="value">${{Cart::total()}}</div>
                                    </div>
                                </div>