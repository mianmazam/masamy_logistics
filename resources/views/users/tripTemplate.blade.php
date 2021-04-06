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
            <h4 class="mb-0"> MY TEMPLATES </h4>
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
      <div class="row p-0 mt-3">
        <div class="col-md-12 p-0">
          <table class="table table-striped " id="f_table">
            <tr>
              <th class="p-2 py-2 ">Name</th>
              <th class="p-2 py-2 " > Number of Countries</th>
              <th class="p-2 py-2 " > Number of Offices </th>
              <th class="p-2 py-2 " > Created </th>

              <th class="p-2 py-2 " ></th>
            </tr>
            <tr>
              <td class="p-2 py-2 " >Lekasi</td>
              <td class="p-2 py-2 ">Petro Sil Likasi</td>
              <td class="p-2 py-2 " >SUFFICIENT STOCK</td>
              <td class="p-2 py-2 ">1.06</td>
              <td class="p-2 py-2 ">
                <button type="button" class="btn my_btn bg-danger text-white fs mb-1"><i class="fa fa-times"></i></button>
                <button type="button" class="btn my_btn primary_style fs mb-1"><i class="fa fa-search"></i></button>
                <button type="button" class="btn my_btn primary_style fs mb-1"><i class="fa fa-copy"></i> create Trip</button>
              </td>
            </tr>
            <tr>
              <td class="p-1 py-2 " >Lekasi</td>
              <td class="p-1 py-2 ">Petro Sil Likasi</td>
              <td class="p-1 py-2 " >SUFFICIENT STOCK</td>
              <td class="p-1 py-2 ">1.06</td>
              <td class="p-1 py-2 ">
                <button type="button" class="btn my_btn bg-danger text-white fs mb-1"><i class="fa fa-times"></i></button>
                <button type="button" class="btn my_btn primary_style fs mb-1"><i class="fa fa-search"></i></button>
                <button type="button" class="btn my_btn primary_style fs mb-1"><i class="fa fa-copy"></i> create Trip</button>
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