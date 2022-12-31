@extends('layout.main')

@section('content')

<section id="main-container" class="main-container">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>Temukan Karir di RS Graha Hermine</h4>
                <form action="/karir">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{request('search')}}" autofocus>
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card w-75">
                    <div class="card-body">
                        <h5 class="card-title">Posisi Lowongan</h5>
                        <p class="card-text">Excerpt</p>
                        <a href="#" class="btn btn-primary">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection