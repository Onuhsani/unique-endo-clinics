@extends('layouts.admin.app')

@section('title')
    Dashboard | Appointments
@endsection

@section('breadcrumb')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-user bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Add a new doctor to the team</h5>
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
      <!-- Basic Inputs Validation start -->
      <div class="card">
        <div class="card-header">
          <h5>Doctor details</h5>
          {{-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> --}}
        </div>
        <div class="card-block">
          <form id="main" method="post#" action="#" novalidate>
            @csrf
            <div class="mb-3 row">
                <label class="form-label col-sm-2 col-form-label" for="subject">Doctor:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Doctor's name" required>
                  <span class="messages"></span>
                </div>
            </div>

            <div class="mb-3 row">
              <label class="form-label col-sm-2 col-form-label" for="subject">Email:<span style="color:red">*</span></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter doctor's email" required>
                <span class="messages"></span>
              </div>
            </div>

            <div class="mb-3 row">
                <label class="form-label col-sm-2 col-form-label" for="subject">Specialization:<span style="color:red">*</span></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter doctor's specialization" required>
                  <span class="messages"></span>
                </div>
              </div>

            <div class="mb-3 row">
              <label class="form-label col-sm-2"></label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary m-b-0">Add Doctor</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

@endsection
