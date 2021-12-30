@extends('layouts.app')

@push('page-css')
    <!-- Select2 css-->
    <link rel="stylesheet" href="{{ asset('jambasangsang/assets/select2/css/select2.min.css') }}">
@endpush


@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-9 col-auto">
                    <div class="page-header-title">
                        <h3 class="m-b-10">Roles</h3>
                    </div>
                </div>
                <div class="col-sm-3 col">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i>
                                Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Roles</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <h5>Roles</h5>
                    <div class="card-header-right">
                        <div class="btn-group card-option">
                            <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="feather icon-more-horizontal"></i>
                            </button>
                            <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i>
                                            maximize</span><span style="display:none"><i class="feather icon-minimize"></i>
                                            Restore</span></a>
                                </li>
                                <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                                class="feather icon-minus"></i> collapse</span><span style="display:none"><i
                                                class="feather icon-plus"></i> expand</span></a>
                                </li>
                                <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i>
                                        reload</a></li>
                                <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i>
                                        remove</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="roles-table"
                            class="datatable table table-striped table-bordered table-hover table-center mb-0">
                            <thead>
                                <tr style="boder:1px solid black;">
                                    <th>Name</th>
                                    <th>Permissions</th>
                                    <th class="text-center action-btn">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 0;
                                @endphp
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>
                                            {{ $role->name }}
                                        </td>
                                        <td>
                                            @foreach ($role->getAllPermissions() as $key => $permission)
                                                @php
                                                    $count++;
                                                @endphp
                                                <label class="badge badge-info">{{ $permission->name }}</label>
                                                @if ($count > 2)
                                                    <br>
                                                    @php
                                                        $count = 0;
                                                    @endphp
                                                @endif

                                            @endforeach
                                        </td>

                                        <td class="text-center">
                                            <div class="actions">
                                                <a data-id="{{ $role->id }}" data-role="{{ $role->name }}"
                                                    data-permissions="{{ $role->getAllPermissions() }}"
                                                    class="btn btn-sm btn-info editbtn" data-toggle="modal"
                                                    href="javascript:void(0)">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a data-id="{{ $role->id }}" data-toggle="modal"
                                                    href="javascript:void(0)" class="btn btn-sm btn-danger deletebtn">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5>Add Role</h5>
                    <div class="card-header-right">
                        <a href="#" id="add_new" class="btn btn-primary float-right ">Add New</a>
                    </div>
                </div>
                <div class="card-body">
                    @include('roles.create')
                </div>
            </div>
        </div>
    </div>

    <!-- Add Modal -->
    {{-- <div class="modal fade" id="add_role" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('roles') }}">
                        @csrf
                        <div class="row form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Role</label>
                                    <input type="text" name="role" class="form-control">
                                </div>
                                <div class="form-group">
                                    <lable>Select Permissions</lable>
                                    <select class="select2 form-select form-control multiple" name="permission[]"
                                        multiple="multiple">
                                        @foreach ($permissions as $permission)
                                            <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- /ADD Modal -->

    <!-- Edit Details Modal -->
    {{-- <div class="modal fade" id="edit_role" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('roles') }}">
                        @csrf
                        @method("PUT")
                        <div class="row form-row">
                            <div class="col-12">
                                <input type="hidden" name="id" id="edit_id">
                                <div class="form-group">
                                    <label>Role</label>
                                    <input type="text" name="role" class="form-control edit_role">
                                </div>
                                <div class="form-group">
                                    <lable>Select Permissions</lable>
                                    <select class="select2 form-select form-control edit_perms" name="permission[]"
                                        multiple="multiple">
                                        @foreach ($permissions as $permission)
                                            <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- /Edit Details Modal -->

    <!-- Delete Modal -->
    <x-modals.delete :route="'roles'" :title="'Roles'" />
    <!-- /Delete Modal -->
@endsection


@push('page-js')
    <!-- Select2 js-->
    <script src="{{ asset('jambasangsang/assets/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#roles-table').on('click', '.editbtn', function() {
                event.preventDefault();
                var id = $(this).data('id');
                var role = $(this).data('role');
                var permissions = $(this).data('permissions');


                $('#edit_id').val(id);
                $('.edit_role').val(role);
                $(".edit_perms").val(permissions).trigger('change');
                $('.btn-block').text("Update Changes");
            });

            $('#add_new').on('click', function() {
                event.preventDefault();
                $('#edit_id').val('');
                $(".edit_perms").val('').trigger('change');
                $('.edit_role').val('');
                $('.btn-block').text("Save Changes");

            });
            //
        });
    </script>

@endpush
