@extends('layout.main')

@section('content')

<div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
            <h3 class="section-sub-title mt-3">Dokter Proffesional</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div id="team-slide" class="team-slide">
                @foreach($datas as $dokter)
                <div class="item">
                    <div class="ts-team-wrapper">
                        <div class="team-img-wrapper">
                            <img loading="lazy" class="w-100" src="{{ asset('storage/'.$dokter->image) }}" alt="team-img">
                        </div>
                        <div class="ts-team-content">
                            <h3 class="ts-name text-white">{{ $dokter->nama }}</h3>
                            <p class="ts-designation">{{ $dokter->poliklinik->poliklinik }}</p>
                            <div class="team-social-icons">
                                <a class="btn btn-primary" href="/dokter/profil/{{$dokter->slug}}"><small class="text-small">Lihat Jadwal</small> <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


@endsection