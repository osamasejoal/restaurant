@extends('backend.layouts.master')

@section('main-content')
    <div class="content-body">
        <div class="container-fluid">

            {{-- BreadCrumb --}}
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('food.index') }}">Food</a></li>
                    <li class="breadcrumb-item"><a href="#">Edit Food</a></li>
                </ol>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <p class="m-auto text-primary h2">Edit Food</p>
                        </div>
                        <div class="card-body col-xl-12 col-lg-12 col-sm-12 m-auto">

                            {{-- Success alert --}}
                            @if (session('success'))
                                <div class="alert alert-success text-center">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <div class="basic-form">
                                <div class="row">

                                    {{-- Food Name --}}
                                    <form action="{{ route('food.name.update', $food->id) }}" method="post"
                                        enctype="multipart/form-data" class="col-xl-10 col-lg-10 col-sm-12 m-auto">
                                        @csrf

                                        <div class="mb-5 row">
                                            <label class="col-sm-3 col-form-label">food Name</label>
                                            <div class="col-sm-6">
                                                <input name="name" type="text" value="{{ $food->name }}"
                                                    id="food-name" class="form-control" style="font-size:18px">

                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-3">
                                                <button type="submit" id="submit-name" class="btn btn-primary">Update
                                                    Name</button>
                                            </div>
                                        </div>

                                    </form>

                                    <form action="{{ route('food.update', $food->id) }}" method="post"
                                        enctype="multipart/form-data" class="border-top border-primary row m-auto pt-5">
                                        @method('put')
                                        @csrf

                                        {{-- Select Cuisine --}}
                                        <div class="mb-5 row col-lg-6 col-xl-6">

                                            <label for="foodCuisine" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                                Cuisine
                                            </label>

                                            <div class="col-sm-9 col-md-8 col-lg-8">
                                                <select name="cuisine_id" class="form-select form-select-lg"
                                                    id="foodCuisine"
                                                    style="background-color:transparent;border-radius:0.5rem;border:1px solid #ced4da;">
                                                    @foreach ($cuisines as $cuisine)
                                                        <option value="{{ $cuisine->id }}"
                                                            {{ $food->cuisine_id == $cuisine->id ? 'selected' : '' }}>
                                                            {{ $cuisine->name }}</option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->get('cuisine_id'))
                                                    @error('cuisine_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                @elseif ($cuisines->isEmpty())
                                                    <span class="text-danger">Please create <a
                                                            href="{{ route('cuisine.create') }}"
                                                            class="fw-bold fst-italic text-primary text-decoration-underline">CUISINE</a>
                                                        first.</span>
                                                @endif
                                            </div>

                                        </div>

                                        {{-- Select Category --}}
                                        <div class="mb-5 row col-lg-6 col-xl-6">

                                            <label for="foodCategory" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                                Category
                                            </label>

                                            <div class="col-sm-9 col-md-8 col-lg-8">
                                                <select name="category_id" class="form-select form-select-lg"
                                                    id="foodCategory"
                                                    style="background-color:transparent;border-radius:0.5rem;border:1px solid #ced4da;">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            {{ $food->category_id == $category->id ? 'selected' : '' }}>
                                                            {{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                @if ($errors->get('category_id'))
                                                    @error('category_id')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                @elseif ($categories->isEmpty())
                                                    <span class="text-danger">Please create <a
                                                            href="{{ route('category.create') }}"
                                                            class="fw-bold fst-italic text-primary text-decoration-underline">CATEGORY</a>
                                                        first.</span>
                                                @endif
                                            </div>

                                        </div>

                                        {{-- Price --}}
                                        <div class="mb-5 row col-lg-12 col-xl-6 col-md-12">

                                            <label for="foodPrice" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                                Price
                                            </label>

                                            <div class="col-sm-9 col-md-8 col-lg-8">
                                                <input name="price" type="number" value="{{ $food->price }}"
                                                    id="foodPrice" class="form-control" style="font-size:18px">

                                                @error('price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        {{-- Quantity --}}
                                        <div class="mb-5 row col-lg-12 col-xl-6 col-md-12">

                                            <label for="foodQuantity" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                                Quantity
                                            </label>

                                            <div class="col-sm-9 col-md-8 col-lg-8">
                                                <input name="quantity" type="number" value="{{ $food->quantity }}"
                                                    id="foodQuantity" class="form-control" style="font-size:18px">

                                                @error('quantity')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        {{-- Discount --}}
                                        <div class="mb-5 row col-lg-12 col-xl-6 col-md-12">

                                            <label for="foodDiscount" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                                Discount Percantage
                                            </label>

                                            <div class="col-sm-9 col-md-8 col-lg-8">
                                                <input name="discount" type="number" value="{{ $food->discount }}"
                                                    id="foodDiscount" class="form-control" style="font-size:18px">

                                                @error('discount')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        {{-- Details --}}
                                        <div class="mb-5 row col-lg-12 col-xl-6 col-md-12">

                                            <label for="details"
                                                class="col-sm-3 col-md-4 col-lg-4 col-form-label">Details</label>

                                            <div class="col-sm-9 col-md-8 col-lg-8">
                                                <textarea name="details" id="details" class="form-control" style="font-size:18px"
                                                    placeholder="E.g.: Tomato sauce, Mozzarella cheese, BBQ Grilled Chicken, sliced onions & sliced capsicum">{{ $food->details }}</textarea>

                                                @error('details')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>

                                        {{-- Previous Image --}}
                                        <div class="mb-5 row col-lg-12 col-xl-6 col-md-12">

                                            <label for="preimg" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                                Previous Image
                                            </label>

                                            <div class="col-sm-9 col-md-8 col-lg-8">
                                                <img id="preimg"
                                                    src="{{ asset('backend/assets/images/food/' . $food->image) }}"
                                                    alt="" style="width:150px;border-radius:5px;">
                                            </div>
                                        </div>


                                        {{-- Food Image --}}
                                        <div class="mb-5 row col-lg-12 col-xl-6 col-md-12">

                                            <label for="formFile" class="col-sm-3 col-md-4 col-lg-4 col-form-label">
                                                New Image
                                            </label>

                                            <div class="col-sm-9 col-md-8 col-lg-8">
                                                <input name="image" type="file" id="formFile"
                                                    class="form-control">

                                                @if ($errors->get('image'))
                                                    @error('image')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                @else
                                                    <span class="text-muted">Image dimension will be <b>83*68</b>.</span>
                                                @endif
                                            </div>

                                        </div>

                                        {{-- Submit Button --}}
                                        <div class="mb-3 row col-12">
                                            <div class="col-sm-12 text-center">
                                                @if ($cuisines->isEmpty() || $categories->isEmpty())
                                                    <button type="submit" disabled
                                                        class="btn btn-primary">Update</button>
                                                @else
                                                    <button type="submit" class="btn btn-primary">Update</button>
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
    </div>
@endsection

@section('script-content')
    {{-- Update Image Button --}}
    {{-- <script>
        $('#food-image').on('change', function() {
            if ($(this).val() !== "") {
                $('#submit-image').removeAttr('disabled');
            }
        });
    </script> --}}
@endsection
