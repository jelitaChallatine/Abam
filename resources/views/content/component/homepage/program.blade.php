<link rel="stylesheet" href="{{ asset('asset/css/program-homepage.css') }}">
<div class="bagan-program w-100 " >
        <div class="container d-flex flex-column">
            <div class="posi pt-5">
                <div class="row">
                    <div
                        class="col-md-6 d-flex flex-column justify-content-start align-items-start title_3"
                    >
                        <h1 class="font-weight-bold mb-4">
                            Mau
                            <b
                                style="
                                    color: #5aaca8;
                                    font-family: 'Lora', sans-serif;
                                "
                                >Berbagi</b
                            >
                            apa hari ini?
                        </h1>
                    </div>
                    <div class="col d-flex flex-column btn_posision">
                        <div class="col-md-12" style="width: 80px">
                            <div class="carousel-buttons bg-info">
                                <a
                                    class="carousel-control-prev "
                                    href="#myCarousel"
                                    role="button"
                                    data-slide="prev"
                                >
                                    <span
                                        class="carousel-control-prev-icon"
                                        aria-hidden="true"
                                    ></span>
                                    <span
                                        class="btn text-light align-self-start  py-2"
                                        style="background-color: rgb(255, 255, 255); box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"
                                                fill="rgba(255, 116, 104, 1)"
                                            />
                                        </svg>
                                    </span>
                                </a>
                                <a
                                    class="carousel-control-next"
                                    href="#myCarousel"
                                    role="button"
                                    data-slide="next"
                                >
                                    <span
                                        class="carousel-control-next-icon"
                                        aria-hidden="true"
                                    ></span>
                                    <span
                                        class="btn align-self-start  py-2"
                                        style="
                                            background-color: rgba(
                                                255,
                                                116,
                                                104,
                                                1
                                            );
                                        "
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"
                                                fill="white"
                                            />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5">
                <div
                    id="myCarousel"
                    class="carousel slide d-flex"
                    data-ride="carousel"
                >
                    <div class="carousel-inner">
                        <!-- Slide 1 content -->
                        <div class="carousel-item active">
                            @include('content.component.program.card-content')
                        </div>
                        <!-- Slide 2 content -->
                        <div class="carousel-item">
                            @include('content.component.program.card-content')
                        </div>
                        <!-- Add more slides as needed -->
                    </div>
                    <!-- Navigation buttons -->
                </div>
            </div>
        </div>
    </div>
