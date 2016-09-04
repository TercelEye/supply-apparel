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
                <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown women_dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">Women</a>
                        <ul class="dropdown-menu">
                            <li>
                                <ul class="list-unstyled">
                                    <li><a class="" href="#">Coats & Jackets</a></li>
                                    <li><a class="" href="#">Dresses</a></li>
                                    <li><a class="" href="#">Jeans</a></li>
                                    <li><a class="" href="#">Jumpsuits</a></li>
                                    <li><a class="" href="#">Shirts & Blouses</a></li>
                                </ul>
                                <ul class="list-unstyled">
                                    <li><a class="" href="#">Tops & T-Shirts</a></li>
                                    <li><a class="" href="#">Trousers & Leggings</a></li>
                                    <li><a class="" href="#">Shorts & skirts</a></li>
                                    <li><a class="" href="#">Lingerie & Nightware</a></li>
                                    <li><a class="" href="#">Shoes</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown men_dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
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
                    <li class="dropdown kids_dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
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
                    </li>
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