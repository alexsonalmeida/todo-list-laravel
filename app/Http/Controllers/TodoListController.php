<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return TodoList::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required|unique:lists|max:255',
        ]);
        $list = TodoList::create($validated);

        return response()->json($list, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(TodoList $list)
    {
        return $list;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TodoList $list)
    {
        $validated = $request->validate([
            'title' => 'required|unique:lists,title,' . $list->id . '|max:255',
        ]);

        $list->update($validated);

        return $list;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TodoList $list)
    {
        $list->delete();

        return response()->json(null, 204);
    }
}
