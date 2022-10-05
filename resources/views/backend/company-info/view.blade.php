@extends('backend.layouts.master')

@section('main-content')
    <div class="content-body">
        <div class="container-fluid">

            {{-- BreadCrumb --}}
            <div class="row page-titles mb-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Company Info</a></li>
                </ol>
            </div>

            <div class="row mb-5">

                {{-- Company Information --}}
                <div class="col-xl-4 col-lg-12 col-sm-12" style="height:fit-content">
                    <div class="card overflow-hidden">

                        <div class="text-center p-3 overlay-box">
                            <h3 class="text-white mt-3">Company Information</h3>
                        </div>

                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="mb-0">Name</span>
                                <strong class="text-muted">{{ $company_info->name }}</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="mb-0">Logo</span>
                                <img src="{{ asset('backend/assets/images/logo/' . $company_info->logo) }}" width="150" class="img-fluid" alt="Company Logo">
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="mb-0">Email</span>
                                <strong class="text-muted">{{ $company_info->email }}</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="mb-0">Contact</span>
                                <strong class="text-muted">{{ $company_info->contact }}</strong>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span class="mb-0">Location</span>
                                <strong class="text-muted">{{ $company_info->location }}</strong>
                            </li>

                        </ul>
                    </div>
                </div>

                {{-- Update Option --}}
                <div class="col-xl-8 col-lg-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <p class="m-auto text-primary h2">Update Information</p>
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
                                <form action="{{ route('companyInfo.update', $company_info->id) }}" method="post" enctype="multipart/form-data"
                                    class="row">
                                    @csrf
                                    @method('put')

                                    {{-- Name --}}
                                    <div class="mb-5 row">

                                        <label for="name" class="col-3 col-form-label">
                                            Name<span class="text-danger" style="font-size:20px">*</span>
                                        </label>

                                        <div class="col-9">
                                            <input name="name" type="text" value="{{ $company_info->name }}"
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
                                            <input name="email" type="text" value="{{ $company_info->email }}"
                                                id="email" class="form-control" style="font-size:18px">

                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    {{-- Contact --}}
                                    <div class="mb-5 row">

                                        <label for="contact" class="col-3 col-form-label">
                                            Contact<span class="text-danger" style="font-size:20px">*</span>
                                        </label>

                                        <div class="col-9">
                                            <input name="contact" type="text" value="{{ $company_info->contact }}"
                                                id="contact" class="form-control" style="font-size:18px">

                                            @error('contact')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    {{-- Location --}}
                                    <div class="mb-5 row">

                                        <label for="location" class="col-3 col-form-label">
                                            Location<span class="text-danger" style="font-size:20px">*</span>
                                        </label>

                                        <div class="col-9">
                                            <input name="location" type="text" value="{{ $company_info->location }}"
                                                id="location" class="form-control" style="font-size:18px">

                                            @error('location')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    {{-- Previous Logo --}}
                                    <div class="mb-5 row">

                                        <label for="preimg" class="col-3 col-form-label">
                                            Previous Logo
                                        </label>

                                        <div class="col-9">
                                            <img src="{{ asset('backend/assets/images/logo/' . $company_info->logo) }}" id="preimg" alt="" style="width:150px;border-radius:5px;">
                                        </div>

                                    </div>

                                    {{-- New Logo --}}
                                    <div class="mb-4 row">

                                        <label for="formFile" class="col-3 col-form-label">
                                            Choose New Logo
                                        </label>

                                        <div class="col-9">
                                            <input name="logo" type="file" id="formFile" class="form-control">

                                            @if ($errors->get('logo'))
                                                @error('logo')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            @else
                                                <span class="text-muted">Image should be <b>png</b> file.</span>
                                            @endif
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
