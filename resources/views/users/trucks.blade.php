@include('layouts/header')
@include('layouts/nav')
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 text-right px-5 py-2">
					Welcome masamylogistics - Company: MASAMY LOGISTICS LIMITED
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9  col-md-8 col-sm-12">

					<div class="py-3 d-flex justify-content-between">
						<h5 class="mb-0">TRUCKS</h5>				
						<div class="">
							<a href="#"><button type="button" class="btn secondary_style"><i class="fa fa-plus-circle"></i> Add a Truck</button></a>
						</div>
					</div>

					<div class="">
						<table class="table">
							<tr>
								<th>Registration</th>
								<th>Make/Model</th>
								<th>Fleet Number</th>
								<th>Color</th>
								<th>Status</th>
								<th>Created</th>
								<th></th>
							</tr>
							<tr>
								<td>Registration</td>
								<td>Make/Model</td>
								<td>Fleet Number</td>
								<td>Color</td>
								<td>Status</td>
								<td>Created</td>
								<td class="">
									<button type="button" class="btn primary_style fs"><i class="fa fa-bar-chart-o"></i></button>
									<button type="button" class="btn primary_style fs"><i class="fa fa-edit"></i></button>
								</td>
							</tr>
						</table>
						<nav aria-label="Page navigation example">
							<ul class="pagination">
								<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a></li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-12">
					@include('layouts/service')
				</div>
			</div>
		</div>
	</section>
@include('layouts/footer')