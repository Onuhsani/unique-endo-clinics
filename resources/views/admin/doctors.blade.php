@extends('layouts.admin.app')

@section('title')
    Dashboard | Doctors
@endsection

@section('breadcrumb')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-user bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Doctors</h5>
                    {{-- <span></span> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title breadcrumb-padding">
                    {{-- <li class="breadcrumb-item">
                        <a href="#"><i class="feather icon-home"></i></a>
                    </li>
                        <li class="breadcrumb0-item"><a href="#">&nbsp;Home</a>
                    </li>
                        <li class="breadcrumb0-item"><a href="#">Error</a>
                    </li> --}}

                    <a href="{{ route('doctors.create') }}"><label class="btn waves-effect waves-light btn-primary"><i
                        class="icofont icofont-plus"></i>&nbsp;Add admin</label></a>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('contents')
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Unique Endo-clinics doctors</h5>
            </div>
            <div class="card-block">
                <div class="row">

                    @forelse ($doctors as $doctor)
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5>{{ $doctor->name }}</h5>
                                </div>
                                <div class="card-block">
                                    {{-- <h5>Card with header</h5> --}}
                                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p> --}}


                                    {{-- <img src={{ asset('assets/images/',$doctor->image ?? 'avatar-1.jpg') }} width="100%"/> --}}

                                    <img src="{{ asset('assets/images/avatar-1.jpg') }}" width="100%"/>

                                </div>
                                <div class="card-footer">
                                    <h6 class="m-b-0">{{ $doctor->email }}</h6>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('doctors.delete-doctor',$doctor->id) }}"><label class="btn waves-effect waves-light btn-danger"><i
                                        class="icofont icofont-trash">&nbsp;Delete</i></label></a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h5>There are no Doctor records</h5>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
