<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class siswaController extends Controller
{
    public function index()
    {
        $data = siswa::all();
        return view('siswa.index', compact(['data']));
    }

    public function create()
    {
        return view('siswa.add');
    }

    public function action($id)
    {
        $data = siswa::find($id);
        return view('siswa.action', compact(['data']));
    }

    public function add(Request $request)
    {
        // Validasi dan simpan berkas jika ada
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            // Simpan berkas ke direktori penyimpanan 'public'
            // dd($file);
            $filename = $file->getClientOriginalName();
            Storage::disk('local')->put($filename, file_get_contents($file->getRealPath()));

        }

        // Buat data siswa dari form input
        $data = $request->except(['_token', 'submit']);

        Siswa::create($data);

        return redirect('/siswa');
    }



    public function update($id, request $request)
    {
        $data = siswa::find($id);
        $data->update($request->except(['_token', 'submit']));
        return redirect('/siswa');
    }

    public function destroy($id)
    {
        $data = siswa::find($id);
        $data->delete();
        return redirect('/siswa');
    }
}