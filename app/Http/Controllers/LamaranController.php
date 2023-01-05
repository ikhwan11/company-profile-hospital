<?php

namespace App\Http\Controllers;

use App\Models\Lamaran;
use App\Models\Lowongan;
use Illuminate\Support\Facades\Storage;

class LamaranController extends Controller
{
    public function index(Lowongan $lowongan)
    {
        return view('adminView/lowonganPelamar', [
            'tittle' => 'Lowongan',
            'pelamar' => Lamaran::where('lowongan_id', $lowongan->id)->latest()->get(),
            'data' => $lowongan
        ]);
    }


    public function destroy(Lamaran $lamaran)
    {
        if ($lamaran->cv) {
            Storage::delete($lamaran->cv);
        }

        Lamaran::destroy($lamaran->id);

        return redirect('/dashboard/lowongan')->with('pesan', 'Data pelamar berhasil di hapus');
    }
}
