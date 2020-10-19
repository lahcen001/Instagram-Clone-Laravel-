@extends('layouts.authlayout')

@section('form')
<div class="card">
    <img class="card-img-top w-25 mx-auto my-2 " src={{ asset('logo/logo.png') }}  alt="Card image cap">
    <div class="card-body">
<form method="POST" action="{{ route('register') }}" >
    @csrf

    <div class="form-group">
        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{ old('username') }}" autocomplete="username" autofocus>
    </div>

        @error('username')
            <span class="invalid-feedback " role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror





        <div class="form-group">

         <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Full Name" autofocus>
      </div> <!-- form-group// -->
      @error('name')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
       </span>
        @enderror

      <div class="form-group">


        <input id="email" type="email"  placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

      </div> <!-- form-group// -->
      @error('email')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
       @enderror

       <div class="form-group">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

       </div> <!-- form-group// -->
       @error('password')
       <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
         @enderror
         <div class="form-group">



          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  placeholder="Password Confirmation">

       </div> <!-- form-group// -->
       @error('password')
       <span class="invalid-feedback" role="alert">
         <strong>{{ $message }}</strong>
        </span>
         @enderror


      <div class="form-group">



      </div> <!-- form-group form-check .// -->
      <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Register</button>
      </div> <!-- form-group// -->
  </form>
  <a   href="/login"  class="btn btn-primary btn-block">Login<a>
</div>
</div>
@endsection

{{--

@extends('layouts.authlayout')


<div class="card">
    <img class="card-img-top w-25 mx-auto my-2 " src={{ asset('logo/logo.png') }}  alt="Card image cap">
    <div class="card-body">


@section('form')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <span class="login100-form-title p-b-34">
            Sign Up
        </span>

        <div class="form-group">

            <input id="email" type="email"  placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

          </div> <!-- form-group// -->
          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
           @enderror

        <div class="wrap-input100 validate-input m-b-20" data-validate="Type user name">
            <input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" placeholder="Full Name" value="{{ old('name') }}" autocomplete="name" autofocus>
            <span class="focus-input100"></span>
            @error('name')
                <span class="invalid-feedback m-l-16" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="wrap-input100 validate-input m-b-20" data-validate="Type user name">
            <input id="username" type="text" class="input100 @error('username') is-invalid @enderror" name="username" placeholder="Username" value="{{ old('username') }}" autocomplete="username" autofocus>
            <span class="focus-input100"></span>
            @error('username')
                <span class="invalid-feedback m-l-16" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="wrap-input100 validate-input m-b-20" data-validate="Type password">
            <input id="password" type="password" class="input100 @error('password') is-invalid @enderror"  name="password" placeholder="Password" autocomplete="new-password">
            <span class="focus-input100"></span>
            @error('password')
                <span class="invalid-feedback m-l-16" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="wrap-input100 validate-input m-b-20" data-validate="Type password">
            <input id="password-confirm" type="password" class="input100"  name="password_confirmation" placeholder="Confirm Password" autocomplete="new-password">
            <span class="focus-input100"></span>
            @error('password-confirm')
                <span class="invalid-feedback m-l-16" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn" >
                Register
            </button>
        </div>

        <div class="w-full text-center m-t-49">
            <a href="{{ route('login') }}" class="txt3 ">
                Login
            </a>
        </div>

    </form>

</div>
</div>
@endsection --}}
