@extends('layout.mainAdmin')

@section('content')

<div class="pagetitle">
    <h1>Tambah Poliklinik</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="#">Media</a></li>
            <li class="breadcrumb-item"><a href="/blog">RSGH Blog</a></li>
            <li class="breadcrumb-item active">Tambah Poliklinik</li>
        </ol>
    </nav>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">*Tambah Poliklinik</h5>

                    <!-- No Labels Form -->
                    <form class="row g-3" action="/dashboard/poliklinik" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <input type="text" class="form-control @error('poliklinik') is-invalid @enderror" name="poliklinik" id="poliklinik" placeholder="poliklinik" value="{{old('poliklinik')}}">
                            @error('poliklinik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" placeholder="slug" value="{{old('slug')}}">
                            @error('slug')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form><!-- End No Labels Form -->

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const poliklinik = document.querySelector("#poliklinik");
    const slug = document.querySelector("#slug");

    poliklinik.addEventListener("keyup", function() {
        let preslug = poliklinik.value;
        preslug = preslug.replace(/ /g, "-");
        slug.value = preslug.toLowerCase();
    });
</script>

@endsection