    @include('layouts/header')
    <section class="py-5 hero" >
        <div class="container pt-5">
            <div class="row pt-5">
                <div class="col-lg-5 col-md-6 pt-5 ml-auto">
                    <div class="py-5">
                        <h3 class="text-center pt-2 primary"> MasamyTRANSPORT </h3>
                        <p class="pt-2 text-center">Enabling cross border transport companies to manage their forex and fuel needs in their own time and convenience.</p> 
                        <div class="pt-4 d-flex justify-content-center " >
                            <a href=""><input type="button" name="signup_btn" class="btn secondary_style mr-2" value="Register Now"></a>
                            <a href="#"><input type="button" name="login_btn" class="btn secondary_style" value="Diesal Prices"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3 ">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-lg-9 p-4">
                    <div class="mt-3">
                        <h2 >
                            Inter Africa Transport Forex (IATF) is a powerful management tool tailored to the transport industry
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 p-4 pl-5">
                    <div class="text-justify ">
                        <p>Inter Africa Transport Forex (IATF) is an online Technology Company in the Logistics Industry that provides online procurement solutions to Transport Companies, especially Cross-Border Transport Companies to procure all en route products and services online, from the comfort of their office / home.</p>
                        <p class="pt-2">This solution provides them with much greater transparency and line of sight of costs prior to trips, as well as real-time live tracking of expenses as they occur en route.</p>
                        <p class="pt-2">Book and pay for fuel, cash and other services on our user-friendly website from the comfort of your home and office.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    @include('layouts.reg')
                    @include('layouts.service')
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center">Order Online !</h3>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                    <div class="d-flex justify-content-center h_icons_size">
                        <img src="{{asset('images/icons/1.svg')}}">
                    </div>
                    <div class="text-center primary_style py-2 m-3">
                        <h6 class="my-0">order foreign currency</h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                    <div class="d-flex justify-content-center h_icons_size">
                        <img src="{{asset('images/icons/2.svg')}}">
                    </div>
                    <div class="text-center primary_style py-2 m-3">
                        <h6 class="my-0">order foreign currency</h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                    <div class="d-flex justify-content-center h_icons_size">
                        <img src="{{asset('images/icons/3.svg')}}">
                    </div>
                    <div class="text-center primary_style py-2 m-3">
                        <h6 class="my-0">order foreign currency</h6>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                    <div class="d-flex justify-content-center h_icons_size">
                        <img src="{{asset('images/icons/4.svg')}}">
                    </div>
                    <div class="text-center primary_style py-2 m-3">
                        <h6 class="my-0">order foreign currency</h6>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                    <div class="d-flex justify-content-center h_icons_size">
                        <img src="{{asset('images/icons/5.svg')}}">
                    </div>
                    <div class="text-center primary_style py-2 m-3">
                        <h6 class="my-0">order foreign currency</h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 my-3">
                    <div class="d-flex justify-content-center h_icons_size">
                        <img src="{{asset('images/icons/6.svg')}}">
                    </div>
                    <div class="text-center primary_style py-2 m-3">
                        <h6 class="my-0">order foreign currency</h6>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section>
    <div class="container">
        <dm,iv class="row p-5">
            <div class="col-lg-12 col-12 pt-5">
                <h3 >Service Points</h3>
                <p>Orders can be collected from branches and service<br> points in the following countries:</p>
                <ol>
                    <li>Zambia</li>
                    <li>Botswana</li>
                    <li>South Africa</li>
                    <li>Mozambique</li>
                </ol>
            </div>
        </div>
    </div>
</section>
@include('layouts/footer')
