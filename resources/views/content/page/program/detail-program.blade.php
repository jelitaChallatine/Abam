@extends('content/index')
@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('asset/css/program/detail-program-page.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('asset/css/detail-program-page.css') }}">
</head>
<body>
    <div class="bg-utama">
        <div class="row w-100">
           <nav class="navbar navbar-expand-lg navbar-dark">
              <div class="container-fluid">
                 <a class="navbar-brand" href="#" style="margin-left: 50px; margin-top: 9px;">
                 <img src="asset/logo.png" height="25" alt="" />
                 </a>
                 <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                    style="border:
                    1px solid rgba(0, 0, 0, 0.458);
                    color: rgba(0, 0, 0, 0.458);"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 50 50">
                       <path d="M39.5 37c.276 0 .5.224.5.5 0 .276-.224.5-.5.5-.062 0-28.938 0-29 0-.276 0-.5-.224-.5-.5 0-.276.224-.5.5-.5C10.562 37 39.438 37 39.5 37zM39.5 24.5c.276 0 .5.224.5.5 0 .276-.224.5-.5.5-.062 0-28.938 0-29 0-.276 0-.5-.224-.5-.5 0-.276.224-.5.5-.5C10.562 24.5 39.438 24.5 39.5 24.5zM39.5 12c.276 0 .5.224.5.5 0 .276-.224.5-.5.5-.062 0-28.938 0-29 0-.276 0-.5-.224-.5-.5 0-.276.224-.5.5-.5C10.562 12 39.438 12 39.5 12z"></path>
                       </svg>
                 </button>
                 @include('.content/component/navbar')
              </div>
           </nav>
        </div>
        <div class="container py-3 px-5 pt-5">
            <div class="centered-text d-flex justify-content-center "   >
                <p class="title display-5 w-75 text-center">Sunat masal untuk 1000 Yatim Dhuafa Pelosok Jawa Barat</p>
            </div>
        </div>

     </div>

     <div class=" container px-1 pt-3">
        <div class="container d-flex justify-content-between align-items-end px-6 w-75">
        <div class="d-flex flex-column align-items-start ">
           <div>
              <span class="title_rinc">Terkumpul</span>
           </div>
           <div>
              <b class="rinc">Rp 3.021.000</b>
           </div>
        </div>
        <div class="d-flex flex-column align-items-start">
           <div>
              <span class="title_rinc">Target</span>
           </div>
           <div>
              <b class="rinc">Rp 3.021.000</b>
           </div>
        </div>
     </div>
        <div class=" py-4 px-6 ">
         <div class="container w-75">
         <div class="prog-bg w-100 " >
           <div class="progres ">
              <div class="posision-persen">
                 <span>49%</span>
                 <div class="posision-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                       <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2z" fill="rgba(90, 172, 168, 1)" />
                    </svg>
                 </div>
              </div>
           </div>
        </div>
         </div>

     </div>
     </div>
     <div class="container-fluid d-flex w-75 py-4b justify-content-center align-items-center">
                <img src="{{ asset('asset/image/program/kesehatan.png') }}" class="align-items-center justift-content-center w-75" alt="">
     </div>
     @include('content.component.organism.program.description-detail-page')

     <!-- button  -->
     <div class="container d-flex justify-content-center mt-5">
      <form class="form-btn-container d-flex justify-content-center">
         <a href="/checkout" class="btn text-light align-self-start" id="donate-button">Donasi Sekarang</a>
     </form>
     </div>
     <div class="container d-flex justify-content-center mt-5 ">
         <p class="text-bottom">
            Sahabat dermawan  yang mendukung program ini
         </p>
     </div>
     @include('content.component.organism.program.card-detail-program')
     <!-- pagination -->
     <div class="pagination-content container mt-1 mb-5 ">
      <ul class="pagination justify-content-center">
         <li class="page-item"><a class="page-link" href="#">1</a></li>
         <li class="page-item"><a class="page-link" href="#">2</a></li>
         <li class="page-item"><a class="page-link" href="#">3</a></li>
      </ul>
   </div>
</div>
</div>
</body>
</html>
@endsection
