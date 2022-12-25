@extends('layout.main')

@section('content')
<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="column-title">Nilai Kami</h3>
                <div class="row">
                    <div class="col">
                        <h5 class="">VISI</h5>
                        <p>Menjadi Rumah Sakit pilihan utama masyarakat Batam tahun 2022</p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <h5 class="">MISI</h5>
                        <ul>
                            <li>Memberikan pelayanan kesehatan yang cepat, tepat dan berkualitas.</li>
                            <li>Mengutamakan kenyamanan dan keselamatan pasien.</li>
                            <li>Memberikan pelayanan kesehatan yang terjangkau dan kesejahteraan oleh seluruh lapisan masyarakat.</li>
                            <li>Meningkatkan pengetahuan, keterampilan karyawan, sehingga mampu melaksanakan pelayanan yang profesional.</li>
                            <li>Meningkatkan kualitas alat kedokteran yang dapat memberikan nilai lebih bagi pelayanan kesehatan.</li>
                        </ul>
                    </div>
                </div>

            </div><!-- Col end -->

            <div class="col-lg-6 mt-5 mt-lg-0">

                <div id="page-slider" class="page-slider small-bg">

                    <div class="item" style="background-image:url(Template/images/slider-pages/slide-page1.jpg)">
                        <div class="container">
                            <div class="box-slider-content">
                                <div class="box-slider-text">
                                    <h2 class="box-slide-title">Proffesional </h2>
                                    <span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item" style="background-image:url(Template/images/slider-pages/slide-page2.jpg)">
                        <div class="container">
                            <div class="box-slider-content">
                                <div class="box-slider-text">
                                    <h2 class="box-slide-title">Leadership</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item" style="background-image:url(Template/images/slider-pages/slide-page3.jpg)">
                        <div class="container">
                            <div class="box-slider-content">
                                <div class="box-slider-text">
                                    <h2 class="box-slide-title">Mendengarkan</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item" style="background-image:url(Template/images/slider-pages/slide-page4.jpg)">
                        <div class="container">
                            <div class="box-slider-content">
                                <div class="box-slider-text">
                                    <h2 class="box-slide-title">Rapi</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item" style="background-image:url(Template/images/slider-pages/slide-page5.jpg)">
                        <div class="container">
                            <div class="box-slider-content">
                                <div class="box-slider-text">
                                    <h2 class="box-slide-title">asertif</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Content row end -->

    </div><!-- Container end -->
</section><!-- Main container end -->


@endsection