
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Masamy Logistics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style type="text/css">

    *{
      margin: 0px;
      padding:0px;
      box-sizing: border-box;
        }
        .btn:hover{
          color: #fff;
        }
        body{
          overflow-x: hidden;
        }
        .primary_style{
          background-color: #033CA9;
          color: #fff;
        }
        .secondary_style{
          background-color: #F68C41;
          color: #fff;
        }
        .primary{
          color: #033CA9;
        }
        .border_class{
          border: 1px solid #000;
        }
        .light{
          background-color: #edf1f2;
        }

        .nav-custom {
           font-size: 18px;
           color: #000;
           font-family: arial;
           letter-spacing: 1px;
           font-weight: bold;
        }
        .nav-custom:hover {
           color: #fff;
        }
        .outer li{
          padding-right: 10px;
          padding-left: 10px;
        }
        .hero{
           background: url(/images/header_img.png);
            background-size: cover;
            background-position: center;
            background-repeat:no-repeat;
            color: #000;
        }
        .reg{
           background: url(/images/bg1.png);
            background-size: cover;
            background-position: center;
            background-repeat:no-repeat;
            border-radius: 12px;
            color: #fff;
        }
        .service{
           background: url(/images/bg2.png);
            background-size: cover;
            background-position: center;
            background-repeat:no-repeat;
            border-radius: 12px;
            color: #fff;
        }
        .h_icons_size > img{
            width: 40px;
            height: 40px;
        }

/*nav*/
      .topnav {
        overflow: hidden;
        background-color: #efefef;
      }

      .topnav a {
        float: left;
        display: block;
        color: #000;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
      }

      .topnav .icon {
        display: none;
      }

      .dropdown {
        float: left;
        overflow: hidden;
        position: unset;
      }

      .dropdown .dropbtn {
        font-size: 17px;    
        border: none;
        outline: none;
        color: #000;
        padding: 14px 16px;
        background-color: transparent;
        margin: 0;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 150px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }

      .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
      }

      .topnav a:hover, .dropdown:hover .dropbtn {
        background-color: #F68C41;
        color: #fff;
      }

      .dropdown-content a:hover {
        background-color: #F68C41;
        color: #fff;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }

/*nav*/
    @media screen(min-width: 1400px){
        .padding-section{
          display: block;

        }
    }
    @media (max-width: 991px){
        .outer li a {
           font-size: 14px;
           font-weight: bold;
        }
        .outer li{
          padding-right: 4px;
          padding-left: 4px;
        }
        .hero{
           background: url(/images/header_img.png);
            background-size: cover;
            background-position: right;
            background-repeat:no-repeat; 
        } 

    }
    @media (max-width: 767px){
        .outer li a {
           font-size: 16px;
           color: #000;
           font-family: arial;
           letter-spacing: 1px;
           font-weight: bold;
        }
        .hov:hover{
          display: none;

        }
        .outer li{

          padding-left: 20px;
        }
        #f_table{
          font-size: 12px;
        }
      #f_table > th{
        font-size: 12px;
      }
/*nav*/

      .topnav a, .dropdown .dropbtn {
        display: none;
      }
      .topnav a.icon {
        float: right;
        display: block;
      }
        .topnav.responsive {position: relative;}
    .topnav.responsive .icon {
      position: absolute;
      right: 0;
      top: 0;
    }
    .topnav.responsive a {
      float: none;
      display: block;
      text-align: left;
    }
    .topnav.responsive .dropdown {float: none;}
    .topnav.responsive .dropdown-content {position: relative;}
    .topnav.responsive .dropdown .dropbtn {
      display: block;
      width: 100%;
      text-align: left;
    }

  /*nav*/


    }
      @media (max-width: 575px){
    #f_table{
      font-size: 11px;
    }
    #f_table > th{
      font-size: 11px;
    }
  }
  </style>

</head>
<body>
  <section class="primary_style">
    <div class="container">
      <div class="row py-2">
        <div class="col-lg-12 d-flex justify-content-center">
          <h6 class="mb-0">Call us on +27 71 828 1773 / Email Us</h6>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-white">
    <div class="container-fluid ">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-md bg-dark navbar-light bg-white">
            <a class="navbar-brand" href="#">
              <img src="{{ asset('images/logo1.png') }}">
            </a>
            <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon " ></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav ml-auto mr-3 outer">
                <li class="nav-item">
                  <a class="nav-link nav-custom" href="#">Home</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link nav-custom" href="#">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-custom" href="#">What's New</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-custom" href="{{ url('register') }}">Register</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link nav-custom" href="{{ url('login') }}">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link nav-custom" href="#">Contact</a>
                </li>    
              </ul>
            </div>  
          </nav>
        </div>
      </div>
    </div>
  </section>
<section class="padding-section py-2">
  
</section>
















<!-- signup model  -->

<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header primary_style">
        <h5 class="modal-title" id="exampleModalLabel"> Sign Up </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <form method="post" action="{{ route('register') }}">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="firstname">{{ __('First Name') }}</label>
            <input type="text" class="form-control @error('first name') is-invalid @enderror" id="firstname" name="firstname" placeholder="Enter First Name"  value="{{ old('firstname') }}" required autocomplete="firstname" autofocus >
            @error('First Name')
              <span class="invalid-feedback" role="alert">
                <strong>
                  {{ $message }}
                </strong>
              </span>
            @enderror
          </div>


          <div class="form-group">
            <label for="lastname">{{ __(' Last Name ') }}</label>
            <input type="text" class="form-control @error('Last Name') is-invalid @enderror" id="lastname" name="lastname" placeholder="Enter Last Name"  value="{{ old('lastname') }}" required autocomplete="lastname" autofocus >
            @error('First Name')
              <span class="invalid-feedback" role="alert">
                <strong>
                  {{ $message }}
                </strong>
              </span>
            @enderror
          </div>


          <div class="form-group">
            <label for="username">{{ __(' User Name ') }}</label>
            <input type="text" class="form-control @error('Last Name') is-invalid @enderror" id="username" name="username" placeholder="Enter User Name"  value="{{ old('username') }}" required autocomplete="username" autofocus >
            @error('User Name')
              <span class="invalid-feedback" role="alert">
                <strong>
                  {{ $message }}
                </strong>
              </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="email">{{ __(' E mail Addresss ') }}</label>
            <input type="text" class="form-control @error('Last Name') is-invalid @enderror" id="email" name="email" placeholder="Enter  Email Addresss"  value="{{ old('email') }}" required autocomplete="email" autofocus >
            @error('E mail Addresss')
              <span class="invalid-feedback" role="alert">
                <strong>
                  {{ $message }}
                </strong>
              </span>
            @enderror
          </div>



          <div class="form-group">
            <label for="password">{{ __(' Password ') }}</label>
            <input type="text" class="form-control @error('Last Name') is-invalid @enderror" id="password" name="password" placeholder="Enter Password"  value="{{ old('password') }}" required autocomplete="password" autofocus >
            @error('Password')
              <span class="invalid-feedback" role="alert">
                <strong>
                  {{ $message }}
                </strong>
              </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="cpassword">{{ __(' Confirm Password ') }}</label>
            <input type="text" class="form-control @error('Last Name') is-invalid @enderror" id="cpassword" name="cpassword" placeholder=" Confirm Password "  value="{{ old('cpassword') }}" required autocomplete="cpassword" autofocus >
            @error('Confirm Password ')
              <span class="invalid-feedback" role="alert">
                <strong>
                  {{ $message }}
                </strong>
              </span>
            @enderror
          </div>


          <div class="form-group">
            <label for="CellNo">{{ __(' Contact Number * ') }}</label>
            <input type="text" class="form-control @error('Last Name') is-invalid @enderror" id="CellNo" name="CellNo" placeholder="Enter  Email Addresss"  value="{{ old('CellNo') }}" required autocomplete="CellNo" autofocus >
             <span class="help-block">Expected format is (International Country Code) (Dial Number), eg. +44 1234 567890 </span>
            @error('  Contact Number *  ')
              <span class="invalid-feedback" role="alert">
                <strong>
                  {{ $message }}
                </strong>
              </span>
            @enderror
          </div>
    
        </div>
        <div class="modal-footer light">
          <!-- <button type="button" class="btn bg-white" data-dismiss="modal">Cancel</button> -->
          <button type="submit" class="btn primary_style"> {{ __('Register') }} </button>
        </div>
      </form>
    </div>
  </div>
</div>





<!-- login model -->

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header primary_style">
        <h5 class="modal-title" id="exampleModalLabel"> Log In </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group" id="show_hide_password">
            <label for="exampleInputPassword">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword" aria-describedby="passHelp" placeholder="Enter Password">
            <div class="input-group-addon bg-light p-1">
              <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="form-group form-check">
            <a href="#"> Forgot password? </a>
          </div>
          
        </div>
        <div class="modal-footer light">
          <button type="button" class="btn bg-white" data-dismiss="modal">Close</button>
          <button type="submit" class="btn primary_style">Log In</button>
        </div>
      </form>
    </div>
  </div>
</div>



