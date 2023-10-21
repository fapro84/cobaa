<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class guruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $data = DB::table('guru')
        ->select('guru.nip', 'guru.nama', 'mmapel.namamapel')
        ->leftJoin('mmapel', 'guru.kodemapel', '=', 'mmapel.kodemapel')
        ->get();

    return view('guru.index', compact('data'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
