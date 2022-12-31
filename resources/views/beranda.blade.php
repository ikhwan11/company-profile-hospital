@extends('layout.main')

@section('content')


<div class="banner-carousel banner-carousel-2 mb-0">
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

<!-- <section id="ts-features" class="ts-features pb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <div class="ts-service-box">
                    <div class="ts-service-image-wrapper">
                        <img loading="lazy" class="w-100" src="Template/images/services/service1.jpg" alt="service-image">
                    </div>
                    <div class="d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="Template/images/icon-image/service-icon1.png" alt="service-icon" />
                        </div>
                        <div class="ts-service-info">
                            <h3 class="service-box-title"><a href="service-single.html">Profil Dokter Kami</a></h3>
                            <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like. Lorem ipsum dolor suscipit.</p>
                            <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i>Info Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

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

        <div class="row">
            <div class="col-12">
                <div class="shuffle-btn-group">
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
                </div><!-- project filter end -->


                <div class="row shuffle-wrapper">
                    <div class="col-1 shuffle-sizer"></div>

                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;Poliklinik&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="Template/images/projects/project1.jpg" aria-label="project-img">
                                <img class="img-fluid" src="Template/images/projects/project1.jpg" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="projects-single.html">Capital Teltway Building</a>
                                    </h3>
                                    <p class="project-cat">Commercial, Interiors</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 1 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;igd&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="Template/images/projects/project2.jpg" aria-label="project-img">
                                <img class="img-fluid" src="Template/images/projects/project2.jpg" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="projects-single.html">Ghum Touch Hospital</a>
                                    </h3>
                                    <p class="project-cat">Healthcare</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 2 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;rawat-inap&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="Template/images/projects/project3.jpg" aria-label="project-img">
                                <img class="img-fluid" src="Template/images/projects/project3.jpg" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="projects-single.html">TNT East Facility</a>
                                    </h3>
                                    <p class="project-cat">Government</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 3 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;ibu-anak&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="Template/images/projects/project4.jpg" aria-label="project-img">
                                <img class="img-fluid" src="Template/images/projects/project4.jpg" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="projects-single.html">Narriot Headquarters</a>
                                    </h3>
                                    <p class="project-cat">Infrastructure</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 4 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;igd&quot;,&quot;ibu-anak&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="Template/images/projects/project5.jpg" aria-label="project-img">
                                <img class="img-fluid" src="Template/images/projects/project5.jpg" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="projects-single.html">Kalas Metrorail</a>
                                    </h3>
                                    <p class="project-cat">Infrastructure</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 5 end -->

                    <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;poliklinik&quot;]">
                        <div class="project-img-container">
                            <a class="gallery-popup" href="Template/images/projects/project6.jpg" aria-label="project-img">
                                <img class="img-fluid" src="Template/images/projects/project6.jpg" alt="project-img">
                                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="project-item-info">
                                <div class="project-item-info-content">
                                    <h3 class="project-item-title">
                                        <a href="projects-single.html">Ancraft Avenue House</a>
                                    </h3>
                                    <p class="project-cat">Residential</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- shuffle item 6 end -->
                </div><!-- shuffle end -->
            </div>

            <div class="col-12">
                <div class="general-btn text-center">
                    <a class="btn btn-primary" href="projects.html">Selengkapnya</a>
                </div>
            </div>

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Project area end -->

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="column-title">Apa kata Pasien kami?</h3>

                <div id="testimonial-slide" class="testimonial-slide">
                    <div class="item">
                        <div class="quote-item">
                            <span class="quote-text">
                                Question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last
                                view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the
                                subline of her own road.
                            </span>

                            <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="Template/images/clients/testimonial1.png" alt="testimonial">
                                <div class="quote-item-info">
                                    <h3 class="quote-author">Gabriel Denis</h3>
                                    <span class="quote-subtext">Chairman, OKT</span>
                                </div>
                            </div>
                        </div><!-- Quote item end -->
                    </div>
                    <!--/ Item 1 end -->

                    <div class="item">
                        <div class="quote-item">
                            <span class="quote-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                                nisi aliquip consequat.
                            </span>

                            <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="Template/images/clients/testimonial2.png" alt="testimonial">
                                <div class="quote-item-info">
                                    <h3 class="quote-author">Weldon Cash</h3>
                                    <span class="quote-subtext">CFO, First Choice</span>
                                </div>
                            </div>
                        </div><!-- Quote item end -->
                    </div>
                    <!--/ Item 2 end -->

                    <div class="item">
                        <div class="quote-item">
                            <span class="quote-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                                nisi ut commodo consequat.
                            </span>

                            <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb" src="Template/images/clients/testimonial3.png" alt="testimonial">
                                <div class="quote-item-info">
                                    <h3 class="quote-author">Minter Puchan</h3>
                                    <span class="quote-subtext">Director, AKT</span>
                                </div>
                            </div>
                        </div><!-- Quote item end -->
                    </div>
                    <!--/ Item 3 end -->

                </div>
                <!--/ Testimonial carousel end-->
            </div><!-- Col end -->

            <div class="col-lg-6 mt-5 mt-lg-0">

                <h3 class="column-title">Partnership</h3>

                <div class="row all-clients">
                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid" src="Template/images/clients/client1.png" alt="clients-logo" /></a>
                        </figure>
                    </div><!-- Client 1 end -->

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid" src="Template/images/clients/client2.png" alt="clients-logo" /></a>
                        </figure>
                    </div><!-- Client 2 end -->

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid" src="Template/images/clients/client3.png" alt="clients-logo" /></a>
                        </figure>
                    </div><!-- Client 3 end -->

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid" src="Template/images/clients/client4.png" alt="clients-logo" /></a>
                        </figure>
                    </div><!-- Client 4 end -->

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid" src="Template/images/clients/client5.png" alt="clients-logo" /></a>
                        </figure>
                    </div><!-- Client 5 end -->

                    <div class="col-sm-4 col-6">
                        <figure class="clients-logo">
                            <a href="#!"><img loading="lazy" class="img-fluid" src="Template/images/clients/client6.png" alt="clients-logo" /></a>
                        </figure>
                    </div><!-- Client 6 end -->

                </div><!-- Clients row end -->

            </div><!-- Col end -->

        </div>
        <!--/ Content row end -->
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