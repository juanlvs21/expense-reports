@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Edit Report</h1>
            <h4>{{ $report->title }}</h4>
        </div>
        <div class="col text-right">
            <a href="/reports" class="btn btn-raised btn-secondary">Back</a>                     
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <form action="/reports/{{ $report->id }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group"> 
                    <label for="title" class="text-primary">Title</label>
                    @if($errors->any())
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title')}}">
                    @else
                        <input type="text" class="form-control" id="title" name="title" value="{{ $report->title }}">
                    @endif
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

                <button type="submit" class="btn btn-raised btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
