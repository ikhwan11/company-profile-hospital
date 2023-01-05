@extends('layout.main')

@section('content')

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

        </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
</section><!-- Project area end -->

@endsection