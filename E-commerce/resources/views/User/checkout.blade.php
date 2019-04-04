@extends('layout.tracklayout')
@section('content')

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="checkout-box inner-bottom-sm">
			<div class="row">
				<div class="col-md-8">
					<div class="panel-group checkout-steps" id="accordion">
						<!-- checkout-step-01  -->
<div class="panel panel-default checkout-step-01">

	<!-- panel-heading -->
		<div class="panel-heading">
    	<h4 class="unicase-checkout-title">
	        <a data-toggle="collapse" class="" data-parent="#accordion" href="#collapseOne">
	          <span>!</span>Checkout Form
	        </a>
	     </h4>
    </div>
    <!-- panel-heading -->

	<div id="collapseOne" class="panel-collapse collapse in">

		<!-- panel-body  -->
	    <div class="panel-body">
			<div class="row">		

				

				<!-- already-registered-login -->
				<div class="col-md-6 col-sm-6 already-registered-login">
					<form class="register-form" role="form">
						<div class="form-group">
					    <p class="info-title">Name : <span>{{Auth::user()->name}}</span></p>
					  </div>
					  <div class="form-group">
					    <label class="info-title" for="exampleInputPassword1">Address <span>*</span></label>
					    <input type="text" class="form-control unicase-form-control text-input" id="address" name="address" placeholder="Input Adress here">
					  </div>
					  <div class="form-group">
					    <label class="info-title" for="exampleInputPassword1">Regency <span>*</span></label>
					    <input type="text" class="form-control unicase-form-control text-input" id="regency" name="regency" placeholder="Input Regency here">
					  </div>
					  <div class="form-group">
					    <label class="info-title" for="exampleInputPassword1">Province <span>*</span></label>
					    <input type="text" class="form-control unicase-form-control text-input" id="province" name="province" placeholder="Input Province here">
					  </div>
					  <div class="form-group">
					    <label class="info-title" for="exampleInputPassword1">Shipping Cost <span>*</span></label>
					    <input type="text" class="form-control unicase-form-control text-input" id="shipping_cost" name="shipping_cost" placeholder="Input Province here">
					  </div>
					  <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
					</form>
				</div>	
				<!-- already-registered-login -->		

			</div>			
		</div>
		<!-- panel-body  -->

	</div><!-- row -->
</div>
<!-- checkout-step-01  -->
					    
		</div>
	</div>
</div> 
<!-- checkout-progress-sidebar -->				</div>
			</div><!-- /.row -->
		</div><!-- /.checkout-box -->	</div><!-- /.container -->
</div><!-- /.body-content -->

@endsection