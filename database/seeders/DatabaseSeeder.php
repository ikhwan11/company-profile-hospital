<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Dokter;
use App\Models\Elibrary;
use App\Models\Fasilitas_Layanan;
use App\Models\Folder;
use App\Models\JadwalDokter;
use App\Models\Layanan_poliklinik;
use App\Models\LayananImage;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // Dev User
        User::create([
            'nama' => 'Mahkoto Nagano',
            'role' => '1',
            'email' => 'mahkotonagano@gmail.com',
            'username' => 'kusuka',
            'image' => 'user-images/I8oXPn9wRgbFzFYWn8pA91fYuZrmxXJla2KEesW3.jpg',
            'password' => bcrypt('123456')
        ]);

        Layanan_poliklinik::create([
            'poliklinik' => 'Spesialis Bedah Anak',
            'slug' => 'spesialis-bedah-anak',
            'ket' => '<div>ini poliklinik spesialis bedah anak</div>',
        ]);
        Layanan_poliklinik::create([
            'poliklinik' => 'Spesialis Urologi',
            'slug' => 'spesialis-urologi',
            'ket' => '<div>ini poliklinik spesialis urologi</div>',
        ]);

        LayananImage::create([
            'layanan_id' => '1',
            'image' => 'layanan-images/XUygwFFpCVdLvtG7Ung1vKAclouaSNxnbmg0qjji.jpg'
        ]);
        LayananImage::create([
            'layanan_id' => '1',
            'image' => 'layanan-images/1nXKK9lGCBAtJ4UKOafGPinHxwv9GDjB7ULGq0hL.jpg'
        ]);
        LayananImage::create([
            'layanan_id' => '2',
            'image' => 'layanan-images/fznR6BWS5G4RmYrBaTjhiVK8HP3kI6jthD0nD2zO.jpg'
        ]);



        // dokter
        Dokter::create([
            'nama' => 'dr. Vanessa Agatha, Sp.BA',
            'slug' => 'dr.-vanessa-agatha,-sp.ba',
            'jenis_kelamin' => 'Perempuan',
            'tanggal_lahir' => '1985-06-15',
            'alamat_domisili' => 'Batu Aji, Blok C No 23',
            'no_hp' => '086766554454',
            'email' => 'Vanessa@gmail.com',
            'poliklinik_id' => '1',
            'specialis' => '',

            'riwayat' => '<div><strong>Riwayat Pendidikan</strong><br><br></div><ul><li>Dokter Umum Fakultas Kedokteran Universitas Trisakti Jakarta, lulus 2000</li><li>Spesialis Bedah Anak Fakultas Kedokteran Universitas Gadjah Mada, lulus 2011</li></ul><div><strong>Riwayat Pekerjaan</strong><br><br></div><ul><li>Dokter Bedah Anak RSUP Dr. Sardjito Jogjakarta, 2010 – 2011</li><li>Dokter Bedah Anak RSAB Batam, 2011 – sekarang</li><li>Dokter Bedah Anak RS Graha Hermine, 2017 – sekarang</li><li>Dokter Bedah Anak RSBP Batam, 2019 – sekarang</li></ul>',

            'image' => 'dokter-images/5ufXTqAEhYF1Ov1cerrYVN4t8gwXXaTDTTVO2CKM.jpg',
        ]);
        Dokter::create([
            'nama' => 'dr. Dwight Manfredi, Sp.U',
            'slug' => 'dr.-dwight-manfredi,-sp.u',
            'jenis_kelamin' => 'Laki-Laki',
            'tanggal_lahir' => '1971-08-07',
            'alamat_domisili' => 'Nagoya, Blok A No 32',
            'no_hp' => '08117037765',
            'email' => 'dwightmanfredi776@gmail.com',
            'poliklinik_id' => '2',
            'specialis' => '',

            'riwayat' => '<div><strong>Riwayat Pendidikan</strong><br><br></div><ul><li>Urologi Fakultas Kedokteran Universitas Indonesia, 2009</li></ul><div><strong>Riwayat Pekerjaan</strong><br><br></div><ul><li>RSUD Padangsidempuan, 2000 – 2003</li><li>RSBP Batam, 2010 – sekarang</li></ul><div><strong>Sertifikat</strong><br><br></div><ul><li>Advanced cardiac life support</li><li>Perkumpulan kontrasepsi mantap Indonesia (PKMI)</li><li>Webinar education titled current pratices and challenges in the management of covid-19</li><li>CPD Ultrasonografi bagi dokter spesialis Urologi</li><li>Highlights and leading approach in uro oncology</li><li>Current updates in the management of kidney stones in clinical practice- a discussion in the covid-19</li></ul>',

            'image' => 'dokter-images/JYyt1AVwFQouGR0m2OltLnePB39EvnyH8YnHgCBz.jpg',
        ]);
        Dokter::create([
            'nama' => 'dr. Cantika Kalisa, Sp.BA',
            'slug' => 'dr.-cantika-kalisa,-sp.ba',
            'jenis_kelamin' => 'Perempuan',
            'tanggal_lahir' => '1990-02-08',
            'alamat_domisili' => 'Batam Center Blok F No 7',
            'no_hp' => '086766554454',
            'email' => 'cantikakali55@gmail.com',
            'poliklinik_id' => '1',
            'specialis' => '',

            'riwayat' => '<div><strong>Pendidikan</strong></div><ul><li>S1 - Fakultas Kedokteran UGM Lulus tahun 2010</li><li>S2 - Pendidikan Spesialis Bedah Anak Lulus tahun 2019</li></ul><div><strong>Publikasi</strong></div><ul><li>Comparison of different therapeutic approaches for children with common lymphatic malformation</li></ul>',

            'image' => 'dokter-images/MfGvcZBJJxDlabxedSOZTGRhed9tEovjwBeyevZW.jpg',
        ]);

        JadwalDokter::create([
            'dokter_id' => '1',
            'poliklinik_id' => '1',
            'hari' => 'Senin - Jumat',
            'dari' => '13:00:00',
            'sampai' => '14:30:00',
        ]);
        JadwalDokter::create([
            'dokter_id' => '2',
            'poliklinik_id' => '2',
            'hari' => 'Senin, Selasa, Rabu',
            'dari' => '10:00:00',
            'sampai' => '15:30:00',
        ]);
        JadwalDokter::create([
            'dokter_id' => '3',
            'poliklinik_id' => '1',
            'hari' => 'Senin-jumat',
            'dari' => '09:00:00',
            'sampai' => '12:30:00',
        ]);

        // folder
        Folder::create([
            'nama_folder' => 'Tips kesehatan'
        ]);
        Folder::create([
            'nama_folder' => 'Buku Pembelajaran'
        ]);

        // elibrary
        Elibrary::create([
            'title' => '500 Heart - Healthy Slow Cooker Recipes Comfort Food Favorites That Both Your Family and Doctor Will Love',
            'penulis' => 'Dick Logue',
            'tahun' => '2021',
            'folder_id' => '1',
            'file_buku' => 'elibrary-file/8yNj9SD2utZEUprg95wqp4j5wNNrw1vQbQ1yDctY.pdf',
        ]);
        Elibrary::create([
            'title' => 'Healthy Weight Loss Without Dieting',
            'penulis' => 'Takasimura',
            'tahun' => '2002',
            'folder_id' => '1',
            'file_buku' => 'elibrary-file/oPEYkZxLmYmW9oJETwJS7DGp4QQEQQyrJd89buj6.pdf',
        ]);
        Elibrary::create([
            'title' => 'Manual of Surgical Pathology_ Expert Consult - Online and Print (Expert Consult Title_ Online + Print), Third Edition',
            'penulis' => 'Nani Kure',
            'tahun' => '2023',
            'folder_id' => '2',
            'file_buku' => 'elibrary-file/g6pYcrz1VPmV8yIC5HOPWELUwjUPViAGWNuRt04V.pdf',
        ]);
    }
}
