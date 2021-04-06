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
			<div class="col-lg-9 col-sm-12">

				<div class="py-3 d-flex justify-content-between">
						<h4 class="mb-0">DRIVERS</h4>				
					<div class="">
						<button type="button" class="btn secondary_style"><i class="fa fa-plus-circle"></i> Add a Driver</button>
					</div>
				</div>

				<div class="d-flex justify-content-between light ">
					<form action="/action_page.php">
						<div class="row p-3 d-flex align-items-center ">
							<div class="py-1">
								<select class="p-1 mr-2 form-control" >
									<option>Driver Status</option>
									<option>Active</option>
									<option>In Active</option>
								</select>
							</div>
							<div class="py-1">
								<select class="p-1 mr-2 form-control">
									<option>Permanent</option>
									<option>Temporary</option>
								</select>
							</div>	
							<div class="py-1">
								<input type="text" placeholder="Search" name="search" class="form-control p-1 mr-2">
							</div>
							<div class="py-1 d-flex align-items-center">
								<button type="button" class="btn secondary_style mr-2"> Filter </button>
								<button type="button" class="btn bg-white mr-2">Clear</button>
								
							</div>
							<div class="py-1">
								<button type="button" class="btn bg-white mr-2"><i class="fa fa-download pr-1"></i> Export to Excel</button>
							</div>
						</div>
					</form>	
				</div>
				<div class="light p-3 d-flex justify-content-between my-2">
					<div class="">
						<h5>Driver Veto List</h5>
						<p><i class="fa fa-info-circle"></i> The feature to blacklist Drivers has been removed for the foreseeable future - we will keep users updated on any changes.</p>
						<button type="button" class="btn primary_style mb-1"><i class="fa fa-check-square "></i>  Check veto list </button>
						<button type="button" class="btn primary_style  mb-1"><i class="fa fa-minus-circle"></i> Request driver suspension </button>
					</div>	

				</div>
				<div class="" style="overflow-x: scroll;">
					<table class="table ">
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Passport No</th>
								<th>Cell No</th>
								<th>Status</th>
								<th class=" d-flex"></th>
							</tr>
							<tr>
								<td>1</td>
								<td>Pak D</td>
								<td>123456789 </td>
								<td>1234567890</td>
								<td>active</td>
								<td class=" d-flex">
									<button type="button" class="btn primary_style fs mr-2"><i class="fa fa-bar-chart-o"></i></button>
									<button type="button" class="btn primary_style fs"><i class="fa fa-edit"></i></button>
								</td>
							</tr>
						</table>
				</div>
			</div>
			<div class="col-lg-3 col-sm-12" >
				@include('layouts/service')

			</div>
		</div>
	</div>
</section>
@include('layouts/footer')