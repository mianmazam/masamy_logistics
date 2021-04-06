@include('layouts/header')
@include('layouts/nav')



<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 text-right px-5 py-2">
        Welcome masamylogistics - Company: MASAMY LOGISTICS LIMITED
      </div>
    </div>
  </div>
</section>


<section>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-9 col-md-9 col-sm-12">
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Country
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse b-0 p-0"  data-parent="#accordionExample">
              <div class="card-body">
                <div class="row p-0">
                  <div class="col-md-12 p-0">
                  <table class="table" id="f_table">
              <tr>
                <th class="p-1 py-2" >City</th>
                <th class="p-1 py-2">Name</th>
                <th class="p-1 py-2" >Stock Level</th>
                <th class="p-1 py-2 d_control" >Price In  USD</th>
                <th class="p-1 py-2 d_control" >Price In  ZMW</th>
              </tr>
              <tr>
                <td class="p-1 py-2" >Lekasi</td>
                <td class="p-1 py-2">Petro Sil Likasi</td>
                <td class="p-1 py-2" >SUFFICIENT STOCK</td>
                <td class="p-1 py-2 d_control">1.06</td>
                <td class="p-1 py-2 d_control">23.28</td>
              </tr>
            </table>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
</section>


