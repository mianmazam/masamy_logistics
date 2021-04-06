<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <div class="col-lg-9 col-md-8 col-sm-12">

                <div class="py-5">
                    <form class="border_class" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group primary_style p-2 ">
                            <h5> LOGIN TO YOUR ACCOUNT </h5>
                        </div>
                        <div class="form-group  p-2 ">
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
                        <div class="form-group  p-2 ">
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
                        <div class="bg-light p-3 text-right">
                            <button type="submit" class="btn primary_style">Log In</button>
                                <a href="#" class="btn secondary_style" tar>Reset Password</a>

                       </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                @include('layouts.reg')                    
                @include('layouts.service')
            </div>
        </div>
    </div>
</section>
@include('layouts/footer')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>


