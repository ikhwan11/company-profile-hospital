<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas_Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasLayananController extends Controller
{

    public function index()
    {
        return view('adminView/fasilitasLayanan', [
            'tittle' => 'Layanan',
            'fasilitas' => Fasilitas_Layanan::paginate(5)
        ]);
    }


    public function create()
    {
        return view('adminView/fasilitasLayananCreate', [
            'tittle' => 'Layanan'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_fasilitas' => 'required|max:255',
            'slug' => 'required|unique:fasilitas__layanans',
            'image' => 'required|image|file|max:5120',
            'kategori' => 'required',
            'ket' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('fasilitas-images');
        }

        Fasilitas_Layanan::create($validatedData);

        return redirect('/dashboard/fasilitas-layanan')->with('pesan', 'Fasilitas layanan berhasil ditambah');
    }


    public function show(Fasilitas_Layanan $fasilitas_Layanan)
    {
    }


    public function edit($id)
    {
        return view('adminView/fasilitasLayananEdit', [
            'tittle' => 'Layanan',
            'fasilitas' => Fasilitas_Layanan::where('id', $id)->first()
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_fasilitas' => 'required|max:255',
            'image' => 'image|file|max:5120',
            'slug' => 'required',
            'kategori' => 'required',
            'ket' => 'required',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('fasilitas-images');
        }

        Fasilitas_Layanan::where('id', $id)
            ->update($validatedData);

        return redirect('/dashboard/fasilitas-layanan')->with('pesan', 'Fasilitas layanan berhasil diUpdate');
    }

    public function destroy(Fasilitas_Layanan $fasilitas_Layanan, $id)
    {
        if ($fasilitas_Layanan->image) {
            Storage::delete($fasilitas_Layanan->image);
        }

        Fasilitas_Layanan::destroy($id);

        return redirect('/dashboard/fasilitas-layanan')->with('pesan', 'Fasilitas berhasil di hapus');
    }
}
