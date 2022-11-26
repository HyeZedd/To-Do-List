@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Show To Do List') }}</div>

                    <div class="card-body">

                        <div class="form-group">
                            <label for="title"> Title</label>
                            <input type="text" class="form-control" value="{{ $todo->title }}" id="title"
                                name="title" readonly>
                        </div>

                        <div class="form-group">
                            <label for="description"> Description</label>
                            <textarea type="text" class="form-control" value="{{ $todo->description }}" id="description" name="description"
                                readonly rows="3"> </textarea>
                        </div>


                        <a href="{{ route('todos.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
