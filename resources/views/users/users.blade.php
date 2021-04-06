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
            <h4 class="mb-0"> USERS </h4>
            <div class="">
              <button type="button" class="btn secondary_style"><i class="fa fa-plus-circle"></i> Create a new User </button>
            </div>

          </div>
        </div>
      </div>
     <div class="row mt-3 pt-2 light pb-2">
        <div class="col-lg-12">
          <div class="d-flex justify-content-between">
            <form action="#" class="w-100">

              <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-12  d-flex  px-md-1 mt-2">
                   <select class="form-control" name="currency"><option value="" selected="selected">User Status </option><option value="USD"> Active </option><option value="ZMW">Inactive</option></select>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 px-md-1 mt-2">
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
          <table class="table table-striped w-100" id="f_table">
            <tr>
              <th class=" "> Username </th>
              <th class=" " >   Status </th>
              <th class=" " >  </th>
            </tr>
            <tr>
              <td class=" " >Lekasi</td>
              <td class=" "><small class=" bg-success text-white  text-center  rounded p-1 " style="font-size: 14px;">Active</small></td>
              <td class=" ">
                <button class="btn primary_style"><i class="fa fa-edit"></i></button>
              </td>
            </tr>
            <tr>
              <td class=" " >dangu</td>
              <td class=" "><small class=" bg-danger text-white  text-center  rounded p-1 " style="font-size: 14px;">Inactive</small></td>
              <td class=" ">
                <button class="btn primary_style"><i class="fa fa-edit"></i></button>
              </td>
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