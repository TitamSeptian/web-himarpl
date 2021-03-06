<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/styles.css') }}">
    <link href="{{ asset('./assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css"
        integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/favicon.png') }}">
    <title>Situs Resmi HIMARPL {{ $title }}</title>
</head>

<body>
    <div id="scroll-top" class="scroll-top animated" data-aos="zoom-in-up">
        <i class="fas fa-caret-up"></i>
    </div>
    <div class="viewed">
        <div class="close">
            &times;
        </div>
        <div class="content">
            <!-- banner(gambar sisingaan) ada di styles.css -->
            <img src="{{ asset('/assets/img/logo-hima-polos.png') }}" alt="Img viewer" id="img-viewed">
            <div class="caption">
                <h1 class="title"></h1>
                <div class="text"></div>
                <div class="user-upload">

                </div>
            </div>
        </div>
    </div>
    <div class="preloader">
        <div class="center">
            <div class="wrapper text-center">
                <img src="{{ asset('/assets/img/logo-kabinet.png') }}" class="img-fluid" alt="logo kabinet"
                    data-aos="zoom-in-up">
                <h2 class="preloader-text font-weight-bold mt-5" data-aos="zoom-in-up">HIMARPL | KABINET INSPIRA</h2>
                <div class="spinner" data-aos="zoom-in-down">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
            </div>
        </div>
        <img src="{{ asset('/assets/img/logo-hima-polos.png') }}" alt="logo hima" class="image-helper"
            data-aos="zoom-in-down">
    </div>
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <div class="container">
                <!-- <img src="./assets/img/logo-hima-polos.png" class="navbar-brand logo-navbar"> -->
                <a href="{{ route('home') }}" class="navbar-brand text-uppercase font-weight-bold">
                    <img src="{{ asset('/assets/img/logo-hima-polos.png') }}" width="53" height="43">
                </a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler navbar-toggler-right text-white"><i class="fa fa-bars"></i></button>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item {{ $active == 'home' ? 'active2' : '' }}"><a
                                href="{{ route('home') }}" class="nav-link text-uppercase font-weight-bold">Home</a>
                        </li>
                        <li class="nav-item {{ $active == 'be' ? 'active2' : '' }} "><a href="{{ route('be') }}"
                                class="nav-link text-uppercase font-weight-bold">BE</a>
                        </li>
                        <li class="nav-item {{ $active == 'dp' ? 'active2' : '' }} "><a href="{{ route('dp') }}"
                                class="nav-link text-uppercase font-weight-bold">dp</a>
                        </li>
                        <li class="nav-item {{ $active == 'sekretariat' ? 'active2' : '' }} "><a
                                href="{{ route('sekretariat') }}"
                                class="nav-link text-uppercase font-weight-bold">Sekben</a></li>
                        <li class="nav-item {{ $active == 'komunitas' ? 'active2' : '' }} "><a
                                href="{{ route('komunitas') }}"
                                class="nav-link text-uppercase font-weight-bold">Komunitas</a></li>
                        <li class="nav-item {{ $active == 'gallery' ? 'active2' : '' }} "><a
                                href="{{ route('gallery') }}"
                                class="nav-link text-uppercase font-weight-bold">Gallery</a></li>
                        <li class="nav-item {{ $active == 'about' ? 'active2' : '' }} "><a
                                href="{{ route('about') }}"
                                class="nav-link text-uppercase font-weight-bold">About</a></li>
                        <li class="nav-item {{ $active == 'contact' ? 'active2' : '' }} "><a
                                href="{{ route('contact') }}"
                                class="nav-link text-uppercase font-weight-bold">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="header-container text-center">
        <div class="d-flex flex-column justify-content-center vh-100">
            <div class="d-flex flex-row justify-content-center">
                <h1 class="text-welcome text-uppercase font-weight-bold text-white display-2">
                    @yield('hero-text')
                </h1>
            </div>
        </div>
    </section>
    {{-- # CONTENT --}}
    @yield('content')
    {{-- # END CONTENT --}}
    <section id="footer">
        <div class="d-flex flex-column justify-content-center">
            <div class="col-md-12">
                <h1 class="display-4 text-color-2 font-weight-bold text-footer" data-aos="zoom-out-down">For any
                    inquiries please
                    hit us up through</h1>
                <a href="mailto:himarpl@upi.edu" data-aos="zoom-out-right"
                    class="text-muted h5 mt-3">himarpl@upi.edu</a>
                <div class="d-flex mt-4">
                    <a href="https://www.instagram.com/himarpl/" data-aos="flip-left" target="_blank">

                        <svg class="social-footer " width="35" height="35" viewBox="0 0 56 56" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M28 56C43.464 56 56 43.464 56 28C56 12.536 43.464 0 28 0C12.536 0 0 12.536 0 28C0 43.464 12.536 56 28 56ZM21.0697 27.5C21.0697 23.3844 24.3886 20.0648 28.5032 20.0648C32.6179 20.0648 35.9368 23.3844 35.9368 27.5C35.9368 31.6156 32.6179 34.9352 28.5032 34.9352C24.3886 34.9352 21.0697 31.6156 21.0697 27.5ZM23.6704 27.5C23.6704 30.1661 25.8442 32.3339 28.5032 32.3339C31.1622 32.3339 33.336 30.1661 33.336 27.5C33.336 24.8339 31.1687 22.6661 28.5032 22.6661C25.8378 22.6661 23.6704 24.8339 23.6704 27.5ZM36.2409 21.4949C37.1984 21.4949 37.9747 20.7248 37.9747 19.7606C37.9747 18.8029 37.1984 18.0264 36.2409 18.0264C35.2834 18.0264 34.507 18.8029 34.507 19.7606C34.507 20.7183 35.2769 21.4949 36.2409 21.4949ZM40.5561 15.4444C42.2576 17.1399 42.7881 19.1976 42.8981 21.5208C43.034 23.915 43.034 31.085 42.8981 33.4792C42.7817 35.8024 42.2511 37.8601 40.5561 39.5556C38.8611 41.2574 36.8037 41.7881 34.4812 41.8981C32.0874 42.034 24.9126 42.034 22.5189 41.8981C20.1963 41.7816 18.1454 41.251 16.4439 39.5556C14.7424 37.8601 14.2119 35.8024 14.1019 33.4792C13.966 31.085 13.966 23.9086 14.1019 21.5143C14.2183 19.1912 14.7424 17.1334 16.4439 15.438C18.1454 13.7426 20.2027 13.2119 22.5189 13.1019C24.9126 12.966 32.0874 12.966 34.4812 13.1019C36.8037 13.2184 38.8611 13.749 40.5561 15.4444ZM37.0496 38.8049C38.3241 38.2937 39.301 37.3166 39.8056 36.0483C40.4549 34.4164 40.4187 30.847 40.3953 28.5332C40.3914 28.1494 40.3879 27.8001 40.3879 27.5C40.3879 27.1998 40.3914 26.8506 40.3953 26.4669C40.4187 24.1543 40.4549 20.5891 39.8056 18.9517C39.2945 17.6769 38.3176 16.6998 37.0496 16.1951C35.413 15.5492 31.8271 15.5836 29.5145 15.6058C29.1393 15.6094 28.7976 15.6127 28.5032 15.6127C28.2031 15.6127 27.854 15.6091 27.4704 15.6053C25.1583 15.5818 21.5938 15.5457 19.9569 16.1951C18.6824 16.7063 17.7055 17.6834 17.2008 18.9517C16.5551 20.5887 16.5895 24.1754 16.6117 26.4885C16.6153 26.8638 16.6186 27.2055 16.6186 27.5C16.6186 27.8002 16.615 28.1494 16.6111 28.5331C16.5877 30.8457 16.5516 34.4109 17.2008 36.0483C17.7119 37.323 18.6888 38.3002 19.9569 38.8049C21.5935 39.4508 25.1794 39.4164 27.492 39.3942C27.8672 39.3906 28.2088 39.3873 28.5032 39.3873C28.8034 39.3873 29.1525 39.3909 29.5361 39.3947C31.8482 39.4182 35.4126 39.4543 37.0496 38.8049Z"
                                fill="#585858" />
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/himarpl/" data-aos="flip-left" target="_blank">

                        <svg class="social-footer ml-2" width="35" height="35" viewBox="0 0 56 56" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M28 56C43.464 56 56 43.464 56 28C56 12.536 43.464 0 28 0C12.536 0 0 12.536 0 28C0 43.464 12.536 56 28 56ZM34.7949 24.0642L34.017 29.3125H29.9314V42H24.4521V29.3125H20V24.0642H24.4521V20.0642C24.4521 15.5137 27.0701 13 31.0752 13C32.9936 13 35 13.3546 35 13.3546V17.8229H32.789C30.6108 17.8229 29.9314 19.2225 29.9314 20.6584V24.0642H34.7949Z"
                                fill="#585858" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/company/himpunan-mahasiswa-rekayasa-perangkat-lunak-upi/"
                        data-aos="flip-left" target="_blank">

                        <svg class="social-footer ml-2" width="35" height="35" viewBox="0 0 56 56" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M28 56C43.464 56 56 43.464 56 28C56 12.536 43.464 0 28 0C12.536 0 0 12.536 0 28C0 43.464 12.536 56 28 56ZM17.3613 36.8745H21.8965V22.27H17.3613V36.8745ZM17 17.6265C17 19.0767 18.1763 20.2778 19.6265 20.2778C21.0762 20.2778 22.2529 19.0767 22.2529 17.6265C22.2529 16.9299 21.9762 16.2618 21.4837 15.7693C20.9911 15.2767 20.323 15 19.6265 15C18.9299 15 18.2618 15.2767 17.7693 15.7693C17.2767 16.2618 17 16.9299 17 17.6265ZM34.3447 36.8745H38.8701H38.875V28.8521C38.875 24.9263 38.0312 21.9038 33.4414 21.9038C31.2349 21.9038 29.7559 23.1147 29.1504 24.2622H29.0869V22.27H24.7373V36.8745H29.2676V29.6431C29.2676 27.7388 29.6289 25.8979 31.9868 25.8979C34.3105 25.8979 34.3447 28.0708 34.3447 29.7651V36.8745Z"
                                fill="#585858" />
                        </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send/?phone=6281324941403&text&app_absent=0" data-aos="flip-left"
                        target="_blank">

                        <svg class="social-footer ml-2" width="35" height="35" viewBox="0 0 56 56" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M28 56C43.464 56 56 43.464 56 28C56 12.536 43.464 0 28 0C12.536 0 0 12.536 0 28C0 43.464 12.536 56 28 56ZM28.4935 13C32.3321 13 35.9442 14.4953 38.6565 17.2141C41.3687 19.9328 43 23.5384 43 27.377C43 35.3002 36.4103 41.7475 28.4935 41.7475H28.4871C26.079 41.7475 23.7163 41.1455 21.619 39.9998L14 42L16.0391 34.5558C14.7833 32.3743 14.123 29.9016 14.123 27.3705C14.123 19.4473 20.5703 13 28.4935 13ZM22.4087 37.6629C24.2406 38.7504 26.3444 39.3266 28.4935 39.3266C35.0768 39.3266 40.5725 33.9667 40.5725 27.377C40.579 24.1857 39.1937 21.1886 36.9411 18.9295C34.6884 16.6703 31.6913 15.4275 28.5 15.4275C21.9103 15.4275 16.5504 20.7873 16.5504 27.3705C16.5504 29.6297 17.1783 31.8241 18.3759 33.7272L18.6607 34.1804L17.4567 38.5886L21.975 37.404L22.4087 37.6629ZM32.5911 29.2154C32.9212 29.3319 34.6884 30.1993 35.0444 30.3806C35.1027 30.4092 35.1579 30.4356 35.2098 30.4603C35.4747 30.5869 35.6537 30.6725 35.7241 30.8078C35.8147 30.9567 35.8147 31.6752 35.517 32.5167C35.2192 33.3583 33.7886 34.1221 33.096 34.2257C31.9567 34.394 31.0634 34.3098 28.7848 33.3259C25.4273 31.8732 23.1587 28.6299 22.7161 27.9971C22.6834 27.9503 22.6607 27.9178 22.6482 27.9013C22.6437 27.8951 22.6384 27.8879 22.6324 27.8797C22.4074 27.5731 21.1853 25.907 21.1853 24.1857C21.1853 22.5348 21.9932 21.6691 22.3686 21.2668C22.3951 21.2385 22.4194 21.2125 22.4411 21.1886C22.7712 20.8326 23.1596 20.742 23.3991 20.742C23.6386 20.742 23.8781 20.742 24.0853 20.7549C24.112 20.7565 24.1398 20.7564 24.1686 20.7564C24.3775 20.756 24.6385 20.7556 24.8944 21.3699C24.9824 21.5822 25.1071 21.886 25.2415 22.2134C25.562 22.9942 25.9375 23.9091 26.0013 24.0368C26.092 24.2181 26.1502 24.4252 26.0337 24.6647C25.7285 25.2751 25.4131 25.605 25.1894 25.839C24.9101 26.1312 24.7737 26.2739 24.9786 26.6261C26.3703 29.0147 27.7556 29.8433 29.8658 30.8984C30.2219 31.0797 30.4355 31.0473 30.6426 30.8078C30.8563 30.5618 31.5424 29.7592 31.7819 29.3967C32.0214 29.0342 32.2609 29.0924 32.5911 29.2154Z"
                                fill="#585858" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-2">
        <div class="d-flex flex-column justify-content-center">
            <div class="d-flex flex-row justify-content-center">
                <span>
                    &copy;
                    <svg class="logo-hima" width="29" height="29" viewBox="0 0 748 648" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M681.756 451.788V214.721L747.269 177.515V490.676L475.226 647.338V570.289"
                            fill="#f1f1f1" />
                        <path d="M210.213 166.371L337.62 241.383L337.677 241.35L210.213 166.371Z" fill="#f1f1f1" />
                        <path
                            d="M192.185 155.757L210.213 166.371L337.677 241.35L431.513 296.539C430.281 300.032 429.652 303.709 429.653 307.413C429.638 315.232 432.399 322.803 437.444 328.776C442.49 334.75 449.491 338.739 457.203 340.032C464.914 341.325 472.834 339.84 479.552 335.839C486.271 331.838 491.35 325.583 493.887 318.187C496.424 310.791 496.253 302.734 493.405 295.452C490.557 288.171 485.216 282.136 478.335 278.424C471.453 274.712 463.477 273.563 455.828 275.182C448.178 276.801 441.351 281.083 436.564 287.266L348.015 235.179L462.608 166.753L587.596 241.383L733.031 155.757L462.608 0L202.693 149.699L192.185 155.757ZM441.754 307.413C441.756 305.881 441.924 304.353 442.257 302.857C443.422 297.652 446.537 293.09 450.961 290.11C455.385 287.13 460.783 285.958 466.045 286.835C471.307 287.711 476.033 290.57 479.252 294.824C482.471 299.078 483.938 304.403 483.352 309.705C482.766 315.007 480.171 319.883 476.101 323.331C472.031 326.779 466.795 328.537 461.468 328.244C456.142 327.951 451.13 325.628 447.464 321.754C443.797 317.879 441.754 312.748 441.754 307.413V307.413Z"
                            fill="#f1f1f1" />
                        <path d="M449.955 647.342L253.213 534.04L177.916 490.675V415.009L449.955 570.377V647.342Z"
                            fill="#f1f1f1" />
                        <path
                            d="M449.952 470.656V360.819L437.846 353.983L420.292 344.075L419.221 343.47L407.114 336.634V350.529L419.221 357.373L437.846 367.887V463.77L328.476 401.566V263.025L262.552 225.58L253.213 220.277L177.917 177.513V177.529L64.5908 113.18C67.5322 105.324 67.4057 96.6488 64.2365 88.8823C61.0674 81.1158 55.0882 74.8285 47.4906 71.2734C39.893 67.7183 31.2348 67.1564 23.2414 69.6997C15.2481 72.243 8.50643 77.7047 4.36002 84.9965C0.213608 92.2882 -1.03313 100.875 0.868261 109.044C2.76965 117.214 7.67955 124.368 14.6195 129.08C21.5595 133.791 30.0199 135.715 38.3149 134.467C46.6098 133.22 54.1302 128.893 59.3773 122.348L177.917 189.678V189.711L253.213 232.475V244.624L177.917 201.86V238.436L99.486 193.901C102.432 186.058 102.315 177.393 99.1587 169.633C96.0022 161.872 90.0377 155.586 82.4537 152.026C74.8697 148.466 66.2229 147.894 58.2361 150.424C50.2492 152.954 43.5087 158.4 39.3575 165.677C35.2063 172.954 33.9491 181.528 35.8365 189.691C37.7238 197.853 42.6171 205.005 49.5415 209.722C56.4658 214.438 64.9129 216.372 73.1996 215.14C81.4863 213.907 89.0045 209.597 94.256 203.069L177.916 250.584V250.617L253.213 293.381V305.53L177.916 262.765V299.342L130.783 272.576C133.715 264.73 133.582 256.068 130.413 248.315C127.244 240.563 121.27 234.289 113.682 230.743C106.094 227.198 97.4493 226.641 89.4694 229.184C81.4895 231.727 74.7606 237.183 70.6233 244.466C66.4861 251.748 65.2442 260.321 67.1451 268.478C69.046 276.635 73.9502 283.776 80.8805 288.479C87.8109 293.182 96.2586 295.101 104.541 293.855C112.823 292.608 120.331 288.287 125.57 281.752L177.916 311.49V311.523L253.213 354.287V366.435L177.917 323.671V391.862L178.017 391.686L449.956 546.965V470.658L449.952 470.656ZM53.7739 107.041C52.4011 112.201 49.1161 116.647 44.5856 119.474C40.0551 122.302 34.6185 123.299 29.3792 122.265C24.1399 121.23 19.4905 118.241 16.3747 113.904C13.2588 109.567 11.9099 104.207 12.6017 98.9111C13.2935 93.6157 15.9742 88.7819 20.0998 85.3907C24.2254 81.9996 29.4866 80.3052 34.8158 80.6514C40.145 80.9977 45.1428 83.3586 48.7949 87.2551C52.447 91.1515 54.4797 96.2916 54.4805 101.632C54.4806 103.458 54.2431 105.276 53.7739 107.041V107.041ZM88.6772 187.761C87.29 192.915 83.9947 197.348 79.4596 200.162C74.9245 202.976 69.489 203.96 64.2553 202.914C59.0215 201.869 54.3813 198.872 51.2756 194.531C48.1699 190.191 46.831 184.832 47.5306 179.541C48.2302 174.25 50.9158 169.422 55.0428 166.038C59.1699 162.654 64.4295 160.966 69.7552 161.317C75.0808 161.667 80.0738 164.03 83.7218 167.926C87.3698 171.821 89.3997 176.959 89.3998 182.296C89.4 184.142 89.157 185.979 88.6772 187.761V187.761ZM119.966 266.436C118.587 271.589 115.298 276.024 110.768 278.841C106.238 281.658 100.806 282.647 95.5739 281.605C90.3419 280.564 85.7019 277.572 82.5955 273.235C79.4891 268.898 78.149 263.542 78.847 258.253C79.5451 252.964 82.229 248.139 86.3542 244.757C90.4794 241.375 95.7369 239.688 101.06 240.04C106.383 240.392 111.373 242.756 115.017 246.652C118.661 250.548 120.686 255.685 120.681 261.019C120.68 262.848 120.439 264.669 119.966 266.436V266.436Z"
                            fill="#f1f1f1" />
                        <path
                            d="M596.711 263.021V401.562L487.332 463.771V367.887L505.892 357.401L505.957 357.373L517.998 350.565V263.884L506.19 257.208V257.193H506.163L505.957 257.077V257.099L487.5 246.679L475.394 239.844V253.71L487.5 260.546L505.957 270.974V343.469L505.892 343.497L487.332 353.983L475.226 360.818V500.898V547.7L662.224 440.473V225.814L596.711 263.021Z"
                            fill="#f1f1f1" />
                    </svg>
                    HIMARPL 2021 | Kabinet Inspira
                </span>
            </div>
        </div>
    </footer>
    <script src="{{ asset('/assets/vendor/jQuery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/assets/js/script.js') }}"></script>
</body>

</html>
