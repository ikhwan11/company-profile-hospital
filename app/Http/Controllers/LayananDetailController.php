<?php

namespace App\Http\Controllers;

use App\Models\LayananImage;
use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananDetailController extends Controller
{
    public function index(Layanan $layanan)
    {
        return view('adminView/layananDetail', [
            'tittle' => 'Layanan',
            'images' => LayananImage::where('layanan_id', $layanan->id)->get(),
            'layanan' => $layanan
        ]);
    }
}
