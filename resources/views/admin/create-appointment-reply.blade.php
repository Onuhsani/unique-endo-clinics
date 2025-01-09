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
                    <h5>Reply patient appointment booking</h5>
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
          <h5>Reponse details</h5>
          {{-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> --}}
        </div>
        <div class="card-block">
          <form id="main" method="POST" action="{{ route('appointment.reply') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <label class="form-label col-sm-2 col-form-label" for="email">To:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="email" id="email" value="{{ $appointment->email }}" readonly>
                  <span class="messages"></span>
                </div>
            </div>

            <div class="mb-3 row">
              <label class="form-label col-sm-2 col-form-label" for="subject">Subject of mail:<span style="color:red">*</span></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter response subject" required>
                <span class="messages"></span>
              </div>
            </div>

            <div class="mb-3 row">
              <label class="form-label col-sm-2 col-form-label">Compose(Message body):<span style="color:red">*</span></label>
              <div class="col-sm-10">
                <textarea cols="" rows="15" type="text" class="form-control" id="message" name="message" placeholder="Enter your response" required></textarea>
                <span class="messages"></span>
              </div>
            </div>

            <div class="mb-3 row">
              <label class="form-label col-sm-2"></label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary m-b-0">Send mail</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

@endsection
