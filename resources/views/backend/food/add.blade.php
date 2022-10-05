@extends('backend.layouts.master')

@section('main-content')
    <div class="content-body">
        <div class="container-fluid">

            {{-- BreadCrumb --}}
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('food.index') }}">Food</a></li>
                    <li class="breadcrumb-item"><a href="#">Add Food</a></li>
                </ol>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <p class="m-auto text-primary h2">Create New Food</p>
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
                                <form action="{{ route('food.store') }}" method="post" enctype="multipart/form-data"
                                    class="row">
                                    @csrf

                                    {{-- Food Name --}}
                                    <div class="mb-5 row col-lg-12 col-xl-6 col-md-12">

                                        <label for="foodName" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                            Food Name<span class="text-danger" style="font-size:20px">*</span>
                                        </label>

                                        <div class="col-sm-9 col-md-8 col-lg-8">
                                            <input name="name" type="text" value="{{old('name')}}" id="foodName" class="form-control"
                                                style="font-size:18px">

                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    {{-- Food Image --}}
                                    <div class="mb-5 row col-lg-12 col-xl-6 col-md-12">

                                        <label for="formFile" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                            Food Image<span class="text-danger" style="font-size:20px">*</span>
                                        </label>

                                        <div class="col-sm-9 col-md-8 col-lg-8">
                                            <input name="image" type="file" id="formFile" class="form-control">

                                            @if ($errors->get('image'))
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            @else
                                                <span class="text-muted">Image dimension will be <b>83*68</b>.</span>
                                            @endif
                                        </div>

                                    </div>

                                    {{-- Select Cuisine --}}
                                    <div class="mb-5 row col-lg-6 col-xl-6">

                                        <label for="foodCuisine" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                            Cuisine<span class="text-danger" style="font-size:20px">*</span>
                                        </label>

                                        <div class="col-sm-9 col-md-8 col-lg-8">
                                            <select name="cuisine_id" class="form-select form-select-lg" id="foodCuisine"
                                                style="background-color:transparent;border-radius:0.5rem;border:1px solid #ced4da;">
                                                @foreach ($cuisines as $cuisine)
                                                    <option value="{{ $cuisine->id }}" {{ old('cuisine_id') == $cuisine->id ? 'selected' : '' }}>{{ $cuisine->name }}</option>
                                                @endforeach
                                            </select>

                                            @if ($errors->get('cuisine_id'))
                                                @error('cuisine_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            @elseif ($cuisines->isEmpty())
                                                <span class="text-danger">Please create <a href="{{route('cuisine.create')}}" class="fw-bold fst-italic text-primary text-decoration-underline">CUISINE</a> first.</span>
                                            @endif
                                        </div>

                                    </div>

                                    {{-- Select Category --}}
                                    <div class="mb-5 row col-lg-6 col-xl-6">

                                        <label for="foodCategory" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                            Category<span class="text-danger" style="font-size:20px">*</span>
                                        </label>

                                        <div class="col-sm-9 col-md-8 col-lg-8">
                                            <select name="category_id" class="form-select form-select-lg" id="foodCategory"
                                                style="background-color:transparent;border-radius:0.5rem;border:1px solid #ced4da;">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                            @if ($errors->get('category_id'))
                                                @error('category_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            @elseif ($categories->isEmpty())
                                                <span class="text-danger">Please create <a href="{{route('category.create')}}" class="fw-bold fst-italic text-primary text-decoration-underline">CATEGORY</a> first.</span>
                                            @endif
                                        </div>

                                    </div>

                                    {{-- Price --}}
                                    <div class="mb-5 row col-lg-12 col-xl-6 col-md-12">

                                        <label for="foodPrice" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                            Price<span class="text-danger" style="font-size:20px">*</span>
                                        </label>

                                        <div class="col-sm-9 col-md-8 col-lg-8">
                                            <input name="price" type="number" value="{{ old('price') }}" id="foodPrice" class="form-control"
                                                style="font-size:18px">

                                            @error('price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    {{-- Quantity --}}
                                    <div class="mb-5 row col-lg-12 col-xl-6 col-md-12">

                                        <label for="foodQuantity" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                            Quantity<span class="text-danger" style="font-size:20px">*</span>
                                        </label>

                                        <div class="col-sm-9 col-md-8 col-lg-8">
                                            <input name="quantity" type="number" value="{{ old('quantity') }}" id="foodQuantity" class="form-control"
                                                style="font-size:18px">

                                            @error('quantity')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    {{-- Details --}}
                                    <div class="mb-5 row col-lg-12 col-xl-6 col-md-12">

                                        <label for="details" class="col-sm-3 col-md-4 col-lg-4 col-form-label">Details</label>

                                        <div class="col-sm-9 col-md-8 col-lg-8">
                                            <textarea name="details" id="details" class="form-control" style="font-size:18px"
                                                placeholder="E.g.: Tomato sauce, Mozzarella cheese, BBQ Grilled Chicken, sliced onions & sliced capsicum">{{ old('details') }}</textarea>
                                            
                                            @error('details')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    {{-- Submit Button --}}
                                    <div class="mb-3 row col-12">
                                        <div class="col-sm-12 text-center">
                                            @if ($cuisines->isEmpty() || $categories->isEmpty())
                                                <button type="submit" disabled class="btn btn-primary">Add Food</button>
                                            @else
                                                <button type="submit" class="btn btn-primary">Add Food</button>
                                            @endif
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
