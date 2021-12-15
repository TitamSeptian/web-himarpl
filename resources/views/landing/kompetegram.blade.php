@extends('landing.master', [$title = "Komunitas ", $active = "komunitas"])
@section('hero-text')
    KOMPETEGRAM
@endsection
@section('content')
    <section id="komunitas">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mt-4">
                    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
                        <img src="/assets/img/logo-ktg.png" class="img-fluid" alt="Logo Kabinet">
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="d-flex flex-column justify-content-center vh-100 text-white mr-4">
                        <h1 class="font-weight-bold display-4">Kompetegram</h1>
                        <p class="text-justify">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, vel atque mollitia error saepe
                            magnam ipsa ducimus incidunt porro asperiores enim odit corrupti. Similique, praesentium
                            dignissimos nihil doloremque totam molestiae.
                        </p>
                        <a href="https://www.instagram.com/kompetegram/" target="_blank">Instagram</a>
                        <a href="https://kompetegram.com/" target="_blank">Website</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
