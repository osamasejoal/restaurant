@extends('auth.layouts.master')

@section('auth-content')
    <div class="authincation-content">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="auth-form">
                    <div class="text-center mb-3">
                        <a href="index.html"><img src="{{ asset('backend/assets') }}/images/logo-full.png" alt=""></a>
                    </div>
                    <h4 class="text-center mb-4">Sign up your account</h4>

                    {{-- Form --}}
                    <form action="{{route('register')}}" method="POST">
                        @csrf

                        {{-- Name --}}
                        <div class="form-group">
                            <label class="mb-1"><strong>Name</strong></label>
                            <input name="name" type="text" class="form-control">
                        </div>

                        {{-- Email --}}
                        <div class="form-group">
                            <label class="mb-1"><strong>Email</strong></label>
                            <input name="email" type="email" class="form-control">
                        </div>

                        {{-- Password --}}
                        <div class="form-group">
                            <label class="mb-1"><strong>Password</strong></label>
                            <input name="password" type="password" class="form-control">
                        </div>

                        {{-- Confirm Password --}}
                        <div class="form-group">
                            <label class="mb-1"><strong>Confirm Password</strong></label>
                            <input name="password_confirmation" type="password" class="form-control">
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                        </div>
                    </form>
                    <div class="new-account mt-3">
                        <p>Already have an account? <a class="text-primary" href="{{route('login')}}">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
