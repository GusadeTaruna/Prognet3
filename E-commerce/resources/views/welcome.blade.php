@extends('layout.landinglayout')

@section('content')

<!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
<!-- ========================================== SECTION – HERO ========================================= -->        
                <div id="hero">
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                        <div class="item" style="background-image: url({{url('User/images/sliders/01.jpg')}});">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="big-text fadeInDown-1">
                                        The new <span class="highlight">imac</span> for you
                                    </div>
                                    <div class="excerpt fadeInDown-2 hidden-xs">
                                        <span>21.5-Inch Now Starting At $1099 </span>
                                        <span>27-Inch Starting At $1799</span>
                                    </div>
                                    <div class="button-holder fadeInDown-3">
                                        <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                                    </div>
                                </div><!-- /.caption -->
                            </div><!-- /.container-fluid -->
                        </div><!-- /.item -->
                        <div class="item" style="background-image: url({{ url('User/images/sliders/01.jpg')}});">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">
                                    <div class="big-text fadeInDown-1">
                                        The new <span class="highlight">imac</span> for you
                                    </div>
                                    <div class="excerpt fadeInDown-2 hidden-xs">
                                        <span>21.5-Inch Now Starting At $1099 </span>
                                        <span>27-Inch Starting At $1799</span>
                                    </div>
                                    <div class="button-holder fadeInDown-3">
                                        <a href="index6c11.html?page=single-product" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a>
                                    </div>
                                </div><!-- /.caption -->
                            </div><!-- /.container-fluid -->
                        </div><!-- /.item -->
                    </div><!-- /.owl-carousel -->
                </div><!-- /.hero -->
<!-- ========================================= SECTION – HERO : END ========================================= -->   
            </div>

            <!-- ============================================== NEW PRODUCT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="sidebar-widget wow fadeInUp outer-bottom-vs">
                    <h3 class="section-title">NEW PRODUCT</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s1.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s1.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                        <div class="tag tag-micro new">
                                                            <span>new</span>
                                                        </div>
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Asus Zenphone 6</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span>
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s1.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s1.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Asus Zenphone 6</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span>
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s2.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s2.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Apple Iphone 5s</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span>
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s2.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s2.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                        <div class="tag tag-micro sale">
                                                            <span>sale</span>
                                                        </div>
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Apple Iphone 5s</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span>
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s3.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s3.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                        <div class="tag tag-micro hot">
                                                            <span>hot</span>
                                                        </div>
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Canon EOS 60D</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span>
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s3.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s3.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Canon EOS 60D</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span> 
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s2.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s2.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                        <div class="tag tag-micro hot">
                                                            <span>hot</span>
                                                        </div>
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                            <div class="col col-xs-7">
                                                <div class="product-info">
                                                    <h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="product-price"> 
                                                        <span class="price">
                                                            $650.99             
                                                        </span>
                                                    </div><!-- /.product-price -->
                                                    <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                </div>
                                            </div><!-- /.col -->
                                        </div><!-- /.product-micro-row -->
                                    </div><!-- /.product-micro -->
                                </div>
                                <div class="product">
                                    <div class="product-micro">
                                        <div class="row product-micro-row">
                                            <div class="col col-xs-5">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="{{ url('User/images/products/s2.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                            <img data-echo="{{ url('User/images/products/s2.jpg')}}" src="User/images/blank.gif" alt="">
                                                            <div class="zoom-overlay"></div>
                                                        </a>                    
                                                    </div><!-- /.image -->
                                                </div><!-- /.product-image -->
                                            </div><!-- /.col -->
                                            <div class="col col-xs-7">
                                                <div class="product-info">
                                                    <h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="product-price"> 
                                                        <span class="price">
                                                            $650.99             
                                                        </span>
                                                    </div><!-- /.product-price -->
                                                    <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                </div>
                                            </div><!-- /.col -->
                                        </div><!-- /.product-micro-row -->
                                    </div><!-- /.product-micro -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.sidebar-widget-body -->
            </div><!-- /.sidebar-widget -->

<!-- ============================================== New Products : END ============================================== -->   
<!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
        </div><!-- /.homebanner-holder -->
        <!-- ============================================== SPECIAL OFFER ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="sidebar-widget wow fadeInUp outer-bottom-vs">
                    <h3 class="section-title">SPECIAL OFFER</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s1.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s1.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                        <div class="tag tag-micro new">
                                                            <span>new</span>
                                                        </div>
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Asus Zenphone 6</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span>
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s1.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s1.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Asus Zenphone 6</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span>
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s2.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s2.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Apple Iphone 5s</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span>
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s2.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s2.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                        <div class="tag tag-micro sale">
                                                            <span>sale</span>
                                                        </div>
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Apple Iphone 5s</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span>
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s3.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s3.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                        <div class="tag tag-micro hot">
                                                            <span>hot</span>
                                                        </div>
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Canon EOS 60D</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span>
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s3.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s3.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Canon EOS 60D</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span> 
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s2.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s2.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                        <div class="tag tag-micro hot">
                                                            <span>hot</span>
                                                        </div>
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                            <div class="col col-xs-7">
                                                <div class="product-info">
                                                    <h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="product-price"> 
                                                        <span class="price">
                                                            $650.99             
                                                        </span>
                                                    </div><!-- /.product-price -->
                                                    <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                </div>
                                            </div><!-- /.col -->
                                        </div><!-- /.product-micro-row -->
                                    </div><!-- /.product-micro -->
                                </div>
                                <div class="product">
                                    <div class="product-micro">
                                        <div class="row product-micro-row">
                                            <div class="col col-xs-5">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="{{ url('User/images/products/s2.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                            <img data-echo="{{ url('User/images/products/s2.jpg')}}" src="User/images/blank.gif" alt="">
                                                            <div class="zoom-overlay"></div>
                                                        </a>                    
                                                    </div><!-- /.image -->
                                                </div><!-- /.product-image -->
                                            </div><!-- /.col -->
                                            <div class="col col-xs-7">
                                                <div class="product-info">
                                                    <h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="product-price"> 
                                                        <span class="price">
                                                            $650.99             
                                                        </span>
                                                    </div><!-- /.product-price -->
                                                    <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                </div>
                                            </div><!-- /.col -->
                                        </div><!-- /.product-micro-row -->
                                    </div><!-- /.product-micro -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- ============================================== BEST SELLER ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="sidebar-widget wow fadeInUp outer-bottom-vs">
                    <h3 class="section-title">BEST SELLER</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s1.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s1.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Asus Zenphone 6</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span>
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s1.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s1.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Asus Zenphone 6</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span>
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s2.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s2.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Apple Iphone 5s</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span>
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s2.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s2.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Apple Iphone 5s</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span>
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s3.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s3.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Canon EOS 60D</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span>
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s3.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s3.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a href="#">Canon EOS 60D</a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> 
                                                            <span class="price">
                                                                $650.99             
                                                            </span> 
                                                        </div><!-- /.product-price -->
                                                        <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                    </div>
                                                </div><!-- /.col -->
                                            </div><!-- /.product-micro-row -->
                                        </div><!-- /.product-micro -->
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="products best-product">
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image">
                                                            <a href="{{ url('User/images/products/s2.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                                <img data-echo="{{ url('User/images/products/s2.jpg')}}" src="User/images/blank.gif" alt="">
                                                                <div class="zoom-overlay"></div>
                                                            </a>                    
                                                        </div><!-- /.image -->
                                                    </div><!-- /.product-image -->
                                                </div><!-- /.col -->
                                            <div class="col col-xs-7">
                                                <div class="product-info">
                                                    <h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="product-price"> 
                                                        <span class="price">
                                                            $650.99             
                                                        </span>
                                                    </div><!-- /.product-price -->
                                                    <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                </div>
                                            </div><!-- /.col -->
                                        </div><!-- /.product-micro-row -->
                                    </div><!-- /.product-micro -->
                                </div>
                                <div class="product">
                                    <div class="product-micro">
                                        <div class="row product-micro-row">
                                            <div class="col col-xs-5">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <a href="{{ url('User/images/products/s2.jpg')}}" data-lightbox="image-1" data-title="Nunc ullamcors">
                                                            <img data-echo="{{ url('User/images/products/s2.jpg')}}" src="User/images/blank.gif" alt="">
                                                            <div class="zoom-overlay"></div>
                                                        </a>                    
                                                    </div><!-- /.image -->
                                                </div><!-- /.product-image -->
                                            </div><!-- /.col -->
                                            <div class="col col-xs-7">
                                                <div class="product-info">
                                                    <h3 class="name"><a href="#">Sony Ericson Vaga</a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="product-price"> 
                                                        <span class="price">
                                                            $650.99             
                                                        </span>
                                                    </div><!-- /.product-price -->
                                                    <div class="action"><a href="#" class="lnk btn btn-primary">Add To Cart</a></div>
                                                </div>
                                            </div><!-- /.col -->
                                        </div><!-- /.product-micro-row -->
                                    </div><!-- /.product-micro -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================== CONTENT : END ============================================== -->
    </div><!-- /.row -->
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
</div><!-- /.container -->
</div>

@endsection