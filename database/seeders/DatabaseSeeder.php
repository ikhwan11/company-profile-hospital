<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Banner;
use App\Models\Dokter;
use App\Models\Layanan;
use App\Models\Lowongan;
use App\Models\Poliklinik;
use App\Models\PostCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // Dev User
        User::create([
            'nama' => 'Kusuka Dia',
            'username' => 'Kusuka',
            'password' => bcrypt('123456')
        ]);

        // kategori
        PostCategory::create([
            'kategori' => 'Tips kesehatan',
            'slug' => 'tips-kesehatan'
        ]);

        PostCategory::create([
            'kategori' => 'Ibu dan Anak',
            'slug' => 'ibu-dan-anak'
        ]);

        // banner

        Banner::create([
            'banner_title' => 'banner satu',
            'image' => 'banner-images/fGUY92kSDvLDuYdTkR2FVfheTP5Od2hppanlQ5vf.jpg'
        ]);
        Banner::create([
            'banner_title' => 'banner dua',
            'image' => 'banner-images/2qq4h3g2VLoKI5r1VKQCc3D9y7HsQgoVvyluvQ7H.jpg'
        ]);
        Banner::create([
            'banner_title' => 'banner tiga',
            'image' => 'banner-images/TsoN2pYjNl6S4C51fZQfxa3T2QFbAIoSXVvQmoa5.jpg'
        ]);

        // poliklinik

        Poliklinik::create([
            'poliklinik' => 'Bedah Saraf',
            'slug' => 'bedah-saraf'
        ]);

        Poliklinik::create([
            'poliklinik' => 'THT',
            'slug' => 'tht'
        ]);

        Poliklinik::create([
            'poliklinik' => 'Penyakit Dalam',
            'slug' => 'penyakit-dalam'
        ]);

        Poliklinik::create([
            'poliklinik' => 'Anestesi',
            'slug' => 'anestesi'
        ]);

        // dokter
        Dokter::create([
            'nama' => 'Vanessa Agatha',
            'slug' => 'vanessa-agatha',
            'jenis_kelamin' => 'P',
            'tanggal_lahir' => '2022-12-16',
            'alamat_domisili' => 'Batu Aji, Blok C No 23',
            'no_hp' => '086766554454',
            'email' => 'Vanessa@gmail.com',
            'poliklinik_id' => '3',
            'specialis' => '',

            'riwayat' => '<div><strong>Pendidikan</strong></div><ul><li>- Dokter Umum, Fakultas Kedokteran Universitas Tarumanagara, 2003</li><li>- Dokter Spesialis Penyakit Dalam, Fakultas Kedokteran Universitas Sam Ratulangi , 2011</li></ul><div><br><strong>BAHASA</strong> : Indonesia, Inggris, Mandarin<br><br><strong>KOMPETENSI KHUSUS</strong> :<br>Hemodialisa<br><br><strong>WORKSHOP &amp; PELATIHAN</strong> :</div><ul><li>- Manfaat Pemeriksaan Fecal Calprotectin, Prodia &amp; IDI, 2017</li><li>- Improve the Ability &amp; Profesional Competence For The Best Medical Practice, IDI, 2017</li><li>- Pelatihan Penanggung Jawab Hemodialisa</li><li>- Pelatihan Geriatri</li><li>- Pelatihan Diabetes</li></ul><div><strong>Pengalaman Kerja</strong></div><ul><li>- Dokter Spesialis Penyakit Dalam di RS Gandaria Jakarta</li><li>- Dokter Spesialis Penyakit Dalam di RS Harapan Bunda Batam</li><li>- Dokter Spesialis Penyakit Dalam dengan Kompetensi Tambahan Penanganan Hemodialisis di RS Awal Bros Batam, 2017 - sekarang</li></ul>',

            'image' => 'dokter-images/3414b8FAzZrzGUCeaYUNBqZMqlSjEwsC1C44hwkC.jpg',
        ]);

        Dokter::create([
            'nama' => 'Roberto Carlos',
            'slug' => 'roberto-carlos',
            'jenis_kelamin' => 'L',
            'tanggal_lahir' => '2023-01-07',
            'alamat_domisili' => 'Batu Aji, Blok C No 23',
            'no_hp' => '086766554454',
            'email' => 'roberto@mial.com',
            'poliklinik_id' => '1',
            'specialis' => '',

            'riwayat' => '<div><strong>Pendidikan</strong></div><ul><li>- Dokter Umum, Fakultas Kedokteran Universitas Indonesia, 1987</li><li>- Dokter Spesialis Jantung dan Pembuluh Darah, Fakultas Kedokteran Universitas Indonesia, 1998</li></ul><div><br><strong>BAHASA</strong> : Indonesia, Inggris<br><br><strong>KOMPETENSI KHUSUS</strong> :<br>Interventionist Cardiologist, FK USU, 2012<br><br><strong>FELLOWSHIP</strong> :</div><ul><li>- International Intervention Cardiovascular Fellow at De Cardiology Hospital Behn Vien Tim Tam Duc, Vietnam</li><li>- Intervention Cardiovascular Fellow, Cardiology Unit Faculty of Medicine North Sumatera, Adam Malik Hospital Medan, 1 November 2010-31 April 2011</li><li>WORKSHOP &amp; PELATIHAN :</li><li>- ACLS Provider Training (AHA Certificate), 2011</li><li>- Interventional Cardiologist Tim Tam Duc Heart Hospital, Ho Chi Min</li><li>- Implantasi Single Chambers Pacemaker</li><li>- Basic level of Intervention Cardiology Training, The Indonesian Society Of Intervention Cardiology in Hospital Dr. Soetomo, 2009</li><li>- ACLS Provider Training (AHA Sertificate), Hongkong, 2005</li></ul><div><strong>Pengalaman Kerja</strong></div><ul><li>- Wakil Direktur Pelayanan Medis RSBP, 2003</li><li>- Sekretaris IDI Cabang Batam, 2003-2004</li><li>- Ketua PERKI Cabang Kepulauan Riau, 2005-sekarang</li><li>- Wakil Ketua IDI Wilayah Kepulauan Riau, 2007-sekarang</li><li>- Ketua BP2KB IDI Wilayah Kepulauan Riau, 2008</li><li>- Anggota Komisi Kegawatan Kardiovaskular PERKI, 2008–sekarang</li><li>- Instruktur Nasional ACLS</li><li>- Ketua Dewan Pertimbangan Medis PT Askes Propinsi Kepulauan Riau</li><li>- Anggota BP2KB PP PERKI Periode 2010-2012</li><li>- Ketua Perhimpunan Dokter Spesialis Kardiovaskuler Indonesia Cabang Batam, 2012-2016</li><li>- Ketua Dewan Pertimbangan Medis PT Askes, 2012-2014</li><li>- Ketua Dewan Pertimbangan Medis BPJS, 2016</li><li>- Ketua Komite Medik RSBP, 2015-2017</li><li>- Ketua Departemen Keorganisasian PP PERKI, 2019-sekarang</li><li>- Direktur RSBP 2020-sekarang</li><li>- Dokter Spesialis Jantung &amp; Pembuluh Darah RS Awal Bros Batam, 2009 - sekarang</li></ul><div><strong>Penghargaan</strong></div><ul><li>- Mahasiswa Teladan FKUI II Th 1985</li><li>- Dokter Teladan Kabupaten Indragiri Hilir (Riau), 1990</li><li>- Dokter RSOB Terbaik, 2005</li><li>- Penghargaan Piagam Satlancana Karya Satya 10 Tahun, 4 Oktober 2004</li><li>- Satya Lancana Karya Satya 20 Tahun, 6 Agustus 2012</li><li>- Satya Lancana Karya Satya 30 Tahun, 25 Juni 2019</li></ul><div><strong>Publikasi</strong></div><ul><li>- Collateral Damage During PCI, How To Save It, Euro PCR, 2021</li><li>- SUCCESSFUL CORONARY STENT RETRIEVAL FROM THE INTERNAL ILIAC ARTERY: “MY FISHING EXPERIENCE (Sing Live, Singapore, Acute Cardiac Care Athena), 2020</li><li>- The Management of Intracranial Hemorhage After Mild Head Injury With Mechanical Heart Valve, 2015</li></ul>',

            'image' => 'dokter-images/NXYqr4T2aRXkYdRa6RXBiTAsaPM1ijWcAEXEmEQp.jpg',
        ]);

        Layanan::create([
            'jenis_layanan' => 'Poliklinik',
            'nama_layanan' => 'Poli Gigi dan Mulut',
            'slug' => 'poli-gigi-dan-mulut',
            'ket' => '<div>Kondisi poliklinik gigi dan mulut dilengkapi dengan</div><ul><li>meja konsultasi,</li><li>westafel,</li><li>tempat sampah medis dan non medis,</li><li>bahan habis pakai seperti (handscone, alkohol swab, dll) dan</li><li>alat-alat kesehatan pendukung untuk pelayanan gigi.</li></ul>',
        ]);
        Layanan::create([
            'jenis_layanan' => 'igd',
            'nama_layanan' => 'IGD',
            'slug' => 'igd',
            'ket' => '<div>Unit Gawat Darurat di Rumah Sakit Graha Hermine dilengkapi dengan:</div><ul><li> 5 (lima) tempat tidur, </li><li>dan 1 (satu) ruang Isolasi di IGD, </li><li>garis Triase, Troli emergency, </li><li>Infantwarmer, </li><li>Monitor, </li><li>Meja Konsultasi dokter dan </li><li>alat-alat emergency lainnya yang mendukung pelayanan untuk penanganan awal di Rumah Sakit Graha Hermine.</li></ul>',
        ]);

        Lowongan::create([
            'posisi' => 'Dokter Umun',
            'slug' => 'dokter-umun',
            'persyaratan' => '<div><strong>Tanggung jawab:</strong></div><div>Memberikan pelayanan promotif</div><ul><li>Memberikan edukasi melalui buletin, health talk,dll</li><li>Melakukan pendekatan kpd karyawan utk edukasi</li></ul><div>Memberikan pelayanan preventif</div><ul><li>Melakukan Helth Risk Assessment kpd karyawan</li><li>Melakukan inspeksi thd perangkat medis</li><li>Memberikan pelatihan medis kpd karyawan &amp; warga sekitar</li></ul><div>Memberikan pelayanan kuratif</div><ul><li>Melakukan pemeriksaan dan pengobatan kpd karyawan</li><li>Standby jika ada kasus emergency</li><li>Melakukan assessment dan tindakan awal jika ada kasus emergency</li></ul><div>Memberikan pelayanan rehabilitatif</div><ul><li>Melakukan follow up thd karyawan, terutama dgn kondisi dan riwayat tertentu</li></ul><div>Membuat laporan &amp; analisa kegiatan</div><ul><li>Membuat laporan MCU</li><li>Membuat analisa dan laporan kunjungan pasien</li><li>Membuat analisa dan laporan kasus yg ditangani klinik</li></ul><div><strong>Persyaratan:</strong></div><ol><li>Dokter umum, STR valid</li><li>Memiliki pengalaman kerja min. 1 thn</li><li>Memiliki pengetahuan mengenai Hiperkes, ACLS/ATLS</li></ol>',

            'excerpt' => 'Kami saat ini membutuhkan seorang tenaga medis yang cekatan, ulet, dan disiplin',
            'periode_akhir' => '2023-01-06'
        ]);

        Lowongan::create([
            'posisi' => 'IT Manager',
            'slug' => 'it-manager',
            'persyaratan' => '<div>Keuntungan</div><ul><li>Career</li><li>Bonus</li><li>Insurance</li></ul><div>Deskripsi Pekerjaan</div><div>Develop systems, applications &amp; infrastructure to support business &amp; Provide advice and recommendations related to IT implementation in business processes</div><div><strong>REQUIREMENTS:</strong></div><ul><li> Age 35 - 38</li><li> Bachelor Degree in Computer science or related field</li><li>Minimum 3 year of experience as IT Manager</li><li>Has working experience in IT Project Management, Application and Database design</li><li>Database programming MY SQL, MongoDB, Apache, Nginx, NextJS, Tailwind,CSS, Native, Laravel, NodeJS, Express JS, Rest API, Web service, JWT, OAUTH, GIT, Go Lang</li><li>Able to effectively manage multiple software development projects</li><li>Able to communicate effectively with other departments to manage the project</li><li>Must have creative, conceptual thinking &amp; good teamwork</li><li> Able to join a soon as possible</li><li><strong>Office Hour : Monday - Saturday</strong></li><li><strong>Placement : Arjuna - Kebon Jeruk - Jakarta Barat (Wisma iwi)</strong></li></ul><div><strong>RESPONSIBILITIES:</strong></div><ul><li>Responsible for the development and implementation of solution roadmaps and to ensure successful introductions across the organization and with customers e.g.Mobile Apps, Web Design development , IT programmer (Back end and front end)</li><li>Lead all members to ensure IT hardware, software and IT services run properly to support daily business operation</li><li>Trouble shooting for Network, Wi-Fi, Windows, Email, Printer, PC, TV Conference, ERP and special purpose IT systems, operation for infrastructure (LAN design, security design, server setting, etc.)</li><li>In charge for implementing and analyzing complex systems for the organization, which includes planning, development, testing, and deployment processes for various departments, while periodically reports the progress to top management</li><li>Responsible for analyzing, designing, developing, and documenting software development project</li></ul>',

            'excerpt' => 'Kami saat ini membutuhkan IT manager yang bepengalaman, disiplin SOP, dan ulet dalam menyelesaikan pekerjaan',
            'periode_akhir' => '2023-01-04'
        ]);
    }
}
