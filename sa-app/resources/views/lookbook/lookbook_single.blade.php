@extends('layouts.app')


@section('content')


<main class="look_book_item">
    <section class="section_1">

    <iframe src="{{url('lib')}}/jquery_newspaper_flipbook/responsive.php?pdf={{url($lookbook->pdf)}}" width="100%" height="100%" frameBorder="0"></iframe>

        <div class="container-fluid">
            <div class="row">
              {{--   <div class="reader_block">
                    <object width="100%" height="100%" type="application/pdf" data="ftp://ftp.dante.de/tex-archive/macros/latex/contrib/flowfram/samples/sample-brochure.pdf#view=FitV" id="pdf_content">
                    </object>
                </div> --}}

<div class="col-md-12">
	
</div>




            </div>
        </div>
    </section>
    <section class="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-12 col-md-offset-0">
                    <div class="row">
                        <h2>Similar Look Books</h2>
                    </div>
                  <div class="row">
                      <div class="item col-md-3 col-sm-4 col-xs-6">
                          <a href="look_book_page.html">
                              <div class="look_item">
                                  <div class="picture_block"></div>
                                  <div class="name_block">
                                      <div>
                                          <i class="item_icon"></i>
                                          <span>Bangkok</span>
                                      </div>
                                  </div>
                              </div>
                          </a>

                      </div>
                      <div class="item col-md-3 col-sm-4 col-xs-6">
                          <a href="#">
                              <div class="look_item">
                                  <div class="picture_block"></div>
                                  <div class="name_block">
                                      <div>
                                          <i class="item_icon"></i>
                                          <span>Bangkok Tshirts</span>
                                      </div>
                                  </div>
                              </div>
                          </a>

                      </div>
                      <div class="item col-md-3 col-sm-4 col-xs-6">
                          <a href="#">
                              <div class="look_item">
                                  <div class="picture_block"></div>
                                  <div class="name_block">
                                      <div>
                                          <i class="item_icon"></i>
                                          <span>Bangkok Tshirts</span>
                                      </div>
                                  </div>
                              </div>
                          </a>

                      </div>
                      <div class="item col-md-3 col-sm-4 col-xs-6">
                          <a href="#">
                              <div class="look_item">
                                  <div class="picture_block"></div>
                                  <div class="name_block">
                                      <div>
                                          <i class="item_icon"></i>
                                          <span>Bangkok Tshirts</span>
                                      </div>
                                  </div>
                              </div>
                          </a>

                      </div>
                      <div class="item col-md-3 col-sm-4 col-xs-6">
                          <a href="#">
                              <div class="look_item">
                                  <div class="picture_block"></div>
                                  <div class="name_block">
                                      <div>
                                          <i class="item_icon"></i>
                                          <span>Bangkok Tshirts</span>
                                      </div>
                                  </div>
                              </div>
                          </a>

                      </div>
                      <div class="item col-md-3 col-sm-4 col-xs-6">
                          <a href="#">
                              <div class="look_item">
                                  <div class="picture_block"></div>
                                  <div class="name_block">
                                      <div>
                                          <i class="item_icon"></i>
                                          <span>Bangkok Tshirts</span>
                                      </div>
                                  </div>
                              </div>
                          </a>

                      </div>
                      <div class="item col-md-3 col-sm-4 col-xs-6">
                          <a href="#">
                              <div class="look_item">
                                  <div class="picture_block"></div>
                                  <div class="name_block">
                                      <div>
                                          <i class="item_icon"></i>
                                          <span>Bangkok Tshirts</span>
                                      </div>
                                  </div>
                              </div>
                          </a>

                      </div>
                      <div class="item col-md-3 col-sm-4 col-xs-6">
                          <a href="#">
                              <div class="look_item">
                                  <div class="picture_block"></div>
                                  <div class="name_block">
                                      <div>
                                          <i class="item_icon"></i>
                                          <span>Bangkok Tshirts</span>
                                      </div>
                                  </div>
                              </div>
                          </a>

                      </div>
                      <div class="item col-md-3 col-sm-4 col-xs-6">
                          <a href="#">
                              <div class="look_item">
                                  <div class="picture_block"></div>
                                  <div class="name_block">
                                      <div>
                                          <i class="item_icon"></i>
                                          <span>Bangkok Tshirts</span>
                                      </div>
                                  </div>
                              </div>
                          </a>

                      </div>
                      <div class="item col-md-3 col-sm-4 col-xs-6">
                          <a href="#">
                              <div class="look_item">
                                  <div class="picture_block"></div>
                                  <div class="name_block">
                                      <div>
                                          <i class="item_icon"></i>
                                          <span>Bangkok Tshirts</span>
                                      </div>
                                  </div>
                              </div>
                          </a>

                      </div>
                      <div class="item col-md-3 col-sm-4 col-xs-6">
                          <a href="#">
                              <div class="look_item">
                                  <div class="picture_block"></div>
                                  <div class="name_block">
                                      <div>
                                          <i class="item_icon"></i>
                                          <span>Bangkok Tshirts</span>
                                      </div>
                                  </div>
                              </div>
                          </a>

                      </div>
                      <div class="item col-md-3 col-sm-4 col-xs-6">
                          <a href="#">
                              <div class="look_item">
                                  <div class="picture_block"></div>
                                  <div class="name_block">
                                      <div>
                                          <i class="item_icon"></i>
                                          <span>Bangkok Tshirts</span>
                                      </div>
                                  </div>
                              </div>
                          </a>

                      </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
</main>

@stop



@push('scripts')
<script type="text/javascript">
	jQuery(function($){
  var lastHeight = 0, curHeight = 0, $frame = $('iframe:eq(0)');
  setInterval(function(){
    curHeight = $frame.contents().find('body').height();
    if ( curHeight != lastHeight ) {
      $frame.css('height', (lastHeight = curHeight) + 'px' );
    }
  },500);
});
</script>
	
@endpush