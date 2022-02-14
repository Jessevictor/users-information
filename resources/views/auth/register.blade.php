@extends('layouts.app')
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mt-5">
            <div class="card" style="border-radius: 20px; background: linear-gradient(to top right, #0066ff -65%, #ffffff 60%);">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    
                        <!-- firstname -->
                        <div class="row mb-3">
                            <p>FirstName</p>
                            <label for="firstname" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-12">
                                <input id="firstname" type="firstname" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end of firstname -->
                        <!-- lastname -->
                        <div class="row mb-3">
                            <p>LastName</p>
                            <label for="lastname" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-12">
                                <input id="lastname" type="lastname" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end of lastname -->

                        <div class="row mb-3">
                            <p>Email</p>
                            <label for="email" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <p>Password</p>
                            <label for="password" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <p>Confirm Password</p>
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end"></label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-12">
                            <div class="col offset-md-0">
                                <button type="submit" class="btn btn-primary" style="background: linear-gradient(to right, #003360 34%, #ffffff 159%);">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
