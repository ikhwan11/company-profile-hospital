@extends('layout.main')

@section('content')

@php

$bg = asset('Template');

function get_CURL($url){
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($curl);

curl_close($curl);

return json_decode($result, true);
}

$result = get_CURL('https://youtube.googleapis.com/youtube/v3/channels?part=snippet&part=statistics&id=UCrVa5dDtzD7ARnE3TqN4Wig&key=AIzaSyCH95bdnFWY1U6cpCnx1TqJ7ehv5dA2QAI');


$ytProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$ytProfileTitle = $result['items'][0]['snippet']['title'];
$desc = $result['items'][0]['snippet']['localized']['description'];

$urlVideo = 'https://youtube.googleapis.com/youtube/v3/search?part=snippet&channelId=UCrVa5dDtzD7ARnE3TqN4Wig&maxResults=1&order=date&key=AIzaSyCH95bdnFWY1U6cpCnx1TqJ7ehv5dA2QAI';
$result = get_CURL($urlVideo);

$latestVideo = $result['items'][0]['id']['videoId'];

@endphp
<div class="banner-carousel banner-carousel-2">
    <div class="banner-carousel-item" style="background-image:url({{$bg}}/images/slider-main/bg-pendaftaran.jpg)">
        <div class="container">
            <div class="box-slider-content">
                <div class="box-slider-text">
                    <h3 class="box-slide-sub-title">PENDAFTARAN ONLINE</h3>
                    <p class="box-slide-description text-dark">Sekarang daftar gak perlu ribet, bisa daftar melalui WhatsApp untuk Pasien <br> <strong>BPJS, Umum, & Asuransi</strong></p>
                    <p>
                        <a href="https://api.whatsapp.com/send?phone=6282386828066" class="slider btn btn-primary">Klik untuk daftar</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    @foreach($banners as $banner)
    @php
    $bgImage = asset('Storage/'.$banner->image);
    @endphp

    <div class="banner-carousel-item" style="background-image:url({{$bgImage}})"></div>

    @endforeach
</div>


<section class="call-to-action no-padding">
    <div class="container">
        <div class="action-style-box">
            <div class="row">
                <div class="col-md-8 text-center text-md-left">
                    <div class="call-to-action-text">
                        <h3 class="action-title">"Kesehatan Anda adalah propritas kami"</h3>
                    </div>
                </div><!-- Col end -->
                <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                    <div class="call-to-action-btn">
                        <a class="btn btn-primary" href="/tentang">Tentang Kami</a>
                    </div>
                </div><!-- col end -->
            </div><!-- row end -->
        </div><!-- Action style box -->
    </div><!-- Container end -->
</section><!-- Action end -->

<section class="social" id="social">
    <div class="row text-center">
        <div class="col-12">
            <h2 class="section-title">RS Graha Hermine</h2>
            <h3 class="section-sub-title">Aktivitas Terbaru</h3>
        </div>
    </div>
    <div class="row ml-3 mr-3">
        <div class="col-md-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="960" height="540" src="https://www.youtube.com/embed/<?= $latestVideo  ?>" title="YouTube video" frameborder="0" allow="autoplay" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3" style="max-width: 960px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="<?= $ytProfilePic ?>" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $ytProfileTitle ?></h5>
                            <p class="card-text"><?= $desc ?></p>
                            <p>Subscribe sekarang:</p>
                            <div class="g-ytsubscribe" data-channelid="UCrVa5dDtzD7ARnE3TqN4Wig" data-layout="default" data-count="default"></div>
                            <!-- <button class="btn text-white" style="background-color: #FF0000;">Subscribe</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <a href="https://www.youtube.com/@RumahSakitGrahaHermine/featured" class="btn btn-primary">More Video</a>
        </div>
    </div>
</section>

<section id="ts-service-area" class="ts-service-area pb-0">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">RS Graha Hermine</h2>
                <h3 class="section-sub-title">Kenapa Kami?</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-4">
                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{asset('Template')}}/images/icon-image/ruang-nyaman.png" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Ruang inap yang nyaman dan bersih</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 1 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{asset('Template')}}/images/icon-image/24-jam.png" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Fasilitas 24 jam</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 2 end -->

            </div><!-- Col end -->

            <div class="col-lg-4 text-center">
                <img loading="lazy" class="img-fluid" src="template/images/services/service-center.jpg" alt="service-avater-image">
            </div><!-- Col end -->

            <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{asset('Template')}}/images/icon-image/doctor-proff.png" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Ditangani oleh ahli</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 4 end -->

                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{asset('Template')}}/images/icon-image/alat-medis.png" alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a href="#">Peralatan Medis lengkap</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                    </div>
                </div><!-- Service 5 end -->
            </div><!-- Col end -->
        </div><!-- Content row end -->

    </div>
    <!--/ Container end -->
</section><!-- Service end -->

<section id="project-area" class="project-area solid-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">RS Graha Hermine</h2>
                <h3 class="section-sub-title">Gallery</h3>
            </div>
        </div>
        <!--/ Title row end -->

        <!-- galeri -->
        <div class="row">
            <div class="col-12">
                <!-- <div class="shuffle-btn-group">
                    <label class="active" for="all">
                        <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
                    </label>
                    <label for="Poliklinik">
                        <input type="radio" name="shuffle-filter" id="Poliklinik" value="Poliklinik">Poliklinik
                    </label>
                    <label for="igd">
                        <input type="radio" name="shuffle-filter" id="igd" value="igd">Instalasi gawat Darurat (IGD)
                    </label>
                    <label for="rawat-inap">
                        <input type="radio" name="shuffle-filter" id="rawat-inap" value="rawat-inap">Layanan Rawat Inap
                    </label>
                    <label for="ibu-anak">
                        <input type="radio" name="shuffle-filter" id="ibu-anak" value="ibu-anak">layanan Ibu dan Anak
                    </label>
                </div> -->


                <div class="row shuffle-wrapper">
                    <div class="col-1 shuffle-sizer"></div>
                    @foreach($galeris as $galeri)

                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;Poliklinik&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="{{ asset('storage/'.$galeri->image) }}" aria-label="project-img">
                                <img class="img-fluid" src="{{ asset('storage/'.$galeri->image) }}" alt="project-img" style="max-height:350px ; overflow:hidden;">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <p class="project-item-title text-white">{{ $galeri->title_galeri }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div><!-- shuffle end -->
            </div>

            <div class="col-12">
                <div class="general-btn text-center">
                    <a class="btn btn-primary" href="/galeri">Selengkapnya</a>
                </div>
            </div>

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Project area end -->

<section class="content">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">RS Graha Hermine</h2>
                <h3 class="section-sub-title">Partner kami</h3>
            </div>
        </div>
        <div class="row all-clients">
            <div class="col-sm-2 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('Template')}}/images/clients/client1.png" alt="clients-logo" /></a>
                </figure>
            </div>

            <div class="col-sm-2 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('Template')}}/images/clients/client2.png" alt="clients-logo" /></a>
                </figure>
            </div>

            <div class="col-sm-2 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('Template')}}/images/clients/client3.png" alt="clients-logo" /></a>
                </figure>
            </div>
            <div class="col-sm-2 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('Template')}}/images/clients/client4.png" alt="clients-logo" /></a>
                </figure>
            </div>
            <div class="col-sm-2 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('Template')}}/images/clients/client5.png" alt="clients-logo" /></a>
                </figure>
            </div>
            <div class="col-sm-2 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('Template')}}/images/clients/client6.png" alt="clients-logo" /></a>
                </figure>
            </div>

        </div>

        <div class="col-12">
            <div class="general-btn text-center">
                <a class="btn btn-primary" href="#">Selengkapnya</a>
            </div>
        </div>
    </div>
    <!--/ Container end -->
</section><!-- Content end -->

<section class="subscribe no-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="subscribe-call-to-acton">
                    <h3>Emergency Only?</h3>
                    <h4>(0778) 363 127</h4>
                </div>
            </div><!-- Col end -->

            <div class="col-lg-8">
                <div class="ts-newsletter row align-items-center">
                </div><!-- Newsletter end -->
            </div><!-- Col end -->

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section>
<!--/ subscribe end -->

<section id="news" class="news">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">RS Graha hermine</h2>
                <h3 class="section-sub-title">Artikel Terbaru</h3>
            </div>
        </div>

        <div class="row">

            @foreach($posts as $post)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post">
                    <div class="latest-post-media">
                        <a href="/artikel/{{$post->slug}}" class="latest-post-img">
                            <img loading="lazy" class="img-fluid" src="{{asset('storage/'.$post->image)}}" alt="img">
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="/artikel/{{$post->slug}}" class="d-inline-block">{{ $post->title }}</a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i> {{ $post->created_at }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="general-btn text-center mt-4">
            <a class="btn btn-primary" href="/artikel">See All Posts</a>
        </div>

    </div>
    <!--/ Container end -->
</section>
<!--/ News end -->


@endsection