@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Index') }} <a href="{{ route('todos.create') }}" class="btn btn-primary"
                            style="float:right">Create</a></div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Created By</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Updated At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($todos as $todo)
                                    <tr>
                                        <td>{{ $todo->id }}</td>
                                        <td>{{ $todo->title }}</td>
                                        <td>{{ $todo->description }}</td>
                                        <td>{{ $todo->user_id ? $todo->user->name : '' }}</td>
                                        <td>{{ $todo->created_at }}</td>
                                        <td>{{ $todo->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('todos.show', $todo) }}" class="btn btn-primary">Show</a>
                                            <a href="{{ route('todos.edit', $todo) }}" class="btn btn-secondary">Edit</a>
                                            <a href="{{ route('todos.delete', $todo) }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $todos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
