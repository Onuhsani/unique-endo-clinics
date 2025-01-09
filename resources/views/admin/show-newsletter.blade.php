@extends('layouts.admin.app')

@section('title')
    Dashboard | newsletter subscribers
@endsection

@section('breadcrumb')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-inbox bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Newsletter message</h5>
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
                <a href="{{ route('newsletter.create') }}"><label class="btn waves-effect waves-light btn-primary"><i
                        class="icofont icofont-mail"></i>Send newsletter</label></a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('contents')
<div class="card">
    <div class="card-header">
      <h5>{{ $newsletter->subject }}</h5>
    </div>
    <div class="card-block">
      <div class="row">
        {{-- <div class="col-sm-3 m-b-30">
          <a href="../files/extra-pages/comming-soon/index2.html" target="_blank"><img src="../files/assets/images/commingsoon/cs-2.jpg" alt="Layout-1" class="img-fluid img-thumbnail"></a>
        </div> --}}
        <p>{{ $newsletter->message }}</p>
      </div>
    </div>
  </div>

@endsection
