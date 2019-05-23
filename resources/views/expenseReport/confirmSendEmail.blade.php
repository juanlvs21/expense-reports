@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Send Report</h1>
            <h4>{{ $report->title }}</h4>
        </div>
        <div class="col text-right">
            <a href="/reports/{{ $report->id }}" class="btn btn-raised btn-secondary">Back</a>                     
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <form action="/reports/{{ $report->id }}/sendEmail" method="POST">
                @csrf
                <div class="form-group"> 
                    <label for="email" class="text-primary">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter the recipient of the expense report" value="{{ old('email')}}" required>
                </div>

                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach($errors->all() as $error)
                            <ul>
                                <li>{{$error}}</li>
                            </ul>
                        @endforeach
                    </div>
                @endif

                <button type="submit" class="btn btn-raised btn-primary">Send Mail</button>
            </form>
        </div>
    </div>
@endsection
