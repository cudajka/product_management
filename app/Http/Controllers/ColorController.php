<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $colors = Color::all();
        return view('admin.colors.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.colors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newColor = new Color();
        $newColor->name = $request->input('name');
        $newColor->code = $request->input('code');
        $newColor->save();
        return redirect()->route('colors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editColor = Color::findOrFail($id);
        return view('admin.colors.edit', compact('editColor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editColor = Color::findOrFail($id);
        $editColor->name = $request->input('name');
        $editColor->code = $request->input('code');
        $editColor->save();
        return redirect()->route('colors.index')->with('success', 'Color has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteColor = Color::findOrFail($id);
        $deleteColor->delete();
        return redirect()->route('colors.index')->with('success', 'Color has been deleted');
    }
}
