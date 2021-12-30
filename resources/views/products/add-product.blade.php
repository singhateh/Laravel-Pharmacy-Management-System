@extends('layouts.app')
@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('jambasangsang/assets/select2/css/select2.min.css')}}">
@endpush

@section('content')

    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-9 col-auto">
                    <div class="page-header-title">
                        <h3 class="m-b-10">Add Medicine</h3>
                    </div>
                </div>
                <div class="col-sm-3 col">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i>
                                Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Add Medicine</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Add Medicine</h5>
                    <div class="card-header-right">
                        <a href="{{ route('products') }}" class="btn btn-primary float-right">Back</a>
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
                <div class="card-body custom-edit-service">

                    <!-- Add Medicine -->
                    <form method="post" enctype="multipart/form-data" id="update_service"
                        action="{{ route('add-product') }}">
                        @csrf
                        <div class="service-fields mb-3">
                            <div class="row">

                                <div class="col-lg-12 col-auto">
                                    <div class="form-group">
                                        <label>Medicine <span class="text-danger">*</span></label>
                                        <select class="select2 form-select form-control" name="product">
                                            @foreach ($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="service-fields mb-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Selling Price<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="price" value="{{ old('price') }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Discount (%)<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="discount" value="0">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="service-fields mb-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Descriptions <span class="text-danger">*</span></label>
                                        <textarea class="form-control service-desc" name="description"></textarea>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn" type="submit" name="form_submit"
                                value="submit">Submit</button>
                        </div>
                    </form>
                    <!-- /Add Medicine -->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page-js')
	<!-- Select2 JS -->
	<script src="{{asset('jambasangsang/assets/select2/js/select2.min.js')}}"></script>

    <script>
         $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endpush
