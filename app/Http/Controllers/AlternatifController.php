<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index()
    {
        $alternatif = Alternatif::orderby('created_at', 'DESC')-> get();
        return view('alternatif.index', compact('alternatif'));
    }
    public function create()
    {
        return view('alternatif.create');
    }    //
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'code_alternatif'=> 'required|string',
            'nama' => 'required|string',
        ]);
        Alternatif::create($validateData);
        return redirect()->route('alternatif')->with('succes','Alternatif added successfully');
    }
    public function show(string $id)
    {
        $aternatif = Alternatif::findOrFail($id);
        return view('alternatif.show', compact('alternatif'));
    }
    public function edit(string $id)
    { 
        $alternatif = Alternatif::findOrFail($id);
        return view('alternatif.edit', compact('alternatif'));
    }
    public function update(Request $request, string $id)
    {
       $alternatif = Alternatif::findOrFail($id);
       $alternatif->update($request->all());
        return redirect()->route('alternatif')->with('success', 'alternatif updated successfully');
    }
    public function destroy(string $id)
    {
        $alternatif = Alternatif::findOrFail($id);
        $alternatif->delete();
        return redirect()->route('alternatif')->with('success', 'alternatif deleted successfully');
    }
}
