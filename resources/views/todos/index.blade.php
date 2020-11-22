@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <h1 class="text-center">Todos Page</h1>
                    @foreach($todos as $todo)
                        <ul class="list-group">
                            <li class="list-group-item">
                            {{ $todo->name }}
                            <a href="todos/{{ $todo->id }}/show" class="btn btn-primary btn-sm float-right">View</a>
                            @if(!$todo->completed)
                            <a href="/todos/{{ $todo->id }}/complete" class="btn btn-warning btn-sm float-right">complete</a>
                            @endif
                            <a href="todos/{{ $todo->id }}/edit" class="btn btn-success btn-sm float-right">Edit</a>
                            </li>
                        </ul>
                    @endforeach
                </div>

            </div>
        </div>  
    </div>
</div>
@endsection