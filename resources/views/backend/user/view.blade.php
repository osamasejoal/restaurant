
@extends('backend.layouts.master')

@section('main-content')
    <div class="content-body">
        <div class="container-fluid">

            {{-- BreadCrumb --}}
            <div class="row page-titles mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">
                        <a href="#">
                            @if ($id == 1)
                                Admin List
                            @elseif ($id == 2)
                                Staff List
                            @elseif ($id == 3)
                                Customer List
                            @endif
                        </a>
                    </li>
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

                    {{-- User List Table --}}
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-primary m-auto">
                                @if ($id == 1)
                                    Admin List
                                @elseif ($id == 2)
                                    Staff List
                                @elseif ($id == 3)
                                    Customer List
                                @endif
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md text-center table-hover">
                                    <thead>
                                        <tr>
                                            <th><strong>Sl</strong></th>
                                            <th><strong>Image</strong></th>
                                            <th><strong>NAME</strong></th>
                                            <th><strong>Email</strong></th>
                                            <th><strong>Gender</strong></th>
                                            @if ($id != 1)
                                                <th><strong>Status</strong></th>
                                            @endif
                                            <th><strong>Action</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($users as $user)
                                            <tr>
                                                {{-- Serial Number --}}
                                                <td>{{ $loop->iteration }}</td>

                                                {{-- User Image --}}
                                                <td>
                                                    <img src="{{ asset('backend/assets/images/profile_pic' . '/' . $user->image) }}"
                                                        class="rounded-lg me-2" alt="User Image" width="100px">
                                                </td>

                                                {{-- User Name --}}
                                                <td>{{ $user->name }}</td>

                                                {{-- User Email --}}
                                                <td>{{ $user->email }}</td>

                                                {{-- User Gender --}}
                                                <td>
                                                    @if ($user->gender == 1)
                                                        Male
                                                    @elseif ($user->gender == 2)
                                                        Female
                                                    @elseif ($user->gender == 3)
                                                        Others
                                                    @endif
                                                </td>

                                                {{-- User Status --}}
                                                @if ($id != 1)
                                                    <td class="status-change-toggle">
                                                        <input data-id="{{ $user->id }}" class="toggle-class"
                                                            type="checkbox" data-toggle="toggle" data-on="Active"
                                                            data-off="Deactive" data-onstyle="success"
                                                            data-offstyle="danger" data-size="small"
                                                            {{ $user->status == 1 ? 'checked' : '' }}>

                                                    </td>
                                                @endif

                                                {{-- Action --}}
                                                <td>
                                                    <form class="d-inline" action="{{ route('user.destroy', $user->id) }}"
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

                                <div class="d-flex justify-content-center">
                                    {!! $users->links() !!}
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
    <script>
        $('document').ready(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var user_id = $(this).data('id');

                $.ajax({
                    type: "get",
                    datatype: "json",
                    url: '/user/status/change',
                    data: {
                        'status': status,
                        'user_id': user_id
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