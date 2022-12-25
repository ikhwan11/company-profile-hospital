@extends('layout.main')

@section('content')

<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5 class="widget-title ml-3">Cari Dokter</h5>
                <form action="/dokter/jadwal">
                    <div class="input-group mb-3 ml-3">
                        <!-- <select name="search" class="form-select form-control">
                            @foreach ($dokters as $dokter)
                            <option value="{{$dokter->nama}}" selected>{{ $dokter->nama }}</option>
                            @endforeach
                        </select> -->
                        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{request('search')}}" autofocus>
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="col">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Foto</th>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Poliklinik</th>
                                <th scope="col">Lihat Jadwal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dokterCari as $data)
                            <tr>
                                <th><img src="{{ asset('storage/'.$data->image) }}" width="150"></th>
                                <th>{{ $data->nama }}</th>
                                <td>{{ $data->poliklinik->poliklinik }}</td>
                                <td><a class="btn btn-primary" href="/dokter/profil/{{$dokter->slug}}">Lihat Jadwal <i class="fas fa-arrow-right"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start ml-3">
            {{$dokterCari->links()}}
        </div>
    </div>
</section>
@endsection