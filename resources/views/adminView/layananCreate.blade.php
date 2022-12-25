@extends('layout.mainAdmin')

@section('content')

<div class="pagetitle">
    <h1>Tambah Post</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/layanan">Layanan</a></li>
            <li class="breadcrumb-item active">Create Layanan</li>
        </ol>
    </nav>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/layanan">
        @csrf
        <div class="mb-3 col-md-6">
            <label for="jenis_layanan" class="form-label">Pilih Layanan</label>
            <select name="jenis_layanan" class="form-select">
                <option value="Poliklinik" @if (old('jenis_layanan')=='Poliklinik' ) selected="selected" @endif>Poliklinik</option>
                <option value="igd" @if (old('jenis_layanan')=='igd' ) selected="selected" @endif>Instalasi Gawat Darurat(IGD)</option>
                <option value="Rawat Inap" @if (old('jenis_layanan')=='Rawat Inap' ) selected="selected" @endif>Rawat Inap</option>
                <option value="Ibu dan Anak" @if (old('jenis_layanan')=='Ibu dan Anak' ) selected="selected" @endif>Ibu dan Anak</option>
                <option value="Unggulan" @if (old('jenis_layanan')=='Unggulan' ) selected="selected" @endif>Unggulan</option>
            </select>
            @error('hari')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama_layanan" class="form-label">jenis Lainnya</label>
            <input type="text" class="form-control @error('nama_layanan') is-invalid @enderror" name="nama_layanan" id="nama_layanan" value="{{old('nama_layanan')}}" autofocus>
            @error('nama_layanan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <span class="text-danger">*automatic fill</span>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" value="{{old('slug')}}">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="ket" class="form-label">Keterangan</label>
            <input id="ket" type="hidden" name="ket" value="{{old('ket')}}">
            <trix-editor input="ket"></trix-editor>
            @error('ket')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Create Layanan</button>
    </form>
</div>

<script>
    const nama_layanan = document.querySelector("#nama_layanan");
    const slug = document.querySelector("#slug");

    nama_layanan.addEventListener("keyup", function() {
        let preslug = nama_layanan.value;
        preslug = preslug.replace(/ /g, "-");
        slug.value = preslug.toLowerCase();
    });
</script>


@endsection