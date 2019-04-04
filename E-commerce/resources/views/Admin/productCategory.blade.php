@extends('layout.adminlayout')
@section('content')
<div class="app-main">
					<div class="main-content">
<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">List Categories</div>
									<div class="card-body">
										<table id="basicExample" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th>Name</th>
												</tr>
											</thead>
											@foreach($category as $c)
											<tbody>
												<tr>
													
													<td>{{$c->category_name}}</td>

												</tr>
											</tbody>
											@endforeach
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
						<form action="/inputCategories" method="post">
							@csrf
						<label for="productName" class="col-form-label">Add Category</label>
						<input type="text" name="category_name" class="form-control" id="category_name" placeholder="Input Category Name here" required>
						<br>
						<button type="submit" class="btn btn-success btn-sm"><i class="icon icon-plus"></i> Save </button>
						</form>
					</div>
						<!-- Row ends -->
											</div>
					<!-- END: .main-content -->
				</div>
				<!-- END: .app-main -->
			</div>

			@endsection