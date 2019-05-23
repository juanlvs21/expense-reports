<div class="row">
    <div class="col">
        <h1>Expense Report</h1>
        <h3>{{ $report->title }}</h3>
    </div>
</div>
<div class="row">
    <div class="col">
        <h5>Expenses</h5>
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