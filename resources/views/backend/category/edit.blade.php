@extends('backend.layouts.master')

@section('main-content')
    <div class="content-body">
        <div class="container-fluid">

            {{-- BreadCrumb --}}
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('category.index') }}">Category</a></li>
                    <li class="breadcrumb-item"><a href="#">Edit Category</a></li>
                </ol>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <p class="m-auto text-primary h2">Edit Category</p>
                        </div>
                        <div class="card-body col-xl-9 col-lg-10 col-sm-12 m-auto">

                            {{-- Success alert --}}
                            @if (session('success'))
                                <div class="alert alert-success text-center">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="basic-form">

                                {{-- Category Name --}}
                                <form action="{{ route('category.update', $category->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf
                                    <div class="mb-5 row">
                                        <label class="col-sm-3 col-form-label">Category Name</label>
                                        <div class="col-sm-6">
                                            <input name="name" type="text" value="{{ $category->name }}"
                                                id="category-name" class="form-control" style="font-size:18px">

                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-3">
                                            <button type="submit" id="submit-name" class="btn btn-primary">Update Name</button>
                                        </div>
                                    </div>

                                    {{-- Previous Image --}}
                                    <div class="mb-5 row">
                                        <label for="preimg" class="col-sm-3 col-form-label">Previous Image</label>
                                        <img id="preimg"
                                            src="{{ asset('backend/assets/images/category/' . $category->image) }}"
                                            alt="" style="width:300px;border-radius:10%;">

                                    </div>

                                </form>

                                {{-- category Image --}}
                                <form action="{{ route('category.update', $category->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @method('put')
                                    @csrf

                                    <div class="mb-5 row">
                                        <label class="col-sm-3 col-form-label">Choose New Image</label>
                                        <div class="col-sm-6">
                                            <input name="image" type="file" id="category-image" class="d-block">

                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-3">
                                            <button disabled type="submit" id="submit-image" class="btn btn-primary">Update Image</button>
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

@section('script-content')
    {{-- Update Image Button --}}
    <script>
        $('#category-image').on('change', function() {
            if ($(this).val() !== "") {
                $('#submit-image').removeAttr('disabled');
            }
        });
    </script>
@endsection
