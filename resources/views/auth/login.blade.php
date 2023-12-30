@extends('layouts.app')

@section('content')
<div class="container">
    @php
        // dd(session('status'));
    @endphp
    <div class="row justify-content-center ">

        <div class="form-container container-fluid">
            <p class="title" style="font-family: 'Dancing Script', cursive;color:#df5b57;font-size:38px">{{ __('Login') }}</p>

    @if(session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
@endif
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label ">{{ __('Email Address') }}</label>

                    <div class="col-md-12">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-12 col-form-label ">{{ __('Password') }}</label>

                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12 offset-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>


                <div class="row mb-3">


                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary" style="width: 100%;background-color:#df5b57;border:none">
                            {{ __('Login') }}
                        </button>


                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-8">
                        <a class="btn btn-link" href="{{ route('register') }}">
                            {{ __('Dont have Account? Sign Up') }}
                        </a>
                    </div>
                </div>
            </form>



        </div>
    </div>
</div>

@endsection
