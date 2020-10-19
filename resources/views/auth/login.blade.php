@extends('layouts.authlayout')

@section('form')

<div class="card">
    <img class="card-img-top w-25 mx-auto my-2 " src={{ asset('logo/logo.png') }}  alt="Card image cap">
    <div class="card-body">
<form method="POST" action="{{ route('login') }}">
    @csrf
      <div class="form-group">

         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Username" required autocomplete="email" autofocus>
      </div> <!-- form-group// -->
      @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
      <div class="form-group">

        <input id="password" type="password"  placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
      </div> <!-- form-group// -->
      @error('password')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
       @enderror
      <div class="form-group">



        @if (Route::has('password.request'))
        <a class="float-right" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif


        <label class="float-left custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input" checked=""> <div class="custom-control-label">  {{ __('Remember Me') }}</div> </label>
      </div> <!-- form-group form-check .// -->
      <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block"> {{ __('Login') }}</button>
      </div> <!-- form-group// -->
  </form>
  <a   href="/register"  class="btn btn-primary btn-block"> {{ __('Register') }}<a>
</div>
</div>

@endsection
