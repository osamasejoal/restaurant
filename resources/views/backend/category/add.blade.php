@extends('backend.layouts.master')

@section('main-content')
    <div class="content-body">
        <div class="container-fluid">

            {{-- BreadCrumb --}}
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('category.index') }}">Category</a></li>
                    <li class="breadcrumb-item"><a href="#">Add Category</a></li>
                </ol>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <p class="m-auto text-primary h2">Create New Category</p>
                        </div>
                        <div class="card-body col-xl-9 col-lg-10 col-sm-12 m-auto">

                            {{-- Success alert --}}
                            @if (session('success'))
                                <div class="alert alert-success text-center">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="basic-form">

                                {{-- Form --}}
                                <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    {{-- Category Name --}}
                                    <div class="mb-5 row">
                                        <label class="col-sm-3 col-form-label">Category Name</label>
                                        <div class="col-sm-9">
                                            <input name="name" type="text" class="form-control" style="font-size:18px">

                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Category Image --}}
                                    <div class="mb-5 row">
                                        <label class="col-sm-3 col-form-label">Category Image</label>
                                        <div class="col-sm-9">
                                            <input name="image" type="file" class="d-block">

                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Submit Button --}}
                                    <div class="mb-3 row">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-primary">Add Category</button>
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
