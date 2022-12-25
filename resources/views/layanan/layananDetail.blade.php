@extends('layout.main')

@section('content')

<div class="container mt-4">
    <div class="row text-center">
        <div class="col-12">
            <h2 class="section-title">{{ $layanan->jenis_layanan }}</h2>
            <h3 class="section-sub-title">{{ $layanan->nama_layanan }}</h3>
        </div>
    </div>

    <div class="row">
        @foreach($images as $image)
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                <img src="{{asset('storage/'.$image->image)}}" alt="" class="w-100">
            </div>
        </div>
        @endforeach
    </div>


    <div class="row">
        <div class="col">
            <div class="card mt-3 mb-3">
                <div class="card-body">
                    {!! $layanan->ket !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection