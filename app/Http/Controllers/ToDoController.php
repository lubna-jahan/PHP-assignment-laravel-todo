<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{

    public function index()
    {
        $data = Todo::latest()->get();
        return view('to-do.index', compact('data'));
    }


    public function create()
    {
        return view('to-do.create');
    }


    public function store(Request $request)
    {
        Todo::create($request->all());
        return redirect()->route('to-do.index');
    }


    public function show(Todo $todo) {}


    public function edit(Todo $todo)
    {
        return view('to-do.edit', compact('toDo'));
    }


    public function update(Request $request, Todo $todo)
    {
        $todo->update($request->all());
        return redirect()->route('to-do.index');
    }


    public function destroy(Todo $todo)
    {
        $todo->delete();
        return back();
    }
}
