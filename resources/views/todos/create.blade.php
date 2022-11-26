@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create To Do List') }}</div>

                    <div class="card-body">
                        <form action="{{ route('todos.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title"> Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>

                            <div class="form-group">
                                <label for="description"> Description</label>
                                <textarea type="text" class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>

                            <button class="btn btn-primary" type="submit">
                                Submit
                            </button>
                            <a href="{{ route('todos.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
