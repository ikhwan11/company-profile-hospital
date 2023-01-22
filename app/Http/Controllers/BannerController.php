<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{

    public function index()
    {
        return view('adminView/banner', [
            'tittle' => 'Kelola Banner',
            'data' => Banner::latest()->paginate(5)
        ]);
    }


    public function create()
    {
        return view('adminView/bannerCreate', [
            'tittle' => 'Tambah Banner',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'banner_title' => 'required|max:255',
            'image' => 'image|file|max:5120',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('banner-images');
        }

        Banner::create($validatedData);

        return redirect('/dashboard/banner')->with('pesan', 'Banner berhasil ditambah');
    }

    public function show(Banner $banner)
    {
        return view('adminView/bannerShow', [
            'tittle' => 'Banner',
            'data' => $banner
        ]);
    }

    public function edit(Banner $banner)
    {
        return view('adminView/bannerEdit', [
            'tittle' => 'Edit Banner',
            'data' => $banner
        ]);
    }


    public function update(Request $request, Banner $banner)
    {
        $validatedData = $request->validate([
            'banner_title' => 'required|max:255',
            'image' => 'image|file|max:5120',
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('banner-images');
        }

        Banner::where('id', $banner->id)
            ->update($validatedData);

        return redirect('/dashboard/banner')->with('pesan', 'Banner berhasil di Update');
    }

    public function destroy(Banner $banner)
    {
        if ($banner->image) {
            Storage::delete($banner->image);
        }

        Banner::destroy($banner->id);

        return redirect('/dashboard/banner')->with('pesan', 'Banner berhasil di hapus');
    }
}
