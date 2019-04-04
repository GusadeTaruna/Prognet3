@extends('layout.profilelayout')

@section('content')

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="track-order-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12">
				
					<h2><img src="/uploads/User/{{ Auth::user()->profile_image }}" style="border-radius: 50%; width: 18%;height: 18%"></h2>
					<h2 style="font-size: 25px;">My Profile</h2>
					<h2 style="font-size: 19px;"> Name : {{ Auth::user()->name }}</h2>
					<h2 style="font-size: 19px;"> Email : {{ Auth::user()->email }}</h2>
					<h2 style="font-size: 19px;"> Member since : {{ Auth::user()->created_at }}</h2>
					
					<h2><button type="submit" class="btn btn-primary">EDIT INFORMATION</button></h2>
</div>			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
	</div><!-- /.container -->
</div><!-- /.body-content -->

@endsection