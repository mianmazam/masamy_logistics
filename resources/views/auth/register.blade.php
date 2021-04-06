<!DOCTYPE html>
<html>
<head>
    <title></title>

</head>
<body>
@include('layouts/header')
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
            <div class="col-lg-9 col-md-9 col-sm-12">

                <div class="py-5">
                  <form method="post" action="{{ route('register') }} " class="border_class">
                    @csrf
                    <div class="form-group primary_style p-2 ">
                            <h5> CREATE ACCOUNT </h5>
                        </div>
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
                      <input type="submit" name="register" value="{{ __('Register') }} " class="btn bg-white
                      ">
                      <input type="submit" name="register" value="{{ __('Register') }}" class="btn primary_style">
                    </div>
                  </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                @include('layouts.reg')                    
                @include('layouts.service')
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


