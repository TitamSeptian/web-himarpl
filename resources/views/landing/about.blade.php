@extends('landing.master', [$title = "| About", $active = "about"])
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
    <section id="logo">
        <div class="mycontainer">
            <div class="row">
                <div class="col-md-6">
                    <div class="row d-flex flex-column justify-content-center" style="height: 100vh;">
                        <div class="row d-flex flex-row justify-content-center" style="width: 100%;">
                            <svg width="350" height="300" viewBox="0 0 350 300" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M89.6829 72.183L216.342 0L343 72.1829L274.882 111.865L216.342 77.2787L157.827 111.85L89.6829 72.183Z"
                                    fill="#434343" class="logo1" />
                                <path d="M210.415 300L83 227.395V192.329L210.415 264.332V300Z" fill="#434343"
                                    class="logo1" />
                                <path
                                    d="M153.518 186.099L210.414 218.118L210.416 218.119V253.482L83.0469 181.521L83.0001 181.602V150L118.267 169.818V164.188L83.0001 144.37V121.774L118.267 141.593V135.963L83.0001 116.144L83.0001 93.5484L118.267 113.367V107.737L83.0001 87.9183V82.2654L153.518 121.895V186.099Z"
                                    fill="#434343" class="logo1" />
                                <path d="M318.985 209.374V99.5091L349.669 82.2666V227.396L222.252 299.998V264.291"
                                    fill="#434343" class="logo1" />
                                <path
                                    d="M279.152 186.097V121.893L309.836 104.65V204.13L222.252 253.823V218L279.152 186.097Z"
                                    fill="#434343" class="logo1" />
                                <path
                                    d="M210.586 167.226V218.128L204.916 214.937V170.502L196.192 165.629L190.522 162.457V156.018L196.192 159.186L196.694 159.466L204.916 164.058L210.586 167.226Z"
                                    fill="#434343" class="logo2" id="logo21" />
                                <path
                                    d="M228.094 170.502V214.938L222.424 218.01V167.226L228.094 164.058L236.787 159.199L236.818 159.186V125.589L228.173 120.756L222.503 117.588V111.162L228.173 114.33L236.818 119.159V119.149L236.914 119.202H236.927V119.209L242.457 122.303V162.474L236.818 165.629L236.787 165.642L228.094 170.502Z"
                                    fill="#434343" class="logo2" id="logo22" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M158 111.86L201.95 137.437C201.373 139.055 201.078 140.759 201.079 142.476C201.072 146.099 202.365 149.608 204.728 152.376C207.091 155.145 210.371 156.993 213.982 157.593C217.594 158.192 221.304 157.503 224.45 155.649C227.597 153.795 229.976 150.896 231.164 147.469C232.353 144.041 232.273 140.308 230.939 136.933C229.605 133.558 227.103 130.762 223.88 129.041C220.657 127.321 216.921 126.789 213.338 127.539C209.755 128.289 206.558 130.274 204.316 133.139L162.842 109L158 111.86ZM216.341 153.01C222.14 153.01 226.841 148.31 226.841 142.51C226.841 136.711 222.14 132.01 216.341 132.01C210.542 132.01 205.841 136.711 205.841 142.51C205.841 148.31 210.542 153.01 216.341 153.01Z"
                                    fill="#434343" class="logo2" id="logo23" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M153.849 122.321L83.3312 82.6918V82.6993L30.2525 52.8778C31.6302 49.2372 31.5709 45.2167 30.0866 41.6175C28.6022 38.0182 25.8018 35.1045 22.2433 33.4569C18.6848 31.8094 14.6295 31.549 10.8856 32.7276C7.14176 33.9063 3.98418 36.4374 2.04211 39.8167C0.100048 43.1959 -0.483888 47.1751 0.406669 50.9613C1.29723 54.7475 3.59689 58.0627 6.84737 60.2462C10.0979 62.4297 14.0605 63.3212 17.9456 62.7431C21.8307 62.165 25.3531 60.1596 27.8107 57.1267L83.3312 88.3297V88.3448L118.598 108.163V113.793L83.3312 93.9749V110.925L46.5965 90.2867C47.9763 86.652 47.9216 82.6364 46.4432 79.0399C44.9647 75.4434 42.1712 72.53 38.619 70.8803C35.0669 69.2305 31.017 68.9654 27.2762 70.1379C23.5353 71.3103 20.3783 73.8342 18.434 77.2067C16.4896 80.5792 15.9008 84.5527 16.7848 88.3355C17.6688 92.1183 19.9607 95.4328 23.2038 97.6185C26.447 99.8041 30.4034 100.701 34.2846 100.129C38.1659 99.558 41.6872 97.5607 44.1469 94.5356L83.3311 116.556V116.571L118.598 136.389V142.019L83.3311 122.201V139.151L61.2553 126.747C62.6282 123.111 62.5663 119.097 61.0819 115.504C59.5975 111.911 56.7996 109.004 53.2457 107.36C49.6917 105.717 45.6425 105.459 41.905 106.638C38.1674 107.817 35.0158 110.345 33.078 113.72C31.1402 117.095 30.5585 121.068 31.4489 124.848C32.3392 128.628 34.6362 131.938 37.8822 134.117C41.1282 136.297 45.0849 137.186 48.9639 136.608C52.843 136.031 56.3597 134.028 58.8134 131L83.3311 144.781V144.797L118.598 164.615V170.245L83.3312 150.426V182.028L83.378 181.947C108.246 195.997 113.43 198.967 118.612 201.936L118.613 201.937C123.796 204.906 128.979 207.875 153.849 221.927V122.321ZM15.5 57.4265C21.299 57.4265 26 52.7255 26 46.9265C26 41.1275 21.299 36.4265 15.5 36.4265C9.70101 36.4265 5 41.1275 5 46.9265C5 52.7255 9.70101 57.4265 15.5 57.4265ZM42 84.9265C42 90.7255 37.299 95.4265 31.5 95.4265C25.701 95.4265 21 90.7255 21 84.9265C21 79.1275 25.701 74.4265 31.5 74.4265C37.299 74.4265 42 79.1275 42 84.9265ZM46.5 131.427C52.299 131.427 57 126.726 57 120.927C57 115.128 52.299 110.427 46.5 110.427C40.701 110.427 36 115.128 36 120.927C36 126.726 40.701 131.427 46.5 131.427Z"
                                    fill="#434343" class="logo3" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row d-flex flex-column justify-content-center" style="height: 100vh;">
                        <div class="row d-flex flex-row justify-content-center" style="width: 100%;">
                            <div class="col-md-12">
                                <h1 class="font-weight-bold text-center display-4 text-secondary">
                                    Filosofi Logo</h1>
                                <p class="mt-2" id="desc-logo">[Klik Logo digambar sebelah
                                    untuk melihat]</p>
                                <p data-logo="1" id="desc-logo1" class="text-white">
                                    <span class="text-color-1 font-weight-bold">Bentuk</span><span
                                        class="text-color-2 font-weight-bold"> hexagon</span>
                                    terinspirasi dari bentuk sarang lebah yang diciptakan oleh Tuhan dengan
                                    teknologi yang
                                    sangat tinggi, seperti sarang lebah dengan bentuk hexagonalnya yang memberikan
                                    efektifitas dengan hasil
                                    maksimal.
                                </p>
                                <p data-logo="2" id="desc-logo2" class="text-white">
                                    <span class="text-color-1 font-weight-bold">Bentuk</span><span
                                        class="text-color-2 font-weight-bold"> alat</span> ini
                                    melambangkan Ke-Teknikan yang mengacu pada 3 bentuk landasan yaitu
                                    hubungan, kerjasama,
                                    dan keterkaitan. Dimana ketiga landasan tersebut menjadi pondasi awal dalam meraih
                                    keberhasilan.
                                </p>
                                <p data-logo="3" id="desc-logo3" class="text-white">
                                    <span class="text-color-1 font-weight-bold">Bentuk</span><span
                                        class="text-color-2 font-weight-bold">
                                        jaringan</span>(<i>Connection</i>) melambangkan hubungan dan relasi yang kuat,
                                    cepat,
                                    kompetitif, dan
                                    semangat juara. Tingatan tersebut juga berarti ada pencapaian dan perkembangan yang
                                    didapat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="logo-kabinet">
        <div class="mycontainer">
            <div class="row">
                <div class="col-md-6">
                    <div class="row d-flex flex-column justify-content-center" style="height: 100vh;">
                        <div class="row d-flex flex-row justify-content-center" style="width: 100%;">
                            <svg width="412" height="412" viewBox="0 0 412 412" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="412" height="412" rx="66" fill="#414142" />
                                <g class="lamp">
                                    <path
                                        d="M149 214.5V205V203C149 201 149.5 201 150 197.5C150.4 194.7 151.833 190.667 152.5 189L158.5 177L168 159L182 133.5C185.5 127.333 192.8 114.4 194 112C195.2 109.6 196.833 108.333 197.5 108C198.5 107 199.5 106.5 204 105.5C207.6 104.7 211.5 106.167 213 107C216.6 109.4 219.167 114 220 116L236 144.5L252 174.5C253.333 177 256.6 183.2 259 188C261.4 192.8 262.667 201.333 263 205V214.5H272.5V205C272.5 203 271 194 269.5 190C269.4 187.5 263.167 175.333 260 169.5L236 125L224 104C223.333 103 220.7 100.4 215.5 97.9999C210.3 95.5999 204 95.9999 201.5 96.4999C194.3 97.2999 188.833 102.833 187 105.5L181 116L171 134L159 156L147.5 178C142.5 186.5 141 195 140 200C139.2 204 139.333 211.333 139.5 214.5H149Z"
                                        fill="#838383" class="panah" />
                                    <path
                                        d="M205.957 268.621C171.796 268.621 144.1 246.748 144.1 212.592C144.1 246.748 171.796 274.447 205.956 274.447C240.117 274.447 267.814 246.748 267.814 212.592C267.814 246.748 240.118 268.621 205.957 268.621Z"
                                        fill="#838383" class="moon" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M206 76.8999C212.904 76.8999 218.5 71.3035 218.5 64.3999C218.5 57.4963 212.904 51.8999 206 51.8999C199.096 51.8999 193.5 57.4963 193.5 64.3999C193.5 71.3035 199.096 76.8999 206 76.8999ZM205.9 67.9009C207.833 67.9009 209.4 66.3339 209.4 64.4009C209.4 62.4679 207.833 60.9009 205.9 60.9009C203.967 60.9009 202.4 62.4679 202.4 64.4009C202.4 66.3339 203.967 67.9009 205.9 67.9009Z"
                                        fill="#838383" class="dot" />
                                </g>
                                <g class="inspira-text">
                                    <path
                                        d="M122 300.111C122 298.641 123.192 297.45 124.663 297.45C126.135 297.45 127.328 298.641 127.328 300.111V339.499C127.328 340.97 126.135 342.161 124.663 342.161C123.192 342.161 122 340.97 122 339.499V300.111Z"
                                        fill="#838383" class="use-color-ins-1" />
                                    <path
                                        d="M139.567 339.541C139.567 340.271 139.308 340.887 138.791 341.386C138.272 341.902 137.657 342.162 136.946 342.162H136.86C136.149 342.162 135.535 341.902 135.016 341.386C134.499 340.887 134.239 340.271 134.239 339.541V323.789C134.239 320.179 135.516 317.099 138.07 314.543C140.622 311.99 143.705 310.715 147.313 310.715C150.903 310.715 153.975 311.99 156.529 314.543C159.082 317.099 160.358 320.179 160.358 323.789V339.541C160.358 340.271 160.1 340.887 159.581 341.386C159.082 341.902 158.467 342.162 157.738 342.162H157.68C156.95 342.162 156.327 341.902 155.808 341.386C155.29 340.887 155.031 340.271 155.031 339.541V323.789C155.031 321.658 154.282 319.835 152.785 318.318C151.268 316.802 149.445 316.043 147.313 316.043C145.164 316.043 143.329 316.802 141.813 318.318C140.316 319.835 139.567 321.658 139.567 323.789V339.541Z"
                                        fill="#838383" class="use-color-ins-1" />
                                    <path
                                        d="M174.182 316.043C173.106 316.043 172.194 316.418 171.446 317.164C170.698 317.934 170.321 318.846 170.321 319.901C170.321 321.399 171.033 322.525 172.454 323.269C172.895 323.501 174.556 324.001 177.435 324.767C179.587 325.384 181.16 326.17 182.159 327.131C183.578 328.474 184.29 330.422 184.29 332.977C184.29 335.511 183.396 337.681 181.612 339.485C179.806 341.271 177.636 342.161 175.104 342.161H167.587C166.876 342.161 166.261 341.902 165.745 341.386C165.226 340.886 164.967 340.27 164.967 339.542V339.485C164.967 338.754 165.226 338.13 165.745 337.615C166.261 337.095 166.876 336.832 167.587 336.832H175.392C176.467 336.832 177.378 336.461 178.128 335.709C178.875 334.963 179.25 334.051 179.25 332.977C179.25 331.557 178.54 330.5 177.118 329.809C176.792 329.656 175.132 329.154 172.138 328.311C170.006 327.677 168.431 326.869 167.413 325.89C165.993 324.492 165.283 322.495 165.283 319.901C165.283 317.365 166.176 315.21 167.96 313.422C169.766 311.615 171.935 310.714 174.47 310.714H179.768C180.497 310.714 181.122 310.977 181.64 311.493C182.159 312.012 182.417 312.637 182.417 313.363V313.422C182.417 314.153 182.159 314.765 181.64 315.264C181.122 315.784 180.497 316.043 179.768 316.043H174.182Z"
                                        fill="#838383" class="use-color-ins-1" />
                                    <path
                                        d="M211.962 333.725C213.998 331.689 215.017 329.242 215.017 326.38C215.017 323.501 213.998 321.043 211.962 319.01C209.948 316.994 207.501 315.985 204.619 315.985C201.741 315.985 199.283 316.994 197.247 319.01C195.232 321.043 194.225 323.501 194.225 326.38C194.225 329.242 195.232 331.689 197.247 333.725C199.283 335.761 201.741 336.777 204.619 336.777C207.501 336.777 209.948 335.761 211.962 333.725ZM191.516 354C190.807 354 190.192 353.739 189.675 353.22C189.157 352.701 188.897 352.087 188.897 351.375V326.38C188.916 322.043 190.462 318.345 193.533 315.295C196.587 312.24 200.281 310.714 204.619 310.714C208.958 310.714 212.663 312.253 215.735 315.324C218.811 318.393 220.344 322.1 220.344 326.441C220.344 330.777 218.811 334.482 215.735 337.555C212.663 340.626 208.958 342.161 204.619 342.161C200.646 342.161 197.18 340.847 194.225 338.217V351.375C194.225 352.087 193.965 352.701 193.448 353.22C192.928 353.739 192.313 354 191.604 354H191.516Z"
                                        fill="#838383" class="use-color-ins-1" />
                                    <path
                                        d="M229.014 310.715C229.74 310.715 230.355 310.977 230.853 311.493C231.373 312.013 231.631 312.638 231.631 313.364V339.541C231.631 340.271 231.373 340.887 230.853 341.386C230.355 341.903 229.74 342.162 229.014 342.162H228.954C228.222 342.162 227.601 341.903 227.082 341.386C226.564 340.887 226.309 340.271 226.309 339.541V313.364C226.309 312.638 226.564 312.013 227.082 311.493C227.601 310.977 228.222 310.715 228.954 310.715H229.014Z"
                                        fill="#838383" class="use-color-ins-1" />
                                    <path
                                        d="M251.967 310.715C252.693 310.715 253.317 310.977 253.837 311.493C254.334 312.013 254.584 312.638 254.584 313.364V313.423C254.584 314.154 254.334 314.765 253.837 315.264C253.317 315.784 252.693 316.043 251.967 316.043H250.32C248.517 316.043 246.981 316.679 245.714 317.944C244.468 319.209 243.831 320.744 243.813 322.551V339.541C243.813 340.271 243.554 340.887 243.034 341.386C242.516 341.903 241.903 342.162 241.194 342.162H241.105C240.395 342.162 239.782 341.903 239.262 341.386C238.744 340.887 238.487 340.271 238.487 339.541V322.551C238.526 319.269 239.676 316.478 241.943 314.171C244.245 311.868 247.039 310.715 250.32 310.715H251.967Z"
                                        fill="#838383" class="use-color-ins-1" />
                                    <path
                                        d="M266.103 319.096C264.085 321.132 263.081 323.578 263.081 326.441C263.081 329.321 264.085 331.777 266.103 333.812C268.138 335.828 270.595 336.833 273.476 336.833C276.355 336.833 278.802 335.828 280.818 333.812C282.856 331.777 283.871 329.321 283.871 326.441C283.871 323.578 282.856 321.132 280.818 319.096C278.802 317.064 276.355 316.043 273.476 316.043C270.595 316.043 268.138 317.064 266.103 319.096ZM284.593 315.324C287.662 318.393 289.2 322.1 289.2 326.441V339.541C289.2 340.271 288.939 340.887 288.421 341.386C287.903 341.903 287.288 342.162 286.58 342.162H286.491C285.783 342.162 285.169 341.903 284.65 341.386C284.131 340.887 283.871 340.271 283.871 339.541V338.217C280.895 340.847 277.429 342.162 273.476 342.162C269.136 342.162 265.431 340.627 262.359 337.556C259.288 334.482 257.752 330.777 257.752 326.441C257.752 322.1 259.288 318.393 262.359 315.324C265.431 312.253 269.136 310.715 273.476 310.715C277.814 310.715 281.52 312.253 284.593 315.324Z"
                                        fill="#838383" class="use-color-ins-1" />
                                    <path
                                        d="M231.513 301.993C231.513 303.462 230.322 304.655 228.851 304.655C227.381 304.655 226.187 303.462 226.187 301.993V300.112C226.187 298.641 227.381 297.449 228.851 297.449C230.322 297.449 231.513 298.641 231.513 300.112V301.993Z"
                                        fill="#838383" class="triple-dots use-color-ins-2" />
                                    <path
                                        d="M225.211 305.885C226.25 306.923 226.25 308.612 225.211 309.649C224.169 310.692 222.482 310.692 221.443 309.649L220.113 308.322C219.074 307.283 219.074 305.592 220.113 304.557C221.153 303.514 222.84 303.514 223.88 304.557L225.211 305.885Z"
                                        fill="#838383" class="triple-dots use-color-ins-2" />
                                    <path
                                        d="M236.375 309.649C235.333 310.692 233.647 310.692 232.608 309.649C231.566 308.611 231.566 306.922 232.608 305.885L233.938 304.553C234.977 303.514 236.663 303.514 237.704 304.553C238.744 305.592 238.744 307.28 237.704 308.322L236.375 309.649Z"
                                        fill="#838383" class="triple-dots use-color-ins-2" />
                                    <path
                                        d="M269.731 354.776H264.607V354.062L267.314 351.054C267.715 350.599 267.991 350.231 268.141 349.948C268.295 349.661 268.372 349.366 268.372 349.062C268.372 348.653 268.249 348.319 268.001 348.057C267.754 347.796 267.425 347.665 267.013 347.665C266.519 347.665 266.134 347.806 265.858 348.089C265.586 348.369 265.45 348.759 265.45 349.26H264.457C264.457 348.541 264.688 347.959 265.149 347.515C265.615 347.071 266.236 346.849 267.013 346.849C267.74 346.849 268.315 347.04 268.737 347.423C269.16 347.803 269.371 348.31 269.371 348.943C269.371 349.713 268.881 350.63 267.899 351.693L265.805 353.965H269.731V354.776ZM275.688 351.441C275.688 352.605 275.489 353.469 275.091 354.035C274.694 354.601 274.073 354.884 273.228 354.884C272.393 354.884 271.776 354.608 271.375 354.057C270.973 353.502 270.766 352.674 270.751 351.575V350.249C270.751 349.099 270.95 348.245 271.348 347.687C271.745 347.128 272.368 346.849 273.217 346.849C274.058 346.849 274.678 347.119 275.075 347.66C275.473 348.197 275.677 349.028 275.688 350.152V351.441ZM274.694 350.082C274.694 349.241 274.576 348.628 274.339 348.245C274.103 347.858 273.729 347.665 273.217 347.665C272.708 347.665 272.338 347.857 272.105 348.24C271.872 348.623 271.752 349.212 271.745 350.007V351.597C271.745 352.442 271.867 353.067 272.11 353.471C272.357 353.872 272.73 354.073 273.228 354.073C273.718 354.073 274.082 353.883 274.318 353.503C274.558 353.124 274.683 352.526 274.694 351.709V350.082ZM282.084 354.776H276.96V354.062L279.667 351.054C280.069 350.599 280.344 350.231 280.495 349.948C280.649 349.661 280.726 349.366 280.726 349.062C280.726 348.653 280.602 348.319 280.355 348.057C280.108 347.796 279.778 347.665 279.367 347.665C278.873 347.665 278.488 347.806 278.212 348.089C277.94 348.369 277.804 348.759 277.804 349.26H276.81C276.81 348.541 277.041 347.959 277.503 347.515C277.968 347.071 278.59 346.849 279.367 346.849C280.094 346.849 280.668 347.04 281.091 347.423C281.513 347.803 281.725 348.31 281.725 348.943C281.725 349.713 281.234 350.63 280.253 351.693L278.158 353.965H282.084V354.776ZM286.403 354.776H285.404V348.154L283.4 348.89V347.987L286.247 346.918H286.403V354.776Z"
                                        fill="#838383" class="tahun use-color-ins-1" />
                                    <path
                                        d="M135.696 302.466L134.74 303.459V306.102H133.708V298.282H134.74V302.149L138.215 298.282H139.461L136.383 301.735L139.703 306.102H138.467L135.696 302.466ZM144.037 306.102C143.98 305.987 143.933 305.783 143.897 305.49C143.436 305.97 142.884 306.209 142.243 306.209C141.67 306.209 141.199 306.048 140.831 305.726C140.465 305.4 140.283 304.988 140.283 304.491C140.283 303.886 140.512 303.417 140.97 303.083C141.432 302.747 142.08 302.579 142.915 302.579H143.881V302.122C143.881 301.775 143.778 301.499 143.57 301.295C143.362 301.087 143.056 300.983 142.651 300.983C142.297 300.983 142 301.073 141.76 301.252C141.52 301.431 141.4 301.648 141.4 301.902H140.401C140.401 301.612 140.503 301.333 140.707 301.064C140.915 300.792 141.194 300.577 141.545 300.419C141.899 300.262 142.288 300.183 142.71 300.183C143.38 300.183 143.905 300.351 144.284 300.688C144.664 301.021 144.861 301.481 144.875 302.068V304.743C144.875 305.277 144.943 305.701 145.079 306.016V306.102H144.037ZM142.388 305.345C142.7 305.345 142.995 305.264 143.274 305.103C143.554 304.942 143.756 304.732 143.881 304.475V303.282H143.103C141.885 303.282 141.276 303.639 141.276 304.351C141.276 304.663 141.38 304.906 141.588 305.082C141.796 305.257 142.062 305.345 142.388 305.345ZM151.353 303.261C151.353 304.149 151.148 304.863 150.74 305.404C150.332 305.941 149.784 306.209 149.097 306.209C148.363 306.209 147.795 305.95 147.394 305.431L147.346 306.102H146.433V297.852H147.426V300.93C147.827 300.432 148.381 300.183 149.086 300.183C149.791 300.183 150.345 300.45 150.746 300.983C151.15 301.517 151.353 302.247 151.353 303.175V303.261ZM150.359 303.148C150.359 302.471 150.228 301.948 149.967 301.58C149.705 301.211 149.329 301.026 148.839 301.026C148.184 301.026 147.713 301.331 147.426 301.939V304.453C147.731 305.062 148.205 305.366 148.85 305.366C149.326 305.366 149.696 305.182 149.961 304.813C150.226 304.444 150.359 303.889 150.359 303.148ZM153.689 306.102H152.695V300.291H153.689V306.102ZM152.615 298.749C152.615 298.588 152.663 298.452 152.76 298.341C152.86 298.23 153.007 298.174 153.2 298.174C153.394 298.174 153.54 298.23 153.641 298.341C153.741 298.452 153.791 298.588 153.791 298.749C153.791 298.91 153.741 299.044 153.641 299.152C153.54 299.259 153.394 299.313 153.2 299.313C153.007 299.313 152.86 299.259 152.76 299.152C152.663 299.044 152.615 298.91 152.615 298.749ZM156.224 300.291L156.256 301.021C156.7 300.462 157.28 300.183 157.997 300.183C159.225 300.183 159.844 300.876 159.855 302.262V306.102H158.861V302.256C158.858 301.837 158.761 301.528 158.571 301.327C158.385 301.127 158.093 301.026 157.696 301.026C157.374 301.026 157.091 301.112 156.847 301.284C156.604 301.456 156.414 301.682 156.278 301.961V306.102H155.284V300.291H156.224ZM163.765 306.209C162.977 306.209 162.336 305.952 161.842 305.436C161.348 304.917 161.101 304.224 161.101 303.357V303.175C161.101 302.598 161.21 302.084 161.429 301.633C161.651 301.179 161.959 300.824 162.353 300.57C162.75 300.312 163.18 300.183 163.642 300.183C164.397 300.183 164.984 300.432 165.403 300.93C165.822 301.427 166.032 302.14 166.032 303.067V303.481H162.095C162.109 304.054 162.276 304.518 162.594 304.872C162.917 305.223 163.325 305.398 163.819 305.398C164.17 305.398 164.467 305.327 164.71 305.184C164.954 305.04 165.167 304.851 165.35 304.614L165.957 305.087C165.47 305.835 164.739 306.209 163.765 306.209ZM163.642 301C163.241 301 162.904 301.146 162.632 301.44C162.36 301.73 162.191 302.138 162.127 302.665H165.038V302.589C165.009 302.084 164.873 301.694 164.63 301.418C164.386 301.139 164.057 301 163.642 301ZM168.535 298.883V300.291H169.62V301.059H168.535V304.663C168.535 304.895 168.583 305.071 168.68 305.189C168.776 305.304 168.941 305.361 169.174 305.361C169.288 305.361 169.446 305.339 169.646 305.296V306.102C169.385 306.174 169.131 306.209 168.884 306.209C168.44 306.209 168.105 306.075 167.879 305.807C167.654 305.538 167.541 305.157 167.541 304.663V301.059H166.483V300.291H167.541V298.883H168.535Z"
                                        fill="#838383" class="kabinet use-color-ins-2" />
                                </g>
                                <path
                                    d="M175.734 204.057H165.06L159.414 209.702H148.957M175.734 204.057C175.734 208.397 179.249 211.91 183.586 211.91C187.922 211.91 191.438 208.397 191.438 204.057C191.438 199.725 187.922 196.206 183.586 196.206C179.249 196.206 175.734 199.725 175.734 204.057ZM262.957 209.702H253.214L247.569 204.057H236.18M236.18 204.057C236.18 208.397 232.665 211.91 228.331 211.91C223.994 211.91 220.476 208.397 220.476 204.057C220.476 199.725 223.994 196.206 228.331 196.206C232.665 196.206 236.18 199.725 236.18 204.057Z"
                                    stroke="#838383" class="pcb" stroke-width="9.33333" stroke-miterlimit="10" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row d-flex flex-column justify-content-center" style="height: 100vh;">
                        <div class="row d-flex flex-row justify-content-center" style="width: 100%;">
                            <div class="col-md-12">
                                <h1 class="font-weight-bold text-center display-4 text-secondary">
                                    Filosofi Logo Kabinet</h1>
                                <p id="pre-text-kabinet">[Klik Logo kabinet untuk melihat]</p>
                                <div data-logo-kab="panah" class="desc-logo-kabinet">
                                    <h5>Panah</h5>
                                    Melambangkan kemajuan serta kejayaan organisasi
                                </div>
                                <div data-logo-kab="pcb" class="desc-logo-kabinet">
                                    <h5>PCB</h5>
                                    Melambangkan solidaritas dan kerja sama tim tanpa memandang jabatan atau posisi
                                </div>
                                <div data-logo-kab="moon" class="desc-logo-kabinet">
                                    <h5>Bulan Sabit</h5>
                                    Melambangkan bahwa akan terus malukakan perbaikan dalam kinerjanya ke arah yang lebih
                                    baik
                                </div>
                                <div data-logo-kab="inspira-text" class="desc-logo-kabinet">
                                    <h5>Kabinet Inspira</h5>
                                    Inspira yang diambil dari kata inspiratif, artinya segala hal yang dapat memberikan
                                    dorongan dalam melakukan sesuatu
                                </div>
                                <div data-logo-kab="lamp" class="desc-logo-kabinet">
                                    <h5>Lampu atau Huruf I</h5>
                                    Huruf I adalah inisial dari nama kabinet yaiut Inspira, sedangkan lampu melambangkan
                                    Inspirasi
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sejarah">
        <div class="mycontainer">
            <div class="row d-flex flex-column justify-content-center">
                <div class="row d-flex flex-row justify-content-center" style="width: 100%;">
                    <div class="col-md-12 px-lg-4 mx-lg-4">
                        <div class="text-center mb-4 text-light">
                            <h2 class="font-weight-bold display-4" down">Sejarah</h2>
                            <p class="mt-4 text-justify" down">
                                HIMARPL atau Himpunan Mahasiswa Rekayasa Perangkat Lunak dibentuk pada 14 Desember 2019 yang
                                berada di Universitas Pendidikan Indonesia Kampus Daerah Cibiru, HIMARPL merupakan satu
                                –satunya organisasi kemahasiswaan pada program studi rekayasa perangkat lunak. HIMARPL
                                dibentuk pada saat mekanisme forum demokrasi tertinggi yaitu dalam musyawarah mahasiswa
                                HIMARPL yang dihadiri oleh seluruh angkatan pertama program studi Rekayasa Perangkat Lunak.
                                Pembentukan HIMARPL diinisisasi oleh Tim Formatur HIMARPL yang beranggotakan, Muhammad
                                Farrelnurilwanu, Syihan Al-Khairi, Daffa Almer Fauzan, Fauzan Sukmapratama, Goldly Heryanto,
                                Muhammad Fakhri dan Irfan Cahyo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pimpinan">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex flex-column justify-content-center vh-100 text-center">
                        <h3 class="font-weight-bold text-center">Pimpinan Badan Eksekutif</h3>
                        <div class="about-item-timeline-wrap">
                            <div class="about-item-timeline">
                                <div class="item-timeline">
                                    <div class="item-timeline-date wow fadeIn" data-wow-delay="0.6s"
                                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                                        <i class="fas fa-clock"></i> 2019 - 2020
                                    </div>
                                    <h4 class="item-timeline-title wow fadeInUp" data-wow-delay="0.3s"
                                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                        <br><br>RAYHAN WIBOWO
                                    </h4>
                                </div>
                                <div class="item-timeline">
                                    <div class="item-timeline-date wow fadeIn" data-wow-delay="0.6s"
                                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                                        <i class="fas fa-clock"></i> 2021-Sekarang
                                    </div>
                                    <h4 class="item-timeline-title wow fadeInUp" data-wow-delay="0.3s"
                                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                        <br><br>MUHAMMAD REYNALDI
                                    </h4>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex flex-column justify-content-center vh-100 text-center">

                        <h3 class="font-weight-bold text-center">Pimpinan Dewan Pengawas</h3>
                        <div class="about-item-timeline-wrap">
                            <div class="about-item-timeline">
                                <div class="item-timeline">
                                    <div class="item-timeline-date wow fadeIn" data-wow-delay="0.6s"
                                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                                        <i class="fas fa-clock"></i> 2019 - 2020
                                    </div>
                                    <h4 class="item-timeline-title wow fadeInUp" data-wow-delay="0.3s"
                                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                        <br><br>GUNTUR RAMADHAN
                                    </h4>
                                </div>
                                <div class="item-timeline">
                                    <div class="item-timeline-date wow fadeIn" data-wow-delay="0.6s"
                                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                                        <i class="fas fa-clock"></i> 2021 - Sekarang
                                    </div>
                                    <h4 class="item-timeline-title wow fadeInUp" data-wow-delay="0.3s"
                                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                        <br><br>ATHOILLAH
                                        SHOLAHUDDIN
                                    </h4>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
