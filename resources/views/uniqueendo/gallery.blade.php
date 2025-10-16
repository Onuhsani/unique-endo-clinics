@extends('layouts.uniqueendo.app')

@section('title')
    UniqueEndo | Gallery
@endsection

@section('contents')
    <div class="tab-pane fade show active mt-3" id="images" role="tabpanel">
        <div class="row">
            <div class="col-md-4 mb-3"><img src="{{ asset('img/mips2.jpg') }}" class="img-fluid rounded"></div>
            <div class="col-md-4 mb-3"><img src="{{ asset('img/ma3.jpg') }}" class="img-fluid rounded"></div>
            <div class="col-md-4 mb-3"><img src="{{ asset('img/mips1.jpg') }}" class="img-fluid rounded"></div>
            <div class="col-md-4 mb-3"><img src="{{ asset('img/ge1.jpg') }}" class="img-fluid rounded"></div>
            <div class="col-md-4 mb-3"><img src="{{ asset('img/ge2.png') }}" class="img-fluid rounded"></div>
            <div class="col-md-4 mb-3"><img src="{{ asset('img/endo1.jpg') }}" class="img-fluid rounded"></div>
            <div class="col-md-4 mb-3"><img src="{{ asset('img/ge3.jpg') }}" class="img-fluid rounded"></div>
            <div class="col-md-4 mb-3"><img src="{{ asset('img/endo2.jpg') }}" class="img-fluid rounded"></div>
        </div>
    </div>
@endsection
