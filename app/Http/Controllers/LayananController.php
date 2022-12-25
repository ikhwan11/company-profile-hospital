<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{

    public function index()
    {
        return view('adminView/layanan', [
            'tittle' => 'Layanan',
            'layanans' => Layanan::all()
        ]);
    }

    public function create()
    {
        return view('adminView/layananCreate', [
            'tittle' => 'Layanan'
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_layanan' => 'required|max:255',
            'nama_layanan' => 'required|max:255',
            'slug' => 'required|unique:layanans',
            'ket' => 'required',
        ]);

        Layanan::create($validatedData);

        return redirect('/dashboard/layanan')->with('pesan', 'Layanan berhasil ditambah');
    }


    public function show(Layanan $layanan)
    {
        return view('adminView/layananImageCreate', [
            'tittle' => 'Layanan',
            'layanan' => $layanan
        ]);
    }

    public function edit(Layanan $layanan)
    {
        return view('adminView/layananEdit', [
            'tittle' => 'Layanan',
            'layanan' => $layanan
        ]);
    }


    public function update(Request $request, Layanan $layanan)
    {
        $rules = ([
            'jenis_layanan' => 'required|max:255',
            'nama_layanan' => 'required|max:255',
            'ket' => 'required',
        ]);

        if ($request->slug != $layanan->slug) {
            $rules['slug'] = 'required|unique:layanans';
        }

        $validatedData = $request->validate($rules);

        layanan::where('id', $layanan->id)
            ->update($validatedData);

        return redirect('/dashboard/layanan')->with('pesan', 'Layanan berhasil di Update');
    }


    public function destroy(Layanan $layanan)
    {
        Layanan::destroy($layanan->id);

        return redirect('/dashboard/layanan')->with('pesan', 'Layanan berhasil di hapus');
    }
}
