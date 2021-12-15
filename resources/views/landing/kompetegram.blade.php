@extends('landing.master', [$title = "Komunitas ", $active = "komunitas"])
@section('hero-text')
    KOMPETEGRAM
@endsection
@section('content')
    <section id="komunitas">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mt-4">
                    <div class="d-flex flex-column justify-content-center align-items-center min-vh-100">
                        <img src="/assets/img/logo-ktg.png" class="img-fluid" alt="Logo Kabinet">
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="d-flex flex-column justify-content-center vh-100 text-white mr-4">
                        <h1 class="font-weight-bold display-4">Kompetegram</h1>
                        <p class="text-justify">
                            KOMPETEGRAM atau Komunitas Pencinta Teknologi Pemrograman merupakan suatu komunitas teknologi
                            baru yang mengkhususkan dalam bidang pemrograman bagi mahasiswa UPI. KOMPETEGRAM baru terbentuk
                            tepatnya di tahun 2020, dengan para pendirinya yang berasal dari program studi Rekayasa
                            Perangkat Lunak dan diketuai oleh Ardi Hilal Itsna. Di tahun 2021, KOMPETEGRAM memiliki sekitar
                            160 anggota yang terdiri dari berbagai program studi dan fakultas yang ada di UPI.
                        </p>
                        <a href="https://www.instagram.com/kompetegram/" target="_blank">Instagram</a>
                        <a href="https://kompetegram.com/" target="_blank">Website</a>
                        <a href="https://www.youtube.com/channel/UC55hJqS29mE0UQ5Ol-Id6Wg" target="_blank">YouTube</a>
                        <a href="https://github.com/PROYEK-KOMPETEGRAM" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="visi-misi" class="min-vh-100 text-center">
        {{-- <h1 class="text-center font-weight-bold"></h1> --}}
        <div class="d-flex flex-column justify-content-center align-item-center">
            <div class="visi">
                <h2 class="text-center font-weight-bold">Visi</h2>
                <p>Menjadi pumpunan yang kreatif ataupun inventif serta unggul dan bermanfaat dalam bidang teknologi.</p>
            </div>
            <div class="misi">
                <h2 class="text-center font-weight-bold">Misi</h2>
                <ol>
                    <li>
                        <p>Membangun relasi mahasiswa, sehingga unggul dalam bidang teknologi pemrograman</p>
                    </li>
                    <li>
                        <p>Melaksanakan aktivitas untuk menghasilkan suatu produk yang bermanfaat serta kreatif ataupun
                            inventif</p>
                    </li>
                    <li>
                        <p>Melaksanakan aktivitas pembelajaran untuk meningkatkan keterampilan yang unggul</p>
                    </li>
                </ol>
            </div>
        </div>
    </section>
    <section id="kegiatan" class="min-vh-100">
        <div class="container-fluid px-5">

            <h1 class="text-center font-weight-bold text-white pt-5">Kegiatan</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="kegiatan mt-4 px-2 py-3">
                        <h3>OpenClass</h3>
                        <p>kegiatan pematerian langsung (live) yang dilakukan secara rutin setiap satu bulan sekali oleh
                            pengurus
                            internal ataupun eksternal, melalui platform YouTube ataupun teleconfere lainnya</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="kegiatan mt-4 px-2 py-3">
                        <h3>KOMPETEGRAM Coding Challenges</h3>
                        <p>kegiatan lomba tingkat komunitas yang dilakukan setiap tahun dengan hadiah-hadiah menarik. Lomba
                            ini bertujuan untuk melatih keterampilan problem solving dari para anggotanya.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="kegiatan mt-4 px-2 py-3">
                        <h3>Kompetisi bersama KOMPETEGRAM</h3>
                        <p>kegiatan pendampingan para anggota secara intens dalam menghadapi kompetisi besar seperti LIDM,
                            GEMASTIK, dan PKM PIMNAS.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="kegiatan mt-4 px-2 py-3">
                        <h3>Proyek Bersama</h3>
                        <p>kegiatan mengembangkan suatu perangkat lunak ataupun teknologi lainnya secara kolaborasi atau
                            bersama.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="kegiatan mt-4 px-2 py-3">
                        <h3>Kontribusi</h3>
                        <p>dapat berupa pematerian openclass atau modul pembelajaran</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="kegiatan mt-4 px-2 py-3">
                        <h3>Webinar</h3>
                        <p>salah satu kegiatan yang tidak dilakukan secara rutin. KOMPETEGRAM mendapat kepercayaan menjadi
                            penyelenggaran kegiatan webinar NgobarRPL antara program studi Rekayasa Perangkat Lunak dengan
                            HIMARPL</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="kegiatan mt-4 px-2 py-3">
                        <h3>Sharing Konten melalui media sosial Instagram</h3>
                        <p>kegiatan posting feed pada akun isntagram KOMPETEGRAM yang dilakukan satu atau dua minggu sekali
                            yang berkaitan dengan materi teknologi pemrograman.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="kegiatan mt-4 px-2 py-3">
                        <h3>Diskusi Grup</h3>
                        <p>kegiatan <i>sharing</i> font-weight-bold bersama melalui WhatsApp grup antar anggota dan pengurus
                            KOMPETEGRAM</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
