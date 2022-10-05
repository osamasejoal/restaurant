@extends('backend.layouts.master')

@section('main-content')
    <div class="content-body">
        <div class="container-fluid">

            {{-- BreadCrumb --}}
            <div class="row page-titles mb-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">Company Social</a></li>
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

                    {{-- Add Social Media --}}
                    <div class="mb-2 d-flex">
                        <a href="{{ route('companySocial.create') }}" class="btn btn-primary btn-sm" style="margin-left:auto">Add
                            Social Media +</a>
                    </div>

                    {{-- Social Media Table --}}
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-info">Social Media List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md text-center table-hover">
                                    <thead>
                                        <tr>
                                            <th><strong>Name</strong></th>
                                            <th><strong>Logo</strong></th>
                                            <th><strong>Link</strong></th>
                                            <th><strong>Status</strong></th>
                                            <th><strong>Action</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($company_socials as $social)
                                            <tr>

                                                {{-- Social Media Name --}}
                                                <td>{{ $social->name }}</td>

                                                {{-- Social Media Icon --}}
                                                <td class="text-primary"><i class="{{ $social->logo }}"></i></td>
                                                
                                                {{-- Social Media Link --}}
                                                <td>{{ $social->link }}</td>
                                                
                                                {{-- Social Status --}}
                                                <td class="status-change-toggle">
                                                    <input data-id="{{ $social->id }}" class="toggle-class"
                                                        type="checkbox" data-toggle="toggle" data-on="Active"
                                                        data-off="Deactive" data-onstyle="success" data-offstyle="danger"
                                                        data-size="small" {{ $social->status == 1 ? 'checked' : '' }}>

                                                </td>

                                                {{-- Action --}}
                                                <td>
                                                    <form class="d-inline" action="{{ route('companySocial.destroy', $social->id) }}"
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
                var social_id = $(this).data('id');

                $.ajax({
                    type: "get",
                    datatype: "json",
                    url: '/social/status/change',
                    data: {
                        'status': status,
                        'social_id': social_id
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

