<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriteria = Kriteria::orderBy('created_at', 'DESC')->get();
  
        return view('kriteria.index', compact('kriteria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code_kriteria'=> 'required|string',
            'nama'=> 'required|string',
            'weight'=> 'required|integer',
            'jenis'=> 'required|enum'
        ]);
        Kriteria::create($validatedData);
 
        return redirect()->route('kriteria')->with('success', 'kriteria added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kriteria = Kriteria::findOrFail($id);
  
        return view('kriteria.show', compact('kriteria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kriteria = Kriteria::findOrFail($id);
  
        return view('kriteria.edit', compact('kriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kriteria= Kriteria::findOrFail($id);
  
        $kriteria ->update($request->all());
  
        return redirect()->route('kriteria')->with('success', 'kriteria updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kriteria = Kriteria::findOrFail($id);
  
        $kriteria->delete();
  
        return redirect()->route('kriteria')->with('success', 'kriteria deleted successfully');
    }
}
