<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{

    public function index()
    {
        return view('adminView/galeri', [
            'tittle' => 'Media',
            'galeri' => Galeri::latest()->paginate(5)
        ]);
    }

    public function create()
    {
        return view('adminView/galeriCreate', [
            'tittle' => 'Media'
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title_galeri' => 'required|max:255',
            'slug' => 'required',
            'keterangan' => 'required',
            'image' => 'required|image|file|max:5120'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('galeri-images');
        }

        Galeri::create($validatedData);

        return redirect('/dashboard/galeri')->with('pesan', 'Foto galeri berhasil ditambah');
    }


    public function destroy(Galeri $galeri)
    {
        if ($galeri->image) {
            Storage::delete($galeri->image);
        }

        Galeri::destroy($galeri->id);

        return redirect('/dashboard/galeri')->with('pesan', 'Foto galeri berhasil di hapus');
    }
}
