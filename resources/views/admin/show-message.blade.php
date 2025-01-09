@extends('layouts.admin.app')

@section('title')
    Dashboard | Message
@endsection

@section('breadcrumb')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-inbox bg-c-blue"></i>
                <div class="d-inline">
                    <h5>User message</h5>
                    {{-- <span></span> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('contents')
<div class="card">
    <div class="card-header">
      <h5>{{ $message->name }}</h5>
    </div>
    <div class="card-block">
      <div class="row">
        <p>{{ $message->message }}</p>
      </div>
      <div class="d-inline">
        <a href="{{ route('messages.create-reply',$message->id) }}"><label class="btn waves-effect waves-light btn-primary"><i
            class="icofont icofont-pen"></i>Reply message</label></a>
        </div>
    </div>
  </div>

@endsection
