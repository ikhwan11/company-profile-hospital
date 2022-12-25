@extends('layout.main')

@section('content')
<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row g-0">
                    <div class="col-md-3">
                        <img src="{{asset('storage/'.$data->image)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <h3 class="card-title">{{ $data->nama }}</h3><span>
                                <p class="card-text text-muted">Poliklinik : {{ $data->poliklinik->poliklinik }}</p>
                            </span>
                            <br>
                            <h3>Jadwal Dokter</h3>
                            <table class="table table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Senin</th>
                                        <th scope="col">Selasa</th>
                                        <th scope="col">Rabu</th>
                                        <th scope="col">Kamis</th>
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
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <br>
        <div class="row">
            <div class="col">
                <h4 class="card-title">Riwayat Dokter</h4>
                <p class="card-text">{!! $data->riwayat !!}</p>
            </div>
        </div>
    </div>
</section>
@endsection