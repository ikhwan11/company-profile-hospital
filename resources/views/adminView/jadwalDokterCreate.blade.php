@extends('layout.mainAdmin')

@section('content')

<div class="pagetitle">
    <h1>Tambah Jadwal</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/dokter">RSGH Blog</a></li>
            <li class="breadcrumb-item active">Create Jadwal</li>
        </ol>
    </nav>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/jadwal">
        @csrf
        <div class="mb-3">
            <label for="dokter_id" class="form-label">Pilih Dokter</label>
            <select name="dokter_id" class="form-select">
                @foreach ($dokters as $dokter)
                @if(old('dokter_id') == $dokter->id)
                <option value="{{$dokter->id}}" selected>{{ $dokter->nama }}</option>
                @else
                <option value="{{$dokter->id}}">{{ $dokter->nama }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="hari" class="form-label">Pilih Hari</label>
            <small class="text-danger">*harap masukan hari secara berurutan (masih dalam tahap pengembangan)</small>
            <select name="hari" class="form-select">
                <option value="Senin" @if (old('hari')=='Senin' ) selected="selected" @endif>Senin</option>
                <option value="Selasa" @if (old('hari')=='Selasa' ) selected="selected" @endif>Selasa</option>
                <option value="Rabu" @if (old('hari')=='Rabu' ) selected="selected" @endif>Rabu</option>
                <option value="Kamis" @if (old('hari')=='Kamis' ) selected="selected" @endif>Kamis</option>
                <option value="Jumat" @if (old('hari')=='Jumat' ) selected="selected" @endif>Jumat</option>
                <option value="Sabtu" @if (old('hari')=='Sabtu' ) selected="selected" @endif>Sabtu</option>
                <option value="Minggu" @if (old('hari')=='Minggu' ) selected="selected" @endif>Minggu</option>
            </select>
            @error('hari')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="dari" class="form-label">Dari</label>
                <input type="time" class="form-control @error('dari') is-invalid @enderror" name="dari" id="dari" value="{{old('dari')}}" autofocus>
                @error('dari')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 col-md-6">
                <label for="sampai" class="form-label">Sampai</label>
                <input type="time" class="form-control @error('sampai') is-invalid @enderror" name="sampai" id="sampai" value="{{old('sampai')}}" autofocus>
                @error('sampai')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Simpan jadwal</button>
    </form>
</div>




@endsection