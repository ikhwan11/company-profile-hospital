@extends('layout.mainAdmin')

@section('content')


<div class="pagetitle">
    <h1>Data Users</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/dokter">Dokter</a></li>
            <li class="breadcrumb-item active">Data Jadwal</li>
        </ol>
    </nav>
    <div class="col-md-6">
        <h5 class="widget-title">Pilih Dokter</h5>
        <form action="/dashboard/jadwal">
            <div class="input-group mb-3">
                <!-- <input type="text" class="form-control" placeholder="Search.." name="search" value="{{request('search')}}" autofocus> -->
                <select name="search" class="form-select">
                    @foreach ($dokters as $dokter)
                    <option value="{{$dokter->id}}" selected>{{ $dokter->nama }}</option>
                    @endforeach
                </select>
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"></h5>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nama Dokter</th>
                                <th scope="col">Hari</th>
                                <th scope="col">Dari</th>
                                <th scope="col">Sampai</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jadwal as $data)
                            <tr>
                                <td>{{ $data->dokter->nama }}</td>
                                <td>{{ $data->hari }}</td>
                                <td>{{ $data->dari }}</td>
                                <td>{{ $data->sampai }}</td>
                                <td>
                                    <a href="/dashboard/jadwal/{{$data->id}}/edit" class="btn btn-warning">Ubah jadwal <i class="bi bi-arrow-right-short"></i></a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- End Default Table Example -->
                </div>
            </div>

        </div>
    </div>
</section>

@endsection