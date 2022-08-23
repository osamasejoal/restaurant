@extends('backend.layouts.master')

@section('main-content')
    <div class="content-body">
        <div class="container-fluid">

            {{-- BreadCrumb --}}
            <div class="row page-titles mb-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Category</a></li>
                </ol>
            </div>
            <!-- row -->

            <div class="row mb-5">

                <div class="col-lg-12">

                    {{-- Success Message --}}
                    @if (session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div id="status-success" class="alert alert-success text-center" hidden></div>

                    {{-- Add Cuisine --}}
                    <div class="mb-2 d-flex">
                        <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm" style="margin-left:auto">Add
                            Category +</a>
                    </div>

                    {{-- Category Table --}}
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-info">Category Lists</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md text-center">
                                    <thead>
                                        <tr>
                                            <th><strong>#</strong></th>
                                            <th><strong>Image</strong></th>
                                            <th><strong>NAME</strong></th>
                                            <th><strong>Status</strong></th>
                                            <th><strong>Action</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($categories as $category)
                                            <tr>

                                                {{-- Serial Number --}}
                                                <td><strong>{{ $loop->iteration }}</strong></td>

                                                {{-- Category Image --}}
                                                <td>
                                                    <img src="{{ asset('backend/assets/images/category' . '/' . $category->image) }}"
                                                        class="rounded-lg me-2" alt="Category Image" width="100px">
                                                </td>

                                                {{-- Category Name --}}
                                                <td>{{ $category->name }}</td>

                                                {{-- Category Status --}}
                                                <td class="status-change-toggle">
                                                    <input data-id="{{ $category->id }}" class="toggle-class"
                                                        type="checkbox" data-toggle="toggle" data-on="Active"
                                                        data-off="Deactive" data-onstyle="success" data-offstyle="danger"
                                                        data-size="small" {{ $category->status == 1 ? 'checked' : '' }}>
                                                </td>

                                                {{-- Action --}}
                                                <td>
                                                    <a href="{{ route('category.edit', $category->id) }}"
                                                        class="btn btn-primary shadow btn-sm sharp me-1"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                            
                                                    <form class="d-inline"
                                                        action="{{ route('category.destroy', $category->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger shadow btn-sm sharp">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>

                                            @empty
                                            <tr>
                                                <td colspan="12" class="text-danger">There are no data to show</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

@section('script-content')
    <script>
        $('document').ready(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var category_id = $(this).data('id');

                $.ajax({
                    type: "get",
                    datatype: "json",
                    url: '/category/status/change',
                    data: {
                        'status': status,
                        'category_id': category_id
                    },
                    success: function(data) {
                        console.log(data.success);
                        $('#status-success').addClass('d-block');
                        $('#status-success').html(data.success);

                        setTimeout(function() {
                            $('#status-success').removeClass('d-block');
                        }, 1500);

                    }
                });
            });
        });
    </script>
@endsection
