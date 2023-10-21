<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function create()
    {
        return view('entries.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        Entry::create($validatedData);

        return redirect('/entries')->with('success', 'Entry berhasil dibuat!');
    }
}