@extends('layouts.admin.app')

@section('title')
    Unique Endo | Dashboard
@endsection

@section('breadcrumb')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-home bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Dashboard</h5>
                    {{-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span> --}}
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title breadcrumb-padding">
                    <li class="breadcrumb-item">
                        <a href="#"><i class="feather icon-home"></i></a>
                    </li>
                        <li class="breadcrumb0-item"><a href="#">&nbsp;Home</a>
                    </li>
                        <li class="breadcrumb0-item"><a href="#">Error</a>
                    </li>
                </ul>
            </div>
        </div> --}}
    </div>
</div>
@endsection

@section('contents')
    {{-- <h1>Admin Dashboard</h1> --}}
    <div class="row">

        <!-- product profit start -->
        <div class="col-xl-4 col-md-6">
            <div class="card prod-p-card card-red">
                <div class="card-body">
                    <div class="row align-items-center m-b-30">
                        <div class="col">
                            <h6 class="m-b-5 text-black">Doctors</h6>
                            <h3 class="m-b-0 f-w-700 text-black">{{ $doctors }}</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                        </div>
                    </div>
                    <p class="m-b-0 text-white"><span class="label label-danger m-r-10">+11%</span>From Previous Month</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card prod-p-card card-blue">
                <div class="card-body">
                    <div class="row align-items-center m-b-30">
                        <div class="col">
                            <h6 class="m-b-5 text-black">Appointments</h6>
                            <h3 class="m-b-0 f-w-700 text-black">{{$appointments}}</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-database text-c-blue f-18"></i>
                        </div>
                    </div>
                    <p class="m-b-0 text-white"><span class="label label-primary m-r-10">+12%</span>From Previous Month</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card prod-p-card card-green">
                <div class="card-body">
                    <div class="row align-items-center m-b-30">
                        <div class="col">
                            <h6 class="m-b-5 text-black">Newsletter subscribers</h6>
                            <h3 class="m-b-0 f-w-700 text-black">{{ $newsletters }}</h3>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign text-c-green f-18"></i>
                        </div>
                    </div>
                    <p class="m-b-0 text-white"><span class="label label-success m-r-10">+52%</span>From Previous Month</p>
                </div>
            </div>
        </div>
    </div>
@endsection
