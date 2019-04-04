<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from demo2.chethemes.com/html/unicase/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Mar 2019 04:34:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="MediaCenter, Template, eCommerce">
        <meta name="robots" content="all">

        <title>Kelompok 3 : E-Commerce</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="{{ URL::asset('User/css/bootstrap.min.css')}}">
        
        <!-- Customizable CSS -->
        <link rel="stylesheet" href="{{ URL::asset('User/css/main.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('User/css/green.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('User/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('User/css/owl.transitions.css')}}">
        <!--<link rel="stylesheet" href="User/css/owl.theme.css">-->
        <link href="{{ URL::asset('User/css/lightbox.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{ URL::asset('User/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('User/css/rateit.css')}}">
        <link rel="stylesheet" href="{{ URL::asset('User/css/bootstrap-select.min.css')}}">

        <!-- Demo Purpose Only. Should be removed in production -->
        <link rel="stylesheet" href="{{ URL::asset('User/css/config.css')}}">

        <link href="{{ URL::asset('User/css/green.css')}}" rel="alternate stylesheet" title="Green color">
        <link href="{{ URL::asset('User/css/blue.css')}}" rel="alternate stylesheet" title="Blue color">
        <link href="{{ URL::asset('User/css/red.css')}}" rel="alternate stylesheet" title="Red color">
        <link href="{{ URL::asset('User/css/orange.css')}}" rel="alternate stylesheet" title="Orange color">
        <link href="{{ URL::asset('User/css/dark-green.css')}}" rel="alternate stylesheet" title="Darkgreen color">
        <!-- Demo Purpose Only. Should be removed in production : END -->

        
        <!-- Icons/Glyphs -->
        <link rel="stylesheet" href="{{ URL::asset('User/css/font-awesome.min.css')}}">

        <!-- Fonts --> 
        <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="User/images/favicon.ico">

        <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
        <!--[if lt IE 9]>
            <script src="User/js/html5shiv.js"></script>
            <script src="User/js/respond.min.js"></script>
        <![endif]-->

</head>
<body class="cnt-home">
    
        
    
        <!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-block">
                    @guest
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="key">Hello</span><span class="value">Guest </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="login">Sign In</a></li>
                                <li><a href="#">Sign Up</a></li>
                            </ul>
                        </li>
                    </ul><!-- /.list-unstyled -->
                    @else
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
                            <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="key">Hello</span><span class="value">{{ Auth::user()->name }} </span><b class="caret"></b></a>
                            <ul class="dropdown-menu" style="width: 200px">
                            <img src="/uploads/User/{{ Auth::user()->profile_image }}" style="border-radius: 50%; width: 30%;height: 30%; padding: 10px 10px">
                             <span class="key"><strong>{{ Auth::user()->name }}</strong></span>
                             <br>
                                <li><a href="#">View Profile</a></li>
                                <li><a href="user/logout">Log Out</a></li>
                            </ul>
                        </li>
                    </ul><!-- /.list-unstyled -->
                    @endif
                </div><!-- /.cnt-cart -->
            <div class="clearfix"></div>
            </div><!-- /.header-top-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
<!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo">
                        <a href="index9ba3.html?page=home">
                            <img src="{{ url('User/images/logo.png')}}" alt="">
                        </a>
                    </div><!-- /.logo -->
<!-- ============================================================= LOGO : END ============================================================= -->             
                </div><!-- /.logo-holder -->
                    <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
                        <div class="contact-row">
                    </div><!-- /.contact-row -->
    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form>
                            <div class="control-group">
                                <input class="search-field" placeholder="Search here..." />
                                <a class="search-button" href="#" ></a>    
                            </div>
                        </form>
                    </div><!-- /.search-area -->
<!-- ============================================================= SEARCH AREA : END ============================================================= -->              
                </div><!-- /.top-search-holder -->
                <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row" style="padding-top: 9px;">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
                    <div class="dropdown dropdown-cart">
                        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="total-price-basket">
                                    <span class="lbl">cart -</span>
                                    <span class="total-price">
                                        <span class="sign">$</span>
                                        <span class="value">600.00</span>
                                    </span>
                                </div>
                                <div class="basket">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                <div class="basket-item-count"><span class="count">2</span></div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="cart-item product-summary">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="image">
                                                <a href="indexbd17.html?page=detail"><img src="{{ url('User/images/cart.jpg')}}" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <h3 class="name"><a href="index8a95.html?page-detail">Simple Product</a></h3>
                                            <div class="price">$600.00</div>
                                        </div>
                                        <div class="col-xs-1 action">
                                            <a href="#"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </div><!-- /.cart-item -->
                                <div class="clearfix"></div>
                                <hr>
                                <div class="clearfix cart-total">
                                    <div class="pull-right">
                                        <span class="text">Sub Total :</span><span class='price'>$600.00</span> 
                                    </div>
                                    <div class="clearfix"></div>
                                    <a href="/cart" class="btn btn-upper btn-primary btn-block m-t-20">View Cart</a>  
                                </div><!-- /.cart-total-->
                            </li>
                        </ul><!-- /.dropdown-menu-->
                    </div><!-- /.dropdown-cart -->
<!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->                
                </div><!-- /.top-cart-row -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                @guest
                                <li class="{{ Request::is('/') ? 'active' : '' }} dropdown yamm-fw">
                                    <a href="{{ url('/') }}" class="dropdown-toggle">Home</a>
                                    <ul class="dropdown-menu">
                                @else
                                <li class="{{ Request::is('home') ? 'active' : '' }} dropdown yamm-fw">
                                    <a href="{{ url('home') }}" class="dropdown-toggle">Home</a>
                                    <ul class="dropdown-menu">
                                @endif
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-md-8 col-sm-8">
                                                        <div class="row">
                                                            <div class='col-md-12'>
                                                                <div class="col-xs-12 col-sm-6 col-md-3">
                                                                    <h2 class="title">Computer</h2>
                                                                    <ul class="links">
                                                                        <li><a href="#">Lenovo</a></li>
                                                                        <li><a href="#">Microsoft </a></li>
                                                                        <li><a href="#">Fuhlen</a></li>
                                                                        <li><a href="#">Longsleeves</a></li>
                                                                    </ul>
                                                                </div><!-- /.col -->
                                                                <div class="col-xs-12 col-sm-6 col-md-3">
                                                                    <h2 class="title">Camera</h2>
                                                                    <ul class="links">
                                                                        <li><a href="#">Fuhlen</a></li>
                                                                        <li><a href="#">Lenovo</a></li>
                                                                        <li><a href="#">Microsoft </a></li>         
                                                                        <li><a href="#">Longsleeves</a></li>
                                                                    </ul>
                                                                </div><!-- /.col -->
                                                                <div class="col-xs-12 col-sm-6 col-md-3">
                                                                    <h2 class="title">Apple Store</h2>
                                                                    <ul class="links">
                                                                        <li><a href="#">Longsleeves</a></li>
                                                                        <li><a href="#">Fuhlen</a></li>
                                                                        <li><a href="#">Lenovo</a></li>
                                                                        <li><a href="#">Microsoft </a></li>      
                                                                    </ul>
                                                                </div><!-- /.col -->
                                                                <div class="col-xs-12 col-sm-6 col-md-3">
                                                                    <h2 class="title">Smart Phone</h2>
                                                                    <ul class="links">
                                                                        <li><a href="#">Microsoft </a></li> 
                                                                        <li><a href="#">Longsleeves</a></li>
                                                                        <li><a href="#">Fuhlen</a></li>
                                                                        <li><a href="#">Lenovo</a></li> 
                                                                    </ul>
                                                                </div><!-- /.col -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4"></div>
                                                </div><!-- /.row -->
        <!-- ============================================== WIDE PRODUCTS ============================================== -->
                                                <div class="wide-banners megamenu-banner">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-8">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="col-sm-6 col-md-6">
                                                                        <div class="wide-banner cnt-strip">
                                                                            <div class="image">
                                                                                <img class="img-responsive" data-echo="{{ url('User/images/banners/4.jpg')}}" src="{{ url('User/images/blank.gif')}}" alt="">
                                                                            </div>  
                                                                            <div class="strip">
                                                                                <div class="strip-inner text-right">
                                                                                    <h3 class="white">new trend</h3>
                                                                                    <h2 class="white">apple product</h2>
                                                                                </div>  
                                                                            </div>
                                                                        </div><!-- /.wide-banner -->
                                                                    </div><!-- /.col -->
                                                                    <div class="col-sm-6 col-md-6">
                                                                        <div class="wide-banner cnt-strip">
                                                                            <div class="image">
                                                                                <img class="img-responsive" data-echo="{{ url('User/images/banners/5.jpg')}}" src="{{ url('User/images/blank.gif')}}" alt="">
                                                                            </div>  
                                                                            <div class="strip">
                                                                                <div class="strip-inner text-left">
                                                                                    <h3 class="white">camera collection</h3>
                                                                                    <h2 class="white">new arrivals</h2>
                                                                                </div>  
                                                                            </div>
                                                                        </div><!-- /.wide-banner -->
                                                                    </div><!-- /.col -->
                                                                </div>
                                                            </div><!-- /.row -->
                                                        </div>
                                                    </div>
                                                </div><!-- /.wide-banners -->
                                            </div>
<!-- ============================================== WIDE PRODUCTS : END ============================================== -->
                                        </ul>
                                    </li>
                                    <li class="{{ Request::is('/track-order') ? 'active' : '' }} dropdown hidden-sm">
                                        <a href="{{ url('/track-order') }}">Track Order</a>
                                    </li>

                                    <li class="{{ Request::is('/products') ? 'active' : '' }} dropdown hidden-sm">
                                        <a href="{{ url('/products') }}">Product</a>
                                    </li>

                                    <li class="dropdown">
                                        <a href="index53a6.html?page=contact">About</a>
                                    </li>
                                </ul><!-- /.navbar-nav -->
                            <div class="clearfix"></div>                
                        </div><!-- /.nav-outer -->
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.nav-bg-class -->
            </div><!-- /.navbar-default -->
        </div><!-- /.container-class -->
    </div><!-- /.header-nav -->
<!-- ============================================== NAVBAR : END ============================================== -->
</header>
<!-- ============================================== HEADER : END ============================================== -->


<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
    <!-- ============================================== SIDEBAR ============================================== -->  
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
            <!-- ================================== TOP NAVIGATION ================================== -->
                <div class="side-menu animate-dropdown outer-bottom-xs">
                    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>        
                    <nav class="yamm megamenu-horizontal" role="navigation">
                        <ul class="nav">
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-desktop fa-fw"></i>Computer</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">  
                                                    <li><a href="indexe2f2.html?page=category">CPU</a></li>
                                                    <li><a href="indexe2f2.html?page=category">VGA</a></li>    
                                                    <li><a href="indexe2f2.html?page=category">Casing</a></li>                  
                                                    <li><a href="indexe2f2.html?page=category">Power Supply</a></li>    
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="indexe2f2.html?page=category">Monitor</a></li>
                                                    <li><a href="indexe2f2.html?page=category">Keyboard</a></li>    
                                                    <li><a href="indexe2f2.html?page=category">Mouse</a></li>          
                                                    <li><a href="indexe2f2.html?page=category">Motherboard</a></li>  
                                                </ul>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->                    
                                </ul><!-- /.dropdown-menu -->            
                            </li><!-- /.menu-item -->
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-laptop fa-fw"></i>Laptop</a>
                 <!-- ================================== MEGAMENU VERTICAL ================================== -->
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Acer</a></li>
                                                    <li><a href="#">Asus</a></li>
                                                    <li><a href="#">Apple</a></li>
                                                    <li><a href="#">Dell</a></li>
                                                    <li><a href="#">HP</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-lg-4">
                                                <ul>
                                                    <li><a href="#">Samsung</a></li>
                                                    <li><a href="#">Sony</a></li>
                                                    <li><a href="#">MSI</a></li>
                                                    <li><a href="#">Lenovo</a></li>
                                                    <li><a href="#">Toshiba</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->                    
                                </ul><!-- /.dropdown-menu -->
<!-- ================================== MEGAMENU VERTICAL ================================== -->            
                            </li><!-- /.menu-item -->
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-hdd-o fa-fw"></i>Storage</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">  
                                                    <li><a href="indexe2f2.html?page=category">Hardisk</a></li>
                                                    <li><a href="indexe2f2.html?page=category">USB Flashdisk</a></li>    
                                                    <li><a href="indexe2f2.html?page=category">Memory Card</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="indexe2f2.html?page=category">Network Storage</a></li>
                                                    <li><a href="indexe2f2.html?page=category">DDR</a></li>    
                                                    <li><a href="indexe2f2.html?page=category">SSD</a></li> 
                                                </ul>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->                    
                                </ul><!-- /.dropdown-menu -->            
                            </li><!-- /.menu-item -->
                            <li class="dropdown menu-item">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-camera fa-fw"></i>Accessories</a>
                                <ul class="dropdown-menu mega-menu">
                                    <li class="yamm-content">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">  
                                                    <li><a href="indexe2f2.html?page=category">Laptop Bag</a></li>
                                                    <li><a href="indexe2f2.html?page=category">Cooling Fan</a></li>    
                                                    <li><a href="indexe2f2.html?page=category">Adapter & Cable</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                            <div class="col-sm-12 col-md-3">
                                                <ul class="links list-unstyled">
                                                    <li><a href="indexe2f2.html?page=category">Webcam</a></li>
                                                    <li><a href="indexe2f2.html?page=category">Converter</a></li>    
                                                    <li><a href="indexe2f2.html?page=category">Software</a></li>
                                                </ul>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </li><!-- /.yamm-content -->                    
                                </ul><!-- /.dropdown-menu -->            
                            </li><!-- /.menu-item -->
                        </ul><!-- /.nav -->
                    </nav><!-- /.megamenu-horizontal -->
                </div><!-- /.side-menu -->
<!-- ================================== TOP NAVIGATION : END ================================== -->     
            </div><!-- /.sidemenu-holder -->
<!-- ============================================== SIDEBAR : END ============================================== -->
            @yield('content')

            <!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">
      <div class="links-social inner-top-sm">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3">
                     <!-- ============================================================= CONTACT INFO ============================================================= -->
                    <div class="contact-info">
                        <div class="footer-logo">
                            <div class="logo">
                                <a href="index9ba3.html?page=home">
                                    <img src="{{ url('User/images/logo.png')}}" alt="">
                                </a>
                            </div><!-- /.logo -->
                        </div><!-- /.footer-logo -->
                         <div class="module-body m-t-20">
                            <p class="about-us">Beli barang elektronikmu disini</p>
                        </div><!-- /.module-body -->
                    </div><!-- /.contact-info -->
<!-- ============================================================= CONTACT INFO : END ============================================================= -->             
                </div><!-- /.col -->
                <div class="col-xs-12 col-sm-6 col-md-5">
                     <!-- ============================================================= CONTACT TIMING============================================================= -->
                    <div class="contact-timing">
                        <div class="module-heading">
                            <h4 class="module-title">opening time</h4>
                        </div><!-- /.module-heading -->
                        <div class="module-body outer-top-xs">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr><td>Monday-Friday:</td><td class="pull-right">08.00 To 18.00</td></tr>
                                        <tr><td>Saturday:</td><td class="pull-right">09.00 To 20.00</td></tr>
                                        <tr><td>Sunday:</td><td class="pull-right">10.00 To 20.00</td></tr>
                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                            <p class='contact-number'>Hot Line:(400)888 868 848</p>
                        </div><!-- /.module-body -->
                    </div><!-- /.contact-timing -->
<!-- ============================================================= CONTACT TIMING : END ============================================================= -->            
                </div><!-- /.col -->
                <div class="col-xs-12 col-sm-6 col-md-3"></div><!-- /.col -->
                <div class="col-xs-12 col-sm-6 col-md-3">
                     <!-- ============================================================= INFORMATION============================================================= -->
                    <div class="contact-information">
                        <div class="module-heading">
                            <h4 class="module-title">information</h4>
                        </div><!-- /.module-heading -->
                        <div class="module-body outer-top-xs">
                            <ul class="toggle-footer" style="">
                                <li class="media">
                                    <div class="pull-left">
                                         <span class="icon fa-stack fa-lg">
                                          <i class="fa fa-circle fa-stack-2x"></i>
                                          <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p>BALI</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="pull-left">
                                         <span class="icon fa-stack fa-lg">
                                          <i class="fa fa-circle fa-stack-2x"></i>
                                          <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <p>(400) 0888 888 888<br>(400) 888 888 888</p>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="pull-left">
                                         <span class="icon fa-stack fa-lg">
                                          <i class="fa fa-circle fa-stack-2x"></i>
                                          <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <span><a href="#">Contact @kelompok3.com</a></span><br>
                                        <span><a href="#">Sale @kelompok.com</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- /.module-body -->
                    </div><!-- /.contact-timing -->
<!-- ============================================================= INFORMATION : END ============================================================= -->              
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.links-social -->
    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="copyright">
                   Copyright © 2019
                    <a href="index9ba3.html?page=home">Kelompok 3.</a>
                    - All rights Reserved
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding"></div>
        </div>
    </div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= -->



<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script data-cfasync="false" src="{{ URL::asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>

<script src="{{ URL::asset('User/js/jquery-1.11.1.min.js')}}"></script>

<script src="{{ URL::asset('User/js/bootstrap.min.js')}}"></script>

<script src="{{ URL::asset('User/js/bootstrap-hover-dropdown.min.js')}}"></script>
<script src="{{ URL::asset('User/js/owl.carousel.min.js')}}"></script>

<script src="{{ URL::asset('User/js/echo.min.js')}}"></script>
<script src="{{ URL::asset('User/js/jquery.easing-1.3.min.js')}}"></script>
<script src="{{ URL::asset('User/js/bootstrap-slider.min.js')}}"></script>
<script src="{{ URL::asset('User/js/jquery.rateit.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('User/js/lightbox.min.js')}}"></script>
<script src="{{ URL::asset('User/js/bootstrap-select.min.js')}}"></script>
<script src="{{ URL::asset('User/js/wow.min.js')}}"></script>
<script src="{{ URL::asset('User/js/scripts.js')}}"></script>

<!-- For demo purposes – can be removed on production -->

<script src="{{ URL::asset('switchstylesheet/switchstylesheet.js')}}"></script>

 <script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
</script>

<script>
    $(document).ready(function(){ 
        $(".changecolor").switchstylesheet( { seperator:"color"} );
        $('.show-theme-options').click(function(){
            $(this).parent().toggleClass('open');
            return false;
        });
    });

    $(window).bind("load", function() {
       $('.show-theme-options').delay(2000).trigger('click');
    });
</script>
<!-- For demo purposes – can be removed on production : End -->

    

</body>

<!-- Mirrored from demo2.chethemes.com/html/unicase/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Mar 2019 04:35:05 GMT -->
</html>