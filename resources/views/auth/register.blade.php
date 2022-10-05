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
                            <label class="mb-1" for="name"><strong>Name</strong></label>
                            <input name="name" type="text" class="form-control" id="name" style="font-size:18px">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        {{-- Email --}}
                        <div class="form-group">
                            <label class="mb-1" for="email"><strong>Email</strong></label>
                            <input name="email" type="email" class="form-control" id="email" style="font-size:18px">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        {{-- Gender --}}
                        <div class="form-group">
                            <label class="mb-1" for="gender"><strong>Gender</strong></label>
                            <select name="gender" id="gender" class="form-control" style="font-size:18px">
                                <option value="" class="text-center">-- Select Your Gender --</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Others</option>
                            </select>
                            @if ($errors->has('gender'))
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                            @endif
                        </div>

                        {{-- Password --}}
                        <div class="form-group">
                            <label class="mb-1"><strong>Password</strong></label>
                            <input name="password" type="password" class="form-control" style="font-size:18px">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        {{-- Confirm Password --}}
                        <div class="form-group">
                            <label class="mb-1"><strong>Confirm Password</strong></label>
                            <input name="password_confirmation" type="password" class="form-control" style="font-size:18px">
                            @if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                            @endif
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
