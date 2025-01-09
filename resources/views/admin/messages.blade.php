@extends('layouts.admin.app')

@section('title')
    Dashboard | Messages
@endsection

@section('breadcrumb')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-inbox bg-c-blue"></i>
                <div class="d-inline">
                    <h5>Messages</h5>
                    {{-- <span></span> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row align-items-end mt-3">
        <div class="col-lg-8">
            <div class="d-inline">
                <a href="{{ route('newsletter.view-subscribers') }}"><label class="btn waves-effect waves-light btn-primary"><i
                    class="icofont icofont-eye"></i>View subscribers</label></a>
                <a href="{{ route('newsletter.create') }}"><label class="btn waves-effect waves-light btn-primary"><i
                        class="icofont icofont-mail"></i>Send newsletter</label></a>
            </div>
        </div>
    </div> --}}
</div>
@endsection

@section('contents')
<div class="row">
    <div class="col-sm-12">
        <!-- Zero config.table start -->
        <div class="card">
            <div class="card-header">
                <h5>All messages</h5>
                {{-- <span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span> --}}
            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($messages as $message)
                            <tr>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ substr($message->message, 0, 50)."..." }}</td>
                                <td>
                                    <a href="{{ route('messages.show',$message->id) }}"><label class="btn waves-effect waves-light btn-primary"><i
                                        class="icofont icofont-eye"></i></label></a>
                                    <a href="{{ route('messages.delete',$message->id) }}"><label class="btn waves-effect waves-light btn-danger"><i
                                            class="icofont icofont-trash"></i></label></a>
                                </td>
                                {{-- <td>$320,800</td> --}}
                            </tr>
                            @empty
                                <h5><span style="color: red">No message have been received yet</span></h5>
                            @endforelse

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>subject</th>
                                <th>message</th>
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
