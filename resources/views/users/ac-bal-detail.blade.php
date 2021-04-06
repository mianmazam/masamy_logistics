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
      <div class="row ">
        <div class="col-lg-12">
          <div class="py-3 d-flex justify-content-between">
            <h4 class="mb-0"> ACCOUNT BALANCE DETAIL REPORT </h4>

          </div>
        </div>
      </div>
     <div class="row mt-3 pt-2 light pb-2">
        <div class="col-lg-12">
          <div class="d-flex justify-content-between">
            <form action="#" class="w-100">
              <div class="row">
                <div class="col-lg-12 d-flex align-items-center px-md-1 mt-2">
                  <span class="input-group-addon  mr-2"><i class="fa fa-calendar d-flex">&nbsp;StartDate</i></span>
                  <input class="form-control" name="" type="text">
                </div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-5 col-sm-12  d-flex  px-md-1 mt-2">
                   <select class="form-control" name="currency"><option value="" selected="selected">Currency</option><option value="USD">USD</option><option value="ZMW">ZMW</option></select>
                </div>



                <div class="col-lg-3 col-md-5 col-sm-12  d-flex align-items-center px-md-1 mt-2">
                 <select class="form-control" name="decimal_separator"><option value="." selected="selected">Decimal Symbol ( . )</option><option value=",">Decimal Symbol ( , )</option></select>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 px-md-1 mt-2">
                  <button type="button" class="btn secondary_style fs_sm mt-2"> Genrate Report </button>
                  <button type="button" class="btn bg-white  fs_sm mt-2"><i class="fa fa-download"></i> Export to Excel</button>
                  <button type="button" class="btn bg-white  fs_sm mt-2">Clear</button>
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
          <table class="table table-striped w-100" id="f_table">
            <tr>
              <th class=" ">Description</th>
              <th class=" " >   Trip Ref </th>
              <th class=" " > Date </th>
              <th class=" " >   Loaded By </th>
              <th class=" " > Amount </th>
              <th class=" " >  Total </th>
            </tr>
            <tr>
              <td class=" " >Lekasi</td>
              <td class=" ">Petro Sil Likasi</td>
              <td class=" ">29-Jan-21 11:30:47</td>
              <td class=" ">23.28</td>
              <td class=" ">23.28</td>
              <td class=" ">23.28</td>
            </tr>
          </table>
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