@extends('landing.master', [$title = "", $active= "home"])
@section('hero-text')
    Himpunan
    <span class="text-color-1">Mahasiswa</span>
    <br>
    Rekayasa
    <span class="text-color-2">Perangkat Lunak</span>
@endsection
@section('content')
    <section id="kabinet">
        <div class="mycontainer">
            <div class="row">
                <div class="col-md-5" data-aos="fade-down">
                    <div class="row d-flex flex-column justify-content-center" style="height: 100vh;">
                        <div class="row d-flex flex-row justify-content-center" style="width: 100%;">
                            <img src="./assets/img/logo-kabinet.png" class="logo-kabinet img-fluid" alt="Logo Kabinet">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row d-flex flex-column justify-content-center" style="height: 100vh;">
                        <div class="row d-flex flex-row justify-content-center" style="width: 100%;">
                            <div class="col-md-12">
                                <h1 class="font-weight-bold display-4" data-aos="fade-left">Kabinet Inspira</h1>
                                <p class="text-justify" data-aos="fade-left">
                                    Kabinet Inspira merupakan kabinet kedua dari perjalanan HIMARPL. Kabinet Inspira
                                    memiliki cita – cita untuk membentuk kerja sama dan solidaritas yang seberjalannya
                                    selalu berpegang teguh pada kemajuan dan kejayaan organisasi. Kabinet ini akan terus
                                    menerus melakukan evaluasi dan perbaikan agar kinerja selalu mengarah ke arah yang lebih
                                    baik.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="visi-misi">
        <div class="mycontainer">
            <div class="row d-flex flex-column justify-content-center" style="height: 100vh;">
                <div class="row d-flex flex-row justify-content-center" style="width: 100%;">
                    <div class="col-md-12 px-lg-4 mx-lg-4">
                        <div class="visi text-center mb-4">
                            <h2 class="font-weight-bold display-4" data-aos="zoom-in-down">Visi</h2>
                            <p class="mt-4" data-aos="zoom-in-down">Lorem ipsum dolor sit amet consectetur
                                adipisicing eli2t. Eius tempore labore suscipit, quam illo explicabo quos maiores natus
                                quaerat delectus, eaque cupiditate praesentium rerum eum non iste atque ad sint?</p>
                        </div>
                        <div class="misi text-center mt-4">
                            <h2 class="text-center font-weight-bold display-4 mb-2" data-aos="zoom-in-down">Misi</h2>
                            <div class="">
                                <p data-aos="zoom-in-down">1. Lorem ipsum dolor sit amet consectetur adipisicing eli2t.
                                    Eius tempore labore</p>
                                <p data-aos="zoom-in-down">2. Lorem sit amet consectetur adipisicing eli2t. Eius tempore
                                    labore</p>
                                <p data-aos="zoom-in-down">3. Lorem ipsum dolor sit amet consectetur adipisicing eli2t.
                                    Eius tempore labore</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="be">
        <div class="mycontainer">
            <h1 class="font-weight-bold text-center display-4" data-aos="zoom-in-up">Pimpinan HIMARPL</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="row d-flex flex-column justify-content-center" style="height: 100vh;">
                        <div class="row d-flex flex-row justify-content-center" style="width: 100%;">
                            <img src="{{ asset('/assets/img/be.png') }}" alt="Pimpinan BE" class="img-fluid"
                                data-aos="fade-left">
                            <div class="text-center align-items-center mt-3 mb-2">
                                <h2 class="font-weight-bold" data-aos="fade-left">Ketua Badan Eksekutif</h2>
                                <p class="h4" data-aos="fade-left">Muhammad Reynaldi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row d-flex flex-column justify-content-center" style="height: 100vh;">
                        <div class="row d-flex flex-row justify-content-center" style="width: 100%;">
                            <img src="{{ asset('/assets/img/dp.png') }}" alt="Pimpinan DP" class="img-fluid"
                                data-aos="fade-right">
                            <div class="text-center align-items-center mt-3 mb-2">
                                <h2 class="font-weight-bold" data-aos="fade-right">Ketua Dewan Pengawas</h2>
                                <p class="h4" data-aos="fade-right">Athoillah Sholahuddin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="spotify">
        <div class="mycontainer">
            <h1 class="font-weight-bold text-center display-4" data-aos="zoom-in-up">Rekan Podcast</h1>
            <div class="row d-flex flex-column justify-content-center" style="height: 100%;">
                <div class="row d-flex flex-row justify-content-center" style="width: 100%;">
                    <div class="col-md-6" data-aos="zoom-in-left">
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item"
                                src="https://open.spotify.com/embed/episode/36v00JuCNGAJelZIbEwTYu" width="100%"
                                height="232" frameBorder="0" allowfullscreen=""
                                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="zoom-in-right">
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item"
                                src="https://open.spotify.com/embed/episode/4n0RUPvmrjr0S3LwYWzZ5U" width="100%"
                                height="232" frameBorder="0" allowfullscreen=""
                                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6" data-aos="zoom-in-left">
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item"
                                src="https://open.spotify.com/embed/episode/5zMCJMH0avh0j2sAwoM6Tx" width="100%"
                                height="232" frameBorder="0" allowfullscreen=""
                                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="zoom-in-right">
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item"
                                src="https://open.spotify.com/embed/episode/2GqrknmkENRttPJk85P7j1" width="100%"
                                height="232" frameBorder="0" allowfullscreen=""
                                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
