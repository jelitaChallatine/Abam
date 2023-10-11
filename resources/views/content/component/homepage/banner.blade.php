<link rel="stylesheet" href="{{ asset('asset/css/banner.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Raleway:wght@100&display=swap" rel="stylesheet">
<div class="col banner">
    <div  class="container-xxl d-flex flex-column bagan_1 ">
        <div class="container"  >
        <img
        id="bg-blue"
            src="{{ asset('asset/image/bg-blue.png') }}"
            alt=""
            class="position-absolute h-100 end-0 top-0 d-none d-lg-block"
            style="z-index: 0;"
            draggable="false"
        />
        </div>
        <div class="row w-100">
            <nav class="navbar navbar-expand-lg bg-transparent">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('asset/image/logo.png') }}" height="25" alt="" />
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse"
                        id="navbarSupportedContent"
                        style="z-index: 4"
                    >
                        <div
                            class="w-100 d-flex justify-content-center"
                        >
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a
                                        class="nav-link fs-6 text-dark"
                                        href="/tentang"
                                        >Tentang</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link fs-6 text-dark"
                                        href="/update"
                                        >Update</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link fs-6 text-dark"
                                        href="/program"
                                        >Program</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link fs-6 text-dark"
                                        href="Zakat/pay-zakat-page.html"
                                        >Zakat</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link fs-6 text-dark"
                                        href="qurban-page.html"
                                        >Qurban</a
                                    >
                                </li>
                            </ul>
                        </div>
                        <form class="d-flex justify-content-center">
                            <a
                                href="login/login-page.html"
                                class="btn text-{{ $login }} login-regis Login "
                                >Login</a
                            >
                            <a
                                href="login/registrasi-page.html"
                                class="btn border border-{{ $navbar }} text-{{ $navbar }} login-regis register"
                                >Register</a
                            >
                        </form>
                    </div>
                </div>
            </nav>
        </div>

        <div class="row lay1 d-flex mb-5 h-75 ">
            <div
                class="col d-flex pb-5 flex-column justify-content-center align-items-start w-100 "
            >
            <div class="container">
                <h1 class="font-weight-bold mb-2 title_1 display-5 ">
                    Berbagi
                    <b
                        class="rezeki"
                        >Rezeki</b
                    >, Bahagia dan
                    <b class="berpahala"
                        style="

                        "
                        >Berpahala</b
                    >.
                </h1>
                <p class="parag_1 text-secondary  with-paragraphs">
                    Pendidikan yang baik adalah kunci suksesnya <br>
                    kemerdekaan di Indonesia.
                </p>
                <div class="w-75 pt-5">
                    <a
                        href=""
                        class="btn text-light btn-lg align-self-start item-center donate-now"
                        style="background-color: rgba(255, 116, 104, 1)"
                        >Donate Now</a
                    >
</div>

            </div>
            </div>
                <img
                    src="asset/Untitled (1).png"
                    alt=""
                    style="width: 46%"
                    class=" bg_abam_posision position-absolute"
                />

            <div class="col-md-5 d-flex flex-column float-md-center mb-5 ms-md-5 bg-mobile w-100 justify-content-center my-4">
                <img
                    src="{{ asset('asset/image/banner-photo.png') }}"
                    alt=""
                    class="foto"
                    style="z-index: 2; "
                />
            </div>
        </div>
    </div>
</div>
