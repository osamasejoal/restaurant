@extends('backend.layouts.master')

@section('main-content')
    <div class="content-body">
        <div class="container-fluid">

            {{-- BreadCrumb --}}
            <div class="row page-titles mb-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Profile</a></li>
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

                {{-- Update Option --}}
                <div class="col-xl-8 col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <p class="m-auto text-primary h2">Edit Profile</p>
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
                                <form action="{{ route('profile.update', auth()->id()) }}" method="post" enctype="multipart/form-data"
                                    class="row">
                                    @csrf

                                    {{-- Name --}}
                                    <div class="mb-5 row">

                                        <label for="name" class="col-3 col-form-label">
                                            Name<span class="text-danger" style="font-size:20px">*</span>
                                        </label>

                                        <div class="col-9">
                                            <input name="name" type="text" value="{{ auth()->user()->name }}"
                                                id="name" class="form-control" style="font-size:18px">

                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    {{-- Email --}}
                                    <div class="mb-5 row">

                                        <label for="email" class="col-3 col-form-label">
                                            Email<span class="text-danger" style="font-size:20px">*</span>
                                        </label>

                                        <div class="col-9">
                                            <input name="email" type="text" value="{{ auth()->user()->email }}"
                                                id="email" class="form-control" style="font-size:18px">

                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    {{-- Gender --}}
                                    <div class="mb-5 row">

                                        <label for="gender" class="col-3 col-form-label">
                                            Gender<span class="text-danger" style="font-size:20px">*</span>
                                        </label>

                                        <div class="col-9">
                                            <select name="gender" id="gender" class="form-control"
                                                style="font-size:18px">
                                                <option value="1" {{ auth()->user()->gender == 1 ? 'selected' : '' }}>
                                                    Male</option>
                                                <option value="2" {{ auth()->user()->gender == 2 ? 'selected' : '' }}>
                                                    Female</option>
                                                <option value="3" {{ auth()->user()->gender == 3 ? 'selected' : '' }}>
                                                    Others</option>
                                            </select>

                                            @error('gender')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    {{-- Previous Image --}}
                                    <div class="mb-5 row">

                                        <label for="preimg" class="col-3 col-form-label">
                                            Previous Picture
                                        </label>

                                        <div class="col-9">
                                            <img src="{{ asset('backend/assets/images/profile_pic/' . auth()->user()->image) }}" id="preimg" alt="" style="width:150px;border-radius:5px;">
                                        </div>

                                    </div>

                                    {{-- New Image --}}
                                    <div class="mb-4 row">

                                        <label for="formFile" class="col-3 col-form-label">
                                            Choose New Image
                                        </label>

                                        <div class="col-9">
                                            <input name="image" type="file" id="formFile" class="form-control">

                                            @if ($errors->get('image'))
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            @else
                                                <span class="text-muted">Image should be <b>jpg</b> and <b>square</b> shape.</span>
                                            @endif
                                        </div>

                                    </div>

                                    {{-- Password Change --}}
                                    <div class="row col-12">
                                        <div class="col-sm-12 text-end">
                                            <a href="{{ route('profile.password.change') }}" class="text-info">Change your password!</a>
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
