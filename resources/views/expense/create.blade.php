@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Expense</h1>
        </div>
        <div class="col text-right">
            <a href="/reports/{{ $report->id }}" class="btn btn-raised btn-secondary">Back</a>                     
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <form action="/reports/{{ $report->id }}/expenses/store" method="POST">
                @csrf
                <div class="form-group"> 
                    <label for="description" class="text-primary">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Enter the description of the expense..." value="{{ old('description')}}" rows="3" required></textarea>
                </div>
                <div class="form-group"> 
                    <label for="amount" class="text-primary">Amount</label>
                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter the amount spent" value="{{ old('amount')}}" required>
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

                <button type="submit" class="btn btn-raised btn-primary">Save</button>
            </form>
        </div>
    </div>
    <div id="hola"></div>
@endsection
