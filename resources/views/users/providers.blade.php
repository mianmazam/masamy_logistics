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
                  Service
                </button>
              </h2>
            </div>
            <div id="collapseOne" class="collapse"  data-parent="#accordionExample">
              <div class="row mx-0">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="">
                    <p>Third Party Insurance and RTA as required by Zambian Authorities</p>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 py-2">
                  <div class="container-fluid light_border_class">
                    <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 py-2">
                        <b> Contact Details </b>
                      </div>
                    </div>
                    <div class="row bg-light py-2 ">
                      <div class="col-lg-3 col-md-3 col-sm-3 d-flex align-items-center">
                        <i class="fa fa-phone"></i>  
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 d-flex align-items-center">
                        <p class="mb-0"> +27718281773</p>
                      </div>
                    </div>
                    <div class="row py-2 ">
                      <div class="col-lg-3 col-md-3 col-sm-3 d-flex align-items-center">
                        <i class="fa fa-envelope"></i>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 d-flex align-items-center">
                        <p class="mb-0">ABC, ABC, ABC</p>
                      </div>
                    </div>
                  </div>
                  <div class="container-fluid light_border_class mt-2">
                    <div class="row pt-3">
                      <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <b> Contact Person </b>
                      </div>
                    </div>
                    <div class="row bg-light py-2 ">
                      <div class="col-lg-3 col-md-3 col-sm-3 d-flex align-items-center">
                        <i class="fa fa-user"></i>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 d-flex align-items-center">
                        <p class="mb-0"> Transport Forex</p>
                      </div>
                    </div>
                    <div class="row py-2 ">
                      <div class="col-lg-3 col-md-3 col-sm-3 d-flex align-items-center">
                        <i class="fa fa-phone"></i>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 d-flex align-items-center">
                        <p class="mb-0">+27718281773</p>
                      </div>
                    </div>
                    <div class="row py-2 bg-light">
                      <div class="col-lg-3 col-md-3 col-sm-3 d-flex align-items-center">
                        <i class="fa fa-envelope"></i>
                      </div>
                      <div class="col-lg-9 col-md-9 col-sm-9 d-flex align-items-center">
                        <p class="mb-0">ABC, ABC, ABC</p>
                      </div>
                    </div>
                  </div>
                  <div class="pt-3">
                    <button class="btn primary_style"><i class="fa fa-download"></i> View Rates</button>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <nav aria-label="Page_navogation">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a></li>
              </ul>
            </nav>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12" >
      @include('layouts/service')

    </div>
  </div>
</div>
</section>
@include('layouts/footer')