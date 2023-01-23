<?php

namespace App\Http\Controllers;

use App\Models\Partnership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnershipController extends Controller
{

    public function index()
    {
        return view('adminView/partnership', [
            'tittle' => 'Media',
            'partnerhip' => Partnership::all()
        ]);
    }


    public function create()
    {
        return view('adminView/partnershipCreate', [
            'tittle' => 'Media',
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_partner' => 'required',
            'image' => 'required|image|file|max:1204',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('partner-logos');
        }

        Partnership::create($validatedData);

        return redirect('/dashboard/partnership')->with('pesan', 'Partner berhasil ditambahkan');
    }

    public function destroy(Partnership $partnership)
    {
        if ($partnership->image) {
            Storage::delete($partnership->image);
        }

        Partnership::destroy($partnership->id);

        return redirect('/dashboard/partnership')->with('pesan', 'Partnership berhasil di hapus');
    }
}
