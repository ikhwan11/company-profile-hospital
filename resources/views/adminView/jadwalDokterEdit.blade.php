@extends('layout.mainAdmin')

@section('content')

<div class="pagetitle">
    <h1>Edit Jadwal</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/dokter">Dokter</a></li>
            <li class="breadcrumb-item active">Edit Jadwal</li>
        </ol>
    </nav>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/jadwal/{{$data->id}}">
        @method('put')
        @csrf
        <input type="hidden" name="dokter_id" value="{{$data->dokter_id}}">
        <input type="hidden" name="hari" value="{{$data->hari}}">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="dari" class="form-label">Dari</label>
                <input type="time" class="form-control @error('dari') is-invalid @enderror" name="dari" id="dari" value="{{old('dari', $data->dari)}}" autofocus>
                @error('dari')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3 col-md-6">
                <label for="sampai" class="form-label">Sampai</label>
                <input type="time" class="form-control @error('sampai') is-invalid @enderror" name="sampai" id="sampai" value="{{old('sampai',$data->sampai)}}">
                @error('sampai')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Update jadwal</button>
    </form>
</div>




@endsection