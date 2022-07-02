@extends('layouts.base')

@section('main-contents')
    <div class="container-fluid">
        <div class="row border-bottom">
            <div class="col-12">
                <span class="fs-1 fw-bold">Ticket Counter</span>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-2">
                <form action="{{ route('shift.new') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="shift_date" class="form-label">Create new table</label>
                        <input type="text" class="form-control" name="shift_date" placeholder="Date of Shift">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-dark">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-8 mx-auto">
            @if (count($shifts) != 0)
                <table class="table table-sm table-striped table-borderless">
                    <thead>
                        <tr>
                            <td>Shift date</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($shifts as $shift)
                            <tr>
                                <td>{{ $shift->shift_date }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                No shift sheets yet.
            @endif
        </div>
    </div>
@endsection