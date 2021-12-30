@extends('layouts.app')

@section('content')

    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-9 col-auto">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Category</h5>
                    </div>
                </div>
                <div class="col-sm-3 col">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i>
                                Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Categories</h5>
                    <div class="card-header-right">
                        <a href="#add_categories" data-toggle="modal" class="btn btn-primary float-right mt-20">Add
                            Category</a>
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
                                                class="feather icon-plus"></i> expand</span></a></li>
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
                        <table id="category-table"
                            class="datatable table table-striped table-bordered table-hover table-center mb-0">
                            <thead>
                                <tr style="boder:1px solid black;">
                                    <th>Name</th>
                                    <th>Created date</th>
                                    <th class="text-center action-btn">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $key => $category)
                                    <tr>
                                        <td>
                                            {{ $category->name }}
                                        </td>

                                        <td>{{ date_format(date_create($category->created_at), 'd M,Y') }}</td>

                                        <td class="text-center">
                                            <div class="actions">
                                                <a data-id="{{ $category->id }}" data-name="{{ $category->name }}"
                                                    class="btn btn-sm btn-info editbtn" data-toggle="modal"
                                                    href="javascript:void(0)">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a data-id="{{ $category->id }}" data-toggle="modal"
                                                    href="#deleteConfirmModal{{ $key }}"
                                                    class="btn btn-sm btn-danger deletebtn">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    {{-- @include('modals.delete') --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Modal -->
    <div class="modal fade" id="add_categories" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('categories') }}">
                        @csrf
                        <div class="row form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /ADD Modal -->

    <!-- Edit Details Modal -->
    <div class="modal fade" id="edit_category" aria-hidden="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('categories') }}">
                        @csrf
                        @method("PUT")
                        <div class="row form-row">
                            <div class="col-12">
                                <input type="hidden" name="id" id="edit_id">
                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" class="form-control edit_name" name="name">
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit Details Modal -->

    <!-- Delete Modal -->
    <x-modals.delete :route="'categories'" :title="'Category'" />
    <!-- /Delete Modal -->
@endsection


@section('script')

    <script>
        $(document).ready(function() {
            $('#category-table').on('click', '.editbtn', function() {
                // alert(1)
                event.preventDefault();
                // jQuery.noConflict();
                $('#edit_category').modal('show');
                var id = $(this).data('id');
                var name = $(this).data('name');
                $('#edit_id').val(id);
                $('.edit_name').val(name);
            });
            //
        });
    </script>

@endsection
