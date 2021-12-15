@extends('landing.master', [$title = "", $active= "home"])
@section('hero-text')
    Himpunan
    <span class="text-color-1">Mahasiswa</span>
    <br>
    Rekayasa
    <span class="text-color-2">Perangkat Lunak</span>
@endsection
@section('content')
    <section id="mykabinet">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mt-4">
                    <div class="d-flex flex-column justify-content-center align-items-center vh-100">

                        <img src="/assets/img/logo-kabinet.png" class="logo-kabinet img-fluid" alt="Logo Kabinet">
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="d-flex flex-column justify-content-center vh-100 text-white mr-4">
                        <h1 class="font-weight-bold display-4">Kabinet Inspira</h1>
                        <p class="text-justify">
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
    </section>
    <section id="myvisi-misi">
        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-md-6 px-3 mt-3">
                    <h1 class="text-center font-weight-bold">Badan Eksekutif</h1>
                    <div class="d-flex flex-column justify-content-center">
                        <div class="visi">
                            <h2 class="text-center">Visi</h2>
                            <p>Mewujudkan dan mengoptimalkan HIMA RPL yang kompetitif, unggul dan kreatif dengan menjunjung
                                tinggi budaya kekeluargaan yang demokratis</p>
                        </div>
                        <div class="misi">
                            <h2 class="text-center">Misi</h2>
                            <ol>
                                <li>
                                    <b>Harmonisasi</b>
                                    <p>Membangun budaya organisasi yang harmonis, professional dan berkomitmen.</p>
                                </li>
                                <li>
                                    <b>Kader</b>
                                    <p>Menciptakan kader yang berjiwa kepemimpinan serta memiliki integritas.</p>
                                </li>
                                <li>
                                    <b>Advokasi</b>
                                    <p>Memaksimalkan peran HIMA RPL dalam pelayanan advokasi yang dinamis dalam upaya
                                        menyejahterakan mahasiswa prodi RPL.</p>
                                </li>
                                <li>
                                    <b>Prestasi (Mikat)</b>
                                    <p>Menjadikan HIMA RPL sebagai wadah pengembangan minat bakat dan potensi mahasiswa
                                        prodi RPL.</p>
                                </li>
                                <li>
                                    <b>Internal-Eksternal</b>
                                    <p>Menjalin dan menjaga kerjasama baik dengan organ internal dan eksternal kampus.</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 px-3 mt-3">
                    <h1 class="text-center font-weight-bold">Dewan Pengawas</h1>
                    <div class="d-flex flex-column justify-content-center">
                        <div class="visi">
                            <h2 class="text-center">Visi</h2>
                            <p>Mewujudkan DP HIMA RPL yang bersinergi dengan berasaskan aspiratif serta sebagai lembaga yang
                                eksplisit, professional dan fungsionalitas bagi civitas RPL</p>
                        </div>
                        <div class="misi">
                            <h2 class="text-center">Misi</h2>
                            <ol>
                                <li>
                                    <p>Menjalin kerjasama dengan pihak internal maupun pihak eksternal prodi</p>
                                </li>
                                <li>
                                    <p>Menampung aspirasi civitas RPL</p>
                                </li>
                                <li>
                                    <p>Melaksanakan tugas dan wewenang secara efektif .</p>
                                </li>
                                <li>
                                    <p>Bertindak tegas dan transparan dalam fungsi pengawasan</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="be">
        <div class="mycontainer">
            <h1 class="font-weight-bold text-center display-4">Pimpinan HIMARPL</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="row d-flex flex-column justify-content-center" style="height: 100vh;">
                        <div class="row d-flex flex-row justify-content-center" style="width: 100%;">
                            <img src="{{ asset('/assets/img/be.png') }}" alt="Pimpinan BE" class="img-fluid">
                            <div class="text-center align-items-center mt-3 mb-2">
                                <h2 class="font-weight-bold">Ketua Badan Eksekutif</h2>
                                <p class="h4">Muhammad Reynaldi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row d-flex flex-column justify-content-center" style="height: 100vh;">
                        <div class="row d-flex flex-row justify-content-center" style="width: 100%;">
                            <img src="{{ asset('/assets/img/dp.png') }}" alt="Pimpinan DP" class="img-fluid">
                            <div class="text-center align-items-center mt-3 mb-2">
                                <h2 class="font-weight-bold">Ketua Dewan Pengawas</h2>
                                <p class="h4">Athoillah Sholahuddin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="spotify">
        <div class="mycontainer">
            <h1 class="font-weight-bold text-center display-4">Rekan Podcast</h1>
            <div class="row d-flex flex-column justify-content-center" style="height: 100%;">
                <div class="row d-flex flex-row justify-content-center" style="width: 100%;">
                    <div class="col-md-6">
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
                    <div class="col-md-6">
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
