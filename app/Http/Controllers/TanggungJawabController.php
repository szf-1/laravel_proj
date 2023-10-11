<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TanggungJawab;

class TanggungJawabController extends Controller
{
    public function index()
    {
        $tanggungjawabs = TanggungJawab::all();
        return view('tanggungjawabs.index', compact('tanggungjawabs'));
    }

    public function create()
    {
        return view('tanggungjawabs.create');
    }

  

        public function store(Request $request)
{
    
        $request->validate([
            'id' => 'required',
            'name' => 'required', 
            'jenis_tanggung_jawab' => 'required',
        ]);

        TanggungJawab::create($data);

        return redirect()->route('tanggungjawabs.index');
    }

    public function edit(TanggungJawab $tanggungjawab)
    {
        $tanggungjawabs =   TanggungJawab::get();
        return view('tanggungjawabs.edit', compact('tanggungjawabs'));
    }

    public function update(Request $request, TanggungJawab $tanggungjawab)
    {
        $data = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'jenis_tanggung_jawab' => 'required',
            
            
        ]);

        $tanggungjawab->update($data);

        return redirect()->route('tanggungjawabs.index');
    }

    public function destroy(TanggungJawab $tanggungjawab)
    {
        $tanggungjawab->delete();

        return redirect()->route('tanggungjawabs.index');
    }
}


