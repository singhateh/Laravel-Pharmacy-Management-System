@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-9 col-auto">
                <div class="page-header-title">
                    <h3 class="m-b-10">Edit Supplier</h3>
                </div>
            </div>
            <div class="col-sm-3 col">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i>
                            Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Supplier</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="card">
            <div class="card-header">
                <h5>Edit Supplier</h5>
                <div class="card-header-right">
                    <a href="{{ route('suppliers') }}" class="btn btn-primary float-right">Back</a>
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
			<form method="post" enctype="multipart/form-data" action="{{route('edit-supplier',$supplier)}}">
				@csrf
				@method("PUT")
				<div class="service-fields mb-3">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Name<span class="text-danger">*</span></label>
								<input class="form-control" type="text" value="{{$supplier->name}}" name="name">
							</div>
						</div>
						<div class="col-lg-6">
							<label>Email<span class="text-danger">*</span></label>
							<input class="form-control" type="text" value="{{$supplier->email}}" name="email" >
						</div>
					</div>
				</div>

				<div class="service-fields mb-3">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Phone<span class="text-danger">*</span></label>
								<input class="form-control" type="text" value="{{$supplier->phone}}" name="phone">
							</div>
						</div>
						<div class="col-lg-6">
							<label>Company<span class="text-danger">*</span></label>
							<input class="form-control" type="text" value="{{$supplier->company}}" name="company">
						</div>
					</div>
				</div>

				<div class="service-fields mb-3">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>Address <span class="text-danger">*</span></label>
								<input type="text" name="address" value="{{$supplier->address}}" class="form-control">
							</div>
						</div>
						<div class="col-lg-6">
							<label>Product</label>
							<input type="text" name="product" value="{{$supplier->product}}" class="form-control">
						</div>
					</div>
				</div>
				<div class="service-fields mb-3">
					<div class="row">
						<div class="col-12">
							<label>Description</label>
							<textarea name="description" class="form-control" value="{{$supplier->description}}" cols="30" rows="3">{{$supplier->description}}</textarea>
						</div>
					</div>
				</div>


				<div class="submit-section">
					<button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Submit</button>
				</div>
			</form>
			<!-- /Add Medicine -->


			</div>
		</div>
	</div>
</div>
@endsection

@push('page-js')
	<!-- Datetimepicker JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
	<!-- Select2 JS -->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endpush

