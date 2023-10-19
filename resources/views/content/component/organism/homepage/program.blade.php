<link rel="stylesheet" href="{{ asset('asset/css/program-homepage.css') }}">
<div class="container-fluid bagan-program w-100  " >
    <div class="container-fluid d-flex flex-column align-items-center ">

    </div>
    <div class=" d-flex flex-column">
        <div class=" container-fluid w-75 p-3  ">
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
                {{-- slide button  --}}
                <div class="col d-flex flex-column btn_posision  align-items-end ">
                    <div class="col-md-12" style="width: 80px; float:right;">
                        <div class="carousel-buttons">
                            <a
                                class="carousel-control-prev"
                                href="#myCarousel"
                                role="button"
                                data-slide="prev"
                            >
                                <span
                                    class="carousel-control-prev-icon"
                                    aria-hidden="true"
                                ></span>
                                <span
                                    class="btn text-light align-self-start _slide py-2"
                                    style="
                                    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
                                    background: #FEFEFE;
                                "
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
                                    class="btn align-self-start _slide py-2"
                                    style="
                                        background-color: rgba(
                                            255,
                                            116,
                                            104,
                                            1
                                        );
                                        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
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
            <div
                id="myCarousel"
                class="carousel slide d-flex"
                data-ride="carousel"
            >
                <div class="carousel-inner ">
                    <!-- Slide 1 content -->
                    <div class="carousel-item active">
                        @include('content.component.organism.program.card-content')
                    </div>
                    <!-- Slide 2 content -->
                    <div class="carousel-item">
                        @include('content.component.organism.program.card-content')
                    </div>
                    <!-- Add more slides as needed -->
                </div>
                <!-- Navigation buttons -->
        </div>
    </div>
</div>
