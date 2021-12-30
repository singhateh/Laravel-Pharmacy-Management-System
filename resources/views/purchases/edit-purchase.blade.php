@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8 col-auto">
                <div class="page-header-title">
                    <h3 class="m-b-10">Edit Purchase Stocks</h3>
                </div>
            </div>
            <div class="col-sm-4 col">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i>
                            Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Edit Purchase Stock</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="card">
            <div class="card-header">
                <h5>Edit Purchase Stock</h5>
                <div class="card-header-right">
                    <a href="{{ route('purchases') }}" class="btn btn-primary float-right">Back</a>
                    <div class="btn-group card-option">
                        <button type="button" class="btn dropdown-toggle btn-icon" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="feather icon-more-horizontal"></i>
                        </button>
                        <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item full-card"><a href="#!"><span><i
                                            class="feather icon-maximize"></i>
                                        maximize</span><span style="display:none"><i
                                            class="feather icon-minimize"></i>
                                        Restore</span></a>
                            </li>
                            <li class="dropdown-item minimize-card"><a href="#!"><span><i
                                            class="feather icon-minus"></i> collapse</span><span
                                        style="display:none"><i class="feather icon-plus"></i> expand</span></a>
                            </li>
                            <li class="dropdown-item reload-card"><a href="#!"><i
                                        class="feather icon-refresh-cw"></i>
                                    reload</a></li>
                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i>
                                    remove</a></li>
                        </ul>
                    </div>
                </div>
            </div>
			<div class="card-body custom-edit-service">

				<!-- Add Medicine -->
				<form method="post" enctype="multipart/form-data" autocomplete="off" action="{{route('edit-purchase',$purchase)}}">
					@csrf
					@method("PUT")
					<div class="service-fields mb-3">
						<div class="row">
							<div class="col-lg-4">
								<div class="form-group">
									<label>Medicine Name<span class="text-danger">*</span></label>
									<input class="form-control" type="text" value="{{$purchase->name}}" name="name" >
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Category <span class="text-danger">*</span></label>
									<select class="select2 form-select form-control" name="category">
										@foreach ($categories as $category)
											<option @if($purchase->category->id == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="form-group">
									<label>Supplier <span class="text-danger">*</span></label>
									<select class="select2 form-select form-control" name="supplier">
										@foreach ($suppliers as $supplier)
											<option @if($purchase->supplier->id == $supplier->id) selected @endif value="{{$supplier->id}}">{{$supplier->name}}</option>
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
									<label>Price<span class="text-danger">*</span></label>
									<input class="form-control" value="{{$purchase->price}}" type="text" name="price">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<label>Quantity<span class="text-danger">*</span></label>
									<input class="form-control" value="{{$purchase->quantity}}" type="text" name="quantity">
								</div>
							</div>
						</div>
					</div>

					<div class="service-fields mb-3">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label>Expire Date<span class="text-danger">*</span></label>
									<input class="form-control" value="{{$purchase->expiry_date}}" type="date" name="expiry_date">
								</div>
							</div>
                            @if (!empty($purchase->image))
							<div class="col-lg-4">
								<div class="form-group">
									<label>Medicine Image</label>
									<input type="file" name="image" value="{{$purchase->image}}" class="form-control">
                                    <input type="hidden" name="update_image" value="{{$purchase->image}}" id="">

                                </div>

							</div>
                            <div class="col-md-2">
                                <span class="avatar avatar-sm mr-2">
                                    <img class="avatar-img" width="50"
                                        src="{{ asset('storage/purchases/' . $purchase->image) }}"
                                        alt="product image">
                                </span>
                            </div>

                                @else
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Medicine Image</label>
                                        <input type="file" name="image" value="{{$purchase->image}}" class="form-control">
                                    </div>

                                </div>
                            @endif
						</div>
					</div>


					<div class="submit-section">
						<button class="btn btn-primary submit-btn" type="submit" >Submit</button>
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
	<script src="{{asset('assets/js/moment.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
	<!-- Select2 JS -->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endpush

