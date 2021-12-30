@extends('layouts.app')

@push('page-css')
    <!-- Select2 css-->
    <link rel="stylesheet" href="{{ asset('jambasangsang/assets/select2/css/select2.min.css') }}">
@endpush

@push('page-header')
    <div class="col-sm-7 col-auto">
        <h3 class="page-title">Reports</h3>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Generate Reports</li>
        </ul>
    </div>
    <div class="col-sm-5 col">
        <a href="#generate_report" data-toggle="modal" class="btn btn-primary float-right mt-2">Generate Report</a>
    </div>
@endpush


@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-9 col-auto">
                    <div class="page-header-title">
                        <h3 class="m-b-10">Reports</h3>
                    </div>
                </div>
                <div class="col-sm-3 col">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i>
                                Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Reports</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <h5>{{ request()->resource == 'products' ? 'Medicines ' : (request()->resource == 'purchases'? "Stocks" : (request()->resource == 'sales'? "Sales" : '' )) }} Reports</h5>
                    <div class="card-header-right">
                        {{-- <a href="#generate_report" data-toggle="modal" class="btn btn-primary float-right mt-2">Generate --}}
                            {{-- Report</a> --}}
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

                        @isset($sales)
                        <div class="dash-widget-header">
                            <span class="dash-widget-icon text-primary border-primary">
                                <i class="fe fe-money"></i>
                            </span>
                            <div class="dash-count">
                                <h3>{{ AppSettings::get('app_currency', '$') }} {{ $total_cash }}</h3>
                            </div>
                        </div>
                        <div class="dash-widget-info">
                            <h6 class="text-muted">Total Revenue</h6>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary w-50"></div>
                            </div>
                        </div>
                                        <div class="dash-widget-header">
                                            <span class="dash-widget-icon text-success">
                                                <i class="fe fe-activity"></i>
                                            </span>
                                            <div class="dash-count">
                                                <h3>{{ $total_sales }}</h3>
                                            </div>
                                        </div>
                                        <div class="dash-widget-info">

                                            <h6 class="text-muted">Total Sales</h6>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success w-50"></div>
                                            </div>
                                        </div>
                            <hr>
                        @endisset

                <div class="col-md-12">
                    @isset($sales)
                        <!--  Sales -->

                                <div class="table-responsive">
                                    <table id="datatable-export" class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Medicine Name</th>
                                                <th>Quantity</th>
                                                <th>Total Price</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($sales as $sale)
                                                @if (!empty($sale->product->purchase))
                                                    <tr>
                                                        <td>{{ $sale->product->purchase->name }}</td>
                                                        <td>{{ $sale->quantity }}</td>
                                                        <td>{{ AppSettings::get('app_currency', '$') }}
                                                            {{ $sale->total_price }}
                                                        </td>
                                                        <td>{{ date_format(date_create($sale->created_at), 'd M, Y') }}</td>

                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                        <!-- / sales -->
                    @endisset

                    @isset($products)
                        <!-- Products -->
                                <div class="table-responsive">
                                    <table id="datatable-export" class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Medicine Name</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Discount</th>
                                                <th>Expiry Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($products as $product)
                                                @if (!empty($product->purchase))
                                                    <tr>
                                                        <td>
                                                            @if (!empty($product->purchase->image))
                                                                <span class="avatar avatar-sm mr-2">
                                                                    <img class="avatar-img" width="30"
                                                                        src="{{ asset('storage/purchases/' . $product->purchase->image) }}"
                                                                        alt="product image">
                                                                </span>
                                                            @endif
                                                            {{ $product->purchase->name }}
                                                        </td>
                                                        <td>{{ $product->purchase->category->name }}</td>
                                                        <td>{{ AppSettings::get('app_currency', '$') }}
                                                            {{ $product->price }}
                                                        </td>
                                                        <td>{{ $product->purchase->quantity }}</td>
                                                        <td>{{ $product->discount }}%</td>
                                                        <td>
                                                            {{ date_format(date_create($product->purchase->expiry_date), 'd M, Y') }}</span>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                        <!-- /Products -->
                    @endisset

                    @isset($purchases)
                        <!-- Purchases-->
                                <div class="table-responsive">
                                    <table id="datatable-export" class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th>Medicine</th>
                                                <th>Category</th>
                                                <th>Purchase Price</th>
                                                <th>Quantity</th>
                                                <th>Supplier</th>
                                                <th>Expire Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($purchases as $purchase)
                                                @if (!empty($purchase->supplier) && !empty($purchase->category))
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
                                                        <td>{{ AppSettings::get('app_currency', '$') }}{{ $purchase->price }}
                                                        </td>
                                                        <td>{{ $purchase->quantity }}</td>
                                                        <td>{{ $purchase->supplier->name }}</td>
                                                        <td>{{ date_format(date_create($purchase->expiry_date), 'd M, Y') }}
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                        <!-- /Purchases -->
                    @endisset
                </div>
            </div>
        </div>
    </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Generate Report</h5>
                        <div class="card-header-right">
                            <a href="#" id="add_new" class="btn btn-primary float-right ">Add New</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('reports.generate')
                    </div>
                </div>
            </div>
    </div>

    @endsection


    @push('page-js')
       <!-- Select2 js-->
       <script src="{{ asset('jambasangsang/assets/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });

        $('#add_new').on('click', function() {
                event.preventDefault();
                $(".select").val('').trigger('change');
                $('.to_date').val('');
                $('.from_date').val('');

            });
    </script>
    @endpush
