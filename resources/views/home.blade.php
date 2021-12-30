@extends('layouts.app')
@section('content')


<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8 col-auto">
                <div class="page-header-title">
                    <h3 class="m-b-10">Dashboard</h3>
                </div>
            </div>
            <div class="col-sm-4 col">
                <ul class="breadcrumb">
	                <h5 class="page-title">Welcome {{auth()->user()->name}}!</h5>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] start -->
<div class="row">
    <div class="row">
        <!-- table card-1 start -->
        <div class="col-md-12 col-xl-4">
            <div class="card flat-card">
                <div class="row-table">
                    <div class="col-sm-6 card-body br">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ asset('img/payment.png') }}" width="60" alt="">
                                {{-- <i class="icon feather icon-eye text-c-green mb-1 d-block"></i> --}}
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>{{AppSettings::get('app_currency', '$')}} {{$today_sales}}</h5>
                                <span>Todays Sales</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ asset('img/cash-payment.png') }}" width="60" alt="">
                                {{-- <i class="icon feather icon-music text-c-red mb-1 d-block"></i> --}}
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>{{ $yesterday_sales }}</h5>
                                <span>Yesterday Sales</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-table">
                    <div class="col-sm-6 card-body br">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ asset('img/cash-flow.png') }}" width="60" alt="">
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>{{ $last_sevenDays }}</h5>
                                <span>Last 7 Days</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ asset('img/revenue.png') }}" width="60" alt="">
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>120</h5>
                                <span>Revenue</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- widget primary card start -->
            {{-- <div class="card flat-card widget-primary-card">
                <div class="row-table">
                    <div class="col-sm-3 card-body">
                        <i class="feather icon-star-on"></i>
                    </div>
                    <div class="col-sm-9">
                        <h4>4000 +</h4>
                        <h6>Ratings Received</h6>
                    </div>
                </div>
            </div> --}}
            <!-- widget primary card end -->
        </div>
        <!-- table card-1 end -->
        <!-- table card-2 start -->
        <div class="col-md-12 col-xl-4">
            <div class="card flat-card">
                <div class="row-table">
                    <div class="col-sm-6 card-body br">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ asset('img/inventory.png') }}" width="60" alt="">
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>{{ $total_suppliers }}</h5>
                                <span> Suppliers</span>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6 card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ asset('img/drugs.png') }}" width="60" alt="">
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>{{$total_expired_products}}</h5>
                                <span>Expired Medicines</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-table">
                    <div class="col-sm-6 card-body br">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ asset('img/medical-team.png') }}" width="60" alt="">
                                {{-- <i
                                    class="icon feather icon-rotate-ccw text-c-blue mb-1 d-block"></i> --}}
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>{{\DB::table('users')->count()}}</h5>
                                <span>Users</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <img src="{{ asset('img/options.png') }}" width="60" alt="">

                                {{-- <i
                                    class="icon feather icon-shopping-cart text-c-blue mb-1 d-blockz"></i> --}}
                            </div>
                            <div class="col-sm-8 text-md-center">
                                <h5>{{$total_categories}}</h5>
                                <span>All Categories</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- widget-success-card start -->
            {{-- <div class="card flat-card widget-purple-card">
                <div class="row-table">
                    <div class="col-sm-3 card-body">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="col-sm-9">
                        <h4>17</h4>
                        <h6>Achievements</h6>
                    </div>
                </div>
            </div> --}}
            <!-- widget-success-card end -->
        </div>
        <!-- table card-2 end -->
        <!-- Widget primary-success card start -->
        <div class="col-md-12 col-xl-4">
            <div class="card support-bar overflow-hidden">
                <div class="card-body pb-0">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="m-0">{{ $total_medicines }}</h2><br>

                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('img/medicine.png') }}" width="50" alt="">
                        </div>
                    </div>
                    <span class="text-c-blue">Total Medicines</span>

                    <p class="mb-3 mt-3">Total number of medicnes in the pharmacy.</p>

                </div>
                <div id="support-chart"></div>
                <div class="card-footer bg-primary text-white">
                    <div class="row text-center">
                        <div class="col">
                            <h4 class="m-0 text-white">{{ $available_medicines }}</h4>
                            <span>Available</span>
                        </div>
                        <div class="col">
                            <h4 class="m-0 text-white">{{ $total_medicines_runningOutStock }}</h4>
                            <span>Running Out</span>
                        </div>
                        <div class="col">
                            <h4 class="m-0 text-white">{{ $total_medicines_outStock }}</h4>
                            <span>Out Stock</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Widget primary-success card end -->
        <!-- [ Main Content ] end -->

    </div>
    {{-- <div class="row"> --}}
        {{-- <div class="col-md-12 col-lg-12"> --}}

            <div class="col-md-12 card card-table">
                <div class="card-header">
                    <h5>Today's Sales</h5>
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
                        <table class="table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Medicine</th>
                                    <th>Quantity</th>
                                    <th>Total Price</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($latest_sales as $sale)
                                    @if(!empty($sale->product->purchase))
                                        <tr>
                                            <td>{{$sale->product->purchase->name}}</td>
                                            <td>{{$sale->quantity}}</td>
                                            <td>
                                                {{AppSettings::get('app_currency', '$')}} {{($sale->total_price)}}
                                            </td>
                                            <td>{{date_format(date_create($sale->created_at),"d M, Y")}}</td>

                                        </tr>
                                    @endif
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        {{-- </div> --}}

        {{-- <div class="col-md-12 col-lg-4">

            <!-- Pie Chart -->
            <div class="card card-chart">
                <div class="card-header">
                    <h4 class="card-title">Charts</h4>
                </div>
                <div class="card-body">
                    <div style="width:65%;">
                        {!! $pieChart->render() !!}
                    </div>
                </div>
            </div>
            <!-- /Pie Chart -->

        </div> --}}


    {{-- </div> --}}
{{-- </div> --}}


@endsection
