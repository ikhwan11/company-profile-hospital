@extends('layout.main')

@section('content')

@php
$bgImage1 = asset('Template/images/slider-layanan/bg1.jpg');
$bgImage2 = asset('Template/images/slider-layanan/bg2.jpg');
$bgImage3 = asset('Template/images/slider-layanan/bg3.jpg');
@endphp

<div class="banner-carousel banner-carousel-1 mb-0 ">
    <div class="banner-carousel-item" style="background-image:url({{$bgImage1}});max-height: 350px; overflow:hidden;">
        <div class="slider-content">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12 text-center">
                        <h2 class="slide-title" data-animation-in="slideInLeft">17 Tahun Mengabdi dan</h2>
                        <h3 class="slide-sub-title" data-animation-in="slideInRight">melayani Masyarakat</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-carousel-item" style="background-image:url({{$bgImage2}});max-height: 350px; overflow:hidden;">
        <div class="slider-content">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12 text-center">
                        <h2 class="slide-title" data-animation-in="slideInLeft">Kesehatan dan kebahagiaan anda adalah</h2>
                        <h3 class="slide-sub-title" data-animation-in="slideInRight">Prioritas kami</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-carousel-item" style="background-image:url({{$bgImage3}});max-height: 350px; overflow:hidden;">
        <div class="slider-content">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-12 text-center">
                        <h2 class="slide-title" data-animation-in="slideInLeft">Melayani dengan penuh</h2>
                        <h3 class="slide-sub-title" data-animation-in="slideInRight">Cinta dan kasih</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row text-center">
        <div class="col-12">
            <h2 class="section-title">RS Graha Hermine</h2>
            <h3 class="section-sub-title">Layanan Kami</h3>
        </div>
    </div>

    <div class="row">
        @foreach($layanans as $layanan)
        <div class="col-md-4">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="card-body">
                    <h3 class="card-title"><a href="">{{ $layanan->nama_layanan }}</a></h3>
                    <p>{{$layanan->jenis_layanan}}</p>
                    <a href="/services/detail/{{$layanan->slug}}" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection