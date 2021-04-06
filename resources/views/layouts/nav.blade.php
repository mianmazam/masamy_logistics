
<section>
  <div class="container-fluid light">
    <div class="row">
      <div class="col-lg-12">
        <div class="topnav" id="myTopnav">
          <a style="display: none;"></a>
          <a href="{{ url('user/dashboard') }}"> Dashboard</a>
          <a href="{{ url('user/tralers') }}"> Trailers</a>
          <a href="{{ url('user/trucks') }}"> Trucks</a>
          <a href="{{ url('user/drivers') }}"> Drivers</a>
          <a href="{{ url('user/clearing.agents') }}"> Clearing Agents</a>
          <a href="{{ url('user/deposit') }}"> Deposits</a>
          <a href="{{ url('user/diesal-prices') }}"> Diesal Prices</a>
          <a href="{{ url('user/providers') }}">Service Providers</a>

          <div class="dropdown">
            <button class="dropbtn hov"> Trips
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="{{ url('user/trips') }}"> My Trips</a>
              <a href="{{ url('user/trip/template') }}"> My Trip Templates</a>
              <a href="{{ url('user/trips/standard-template') }}"> Standard Trip Templates</a>
              <a href="{{ url('user/trips/unauthorized') }}">Unauthorized Trips</a>
            </div>
          </div> 
          <div class="dropdown">
            <button class="dropbtn">Orders
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="{{ url('user/orders-list') }}"> Order List</a>
              <a href="{{ url('user/unauthorized') }}"> Unauthorized Orders</a>
            </div>
          </div> 
          <div class="dropdown">
            <button class="dropbtn"> Reports
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="{{ url('user/order/history') }}"> Order History</a>
              <a href="{{ url('user/deposit') }}"> Deposits</a>
              <a href="{{ url('user/account-balance-details') }}"> Account Balance Detail</a>
              <a href="{{ url('user/order-history-extended') }}"> Extended Order History</a>
            </div>
          </div> 

          <a href="{{ url('user/users') }}"> Users</a>
          <a href="{{ url('user/') }}"> Documents</a>
          <a href="{{ url('user/') }}">My Account</a>

          <div class="dropdown">
            <button class="dropbtn" onclick="trolls()"> eTolls
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content" id="trolls">
              <a href="{{ url('user/etoll-transactions') }}"> Transaction Report </a>
              <a href="{{ url('user/etoll-statements') }}"> Statement Report</a>
            </div>
          </div> 
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                </form>
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
        <script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }




        function trolls() {
         var x =  document.getElementById("trolls");
         if (x.style.display ="none") {
          x.style.display ="block";
         }
         else{
          x.style.display ="none";
         }
        }
        </script>
      </div>
    </div>
  </div>
</section>
<section class="padding-section py-3">
  
</section>


