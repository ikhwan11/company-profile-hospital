<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\User;
use App\Models\Dokter;
use App\Models\Folder;
use App\Models\Galeri;
use App\Models\Elibrary;
use App\Models\JadwalDokter;
use App\Models\LayananImage;
use App\Models\PostCategory;
use Illuminate\Database\Seeder;
use App\Models\Fasilitas_Layanan;
use App\Models\Layanan_poliklinik;
use App\Models\Partnership;

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

        // gallery
        Galeri::create([
            'title_galeri' => 'pemeriksaan anak',
            'slug' => 'pemeriksaan-anak',
            'keterangan' => '<div>pemeriksaan anak</div>',
            'image' => 'galeri-images/mWHkRJtnIBUIpkK1zSTsumw3HkVj5ofAe0NosMJu.jpg',
        ]);
        Galeri::create([
            'title_galeri' => 'Foto Bersama Pelatihan BTCLS',
            'slug' => 'foto-bersama-pelatihan-btcls',
            'keterangan' => '<div>Foto Bersama Pelatihan BTCLS</div>',
            'image' => 'galeri-images/L4lLif3LazDr4RHO4eQyfbvIx2xsgud7Zism9sQf.jpg',
        ]);
        Galeri::create([
            'title_galeri' => 'Test Antigen Gratis',
            'slug' => 'test-antigen-gratis',
            'keterangan' => '<div>Test Antigen Gratis</div>',
            'image' => 'galeri-images/IsZw33FzKoB9h67oZcE2VsxvLsHJgSTBpCUGR3Jt.jpg',
        ]);
        Galeri::create([
            'title_galeri' => 'Komp pengungisan bencana alam',
            'slug' => 'komp-pengungisan-bencana-alam',
            'keterangan' => '<div>Komp pengungisan bencana alam</div>',
            'image' => 'galeri-images/nkqqeUfuPrcBu2OH1lbpVvIUJZK2aMeDDxyIh4Ut.jpg',
        ]);
        Galeri::create([
            'title_galeri' => 'Temu Direksi',
            'slug' => 'temu-direksi',
            'keterangan' => '<div>Temu Direksi</div>',
            'image' => 'galeri-images/wwj9xK7QDTT1rsJFJqVgooMCRuPHKtwepevmiMwh.jpg',
        ]);
        Galeri::create([
            'title_galeri' => 'MoU dengan PT. Maju MUndur',
            'slug' => 'mou-dengan-pt.-maju-mundur',
            'keterangan' => '<div>MoU dengan PT. Maju MUndur</div>',
            'image' => 'galeri-images/0NKDYeRHql46Y968ihyqHTxpYAZeMTXm7U1J4uqg.jpg',
        ]);

        // kategori post
        PostCategory::create([
            'kategori' => 'Info kesehatan',
            'slug' => 'info-kesehatan'
        ]);
        PostCategory::create([
            'kategori' => 'Tips kesehatan',
            'slug' => 'tips-kesehatan'
        ]);
        PostCategory::create([
            'kategori' => 'Hot News',
            'slug' => 'hot-news'
        ]);

        // artikel
        Blog::create([
            'title' => 'Mengenal Fungsi Rongga Mulut dan Cara Menjaga Kesehatannya',
            'user_id' => '1',
            'category_id' => '2',
            'slug' => 'mengenal-fungsi-rongga-mulut-dan-cara-menjaga-kesehatannya',
            'image' => 'post-images/oMEFEgZPRYZ2MNF5N2ZZxC7mbGqapXwgyIjx5bXE.jpg ',
            'excerpt' => 'Fungsi rongga mulut dalam sistem pencernaan sangatlah penting. Bagian mulut ini memungkinkan seseorang untuk mengunyah, menelan, dan mencerna makanan, bahkan berbicara serta bernapas. Oleh karena itu,...',
            'body' => '<div><strong>Fungsi rongga mulut dalam sistem pencernaan sangatlah penting. Bagian mulut ini memungkinkan seseorang untuk mengunyah, menelan, dan mencerna makanan, bahkan berbicara serta bernapas. Oleh karena itu, penting untuk selalu menjaga kesehatan rongga mulut.<br><br></strong>Rongga mulut merupakan organ pertama yang memproses makanan dalam sistem pencernaan. Organ yang membentuk ruang ini dimulai dari bibir hingga tenggorokan. Ciri-ciri rongga mulut yang sehat bisa dikenali dari jaringannya yang lembap, kencang, berwarna merah muda, dan tidak terasa sakit.<br><br><br>Selain itu, mulut yang sehat juga ditandai dengan bau mulut yang tidak menyengat. Normalnya, rongga mulut juga tidak memiliki benjolan, lipatan, maupun bercak. Guna mendukung fungsi rongga mulut, kesehatan mulut dan gigi perlu diperhatikan dengan baik.<br><br></div><div><strong><br>Mengenal Struktur Rongga Mulut</strong></div><div><br>Sebelum mengetahui fungsi rongga mulut, mari kenali terlebih dahulu struktur apa saja yang membentuk mulut beserta fungsinya. Beberapa struktur yang termasuk dalam rongga mulut meliputi:<br><br></div><ul><li>Gigi, untuk memotong dan menghaluskan makanan</li><li>Gusi, untuk menopang gigi pada tempatnya</li><li>Lidah, untuk membantu gigi menggerakkan makanan saat proses mengunyah dan berbicara</li><li>Indra perasa, untuk mengenali rasa pada makanan dan minuman</li><li>Selaput lendir, untuk menjaga kelembapan mulut</li><li>Kelenjar ludah, untuk menghasilkan ludah</li><li>Reseptor sensorik, untuk merasakan tekstur makanan atau minuman</li><li>Langit mulut dan uvula, untuk mencegah makanan dan minuman naik ke rongga hidung</li></ul><div><strong><br>Berbagai Fungsi Rongga Mulut</strong></div><div><br>Berikut ini adalah berbagai fungsi rongga mulut yang penting untuk diketahui:<br><br></div><div><strong><br>1. Mengunyah dan menelan makanan</strong></div><div><br>Seperti yang telah dijelaskan, mulut berfungsi sebagai organ yang pertama kali memproses makanan. Di dalam rongga mulut, makanan akan dikunyah oleh gigi agar dapat ditelan dan dicerna tubuh.<br><br></div><div><br>Proses ini juga melibatkan lidah untuk merasakan dan mendorong makanan, serta uvula untuk memindahkan makanan dari mulut ke kerongkongan.<br><br></div><div><strong><br>2. Bernapas</strong></div><div><br>Selain hidung, rongga mulut juga berperan dalam proses pernapasan. Artinya, saat tidak bisa bernapas melalui hidung, Anda bisa bernapas melalui mulut. Kondisi ini biasanya terjadi ketika hidung tersumbat atau menderita penyakit tertentu, seperti pembesaran adenoid.<br><br></div><div><br>Selain itu, bernapas melalui mulut saat berolahraga juga bisa membuat tubuh mendapatkan oksigen lebih cepat ke otot. Namun, bila terlalu sering dilakukan bisa berdampak buruk bagi kesehatan, seperti bau mulut, gigi berlubang, radang gusi, dan faringitis.<br><br></div><div><strong><br>3. Berbicara</strong></div><div><br>Fungsi rongga mulut juga penting dalam proses berbicara. Suara terbentuk ketika udara masuk melewati pita suara dan menimbulkan getaran serta gelombang suara di sepanjang tenggorokan, hidung, dan mulut. Selanjutnya, gerakan bibir dan lidah dapat membentuk kata-kata yang keluar dari mulut agar terdengar dengan jelas.<br><br></div><div><strong><br>4. Mengecap</strong></div><div><br>Mulut juga berfungsi untuk mengecap. Fungsi rongga mulut ini didukung oleh lidah yang dapat membedakan berbagai macam rasa, seperti manis, asin, asam, dan pahit. Dalam mengecap makanan, lidah dibantu oleh kelenjar saliva atau air liur. Tanpa air liur, Anda tidak bisa merasakan makanan.<br><br></div><div><strong><br>5. Membentuk ekspresi wajah</strong></div><div><br>Rongga mulut berperan dalam membentuk ekspresi wajah yang berbeda-beda, misalnya saat tersenyum, marah, atau menangis. Berbagai ekspresi wajah tersebut dapat dihasilkan dengan melibatkan otot mulut dan sekitarnya.<br><br></div><div><strong><br>Cara Menjaga Fungsi Rongga Mulut</strong></div><div><br>Berikut ini adalah beberapa cara untuk menjaga fungsi rongga mulut yang bisa diterapkan sehari-hari:<br><br></div><ul><li>Sikat gigi dan lidah secara rutin minimal 2 kali sehari.</li><li>Hentikan kebiasaan merokok dan mengunyah tembakau.</li><li>Lakukan <em>flossing</em> gigi minimal sekali sehari.</li><li>Gunakan pasta gigi yang mengandung fluoride.</li><li>Perbanyak minum air putih.</li><li>Batasi konsumsi minuman manis, seperti soda.</li><li>Konsumsi makanan sehat dan bergizi.</li><li>Hindari terlalu banyak konsumsi gula.</li><li>Lakukan pemeriksaan gigi secara rutin ke dokter setidaknya 2 kali setahun.</li></ul><div><br>Jika fungsi rongga mulut Anda terganggu, misalnya ada luka atau benjolan yang tak kunjung hilang, sering mengalami pendarahan, ada celah antara gigi dan gusi, mulut berbau busuk, atau mulut sering terasa kering, jangan ragu periksakan diri ke dokter agar bisa mendapatkan pemeriksaan dan penanganan yang tepat.<br><br></div>',
        ]);
        Blog::create([
            'title' => 'Hati-hati ada 7 bahaya konsumsi gula berlebih',
            'user_id' => '1',
            'category_id' => '1',
            'slug' => 'hati-hati-ada-7-bahaya-konsumsi-gula-berlebih',
            'image' => 'post-images/DqSaTKd4PtEIlxbptfrKruTkpUktKDAZty3HgNq1.jpg',
            'excerpt' => 'Siapa yang bisa menolak nikmat cake cokelat atau es krim stroberi vanila? Namun waspadai bahaya konsumsi gula berlebih.Tapi berapa banyak-kah berlebih? Mengacu anjuran Kementerian Kesehatan. Konsumsi...',
            'body' => '<div>Siapa yang bisa menolak nikmat cake cokelat atau es krim stroberi vanila? Namun waspadai bahaya konsumsi gula berlebih.<br>Tapi berapa banyak-kah berlebih? Mengacu anjuran Kementerian Kesehatan. Konsumsi gula maksimal sebanyak 4 sendok makan atau 54 gram per orang per hari. Melebihi dari jumlah ini dan terus dilakukan rutin, ada sederet bahaya konsumsi gula berlebih.<br><br><strong>1. Obesitas</strong><br>Melansir dari Healthline, minuman dengan pemanis seperti soda, jus, dan teh manis mengandung fruktosa atau sejenis gula sederhana.<br><br>Konsumsi fruktosa malah meningkatkan rasa lapar dan keinginan untuk mengonsumsi glukosa atau jenis gula utama dari makanan bertepung. Kenapa bisa demikian?<br><br>Konsumsi fruktosa berlebihan akan mengakibatkan resistensi terhadap leptin. Leptin merupakan hormon yang mengatur rasa lapar dan memberitahu tubuh untuk berhenti makan. Bisa dibayangkan saat Anda terus merasa lapar dan menginginkan makanan dengan glukosa sehingga mengakibatkan berat badan meningkat.<br><br>Selain itu, minum minuman berpemanis tambahan berkaitan dengan peningkatan lemak visceral yakni lemak perut bagian dalam yang berhubungan dengan diabetes dan penyakit jantung.<br><br><strong>2. Jerawat</strong><br>Salah satu bahaya konsumsi gula berlebih adalah jerawat. Ini kerap dianggap persoalan sepele tetapi jerawat yang parah dan muncul di area wajah jelas menurunkan rasa percaya diri dan tidak nyaman.<br><br>Melansir dari Medical News Today, studi pada 2018 di China menunjukkan orang yang minum minuman berpemanis tujuh kali per minggu lebih berisiko mengalami jerawat moderat hingga parah. Studi lain pada 2019 menyebut konsumsi gula bisa menurunkan faktor pembentuk mirip insulin, androgen dan sebum yang semuanya berkontribusi pada jerawat.<br><br><strong>3. Meningkatkan risiko penyakit jantung</strong><br>Bahaya konsumsi gula berlebih juga bisa mengarah pada peningkatan risiko penyakit jantung. Diet tinggi gula akan mengakibatkan obesitas, peradangan, kadar trigliserida tinggi, tekanan darah lalu semua akan bermuara pada penyakit jantung.<br><br>Konsumsi gula terutama dari minuman berpemanis berkaitan dengan aterosklerosis. Penyakit ini ditandai dengan tumpukan plak pada arteri sehingga mengakibatkan penyumbatan aliran darah.<br><br><strong>4. Diabetes tipe 2</strong><br>Ingat gula, ingat diabetes tipe 2. Ini tidak salah sebab salah satu bahaya konsumsi gula berlebih memang risiko diabetes tipe 2. Artikel yang diterbitkan di jurnal PLOS One pada 2013 menyebut diet tinggi gula terus-menerus bisa mengakibatkan diabetes tipe 2.<br><br>Selama 30 tahun terakhir, prevalensi diabetes meningkat jauh dua kali lipat. Konsumsi gula berlebih dalam jangka waktu panjang akan mendorong resistensi terhadap insulin atau hormon yang diproduksi oleh pankreas untuk mengatur kadar gula darah. Saat terjadi resistensi insulin, kadar gula naik sehingga timbul risiko diabetes. Diabetes tipe 2 menjadi salah satu bahaya konsumsi gula berlebih.<br><br><strong>5. Risiko kanker</strong><br>Tak hanya diabetes tipe 2 yang patut diwaspadai. Anda pun perlu waspada dengan risiko kanker sebagai bahaya konsumsi gula berlebih.<br><br>Saat tubuh diberi banyak asupan gula, timbul inflamasi, stres oksidatif dan obesitas. Faktor-faktor ini mempengaruhi pertumbuhan sel kanker. Sebuah tinjauan yang diterbitkan di Annual Review of Nutrition menemukan konsumsi minuman berpemanis meningkatkan risiko kanker 23-200 persen.<br><br><strong>6. Penuaan dini</strong><br>Penggunaan skincare perlu diimbangi dengan diet yang sehat. Kelebihan konsumsi gula akan mengarah pada pembentukan advanced glycation end products (AGEs) yang berperan dalam diabetes juga pembentukan kolagen di kulit. Jumlah AGE tinggi bisa menimbulkan penuaan lebih cepat.<br><br><strong>7. Risiko depresi</strong><br>Bahaya konsumsi gula berlebih juga berakibat pada risiko depresi. Peluang depresi makin tinggi akibat bahaya konsumsi gula berlebih.<br><br>Studi yang memonitor 8ribu orang selama 22 tahun menunjukkan pria yang mengonsumsi 67 gram gula per hari, punya risiko depresi 23 persen lebih tinggi daripada pria yang konsumsi gula kurang dari 40 gram per hari.<br><br>Studi lain pada lebih dari 69ribu wanita menunjukkan mereka yang konsumsi gula tinggi punya risiko depresi lebih tinggi daripada mereka yang asupannya rendah.<br><br><br></div>',
        ]);
        Blog::create([
            'title' => 'Warga Perumahan di Batam Terpaksa Beli Air Galon untuk Mandi dan Mencuci',
            'user_id' => '1',
            'category_id' => '3',
            'slug' => 'warga-perumahan-di-batam-terpaksa-beli-air-galon-untuk-mandi-dan-mencuci',
            'image' => 'post-images/ibLCRLsoqnAoaHvaX5tRkgZy7AUzGws4oNxYG3yb.jpg',
            'excerpt' => 'Warga di Perumahan Botania Garden, Batam Center, Kota Batam, Kepulauan Riau, riuh. Pasalnya, sudah dua hari air di kawasan Botania dan sekitarnya mati total.Air mati sejak Sabtu (21/1/2023) dini hari....',
            'body' => '<div>Warga di Perumahan Botania Garden, Batam Center, Kota Batam, Kepulauan Riau, riuh. Pasalnya, sudah dua hari air di kawasan Botania dan sekitarnya mati total.<br><br>Air mati sejak <strong>Sabtu (21/1/2023)</strong> dini hari. Tepatnya sekitarnya pukul 05.00 WIB. Kabarnya kejadian serupa terjadi se-Kecamatan Nongsa.<br><br>"<em>Iya, udah dari kemarin air mati</em>" ujar salah seorang warga sekitar, Ari, <strong>Minggu (22/1/2023)</strong>.<br><br>Warga terpaksa antre membeli air galon untuk kebutuhan harian seperti mandi, mencuci dan lain sebagainya.<br><br>"<em>Kita aja di sini rata-rata sepuluh galon, itupun kadang bisa lebih,</em>" katanya.<br><br>Tak hanya kebutuhan rumahan, masjid pun juga terdampak. Dimana air untuk berwudhu pun kering.<br><br>"<em>Tangki masjid itu udah kosong. Jadi untuk salat pun masyarakat susah,</em>" kata Ari.<br><br>Ia harap PT Moya segera berbenah. Setidaknya ada langkah antisipatif dari penyedia air bersih agar masyarakat tak semakin kesusahan. </div>',
        ]);

        Fasilitas_Layanan::create([
            'nama_fasilitas' => 'CT-SCAN 128 Slices',
            'kategori' => 'Fasilitas Layanan Unggulan',
            'slug' => 'ct-scan-128-slices',
            'image' => 'fasilitas-images/AljLuim7zdpFpBgXkcjTpHVGh3GSPO04QhClMZMw.jpg',
            'ket' => '<div>Berteknologi internasional, CT scan atau computerized tomography scan adalah prosedur pemeriksaan medis yang menggunakan kombinasi teknologi sinar-X dan sistem komputer khusus untuk menghasilkan gambar organ, tulang, dan jaringan lunak di dalam tubuh</div>',
        ]);
        Fasilitas_Layanan::create([
            'nama_fasilitas' => 'ICU (intensive Care Unit)',
            'kategori' => 'Fasilitas Layanan Kesehatan',
            'slug' => 'icu-(intensive-care-unit)',
            'image' => 'fasilitas-images/7cgTPBKozV3HAxWeYpuZZdyYJp3xg25NTdpezr6g.jpg',
            'ket' => '<div>Ruang ICU (intensive care unit) adalah ruangan khusus yang disediakan rumah sakit untuk merawat pasien dengan kondisi yang membutuhkan pengawasan ketat. Ruangan ini dilengkapi dengan peralatan medis khusus yang digunakan untuk menunjang proses pengobatan dan pemulihan pasien.</div>',
        ]);
        Fasilitas_Layanan::create([
            'nama_fasilitas' => 'IGD & PONEK 24 jam',
            'kategori' => 'Fasilitas Layanan Kesehatan',
            'slug' => 'igd-&-ponek-24-jam',
            'image' => 'fasilitas-images/sXbyjfCEQtD9nGq0RzPGvW9s6VwuRbnlNRR033L1.jpg',
            'ket' => '<div>Instalasi Gawat Darurat (IGD) adalah unit pelayan di rumah sakit yang memberikan pelayanan pertama pada pasien dengan ancaman kematian dan kecacatan secara terpadu dengan melibatkan berbagai multidisiplin.</div>',
        ]);
        Fasilitas_Layanan::create([
            'nama_fasilitas' => 'Laboratorium',
            'kategori' => 'Fasilitas Penunjang Medis',
            'slug' => 'laboratorium',
            'image' => 'fasilitas-images/8tSDggn0XHwBkzhCHmLzz82xPh0kg6tMmdRgIEWf.jpg',
            'ket' => '<div>menerapkan konsep laboratorium terpadu sehingga memiliki laboratorium patologi klinik, patologi anatomi, mikrobiologi, parasitologi, biomolekuler, dan bank darah. Semua unit tersebut berada dalam area bersama yang berdampingan satu sama lain.</div>',
        ]);
        Fasilitas_Layanan::create([
            'nama_fasilitas' => 'Radiologi',
            'kategori' => 'Fasilitas Penunjang Medis',
            'slug' => 'radiologi',
            'image' => 'fasilitas-images/dNyygNfc0qrfnVvnWaTogf4FNTSuONCH3uIT73Re.jpg',
            'ket' => '<div>Radiologi adalah bagian dari ilmu kedokteran yang mempelajari tentang teknologi pencitraan, baik gelombang elektromagnetik maupun gelombang mekanik guna memindai bagian dalam tubuh manusia untuk mendeteksi suatu penyakit.</div>',
        ]);

        // partner
        Partnership::create([
            'nama_partner' => 'Bank BNI',
            'kategori' => 'partner-logos/X3a4ILyQpnA3dwpkfqjs9zd6qIYZj2XHu1tGDTen.png',
        ]);
        Partnership::create([
            'nama_partner' => 'BPJS kesehatan',
            'kategori' => 'partner-logos/zTAEcqLxA3u7v4pOmSkYaiRwDjtPMcGYUr8PtaiW.png',
        ]);
        Partnership::create([
            'nama_partner' => 'Jasa Raharja',
            'kategori' => 'partner-logos/K2PXj1DITIa6RQ9CVZXaEFTIK9KDyQIcZdLmO2OU.png',
        ]);
        Partnership::create([
            'nama_partner' => 'Kimia Farma',
            'kategori' => 'partner-logos/KJxtTsIA2BnsFyR9b4Zo9fFpNrBidmF8VvN2casQ.png',
        ]);
        Partnership::create([
            'nama_partner' => 'RS Awal Bros Batam',
            'kategori' => 'partner-logos/fv8F7cCFOOnrphzl8rR7PASqPnUJRtKFzi9XW8oO.png',
        ]);
        Partnership::create([
            'nama_partner' => 'Manulife',
            'kategori' => 'partner-logos/RXnv2dorKa23Jp1A2xGl2C38NiY5vcsmwFBsWpnw.png',
        ]);
    }
}
