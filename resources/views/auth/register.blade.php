@extends('layouts.app')

@section('title')
    Register
@endsection

@section('content')
@include('layouts.header')

    <div class="container">
        <h1 class="text-center mt-4">Register</h1>
        <div class="card mt-5">
            <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                <h4 id="register">{{ __('Register Form') }}</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="#">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <label>{{ __('First Name') }}</label>
                            <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" required>
                            @include('layouts.error',['input_name' => 'first_name'])
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Last Name') }}</label>
                            <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" required>
                            @include('layouts.error',['input_name' => 'last_name'])
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Email') }}</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>
                            @include('layouts.error',['input_name' => 'email'])
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Password') }}</label>
                            <input type="password" name="password" value="{{ old('password') }}" class="form-control" required>
                            @include('layouts.error',['input_name' => 'password'])
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Phone Number') }}</label>
                            <div class="input-group">
                                <div class="input-group-text p-0">
                                    <select class="form-select" name="country-code">
                                        @foreach ($countries as $countryCode => $countryName)
                                        <option value="{{ $countryCode }}">{{ $countryName }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control" required>
                                @include('layouts.error',['input_name' => 'phone_number'])
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Country') }}</label>
                            <input type="text" name="country" class="form-control" value="{{ old('country') }}" required>
                            @include('layouts.error',['input_name' => 'country'])
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('City') }}</label>
                            <input type="text" step="any" name="city" value="{{ old('city') }}" class="form-control" required>
                            @include('layouts.error',['input_name' => 'city'])
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Postal Code') }}</label>
                            <input type="tel" name="postal_code" value="{{ old('postal_code') }}" class="form-control" required>
                            @include('layouts.error',['input_name' => 'postal_code'])
                        </div>
                        <div class="col-md-6">
                            <label></label><br>
                            <button class="btn btn-primary">{{ __('Register') }}</button>
                        </div>
                    </div>
                </form>
            </div><br>
            <p>Already have account ? <a href="{{ route('login') }}">Login here</a></p>
        </div>
    </div>
    @include('layouts.footer')
@endsection