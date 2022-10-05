@extends('auth.layouts.master')

@section('auth-content')
    <div class="authincation-content">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="auth-form">
                    <div class="text-center mb-3">
                        <a href="index.html"><img src="{{ asset('backend/assets') }}/images/logo-full.png" alt=""></a>
                    </div>
                    <h4 class="text-center mb-4">Sign in your account</h4>

                    {{-- Form --}}
                    <form action="{{ route('login') }}" method="post">
                        @csrf

                        {{-- Email --}}
                        <div class="form-group">
                            <label class="mb-1"><strong>Email</strong></label>
                            <input name="email" type="email" class="form-control">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        {{-- Password --}}
                        <div class="form-group">
                            <label class="mb-1"><strong>Password</strong></label>
                            <input name="password" type="password" class="form-control">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox ms-1">
                                    <input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
                                    <label class="custom-control-label" for="basic_checkbox_1">Remember my
                                        preference</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                        </div>
                    </form>
                    <div class="new-account mt-3">
                        <p>Don't have an account? <a class="text-primary" href="{{ route('register') }}">Sign up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
