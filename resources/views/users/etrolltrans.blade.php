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
            <h4 class="mb-0"> ETOLL TRANSACTION  REPORT </h4>

          </div>
        </div>
      </div>
     <div class="row mt-3 pt-2 light pb-2">
        <div class="col-lg-12">
          <div class="d-flex justify-content-between">
            <form action="#" class="w-100">
              <div class="row">
                <div class="col-lg-12 d-flex align-items-center px-md-1 mt-2">
                  <span class="input-group-addon"><i class="fa fa-calendar mr-2"></i></span>
                  <input class="form-control" name="" type="text" placeholder="Start Date">
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12 d-flex align-items-center px-md-1 mt-2">
                  <span class="input-group-addon"><i class="fa fa-calendar mr-2"></i></span>
                  <input class="form-control" name="" type="text" placeholder="End Date">

                </div>
              </div>

              <div class="row">





                <div class="col-lg-3 col-md-5 col-sm-12  d-flex align-items-center px-md-1 mt-2">
                 <select class="form-control" name="decimal_separator"><option value="." selected="selected">Decimal Symbol ( . )</option><option value=",">Decimal Symbol ( , )</option></select>
                </div>


                <div class="col-lg-8 col-md-7 col-sm-12 px-md-1 mt-2">
                  <button type="button" class="btn secondary_style fs_sm"> Filter </button>
                  <button type="button" class="btn bg-white  fs_sm">Clear</button>
                  <button type="button" class="btn bg-white  fs_sm"><i class="fa fa-download"></i> Export to Excel</button>

                </div>
                <div class="col-lg-12">
                  Please select a date range if you want to export your results to excel. Only results sets smaller than 1800 rows can be exported.
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
              <p class="mb-0">Please note that there is a 15 minutes delay in getting your eToll transactions.</p>
            </div>
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
      <div class="row light mt-2">
        <div class="col-lg-12">
          <div class=" p-3 d-flex">
            <div class="">
              <p class="mb-0">There are currently no previous transactions listed. Please select date range, or your Company is not registered on Zambia Inland Road Tolls yet. Please complete a Zambian inland road toll order first.</p>
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