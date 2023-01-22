<?php

namespace App\Http\Controllers;

use App\Models\Elibrary;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ElibraryController extends Controller
{

    public function index()
    {
        return view('adminView/library', [
            'tittle' => 'E-Library',
            'books' => Elibrary::latest()->filter(request(['search']))->paginate(5)->withQueryString()
        ]);
    }


    public function create()
    {
        return view('adminView/libraryCreate', [
            'tittle' => 'E-Library',
            'folders' => Folder::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'penulis' => 'required|max:255',
            'tahun' => 'required|max:255',
            'folder_id' => 'required',
            'file_buku' => 'required|file|mimes:pdf',
        ]);

        if ($request->file('file_buku')) {
            $validatedData['file_buku'] = $request->file('file_buku')->store('elibrary-file');
        }

        Elibrary::create($validatedData);

        return redirect('/dashboard/e-library')->with('pesan', 'buku Berhasil ditambah');
    }


    public function destroy(Elibrary $elibrary, $id)
    {
        if ($elibrary->file_buku) {
            Storage::delete($elibrary->file_buku);
        }

        Elibrary::destroy($id);

        return redirect('/dashboard/e-library')->with('pesan', 'Buku berhasil di hapus');
    }
}
