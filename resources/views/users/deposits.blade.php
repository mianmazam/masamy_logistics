@include('layouts/header')
@include('layouts/nav')


<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 text-right px-5 py-2">
        Welcome masamylogistics - Company: MASAMY LOGISTICS LIMITED
      </div>
    </div>
  </div>
</section>


<section>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-12">
      <div class="row">
        <div class="col-lg-12">
          <div class="py-3 d-flex justify-content-between">
            <h4 class="mb-0"> DEPOSITS </h4>
            <div class="">
              <button type="button" class="btn secondary_style"><i class="fa fa-plus-circle"></i> Load a deposit</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row light  pt-2">
        <div class="col-lg-12">
          <div class="d-flex justify-content-between">
            <form action="/action_page.php" class="w-100" >
              <div class="d-flex align-items-center">
                <span class="input-group-addon"><i class="fa fa-calendar mr-2"></i></span>
                <input class="form-control" name="" type="text">
              </div>
              <div class=" py-2 row">
              	
                <div class="col-lg-3 col-md-4 col-sm-12 pr-md-0 mt-1">
                  <select class="form-control" name="status"><option value="" selected="selected">Verified/Declined</option><option value="pending">Pending</option><option value="verified">Verified</option><option value="declined">Declined</option></select>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 mt-1">
                  <select class="form-control" name="decimal_separator"><option value="." selected="selected">Decimal Symbol ( . )</option><option value=",">Decimal Symbol ( , )</option></select>
                </div>
                <div class="col-lg-5 col-md-4 pl-md-0 mt-1">
                  <button type="submit" class="btn secondary_style mr-1"> Filter </button>
                  <button type="reset" class="btn bg-white ">Clear</button>
                </div>
              </div>
            </form> 
          </div>          
        </div>
      </div>
      <div class="row light mt-2">
        <div class="col-lg-12">
          <div class=" p-3 d-flex">
            <div class="">
              <p class="mb-0">Total Results: 51</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-md-12 p-0" style="overflow-x: scroll;">
          <table class="table light_border">
          	<tr>
          		<th>Date & Time</th>
          		<th>Ccy</th>
          		<th>Amount</th>
          		<th>Verified/Declined</th>
          		<th>Decline Reason</th>
          		<th>Loaded By</th>
          		<th>Bank</th>
          		<th>Reference</th>
          	</tr>
          	<tr>
          		<td> 1 </td>
          		<td> 2 </td>
          		<td> 3 </td>
          		<td> 4 </td>
          		<td> 5 </td>
          		<td> 6 </td>
          		<td> 7 </td>
          		<td> 8 </td>
          	</tr>
          </table>
          <div class="">
          	<nav aria-label="Page_navogation">
          		<ul class="pagination">
          			<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a></li>
          			<li class="page-item"><a class="page-link" href="#">1</a></li>
          			<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a></li>
          		</ul>
          	</nav>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12">
    	@include('layouts/service')

    </div>
  </div>
</div>
</section>
@include('layouts/footer')