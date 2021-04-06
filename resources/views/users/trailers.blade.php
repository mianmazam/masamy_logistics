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
			<div class="col-lg-9 col-md-8 col-sm-12">

				<div class="py-3 d-flex justify-content-between">
						<h5 class="mb-0">TRAILERS</h5>				
					<div class="">
						<a href="{{ url('user/create_triler') }}">
							<button type="button" class="btn secondary_style"><i class="fa fa-plus-circle"></i> Add a Trailer</button>
						</a>
					</div>
				</div>

				<div class="">
					<table class="table">
						<tr>
							<th>Registration</th>
							<th>Fleet Number</th>
							<th>Status</th>
							<th></th>
						</tr>
						<tr>
							<td>Registration</td>
							<td>Fleet Number</td>
							<td>Status</td>
							<td><button type="button" class="btn primary_style"><i class="fa fa-edit"></i></button></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12" >
				@include('layouts/service');
			</div>
		</div>
	</div>
</section>
@include('layouts/footer')
