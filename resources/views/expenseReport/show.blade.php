@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Details Report</h1>
            <h4>{{ $report->title }}</h4>
        </div>
        <div class="col-md-4 text-right">
            <a class="btn btn-raised btn-primary" href="/reports/{{ $report->id }}/expenses/create">New Expense</a>
            <a class="btn btn-raised btn-info" href="/reports/{{ $report->id }}/confirmSendEmail">Send Email</a>
            <a href="/reports" class="btn btn-raised btn-secondary">Back</a>                     
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th scope="col">Description</th>
                        <th scope="col">Creation date</th>
                        <th scope="col">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($report->expenses as $expense)
                        <tr class="text-center">
                            <td>{{ $expense->description }}</td>
                            <td>{{ $expense->created_at }}</td>
                            <td>{{ $expense->amount }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>      
        </div>
    </div>
@endsection
