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
			<div class="col-lg-8 col-md-8 col-sm-12">

				<div class="py-5">
					<form class="border_class" action="{{ url('user/save_trailer') }}" method="POST">
						@csrf
						@if(session()->has('message'))
                			<div class="alert alert-success">
                    			{{ session()->get('message') }}
                			</div>
            			@endif
						<div class="form-group primary_style p-2 ">
							<h4> ADD A TRAILER </h4>
						</div>
						<div class="form-group px-3">
							<label for="exampleInputEmail1">Registration Number *</label>
							<input type="text" class="form-control"  placeholder="Enter Registration Number">
						</div>
						<div class="form-group px-3">
							<label for="exampleInputPassword1">Fleet Number</label>
							<input type="text" class="form-control"  placeholder="Enter Fleet Number">
						</div>
						<div class="form-group px-3">
							<label class="form-check-label" for="exampleCheck1">Is Active</label>
							
								<input name="is_active" type="radio" value="1" id="is_active" class="ml-2"> Yes
								<input name="is_active" type="radio" value="0" id="is_active" class="ml-2"> No
						</div>
						<div class="bg-light p-3 text-right">
							<button type="reset" class="btn text-dark bg-white">Cancel</button>
							<button type="submit" class="btn secondary_style">Save</button>
							<button type="submit" class="btn secondary_style">Save & Exit</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				@include('layouts/service')

			</div>
		</div>
	</div>
</section>
@include('layouts/footer')


