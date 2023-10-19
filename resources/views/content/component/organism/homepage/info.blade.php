<link rel="stylesheet" href="{{ asset('asset/css/info-homepage.css') }}">
<div class="container-xxl py-5 d-flex flex-column cont"  >
<div class="row justify-content-center align-items-center py-5">
    <!-- Kolom untuk Desktop -->
    <div class="col-lg-6 col-md-12 d-flex flex-column title-info ml-auto ">
        <div class="container-fluid w-100">
             <div  class="berbagi">
            <h1 class="font-weight-bold  main_title mx-auto d-flex flex-column ">
                <div class="">Berbagi <b class="text-1">kebahagiaan</b></div>
                untuk mereka yang
                <b class="text-2">membutuhkan</b>
            </h1>
            <p class="text-secondary parag_2 ">
                spSetiap hari banyak sekali saudara kita
                diluar sana yang membutuhkan bantuan
                kita. Siapkan infaq terbaik anda
                untuk jadi pahlawan.
            </p>
        </div>
        </div>

    </div>
    <!-- Kolom untuk Desktop -->

    <!-- Kolom untuk Mobile -->
    @include('content.component.molecules.homepage.data-donate')
    <!-- Kolom untuk Mobile -->
</div>
</div>
