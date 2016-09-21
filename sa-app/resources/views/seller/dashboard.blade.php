@extends('layouts.app')
@section('content')
<main class="boutique_empty_page">
 <section class="section_1 owner_menu">

    @include('layouts.seller_navigation')
    </section>
    <section class="section_photo">
        <div class="container">
            <div class="boutique_photo" style="background-image:url({{ url($shop->cover_image) }})"></div>
        </div>
    </section>
    <section class="section_2">
        <div class="container">
            <div class="row">
                <h2>{{ $shop->shop_name }}</h2>
                <h5> {{ $shop->description }}</h5>
            </div>
            <div class="row">
                <div class="social_block">
                    @if($shop->instagram_url!="") <a target="_blank" href="{{ $shop->instagram_url }}" class="social insta"></a> @endif
                    @if($shop->facebook_url!="")  <a target="_blank" href="{{ $shop->facebook_url }}" class="social fb"></a>@endif
                    @if($shop->twitter_url!="") <a target="_blank" href="{{ $shop->twitter_url }}" class="social tw"></a>@endif
                    @if($shop->pinterest_url!="") <a target="_blank" href="{{ $shop->pinterest_url }}" class="social pt"></a>@endif
                </div>
                <div class="followers_number">0 Followers</div>
            </div>
            <div class="row">
                <ul class="nav nav-tabs boutique_tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#products_tab" aria-controls="products" role="tab" data-toggle="tab">Products</a>
                    </li>
                    <li role="presentation">
                        <a href="#look_books" aria-controls="look" role="tab" data-toggle="tab">Look Books</a>
                    </li>
                    <li role="presentation">
                        <a href="#blog_tab" aria-controls="blog" role="tab"
                           data-toggle="tab">Blog</a>
                    </li>
                    <li role="presentation">
                        <a href="#review_tab" aria-controls="review" role="tab"
                           data-toggle="tab">Reviews</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="products_tab">
                            <h4>Starting by adding apparel to your collection</h4>
                            <div class="row">
                                <div class="item empty col-md-3 col-sm-4 col-xs-6">
                                    <a href="{{ url('seller/product/create')}}"><div class="add_item"></div></a>
                                </div>

                                @if($products)
                                    @include('componets.product.admin_product')
                                @endif
                            
                            </div>
                        </div>
                        


                        <div role="tabpanel" class="tab-pane" id="look_books">
                            <h4>Upload your Look Books for potential buyers to browse through</h4>
                            <div class="row">
                                <div class="item empty col-md-3 col-sm-4 col-xs-6">
                                    <a href="{{url('lookbook/create')}}"><div class="add_item"></div></a>
                                </div>
                                

                                @foreach($lookbook as $row)
                                <div class="item col-md-3 col-sm-4 col-xs-6">
                                    <a href="{{url('lookbook/'.$row->id)}}">
                                        <div class="look_item">
                                            <div class="picture_block" style="background-image:url({{$row->image}}); border:1"></div>
                                            <div class="name_block">
                                                <div>
                                                    <i class="item_icon"></i>
                                                    <span>{{$row->title}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item_actions">
                                        <div class="btn-group" role="group" aria-label="">
                                            <a href="{{url('lookbook/edit?id='.$row->id)}}"  class="btn_edit"><i></i></a>
                                            <a href="{{url('lookbook/delete?id='.$row->id)}}" class="btn_delete"><i></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                              

                                

                                
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="blog_tab">
                            <h4>Make a style statement with your outlook on fashion</h4>
                            <div class="row">
                                <div class="item empty col-md-3 col-sm-4 col-xs-6">
                                    <a href="{{url('blog/create')}}"><div class="add_item"><span></span></div></a>
                                </div>

                                @foreach($blog as $row)
                                <div class="item col-md-3 col-sm-4 col-xs-6">
                                    <a href="#">
                                        <div class="blog_item">
                                            <div class="picture_block" style="background-image:url({{url($row->photo)}})"></div>
                                            <div class="details_block">
                                                <div class="name_block">
                                                    {{$row->title}}
                                                </div>
                                                <div class="desc_block">
                                                    {{substr($row->text,0,150)}}
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="item_actions">
                                        <div class="btn-group" role="group" aria-label="">
                                            <a href="{{url('blog/edit?id='.$row->id)}}"  class="btn_edit"><i></i></a>
                                            <a href="{{url('blog/delete?id='.$row->id)}}"  class="btn_delete"><i></i></a>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="review_tab">
                            <h4>Read and respond to review from buyers</h4>
                            <div class="row">
                                <div class="item col-xs-12">
                                    <div class="person_item">
                                        <div class="person_name_block">
                                            <div class="name">Person Name</div>
                                            <div class="review_block">
                                                <span class="glyphicon glyphicon-star active"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                            </div>
                                        </div>
                                        <div class="person_desc">
                                            <p>
                                                Lorem ipsum dolor sit amet, quem probo vim eu. Et pri vidisse virtute
                                                facilis, modus harum cu mel. Ferri referrentur duo ut, cu nulla referrentur
                                                pro, mea in iudico petentium vituperatoribus. Constituto voluptatum
                                                referrentur ex nam, est eu reque virtute efficiantur, dolore alterum per at.
                                                Mel in mentitum luptatum, usu ad elitr praesent moderatius. Eos ei saperet
                                                expetenda, at falli simul tempor vis, vim modo rationibus cu. Aliquid
                                                omittantur id pro, ea autem posse decore vix, idque scripta feugiat te mea.
                                                Pri ad aliquid aliquando, qui et brute putant adolescens.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply_block">
                                        <textarea name="reply_text_1" placeholder="Reply to this review"></textarea>
                                        <div class="owner_item">
                                            <div class="owner_name_block">
                                                <div class="name">Your reply</div>
                                            </div>
                                            <div class="owner_desc">
                                                <p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item_actions">
                                        <div class="btn-group" role="group" aria-label="">
                                            <a class="btn_reply"><i></i><span>Reply</span></a>
                                            <a href="#" class="btn_flag"><i></i><span>Flag</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-xs-12">
                                    <div class="person_item">
                                        <div class="person_name_block">
                                            <div class="name">Person Name</div>
                                            <div class="review_block">
                                                <span class="glyphicon glyphicon-star active"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                            </div>
                                        </div>
                                        <div class="person_desc">
                                            <p>
                                                Lorem ipsum dolor sit amet, quem probo vim eu. Et pri vidisse virtute
                                                facilis, modus harum cu mel. Ferri referrentur duo ut, cu nulla referrentur
                                                pro, mea in iudico petentium vituperatoribus. Constituto voluptatum
                                                referrentur ex nam, est eu reque virtute efficiantur, dolore alterum per at.
                                                Mel in mentitum luptatum, usu ad elitr praesent moderatius. Eos ei saperet
                                                expetenda, at falli simul tempor vis, vim modo rationibus cu. Aliquid
                                                omittantur id pro, ea autem posse decore vix, idque scripta feugiat te mea.
                                                Pri ad aliquid aliquando, qui et brute putant adolescens.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply_block">
                                        <textarea name="reply_text_1" placeholder="Reply to this review"></textarea>
                                        <div class="owner_item">
                                            <div class="owner_name_block">
                                                <div class="name">Your reply</div>
                                            </div>
                                            <div class="owner_desc">
                                                <p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item_actions">
                                        <div class="btn-group" role="group" aria-label="">
                                            <a class="btn_reply"><i></i><span>Reply</span></a>
                                            <a href="#" class="btn_flag"><i></i><span>Flag</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-xs-12">
                                    <div class="person_item">
                                        <div class="person_name_block">
                                            <div class="name">Person Name</div>
                                            <div class="review_block">
                                                <span class="glyphicon glyphicon-star active"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                            </div>
                                        </div>
                                        <div class="person_desc">
                                            <p>
                                                Lorem ipsum dolor sit amet, quem probo vim eu. Et pri vidisse virtute
                                                facilis, modus harum cu mel. Ferri referrentur duo ut, cu nulla referrentur
                                                pro, mea in iudico petentium vituperatoribus. Constituto voluptatum
                                                referrentur ex nam, est eu reque virtute efficiantur, dolore alterum per at.
                                                Mel in mentitum luptatum, usu ad elitr praesent moderatius. Eos ei saperet
                                                expetenda, at falli simul tempor vis, vim modo rationibus cu. Aliquid
                                                omittantur id pro, ea autem posse decore vix, idque scripta feugiat te mea.
                                                Pri ad aliquid aliquando, qui et brute putant adolescens.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply_block">
                                        <textarea name="reply_text_1" placeholder="Reply to this review"></textarea>
                                        <div class="owner_item">
                                            <div class="owner_name_block">
                                                <div class="name">Your reply</div>
                                            </div>
                                            <div class="owner_desc">
                                                <p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item_actions">
                                        <div class="btn-group" role="group" aria-label="">
                                            <a class="btn_reply"><i></i><span>Reply</span></a>
                                            <a href="#" class="btn_flag"><i></i><span>Flag</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-xs-12">
                                    <div class="person_item">
                                        <div class="person_name_block">
                                            <div class="name">Person Name</div>
                                            <div class="review_block">
                                                <span class="glyphicon glyphicon-star active"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                            </div>
                                        </div>
                                        <div class="person_desc">
                                            <p>
                                                Lorem ipsum dolor sit amet, quem probo vim eu. Et pri vidisse virtute
                                                facilis, modus harum cu mel. Ferri referrentur duo ut, cu nulla referrentur
                                                pro, mea in iudico petentium vituperatoribus. Constituto voluptatum
                                                referrentur ex nam, est eu reque virtute efficiantur, dolore alterum per at.
                                                Mel in mentitum luptatum, usu ad elitr praesent moderatius. Eos ei saperet
                                                expetenda, at falli simul tempor vis, vim modo rationibus cu. Aliquid
                                                omittantur id pro, ea autem posse decore vix, idque scripta feugiat te mea.
                                                Pri ad aliquid aliquando, qui et brute putant adolescens.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reply_block">
                                        <textarea name="reply_text_1" placeholder="Reply to this review"></textarea>
                                        <div class="owner_item">
                                            <div class="owner_name_block">
                                                <div class="name">Your reply</div>
                                            </div>
                                            <div class="owner_desc">
                                                <p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item_actions">
                                        <div class="btn-group" role="group" aria-label="">
                                            <a class="btn_reply"><i></i><span>Reply</span></a>
                                            <a href="#" class="btn_flag"><i></i><span>Flag</span></a>
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
@endsection
