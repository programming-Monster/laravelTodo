@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <form action="/store">
                @csrf
                <div class="card-header form-control text-center my-1">Create Todos</div>
                    @if($errors->any())
                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                    @endforeach
                    @endif
                    <input type="text" class="form-control" name="name" placeholder="Title">
                    <textarea id="" cols="30" rows="10" class="form-control" name="description" placeholder="Description"></textarea>
                    <button class="form-control btn btn-success btn-sm">Create Todos</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection