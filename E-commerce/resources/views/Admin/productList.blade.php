@extends('layout.adminlayout')
@section('content')

<div class="app-main">
					<div class="main-content">
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<div class="row">
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" style="text-align: left;">
												Product List
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" style="text-align: right;">
												<a href="/add-product">
												<button type="button" class="btn btn-success btn-sm"><i class="icon icon-plus"></i> Add Product </button>
												</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row gutters">
											@foreach($products as $p)
											<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
											
												<a href=".html#" class="blog-sm">
													<img src="{{ url('admin/img/login-slider.jpg')}}" class="img-fluid blog-thumb" alt="Unify Admin Thumb">
													<h6 class="blog-title" style="margin-bottom: 8px;">{{$p->product_name}}</h6>
													<label class="blog-content">
													{{$p->description}}
													</label>
													<p class="blog-date" style="font-size: 15px;">Rp.{{$p->price}}</p>
													<br>
													<a href="/add-product">
													<button type="button" class="btn btn-success btn-sm"><i class="icon icon-edit"></i>  Edit Product </button>
													</a>
												</a>
											
											</div>
											@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->
					</div>
					<!-- END: .main-content -->
				</div>
				<!-- END: .app-main -->
			</div>

						@endsection