<?php

namespace App\Http\Controllers;

use App\Models\Poliklinik;
use Illuminate\Http\Request;

class PoliklinikController extends Controller
{

    public function create()
    {
        return view('adminView/dokterPoliklinikCreate', [
            'tittle' => 'Dokter'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'poliklinik' => 'required|max:255|unique:polikliniks',
                'slug' => 'required|max:255|unique:polikliniks',
            ]
        );

        Poliklinik::create($validatedData);

        return redirect('/dashboard/dokter')->with('pesan', 'poliklinik berhasil ditambahkan');
    }
}
