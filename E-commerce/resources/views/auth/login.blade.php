@extends('layout.authlayout')

@section('content')
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
    <div class="container">
        <div class="sign-in-page inner-bottom-sm">
            <div class="row">
                <!-- Sign-in -->            
<div class="col-md-6 col-sm-6 sign-in">
    <h4 class="">sign in</h4>
    <p class="">Hello, Please Sign In With your account.</p>
    <form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
            <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="email" required>
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
            <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" name="password" required>
        </div>
        <div class="radio outer-xs">
            <label>
                <input type="checkbox" name="remember" id="remember"> Remember me!
            </label>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="forgot-password pull-right">Forgot your Password?</a>
            @endif
        </div>
        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
    </form>                 
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
    <h4 class="checkout-subtitle">create a new account</h4>
    <p class="text title-tag-line">Create your own account to buy something.</p>

    <form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('signup') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label class="info-title" for="exampleInputEmail2">Name <span>*</span></label>
            <input id="name" type="text" class="form-control unicase-form-control text-input" name="name" required>
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
            <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2" required >
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail2">Password <span>*</span></label>
            <input type="password" name="password" class="form-control unicase-form-control text-input" id="password" required >
        </div>
        <div class="form-group">
            <label class="info-title" for="exampleInputEmail2">Confirm Password <span>*</span></label>
            <input type="password" name="password_confirmation" class="form-control unicase-form-control text-input" id="password-confirm" required >
        </div>
        <div class="form-group">
            <label class="info-title">Upload Image<span>*</span></label>
            <input type="file" name="profile_image" class="form-control unicase-form-control" >
        </div>
        <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
    </form>
</div>  
<!-- create a new account -->           </div><!-- /.row -->
        </div><!-- /.sigin-in-->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->    </div><!-- /.container -->
</div><!-- /.body-content -->
<!-- ============================================================= FOOTER ============================================================= -->
</div>
</div>
@endsection
