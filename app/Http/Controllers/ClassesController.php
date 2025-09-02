<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index()
    {
        $classes = Classes::all();
        return view('classes.index', compact('classes'));
    }

    public function create()
    {
        return view('classes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Classes::create($validated);

        return redirect()->route('classes.index');
    }

    public function show(Classes $class)
    {
        return view('classes.show', compact('class'));
    }

    public function edit(Classes $class)
    {
        return view('classes.edit', compact('class'));
    }

    public function update(Request $request, Classes $class)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $class->update($validated);

        return redirect()->route('classes.index');
    }

    public function destroy(Classes $class)
    {
        $class->delete();
        return redirect()->route('classes.index');
    }
}
