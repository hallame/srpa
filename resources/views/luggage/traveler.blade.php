@extends('layouts.app')

@section('title')
    Travaler
@endsection

@section('content')

    @include('layouts.header')
    <div class="container">
        <h1 class="text-center mt-4">Traveler Registration</h1>
        <div class="card mt-5">
            <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                <h4 id="register">{{ __('Receiver Register Form') }}</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="#">
                    @csrf
                    <div class="row gy-4">
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
                            <label>{{ __('Departure Country') }}</label>
                            <input type="text" name="country" class="form-control" value="{{ old('country') }}" required>
                            @include('layouts.error',['input_name' => 'country'])
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Arrival Country') }}</label>
                            <input type="text" step="any" name="city" value="{{ old('city') }}" class="form-control" required>
                            @include('layouts.error',['input_name' => 'city'])
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Date') }}</label>
                            <input type="date" name="date" value="{{ old('date') }}" class="form-control" required>
                            @include('layouts.error',['input_name' => 'date'])
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Time') }}</label>
                            <input type="time" name="time" value="{{ old('time') }}" class="form-control" required>
                            @include('layouts.error',['input_name' => 'time'])
                        </div>
                        <div class="col-md-6">
                            <label>{{ __('Available weight') }}</label>
                            <input type="number" step="0.1" name="weight" value="{{ old('weight') }}" class="form-control" required>
                            @include('layouts.error',['input_name' => 'weight'])
                        </div>
                        <div class="col-md-6">
                            <label></label><br>
                            <button class="btn btn-primary">{{ __('Register') }}</button>
                        </div>
                    </div>
                </form>
            </div><br>
            <a href="{{ route('home') }}">Home</a>
        </div>
    </div>
    @include('layouts.footer')

@endsection