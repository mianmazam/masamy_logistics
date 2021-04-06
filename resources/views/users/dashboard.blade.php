
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
            <div class="col-lg-9 col-md-8 col-sm-12">

                <div class="py-3 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <h5 class="mb-0">DASHBOARD</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12">               
                            <div class="">
                                <button type="button" class="btn secondary_style mb-1"><i class="fa fa-plus-circle"></i> Create or Recreate a Trip</button>
                                <button type="button" class="btn secondary_style mb-1"><i class="fa fa-plus-circle"></i>   New Once-off Order</button>
                                <button type="button" class="btn secondary_style mb-1"><i class="fa fa-plus-circle"></i> Load Deposit</button>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="py-3">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <h5 class="mb-2">Order Quick Links</h5> 
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12">               
                            <div class="">
                                <button type="button" class="btn btn-light mb-1">COMPLETED ORDERS</button>
                                <button type="button" class="btn btn-light mb-1">Pending Orders</button>
                                <button type="button" class="btn btn-light mb-1">Cancelled Orders</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-3 d-flex justify-content-between">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            Order Search (Search by order number or your reference) 
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">               
                            <div class="px-3">
                                <form action="/action_page.php" class="d-flex justify-content-between" >
                                    <input type="text" placeholder="Search Here ..."  name="search" class="form-control py-2">
                                    <button type="button" class="btn primary_style ml-1"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="" style="overflow-x: scroll;">
                    <table class="table border_class">
                        <tr class="primary_style">
                            <th colspan="6" class="border-0"><h5>5 LATEST COMPLETED ORDERS</h5></th>
                        </tr>
                        <tr>
                            <th>Order Ref</th>
                            <th>Status</th>
                            <th>Truck/Driver</th>
                            <th>Order Date</th>
                            <th>Amount</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>Order Ref</td>
                            <td>Status</td>
                            <td>Truck/Driver</td>
                            <td>Order Date</td>
                            <td>Amount</td>
                            <td><button type="button" class="btn primary_style"><i class="fa fa-search"></i></button></td>
                        </tr>
                    </table>
                </div>
                <div class="" style="overflow-x: scroll;">
                    <table class="table border_class">
                        <tr class="primary_style">
                            <th colspan="6" class="border-0"><h5>5 NEWEST ORDERS </h5></th>
                        </tr>
                        <tr>
                            <th>Order Ref</th>
                            <th>Status</th>
                            <th>Truck/Driver</th>
                            <th>Order Date</th>
                            <th>Amount</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>Order Ref</td>
                            <td>Status</td>
                            <td>Truck/Driver</td>
                            <td>Order Date</td>
                            <td>Amount</td>
                            <td><button type="button" class="btn primary_style"><i class="fa fa-search"></i></button></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12" >
                @include('layouts.reg')
                @include('layouts.service')
            </div>
        </div>
    </div>
</section>
@include('layouts/footer')



<style type="text/css">
    .btn:hover {
          color: #fff !important;
        }
</style>