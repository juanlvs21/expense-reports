@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Report</h1>
        </div>
        <div class="col text-right">
            <a href="/reports" class="btn btn-raised btn-secondary">Back</a>                     
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <form action="/reports" method="POST">
                @csrf
                <div class="form-group"> 
                    <label for="title" class="text-primary">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter a new expense report" value="{{ old('title')}}" required>
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
@endsection
