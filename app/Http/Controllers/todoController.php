<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class todoController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        //dd($userId);
        $todos = Todo::where('user_id',$userId)->paginate(5);
         //dd($todos);
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        auth()->user()->todo()->create($request->only('title', 'description'));

        return redirect()->route('todos.index')->with('success', 'To Do List created successfully');
    }

    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update($request->only('title', 'description'));
        return redirect()->route('todos.index');
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index');
    }
}
