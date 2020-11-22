@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <h1 class="text-center">Todos App</h1>
                    <a href="/todos"class="text-center my-5">Todos</a>
                    <a href="/create" class="text-center">Create Todos</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
