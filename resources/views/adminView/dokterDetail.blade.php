@extends('layout.mainAdmin')

@section('content')

<div class="pagetitle">
    <h1>Tambah Post</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item">Kelola Dokter</li>
            <li class="breadcrumb-item"><a href="/dashboard/dokter">Dokter</a></li>
            <li class="breadcrumb-item active">Detail Dokter</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row align-items-top">
        <div class="col">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/'.$dokter->image) }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $dokter->nama }}</h5>
                            <p class="card-text">Poliklinik : <strong>{{ $dokter->poliklinik->poliklinik }}</strong></p>

                            @if($dokter->jenis_kelamin == 'L')
                            <p class="card-text">Jenis Kelamin : <strong>Laki-Laki</strong></p>
                            @else
                            <p class="card-text">Jenis Kelamin : <strong>Perempuan</strong></p>
                            @endif

                            <p class="card-text">Tanggal Lahir : <strong>{{ $dokter->tanggal_lahir }}</strong></p>
                            <p class="card-text">Alamat Domisili : <strong>{{ $dokter->alamat_domisili }}</strong></p>
                            <p class="card-text">Telepon : <strong>{{ $dokter->no_hp }}</strong></p>
                            <p class="card-text">E-mail : <strong>{{ $dokter->email }}</strong></p>
                            <p class="card-text">Sub-Spesialis : <strong>{{ $dokter->specialis }}</strong></p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Jadwal Dokter</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Senin</th>
                                <th scope="col">Selasa</th>
                                <th scope="col">Rabu</th>
                                <th scope="col">kamis</th>
                                <th scope="col">Jumat</th>
                                <th scope="col">Sabtu</th>
                                <th scope="col">Minggu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @if(is_null($senin))
                                <td>-</td>
                                @else
                                <td>{{date("H:i", strtotime("$senin->dari"))}} - {{date("H:i", strtotime("$senin->sampai"))}}</td>
                                @endif

                                @if(is_null($selasa))
                                <td>-</td>
                                @else
                                <td>{{date("H:i", strtotime("$selasa->dari"))}} - {{date("H:i", strtotime("$selasa->sampai"))}}</td>
                                @endif

                                @if(is_null($rabu))
                                <td>-</td>
                                @else
                                <td>
                                    {{date("H:i", strtotime("$rabu->dari"))}} - {{date("H:i", strtotime("$rabu->sampai"))}}
                                </td>
                                @endif

                                @if(is_null($kamis))
                                <td>-</td>
                                @else
                                <td>
                                    {{date("H:i", strtotime("$kamis->dari"))}} - {{date("H:i", strtotime("$kamis->sampai"))}}
                                </td>
                                @endif

                                @if(is_null($jumat))
                                <td>-</td>
                                @else
                                <td>
                                    {{date("H:i", strtotime("$jumat->dari"))}} - {{date("H:i", strtotime("$jumat->sampai"))}}
                                </td>
                                @endif

                                @if(is_null($sabtu))
                                <td>-</td>
                                @else
                                <td>
                                    {{date("H:i", strtotime("$sabtu->dari"))}} - {{date("H:i", strtotime("$sabtu->sampai"))}}
                                </td>
                                @endif

                                @if(is_null($minggu))
                                <td>-</td>
                                @else
                                <td>{{date("H:i", strtotime("$minggu->dari"))}} - {{date("H:i", strtotime("$minggu->sampai"))}}</td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                    <a href="/dashboard/jadwal" class="btn btn-secondary">Edit Jadwal</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Riwayat Dokter</h5>
                    {!! $dokter->riwayat !!}
                </div>
            </div>
        </div>
    </div>
</section>



@endsection