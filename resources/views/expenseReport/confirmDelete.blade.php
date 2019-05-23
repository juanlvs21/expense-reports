@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Delete Report</h1>
            <h4>{{ $report->title }}</h4>
        </div>
        <div class="col text-right">
            <a href="/reports" class="btn btn-raised btn-secondary">Back</a>                     
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <h5>Are you sure you want to delete this report?</h5>
            <form action="/reports/{{ $report->id }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-raised btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection
