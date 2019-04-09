@extends('layout.adminlayout')
@section('content')

<div class="app-main">
					<div class="main-content">
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<!-- Row start -->
								<div class="row gutters">
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<form method="POST" action="/inputProduct" enctype="multipart/form-data">
											@csrf
											<div class="card">
												<div class="card-header">Input Product Data</div>
												<div class="card-body">
													<div class="form-row">
														<div class="form-group col-md-6">
															<label for="productName" class="col-form-label">Product Name</label>
															<input type="text" name="product_name" class="form-control" id="productName" placeholder="Input Product Name here" required>
														</div>
														<div class="form-group col-md-6">
															<label for="price" class="col-form-label">Price (Rp.)</label>
															<input type="number" name="price" class="form-control" id="price" placeholder="Input Price here" required>
														</div>
													</div>
													<div class="form-group">
														<label for="description" class="col-form-label">Description</label>
														<textarea name="description" class="form-control" id="description" rows="3"></textarea>
													</div>
													<div class="form-row">
														<div class="form-group col-md-2">
															<label for="stock" class="col-form-label">Stock</label>
															<input type="number" name="stock" class="form-control" placeholder="Input Stock here" id="stock" required>
														</div>
														<div class="form-group col-md-2">
															<label for="weight" class="col-form-label">Weight</label>
															<input type="number" name="weight" class="form-control" placeholder="Input Weight here" id="weight" required>
														</div>
														<div class="form-group col-md-4">
															<label for="images" class="col-form-label">Image</label>
															<input type="file" multiple name="images[]" class="form-control" >
														</div>
														<div class="form-group col-md-4">
															<label for="categories" class="col-form-label">Categories</label><br>	
															@foreach ($list as $l)
															  <input type="checkbox" name="categories[]" value="{{$l->category_name}}"> {{$l->category_name}}
															@endforeach
															
														</div>
													</div>
													<div class="form-group">
														<div class="form-check">
															<label class="form-check-label">
																<input class="form-check-input" name="mycheckbox" id="myCheck" onclick="myFunction()" type="checkbox"> Discount
															</label>
														</div>
													</div>
													<div id="formulir" style="display:none">
														<div class="form-row">
															<div class="form-group col-md-3">
																	<label for="percentage" class="col-form-label">Percentage</label>
																	<input type="number" name="percentage" class="form-control" placeholder="Input Percentage (%)" id="weight">
															</div>
															<div class="form-group col-md-3">
																	<label for="start" class="col-form-label">Start</label>
																	<input type="date" name="start" class="form-control" id="start">
															</div>
															<div class="form-group col-md-3">
																	<label for="end" class="col-form-label">End</label>
																	<input type="date" name="end" class="form-control" id="end">
															</div>
														</div>
													</div>
													<button type="submit" class="btn btn-primary">Save</button>
												</div>
											</div>
										</form>
									</div>
									<script type="text/javascript">
										function myFunction() {
										  // Get the checkbox
										  var checkBox = document.getElementById("myCheck");
										  // Get the output text
										  var text = document.getElementById("formulir");
										  // If the checkbox is checked, display the output text
										  if (checkBox.checked == true){
										    formulir.style.display = "block";
										  } else {
										    formulir.style.display = "none";
										  }
										}
									</script>

						@endsection