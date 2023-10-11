<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TanggungJawabUser;

class TanggungJawabUserController extends Controller
{

        public function index()
        {
            $tanggungjawabusers = TanggungJawabUser::all();
            return view('tanggungjawabusers.index', compact('tanggungjawabusers'));
        }
    
        public function create()
        {
            return view('tanggungjawabusers.create');
        }
    
      
    
            public function store(Request $request)
    {
        
            $request->validate([
                'id' => 'required',
                'name' => 'required', 
                
            ]);
    
            TanggungJawabUser::create($data);
    
            return redirect()->route('tanggungjawabusers.index');
        }
    
        public function edit(TanggungJawabUser $tanggungjawabuser)
        {
            $tanggungjawabusers =   TanggungJawabUser::get();
            return view('tanggungjawabusers.edit', compact('tanggungjawabusers'));
        }
    
        public function update(Request $request, TanggungJawabUser $tanggungjawab)
        {
            $data = $request->validate([
                'id' => 'required',
                'name' => 'required',
                'jenis_tanggung_jawab' => 'required',
                
                
            ]);
    
            $tanggungjawabuser->update($data);
    
            return redirect()->route('tanggungjawabusers.index');
        }
    
        public function destroy(TanggungJawabUser $tanggungjawabuser)
        {
            $tanggungjawabuser->delete();
    
            return redirect()->route('tanggungjawabusers.index');
        }
    }
    
    
    

