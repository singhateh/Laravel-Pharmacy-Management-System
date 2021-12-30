@extends('layouts.app')


@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-9 col-auto">
                    <div class="page-header-title">
                        <h3 class="m-b-10">Purchase Stocks</h3>
                    </div>
                </div>
                <div class="col-sm-3 col">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i>
                                Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Purchase Stocks</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- Recent Orders -->
            <div class="card">
                <div class="card-header">
                    <h5>Purchase Stocks</h5>
                    <div class="card-header-right">
                        <a href="{{ route('add-purchase') }}" class="btn btn-primary float-right">Add New</a>
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
                        <table id="datatable-export" class="table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Medicine Name</th>
                                    <th>Medicine Category</th>
                                    <th>Purchase Price</th>
                                    <th>Quantity</th>
                                    <th>Supplier</th>
                                    <th>Expire Date</th>
                                    <th class="action-btn">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($purchases as $purchase)
                                    <tr>
                                        <td>
                                            @if (!empty($purchase->image))
                                                <span class="avatar avatar-sm mr-2">
                                                    <img class="avatar-img" width="30"
                                                        src="{{ asset('storage/purchases/' . $purchase->image) }}"
                                                        alt="product image">
                                                </span>
                                            @endif
                                            {{ $purchase->name }}
                                        </td>
                                        <td>{{ $purchase->category->name }}</td>
                                        <td>{{ AppSettings::get('app_currency', '$') }}{{ $purchase->price }}</td>
                                        <td>{{ $purchase->quantity }}</td>
                                        <td>{{ $purchase->supplier->name }}</td>
                                        <td>{{ date_format(date_create($purchase->expiry_date), 'd M, Y') }}</td>
                                        <td>
                                            <div class="actions">
                                                <a class="btn btn-sm btn-info"
                                                    href="{{ route('edit-purchase', $purchase) }}">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a data-id="{{ $purchase->id }}" href="javascript:void(0);"
                                                    class="btn btn-sm btn-danger deletebtn" data-toggle="modal">
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
            <!-- /Recent Orders -->
        </div>
    </div>
    <!-- Delete Modal -->
    <x-modals.delete :route="'purchases'" :title="'Purchase'" />
    <!-- /Delete Modal -->
@endsection

@push('page-js')
    <!-- Select2 JS -->
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
@endpush
