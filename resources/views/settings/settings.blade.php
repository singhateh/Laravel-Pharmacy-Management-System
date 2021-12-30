
@extends('layouts.app')
@php
	$title = "app Setting";
@endphp

@section('content')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-9 col-auto">
                <div class="page-header-title">
                    <h3 class="m-b-10">App General Settings</h3>
                </div>
            </div>
            <div class="col-sm-3 col">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i>
                            Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">General Settings</li>
                </ul>
            </div>
        </div>
    </div>
</div>

@push('page-css')
<style>
    .sidebar-img {
  background: url("img/setting_logo.jpg") no-repeat center center fixed;
  -webkit-background-size: contain;
  -moz-background-size: contain;
  -o-background-size: contain;
  background-size: contain;
  background-repeat: no-repeat;
}
</style>
    
@endpush

<div class="row">				
	<div class="col-md-9">
		@include('app_settings::_settings')	
	</div>
    <div class="col-md-3 sidebar-img">
        {{-- <img src="{{ asset('img/setting_logo.jpg') }}" alt="" height="900" width="300" class="cover"> --}}
    </div>
</div>
@endsection

