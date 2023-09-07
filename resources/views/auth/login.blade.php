@extends('layouts.app')

@section('title')
    Login
@endsection

@section('content')
@include('layouts.header')

    <div class="container">
        <h1 class="text-center mt-4">Login</h1>
        <div class="card mt-5 col-md-6 mx-auto">
            <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                <h4 id="register">{{ __('Login Form') }}</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="#">
                    @csrf
                        <div class="col">
                            <label>{{ __('Email') }}</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
                            @include('layouts.error',['input_name' => 'email'])
                        </div>
                        <div class="col">
                            <label>{{ __('Password') }}</label>
                            <input type="password" name="password" value="{{ old('password') }}" class="form-control" required>
                            @include('layouts.error',['input_name' => 'password'])
                        </div>
                        <button class="btn btn-primary mt-4">{{ __('Login') }}</button>
                </form>
            </div><br>
            <p>Don't have account ? <a href="{{ route('register') }}">Register here</a></p>
        </div>
    </div>

    <br><br><br><br><br><br><br>
    
    @include('layouts.footer')
@endsection