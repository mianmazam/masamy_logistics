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
						<h4 class="mb-0"> CLEARING AGENTS </h4>				
					<div class="">
						<button type="button" class="btn secondary_style"><i class="fa fa-plus-circle"></i> Add a Cleansing Agent</button>
					</div>
				</div>

				<div class="d-flex justify-content-between light ">
					<form action="/action_page.php">
						<div class="p-3 d-flex align-items-center ">
							<select class="p-1 mr-2" >
								<option>Clearing Agents Status</option>
								<option>Active</option>
								<option>In Active</option>
							</select>	
							<input type="text" placeholder="Search" name="search" class="p-1 mr-2">
							<button type="button" class="btn secondary_style mr-2"> Filter </button>
							<button type="button" class="btn bg-white mr-2">Clear</button>
							<button type="button" class="btn bg-white mr-2"><i class="fa fa-download pr-1"></i> Export to Excel</button>
						</div>
					</form>	
				</div>
				<div class="">
					<table class="table">
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Passport No</th>
								<th>Cell No</th>
								<th>Status</th>
								<th></th>
							</tr>
							<tr>
								<td>1</td>
								<td>Pak D</td>
								<td>123456789 </td>
								<td>1234567890</td>
								<td>active</td>
								<td class="">
									<button type="button" class="btn primary_style fs"><i class="fa fa-bar-chart-o"></i></button>
									<button type="button" class="btn primary_style fs"><i class="fa fa-edit"></i></button>
								</td>
							</tr>
						</table>
				</div>
			</div>
			<div class="col-lg-3 col-sm-12">
				@include('layouts/service')
			</div>
		</div>
	</div>
</section>
<section class="padding-section py-5"></section>
@include('layouts/footer')