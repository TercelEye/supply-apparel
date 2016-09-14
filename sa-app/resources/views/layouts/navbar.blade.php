 <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#website_navbar_collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class="mobile_right_nav visible-xs">
                    <li class="dropdown language_dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">English <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">French</a></li>
                            <li><a href="#">English</a></li>
                            <li><a href="#">German</a></li>
                            <li><a href="#">Arabian</a></li>
                        </ul>
                    </li>
                    <li class="dropdown currency_dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">USD <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">USD</a></li>
                            <li><a href="#">GBP</a></li>
                        </ul>
                    </li>
                    <li class="icons"><a href="#"><span class="wishlist_icon" title="Wishlist"></span></a></li>
                     <li class="icons"><a href="#" class="cart_open_trigger"><span class="cart_icon has_product"
                                                                                  data-product="{{Cart::totalItems(true)}}"
                                                                                  title="Cart"></span></a></li> 
                </ul>
            </div>

            <div class="collapse navbar-collapse" id="website_navbar_collapse">
                <ul class="nav navbar-nav navbar-right hidden-xs">
                    <li class="dropdown language_dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">English <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">French</a></li>
                            <li><a href="#">English</a></li>
                            <li><a href="#">German</a></li>
                            <li><a href="#">Arabian</a></li>
                        </ul>
                    </li>
                    <li class="dropdown currency_dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">USD <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">USD</a></li>
                            <li><a href="#">GBP</a></li>
                        </ul>
                    </li>
                    <li class="icons"><a href="#"><span class="wishlist_icon" title="Wishlist"></span></a></li>
                      <li class="icons"><a href="#" class="cart_open_trigger"><span class="cart_icon has_product"
                                                                                  data-product="{{Cart::totalItems(true)}}"
                                                                                  title="Cart"></span></a></li> 
                </ul>
                <?php 
$products_types = \App\ProductType::with('category')->where('name','!=','all')->get();
?>
                <ul class="nav navbar-nav navbar-left">
                    @foreach($products_types as $row)
                    <li class="dropdown women_dropdown {{ (Request::is(strtolower($row->name).'-clothing')?"active":"") }}">
                        <a href="{{ url(strtolower($row->name).'-clothing') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">{{$row->name}}</a>
                        <ul class="dropdown-menu">

                        @if(count($row->category->toArray())>0)
                        <?php 
                       $category_col = array_chunk($row->category->toArray(), ceil(count($row->category->toArray()) / 2));
                        ?>
                            <li>
                                @foreach($category_col as $categories)
                                <ul class="list-unstyled">
                                 @foreach($categories as $cat)
                                    <li><a class="" href="{{ url(strtolower($row->name).'-clothing?category[]='.$cat['id'])}}">{{$cat['title']}}</a></li>
                                 @endforeach
                                </ul>
                                @endforeach
                                
                            </li>
                            @endif
                        </ul>
                    </li>
                    @endforeach
                  
                  {{--   <li class="dropdown men_dropdown {{ (Request::is('men-clothing')?"active":"") }}">
                        <a href="{{ url('men-clothing') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Men</a>
                        <ul class="dropdown-menu">
                            <li>
                                <ul class="list-unstyled">
                                    <li><a class="" href="#">Coats & Jackets</a></li>
                                    <li><a class="" href="#">Hats & Caps</a></li>
                                    <li><a class="" href="#">Jeans</a></li>
                                    <li><a class="" href="#">Sweatshirts</a></li>
                                    <li><a class="" href="#">Shirts</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li><a class="" href="#">T-Shirts & Polos</a></li>
                                    <li><a class="" href="#">Suits & Blazers</a></li>
                                    <li><a class="" href="#">Shorts & skirts</a></li>
                                    <li><a class="" href="#">Brief & Underwear</a></li>
                                    <li><a class="" href="#">Shoes</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown kids_dropdown {{ (Request::is('kids-clothing')?"active":"") }}">
                        <a href="{{ url('kids-clothing') }}" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Kids</a>
                        <ul class="dropdown-menu">
                            <li>
                                <ul class="list-unstyled col-sm-6 with_divider no_margin">
                                    <div class="row">
                                        <li>
                                            <h2>Girls</h2>
                                            <ul class="list-unstyled col-md-6 col-sm-12 no_margin">
                                                <li><a class="" href="#">Coats & Jackets</a></li>
                                                <li><a class="" href="#">Dresses</a></li>
                                                <li><a class="" href="#">Jeans</a></li>
                                                <li><a class="" href="#">Jumpsuits</a></li>
                                                <li><a class="" href="#">Pajamas</a></li>
                                            </ul>
                                            <ul class="list-unstyled col-md-6 col-sm-12 no_margin">
                                                <li><a class="" href="#">T-Shits</a></li>
                                                <li><a class="" href="#">Bottoms</a></li>
                                                <li><a class="" href="#">Shorts & Skirts</a></li>
                                                <li><a class="" href="#">Sweaters</a></li>
                                                <li><a class="" href="#">Shoes</a></li>
                                            </ul>
                                        </li>
                                    </div>

                                </ul>
                                <ul class="list-unstyled col-sm-6  no_margin">
                                    <div class="row">
                                        <li>
                                            <h2>Boys</h2>
                                            <ul class="list-unstyled col-md-6 col-sm-12 no_margin">
                                                <li><a class="" href="#">Coats & Jackets</a></li>
                                                <li><a class="" href="#">Hats & Caps</a></li>
                                                <li><a class="" href="#">Sweatshirts</a></li>
                                                <li><a class="" href="#">Shirts</a></li>
                                            </ul>
                                            <ul class="list-unstyled col-md-6 col-sm-12 no_margin">
                                                <li><a class="" href="#">T-Shirts & Polos</a></li>
                                                <li><a class="" href="#">Suits & Blazers</a></li>
                                                <li><a class="" href="#">Shorts & Trousers</a></li>
                                                <li><a class="" href="#">Brief & Underwear</a></li>
                                                <li><a class="" href="#">Shoes</a></li>
                                            </ul>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}

                    <li class="dropdown boutiques_dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Boutiques</a>
                        <ul class="dropdown-menu">
                            <li>
                                <ul class="list-unstyled col-md-6 col-sm-7 with_divider no_margin">
                                    <li>
                                        <div class="row">
                                            <ul class="list-unstyled with_divider col-sm-6 no_margin">
                                                <h2>Boutique Type</h2>
                                                <li><a class="" href="#">Own Labels</a></li>
                                                <li><a class="" href="#">Pre-owned</a></li>
                                                <li><a class="" href="#">Multi Brand</a></li>
                                            </ul>
                                            <ul class="list-unstyled col-sm-6 no_margin">
                                                <h2>Categories</h2>
                                                <li><a class="" href="#">Men</a></li>
                                                <li><a class="" href="#">Women</a></li>
                                                <li><a class="" href="#">Kids</a></li>
                                            </ul>
                                        </div>

                                    </li>
                                </ul>
                                <ul class="list-unstyled col-md-6 col-sm-5 no_margin">
                                    <li>
                                        <h2>Featured Boutiques</h2>
                                        <ul class="list-unstyled col-md-6 col-sm-12 no_margin">
                                            <li><a class="" href="#">Labels & Love</a></li>
                                            <li><a class="" href="#">Forever 21</a></li>
                                            <li><a class="" href="#">Brown Leather</a></li>

                                        </ul>
                                        <ul class="list-unstyled col-md-6 col-sm-12 no_margin">
                                            <li><a class="" href="#">Sophia & Sons</a></li>
                                            <li><a class="" href="#">Trouser Hub</a></li>
                                            <li><a class="" href="#">T-shirt Bangkok</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown look_dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Look Books</a>
                        <ul class="dropdown-menu">
                            <li>
                                <ul class="list-unstyled col-md-6 col-sm-7 with_divider no_margin">
                                    <li>
                                        <div class="row">
                                            <ul class="list-unstyled with_divider col-sm-6  no_margin">
                                                <h2>Boutique Type</h2>
                                                <li><a class="" href="#">Own Labels</a></li>
                                                <li><a class="" href="#">Pre-owned</a></li>
                                                <li><a class="" href="#">Multi Brand</a></li>
                                            </ul>
                                            <ul class="list-unstyled col-sm-6  no_margin">
                                                <h2>Categories</h2>
                                                <li><a class="" href="#">Men</a></li>
                                                <li><a class="" href="#">Women</a></li>
                                                <li><a class="" href="#">Kids</a></li>
                                            </ul>
                                        </div>

                                    </li>
                                </ul>
                                <ul class="list-unstyled col-md-6 col-sm-5 no_margin">
                                    <li>
                                        <h2>Featured Look Books</h2>
                                        <ul class="list-unstyled col-md-6 col-sm-12 no_margin">
                                            <li><a class="" href="#">Labels & Love</a></li>
                                            <li><a class="" href="#">Forever 21</a></li>
                                            <li><a class="" href="#">Brown Leather</a></li>

                                        </ul>
                                        <ul class="list-unstyled col-md-6 col-sm-12 no_margin">
                                            <li><a class="" href="#">Sophia & Sons</a></li>
                                            <li><a class="" href="#">Trouser Hub</a></li>
                                            <li><a class="" href="#">T-shirt Bangkok</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="cart_block">
        @include('products.cart')
    </div>