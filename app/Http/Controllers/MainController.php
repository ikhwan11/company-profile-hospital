<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Banner;
use App\Models\Dokter;
use App\Models\JadwalDokter;

class MainController extends Controller
{
    public function index()
    {
        return view('/beranda', [
            'tittle' => 'Beranda',
            'posts' => Blog::latest()->paginate(3),
            'banners' => Banner::all()
        ]);
    }

    public function tentang()
    {
        return view('/tentang', [
            'tittle' => 'Tentang Kami'
        ]);
    }

    public function profilDokter()
    {
        return view('dokter/profilDokter', [
            'tittle' => "Profil Dokter",
            'datas' => Dokter::paginate(6)
        ]);
    }

    public function jadwalDokter()
    {
        return view('dokter/jadwal', [
            'tittle' => 'Jadwal Dokter',
            'dokters' => Dokter::all(),
            'dokterCari' => Dokter::filter(request(['search']))->paginate(10)->withQueryString(),
            'jadwal' => JadwalDokter::all()
        ]);
    }

    public function profilDokterDetail(Dokter $dokter)
    {
        return view('dokter/profilDokterSingle', [
            'tittle' => "profil Dokter",
            'senin' => JadwalDokter::where('dokter_id', $dokter->id)->where('hari', 'Senin')->first(),
            'selasa' => JadwalDokter::where('dokter_id', $dokter->id)->where('hari', 'Selasa')->first(),
            'rabu' => JadwalDokter::where('dokter_id', $dokter->id)->where('hari', 'Rabu')->first(),
            'kamis' => JadwalDokter::where('dokter_id', $dokter->id)->where('hari', 'Kamis')->first(),
            'jumat' => JadwalDokter::where('dokter_id', $dokter->id)->where('hari', 'Jumat')->first(),
            'sabtu' => JadwalDokter::where('dokter_id', $dokter->id)->where('hari', 'Sabtu')->first(),
            'minggu' => JadwalDokter::where('dokter_id', $dokter->id)->where('hari', 'Minggu')->first(),
            'data' => $dokter
        ]);
    }

    // bagian layanan

}
