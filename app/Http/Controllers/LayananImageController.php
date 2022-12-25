<?php

namespace App\Http\Controllers;

use App\Models\LayananImage;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananImageController extends Controller
{

    public function index()
    {
        return view('adminView/layananImageData', [
            'tittle' => 'Layanan',
            'data' => LayananImage::all()
        ]);
    }

    public function create()
    {
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'layanan_id' => 'required',
            'image' => 'required|image|file|max:5120',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('layanan-images');
        }

        LayananImage::create($validatedData);

        return redirect('/dashboard/layanan')->with('pesan', 'gambar layanan berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LayananImage  $layananImage
     * @return \Illuminate\Http\Response
     */
    public function show(LayananImage $layananImage)
    {
        //
    }

    public function edit(LayananImage $layananImage)
    {
        return view('adminView/layananImageEdit', [
            'tittle' => 'Layanan',
            'data' => $layananImage
        ]);
    }


    public function update(Request $request, LayananImage $layananImage)
    {
        $validatedData = $request->validate([
            'image' => 'image|file|max:5120',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('layanan-images');
        }

        LayananImage::where('id', $layananImage->id)
            ->update($validatedData);

        return redirect('/dashboard/layananImage')->with('pesan', 'gambar layanan berhasil diupdate');
    }


    public function destroy(LayananImage $layananImage)
    {
        if ($layananImage->image) {
            Storage::delete($layananImage->image);
        }

        LayananImage::destroy($layananImage->id);

        return redirect('/dashboard/layananImage')->with('pesan', 'gambar layanan berhasil dihapus');
    }
}
