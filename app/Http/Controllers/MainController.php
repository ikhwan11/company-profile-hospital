<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Banner;
use App\Models\Dokter;
use App\Models\JadwalDokter;
use App\Models\Lamaran;
use App\Models\Lowongan;
use App\Models\Galeri;
use App\Models\Layanan_poliklinik;

class MainController extends Controller
{
    public function index()
    {
        return view('/beranda', [
            'tittle' => 'Beranda',
            'posts' => Blog::latest()->paginate(3),
            'banners' => Banner::all(),
            'galeris' => Galeri::paginate(6),
            'lyn' => Layanan_poliklinik::paginate(5)
        ]);
    }

    public function tentang()
    {
        return view('/tentang', [
            'tittle' => 'Tentang Kami',
            'lyn' => Layanan_poliklinik::paginate(5)
        ]);
    }

    public function profilDokter()
    {
        return view('dokter/profilDokter', [
            'tittle' => "Profil Dokter",
            'datas' => Dokter::paginate(6),
            'lyn' => Layanan_poliklinik::paginate(5)
        ]);
    }

    public function jadwalDokter()
    {
        return view('dokter/jadwal', [
            'tittle' => 'Jadwal Dokter',
            'dokters' => Dokter::latest()->filter(request(['search', 'poliklinik']))->paginate(7),
            'poliklinik' => Layanan_poliklinik::all(),
            'lyn' => Layanan_poliklinik::paginate(5)
        ]);
    }

    public function profilDokterDetail(Dokter $dokter)
    {
        return view('dokter/profilDokterSingle', [
            'tittle' => "profil Dokter",
            'jadwal' => JadwalDokter::where('dokter_id', $dokter->id)->first(),
            'data' => $dokter,
            'lyn' => Layanan_poliklinik::paginate(5)
        ]);
    }

    // bagian layanan_poliklinik

    public function layananIndex()
    {
        return view('layanan/layananData', [
            'tittle' => 'Layanan',
            'lyn' => Layanan_poliklinik::paginate(5)
        ]);
    }

    // public function layananDetail(Layanan $layanan)
    // {
    //     return view('layanan/layananDetail', [
    //         'tittle' => 'Layanan',
    //         'images' => LayananImage::where('layanan_id', $layanan->id)->get(),
    //         'layanan' => $layanan,
    //         'lyn' => Layanan::paginate(5)
    //     ]);
    // }

    // bagian karir

    public function karirIndex()
    {
        return view('karir/karirGuest', [
            'tittle' => 'Karir',
            'lowongan' => Lowongan::latest()->filter(request(['search']))->paginate(10)->withQueryString(),
            'lyn' => Layanan_poliklinik::paginate(5)
        ]);
    }

    public function karirShow(Lowongan $lowongan)
    {
        return view('karir/karirGuestDetail', [
            'tittle' => 'Karir',
            'lowongan' => $lowongan,
            'lyn' => Layanan_poliklinik::paginate(5)
        ]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama_pelamar' => 'required|max:255',
            'lowongan_id' => 'required',
            'no_hp' => 'required|max:255',
            'email' => 'required|email',
            'alamat' => 'required',
            'tentang_pelamar' => 'required|max:500',
            'cv' => 'required|file|max:2048|mimes:pdf',
        ]);

        if ($request->file('cv')) {
            $validatedData['cv'] = $request->file('cv')->store('karir-cv');
        }

        Lamaran::create($validatedData);

        return redirect('/karir')->with('pesan', 'Lamaran Berhasil di Apply');
    }

    public function galeriIndex()
    {
        return view('galeri/galeriGuest', [
            'tittle' => 'Galeri',
            'galeris' => Galeri::all(),
            'lyn' => Layanan_poliklinik::paginate(5)
        ]);
    }
}
