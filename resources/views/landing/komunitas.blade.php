@extends('landing.master', [$title = "Komunitas ", $active = "komunitas"])
@section('hero-text')
    Komunitas
    <span class="text-color-1">HIMA</span><span class="text-color-2">RPL</span>
@endsection
@section('content')
    <section id="komunitas">
        <div class="container-fluid py-4">
            <h2 class="font-weight-bold text-center text-white display-4">Komunitas</h2>
            <div class="row pt-4 px-5">
                <div class="col-md-3">
                    <div class="card bg-black text-white card-hover">
                        <img src="{{ asset('/assets/img/logo-ktg.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kompetegram</h5>
                            <p class="card-text">Komunitas Pencinta Pemrograman.</p>
                            <a href="{{ route('kompetegram') }}" class="btn btn-color-1">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
