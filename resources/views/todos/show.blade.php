@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                    <h1 class="text-center">{{ $todo->name }}</h1>
                </div>
                <div class="card-body">
                    <p>{{ $todo->description }}</p>
                </div>
            </div>
                <a href="/todos/{{ $todo->id }}/edit" class="btn btn-primary btn-sm my-1">edit</a>
                <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm my-1">Delete</a>
        </div>
    </div>
</div>
@endsection