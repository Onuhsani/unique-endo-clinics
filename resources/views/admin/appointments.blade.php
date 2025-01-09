@extends('layouts.admin.app')

@section('title')
    Dashboard | Appointments
@endsection

@section('breadcrumb')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-inbox bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Patient appointments</h5>
                    {{-- <span></span> --}}
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title breadcrumb-padding">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb0-item"><a href="#!">Dashboard</a>
                    </li>
                    <li class="breadcrumb0-item">
                        <a href="#!">Appointments</a>
                    </li>
                </ul>
            </div>
        </div> --}}
    </div>
</div>
@endsection

@section('contents')
<div class="row">
    <div class="col-sm-12">
        <!-- Zero config.table start -->
        <div class="card">
            <div class="card-header">
                <h5>Client appointments</h5>
                {{-- <span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span> --}}
            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Clinic</th>
                                <th>Appointment date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($appointments as $appointment)
                            <tr>
                                <td>{{ $appointment->name }}</td>
                                <td>{{ $appointment->email }}</td>
                                <td>{{ $appointment->clinic->name ?? 'No Clinic Assigned' }}</td>
                                <td>{{ $appointment->appointment_date }}</td>
                                <td>
                                    <a href="{{ route('appointment.create-reply',$appointment->id) }}"><label class="btn waves-effect waves-light btn-primary"><i
                                        class="icofont icofont-email"></i></label></a>
                                    <a href="{{ route('appointment.delete',$appointment->id) }}"><label class="btn waves-effect waves-light btn-danger"><i
                                            class="icofont icofont-trash"></i></label></a>
                                </td>
                                {{-- <td>$320,800</td> --}}
                            </tr>
                            @empty
                                <h5>No appointment records yet!</h5>
                            @endforelse

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Clinic</th>
                                <th>Appointment date</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!-- Language - Comma Decimal Place table end -->
    </div>
</div>

@endsection
