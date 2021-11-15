@extends('front.layouts.main_layout')
@section('title_tab','Register | Blog')

@section('main_content')
<section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="font-weight-bold text-dark">Sign In</h1>
            </div>
            <div class="col-md-12 align-self-center order-1">
                <ul class="breadcrumb d-block text-center">
                    <li><a href="/">Home</a></li>
                    <li class="active">Sign In</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<div class="container py-4">

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="font-weight-bold text-5 mb-0">Sign In</h2>
                    
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                           @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label text-color-dark text-3">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    
                    
                    <div class="row">
                        <div class="form-group col">
                            <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">{{ __('Sign In') }}</button>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <p align="center">-OR-</p>
                        <a class="btn btn-link" href="{{ route('register') }}">
                            {{ __('Register?') }}
                        </a>
                    </div>
            </div>
        </div>
    </form>

</div>
@endsection