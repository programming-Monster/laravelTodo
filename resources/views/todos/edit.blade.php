@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="container">
                <form action="/todos/{{ $todo->id }}/update">
                <div class="card-header form-control text-center">Update Todo</div>
                @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
                @endif
                    <input type="text" class="form-control" name="name" value="{{ $todo->name }}">
                    <textarea cols="30" rows="10" class="form-control" name="description">{{ $todo->description }}</textarea>
                    <button class="form-control btn btn-success btn-sm">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection