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
      <div class="row light">
        <div class="col-lg-12">
          <div class="py-3 d-flex justify-content-between">
            <h4 class="mb-0"> TRIPS </h4>
            <div class="">
              <button type="button" class="btn secondary_style"><i class="fa fa-plus-circle"></i> Create a new Trip</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row light mt-3 pt-2">
        <div class="col-lg-12">
          <div class="d-flex justify-content-between">
            <form action="/action_page.php" class="w-100" >
              <div class="d-flex align-items-center">
                <span class="input-group-addon"><i class="fa fa-calendar mr-2"></i></span>
                <input class="form-control" name="" type="text">
              </div>
              <div class=" py-2 row">
                <div class="col-md-4">
                  <input type="text" placeholder="Search" name="search" class="form-control w-100">
                </div>
                <div class="col-md-8 pl-md-0 mtop">
                  <button type="submit" class="btn secondary_style mr-2"> Filter </button>
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
          <table class="table table-striped light_border" id="f_table">
            <tr>
              <th class="p-1 py-2 ">Name</th>
              <th class="p-1 py-2 " >  Own Ref</th>
              <th class="p-1 py-2 " > Trip Ref </th>
              <th class="p-1 py-2 " > Status </th>
              <th class="p-1 py-2 " > Truck/Driver </th>
              <th class="p-1 py-2 " > Order Date </th>
              <th class="p-1 py-2 " ></th>
            </tr>
            <tr>
              <td class="p-1 py-2 " >Lekasi</td>
              <td class="p-1 py-2 ">Petro Sil Likasi</td>
              <td class="p-1 py-2 " >SUFFICIENT STOCK</td>
              <td class="p-1 py-2 ">1.06</td>
              <td class="p-1 py-2 ">23.28</td>
              <td class="p-1 py-2 ">23.28</td>
              <td class="p-1 py-2 ">
                <div class="d-flex">
                  <button type="button" class="btn my_btn primary_style mr-2"><i class="fa fa-bar-chart-o"></i></button>
                <button type="button" class="btn my_btn primary_style "><i class="fa fa-edit"></i></button>
                </div>
                <button type="button" class="btn my_btn primary_style  mt-1"><i class="fa fa-edit"></i> recreate</button>
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
