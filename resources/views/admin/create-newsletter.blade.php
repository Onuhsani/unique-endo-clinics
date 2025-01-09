@extends('layouts.admin.app')

@section('title')
    Dashboard | Send newsletter
@endsection

@section('breadcrumb')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-inbox bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Send Newsletter</h5>
                    {{-- <span></span> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="row align-items-end mt-3">
        <div class="col-lg-8">
            <div class="d-inline">
                <a href="{{ route('newsletter.view') }}"><label class="btn waves-effect waves-light btn-primary"><i
                    class="icofont icofont-eye"></i>View newsletters</label></a>
                <a href="{{ route('newsletter.view-subscribers') }}"><label class="btn waves-effect waves-light btn-primary"><i
                        class="icofont icofont-eye"></i>View subscribers</label></a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('contents')

<div class="row">
    <div class="col-sm-12">
      <!-- Basic Inputs Validation start -->
      <div class="card">
        <div class="card-header">
          <h5>Newsletter message</h5>
          {{-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> --}}
        </div>
        <div class="card-block">
          <form id="main" method="post#" action="#" novalidate>
            @csrf
            <div class="mb-3 row">
              <label class="form-label col-sm-2 col-form-label" for="subject">Subject of newsletter:<span style="color:red">*</span></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter subject of newsletter" required>
                <span class="messages"></span>
              </div>
            </div>

            <div class="mb-3 row">
              <label class="form-label col-sm-2 col-form-label">Newsletter message:<span style="color:red">*</span></label>
              <div class="col-sm-10">
                <textarea cols="" rows="15" type="text" class="form-control" id="compose" name="compose" placeholder="Enter newsletter message" required></textarea>
                <span class="messages"></span>
              </div>
            </div>

            <div class="mb-3 row">
              <label class="form-label col-sm-2"></label>
              <div class="col-sm-10">
                <button type="submit" class="btn btn-primary m-b-0">Send newsletter</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

@endsection
