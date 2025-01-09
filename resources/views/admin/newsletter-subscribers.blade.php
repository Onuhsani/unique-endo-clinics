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
                    <h5>Newsletter subscribers</h5>
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
<div class="row">
    <div class="col-sm-12">
        <!-- Zero config.table start -->
        <div class="card">
            <div class="card-header">
                <h5>Sent newsletters</h5>
                {{-- <span>DataTables has most features enabled by default, so all you need to do to use it with your own ables is to call the construction function: $().DataTable();.</span> --}}
            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Subscriber</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($subscribers as $subscriber)
                            <tr>
                                <td>{{ $num = $num+1; }}</td>
                                <td>{{ $subscriber->email }}</td>
                                <td>
                                    <a href="{{ route('subscriber.delete',$subscriber->id) }}"><label class="btn waves-effect waves-light btn-danger"><i
                                            class="icofont icofont-trash"></i></label></a>
                                </td>
                                {{-- <td>$320,800</td> --}}
                            </tr>
                            @empty
                                <h5>No newsletter has been sent out yet</h5>
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
