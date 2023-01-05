<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Banner;
use App\Models\Dokter;
use App\Models\Layanan;
use App\Models\LayananImage;
use App\Models\JadwalDokter;
use App\Models\Lamaran;
use App\Models\Lowongan;
use App\Models\Galeri;

class MainController extends Controller
{
    public function index()
    {
        return view('/beranda', [
            'tittle' => 'Beranda',
            'posts' => Blog::latest()->paginate(3),
            'banners' => Banner::all(),
            'galeris' => Galeri::paginate(6)
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

    public function layananIndex()
    {
        return view('layanan/layananData', [
            'tittle' => 'Layanan',
            'layanans' => Layanan::all()
        ]);
    }

    public function layananDetail(Layanan $layanan)
    {
        return view('layanan/layananDetail', [
            'tittle' => 'Layanan',
            'images' => LayananImage::where('layanan_id', $layanan->id)->get(),
            'layanan' => $layanan
        ]);
    }

    // bagian karir

    public function karirIndex()
    {
        return view('karir/karirGuest', [
            'tittle' => 'Karir',
            'lowongan' => Lowongan::latest()->filter(request(['search']))->paginate(10)->withQueryString()
        ]);
    }

    public function karirShow(Lowongan $lowongan)
    {
        return view('karir/karirGuestDetail', [
            'tittle' => 'Karir',
            'lowongan' => $lowongan
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
            'galeris' => Galeri::all()
        ]);
    }
}
