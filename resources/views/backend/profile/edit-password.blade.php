@extends('backend.layouts.master')

@section('main-content')
    <div class="content-body">
        <div class="container-fluid">

            {{-- BreadCrumb --}}
            <div class="row page-titles mb-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('profile.index') }}">Profile</a></li>
                    <li class="breadcrumb-item"><a href="#">Edit Password</a></li>
                </ol>
            </div>

            <div class="row mb-5">

                {{-- Profile Details --}}
                <div class="col-xl-4 col-lg-12 col-sm-12" style="height:fit-content">
                    <div class="card overflow-hidden">

                        <div class="text-center p-3 overlay-box "
                            style="background-image: url({{ asset('backend/assets/images/big/img5.jpg') }});">
                            <div class="profile-photo">
                                <img src="{{ asset('backend/assets/images/profile_pic/' . auth()->user()->image) }}"
                                    width="175" class="img-fluid rounded-circle" alt="">
                            </div>
                            <h3 class="mt-3 mb-1 text-white">{{ auth()->user()->name }}</h3>
                            <p class="text-white mb-0">
                                @if (auth()->user()->role == 1)
                                    Admin
                                @elseif (auth()->user()->role == 2)
                                    Staff
                                @else
                                    Honourable Customer
                                @endif
                            </p>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="mb-0">Name</span>
                                <strong class="text-muted">{{ auth()->user()->name }}</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="mb-0">Email</span>
                                <strong class="text-muted">{{ auth()->user()->email }}</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="mb-0">Gender</span>
                                <strong class="text-muted">
                                    @if (auth()->user()->gender == 1)
                                        Male
                                    @elseif (auth()->user()->gender == 2)
                                        Female
                                    @else
                                        Others
                                    @endif
                                </strong>
                            </li>

                            @if (auth()->user()->role == 2)
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="mb-0">Joining</span>
                                    <strong class="text-muted">{{ auth()->user()->created_at->format('d/m/Y') }}</strong>
                                </li>
                            @endif

                        </ul>
                        <div class="card-footer border-0 mt-0">
                            <button class="btn btn-primary btn-lg btn-block">
                                <i class="fa fa-bell-o"></i> Reminder Alarm
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Update Password --}}
                <div class="col-xl-8 col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <p class="m-auto text-primary h2">Edit Password</p>
                        </div>
                        <div class="card-body">

                            {{-- Success alert --}}
                            @if (session('success'))
                                <div class="alert alert-success text-center">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="basic-form">

                                {{-- Form --}}
                                <form action="{{ route('profile.password.update') }}" method="post"
                                    class="row">
                                    @csrf

                                    {{-- Old Password --}}
                                    <div class="mb-5 row">

                                        <label for="old_pass" class="col-3 col-form-label">
                                            Old Password<span class="text-danger" style="font-size:20px">*</span>
                                        </label>

                                        <div class="col-9">
                                            <input name="old_pass" type="password" id="old_pass" class="form-control" style="font-size:18px">

                                            @error('old_pass')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            @if (session('error'))
                                                <span class="text-danger">{{ session('error') }}</span>
                                            @endif
                                        </div>

                                    </div>

                                    {{-- New Password --}}
                                    <div class="mb-5 row">

                                        <label for="new_pass" class="col-3 col-form-label">
                                            New Password<span class="text-danger" style="font-size:20px">*</span>
                                        </label>

                                        <div class="col-9">
                                            <input name="password" type="password" id="new_pass" class="form-control" style="font-size:18px">

                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    {{-- Confirm Password --}}
                                    <div class="mb-5 row">

                                        <label for="confirm_pass" class="col-3 col-form-label">
                                            Confirm Password<span class="text-danger" style="font-size:20px">*</span>
                                        </label>

                                        <div class="col-9">
                                            <input name="password_confirmation" type="password" id="confirm_pass" class="form-control" style="font-size:18px">

                                            @error('password_confirmation')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    
                                    {{-- Forgot Password --}}
                                    <div class="row col-12">
                                        <div class="col-sm-12 text-end">
                                            <a href="{{ route('password.request') }}" class="text-info">Forgot Password?</a>
                                        </div>
                                    </div>

                                    {{-- Submit Button --}}
                                    <div class="mb-3 row col-12">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection