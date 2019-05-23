@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Reports</h1>
        </div>
        <div class="col text-right">
            <a href="/reports/create" class="btn btn-raised btn-primary">Create a new report</a>                     
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th scope="col">Title</th>
                        <th scope="col">Creation date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($expenseReports as $expenseReport)
                        <tr class="text-center">
                            <td>{{ $expenseReport->title }}</td>
                            <td>{{ $expenseReport->created_at }}</td>
                            <td>
                                <a href="/reports/{{ $expenseReport->id }}" class="btn btn-outline-success btn-sm" title="View report">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="/reports/{{ $expenseReport->id }}/edit" class="btn btn-outline-info btn-sm" title="Edit report">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <a href="/reports/{{ $expenseReport->id }}/delete/confirm" class="btn btn-outline-danger btn-sm" title="Delete report">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>   
            <!-- <script>
                var reports = <?php echo $expenseReports ?>;
            </script>
            <div id="reports"></div> -->
        </div>
    </div>
@endsection
