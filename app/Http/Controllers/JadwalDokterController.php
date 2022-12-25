<?php

namespace App\Http\Controllers;

use App\Models\JadwalDokter;
use App\Models\Dokter;
use Illuminate\Http\Request;

class JadwalDokterController extends Controller
{

    public function index()
    {
        return View('adminView/jadwalDokterData', [
            'tittle' => 'Dokter',
            'dokters' => Dokter::all(),
            'jadwal' => JadwalDokter::filter(request(['search']))->paginate(7)->withQueryString()
        ]);
    }

    public function create()
    {
        return View('adminView/jadwalDokterCreate', [
            'tittle' => 'Dokter',
            'dokters' => Dokter::all()
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'dokter_id' => 'required',
            'hari' => 'required',
            'dari' => 'required',
            'sampai' => 'required',
        ]);

        JadwalDokter::create($validatedData);

        return redirect('/dashboard/dokter')->with('pesan', 'jadwal dokter berhasil dibuat');
    }

    public function show(JadwalDokter $jadwalDokter)
    {
    }

    public function edit($id)
    {
        $jadwalDokter = JadwalDokter::find($id);
        return View('adminView/jadwalDokterEdit', [
            'tittle' => 'Dokter',
            'data' => $jadwalDokter
        ]);
    }

    public function update(Request $request, $id)
    {
        $jadwalDokter = JadwalDokter::find($id);
        $validatedData = $request->validate([
            'dokter_id' => 'required',
            'hari' => 'required',
            'dari' => 'required',
            'sampai' => 'required',
        ]);

        JadwalDokter::where('id', $jadwalDokter->id)
            ->update($validatedData);

        return redirect('/dashboard/dokter')->with('pesan', 'jadwal dokter berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JadwalDokter  $jadwalDokter
     * @return \Illuminate\Http\Response
     */
    public function destroy(JadwalDokter $jadwalDokter)
    {
        //
    }
}
