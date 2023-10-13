<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TanggungJawabUser;

class TanggungJawabUserController extends Controller
{
    public function index()
    {
        $user = \Auth::user(); // Mengambil pengguna yang saat ini diautentikasi
        $tanggungjawabusers = TanggungJawabUser::where('user_id', $user->id)->get();
        return view('tanggungjawabusers.index', compact('tanggungjawabusers'));
    }

    public function create()
    {
        return view('tanggungjawabusers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggungjawabusers' => 'required|array',
        ]);

        $user = \Auth::user(); // Mengambil pengguna yang saat ini diautentikasi

        foreach ($request->input('tanggungjawabusers') as $tanggungjawabuser) {
            TanggungJawabUser::create([
                'nama_tanggung_jawab' => $tanggungjawabuser,
                'user_id' => $user->id, // Asosiasikan dengan pengguna yang saat ini diautentikasi
            ]);
        }

        return redirect()->route('tanggungjawabusers.index')
            ->with('success', 'Tanggung Jawab berhasil dibuat.');
    }


public function show($id)
    {
        $tanggungjawabuser = TanggungJawabUser::find($id);

        if (!$tanggungjawabuser) {
            return redirect()->route('tanggungjawabusers.index')
                ->with('error', 'Tanggung Jawab tidak ditemukan.');
        }

        return view('tanggungjawabusers.show', compact('tanggungjawabuser'));
    }

    public function edit($id)
    {
        $tanggungjawabuser = TanggungJawabUser::find($id);

        if (!$tanggungjawabuser) {
            return redirect()->route('tanggungjawabusers.index')
                ->with('error', 'Tanggung Jawab tidak ditemukan.');
        }

        return view('tanggungjawabusers.edit', compact('tanggungjawabuser'));
    }



    public function destroy($id)
    {
        $tanggungjawabuser = TanggungJawabUser::find($id);

        if (!$tanggungjawabuser) {
            return redirect()->route('tanggungjawabusers.index')
                ->with('error', 'Tanggung Jawab tidak ditemukan.');
        }

        $tanggungjawabuser->delete();

        return redirect()->route('tanggungjawabusers.index')
            ->with('success', 'Tanggung Jawab berhasil dihapus.');
    }

}







