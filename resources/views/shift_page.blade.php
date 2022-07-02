@extends('layouts.base')

@section('main-contents')
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12 text-center">
                <span class="fs-3 fw-bold">{{ $shift->shift_date }}</span>
            </div>
        </div>
    </div>
@endsection