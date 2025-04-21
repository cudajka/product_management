<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sizes = Size::all();
        return view('admin.sizes.index', compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sizes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newSize = new Size();
        $newSize->name = $request->input('name');
        $newSize->number = $request->input('number');
        $newSize->save();
        return redirect()->route('sizes.index')->with('success', 'Size added successfully');
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
        $editSize = Size::findOrFail($id);
        return view('admin.sizes.edit', compact('editSize'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editSize = Size::findOrFail($id);
        $editSize->name = $request->input('name');
        $editSize->number = $request->input('number');
        $editSize->save();
        return redirect()->route('sizes.index')->with('success', 'Size updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteSize = Size::findOrFail($id);
        $deleteSize->delete();
        return redirect()->route('sizes.index')->with('success', 'Size deleted successfully');
    }
}
