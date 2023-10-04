@extends('content/index')

@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/checkout-page.css" />
    <link href="https://fonts.cdnfonts.com/css/raleway-5" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora&family=Mulish:wght@200&display=swap" rel="stylesheet">

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
               <div class="collapse navbar-collapse" id="navbarSupportedContent" style="z-index: 4">
                  <div class="w-100 d-flex justify-content-center">
                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link fs-6 text-dark" href="index.html">Tentang</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link fs-6 text-dark" href="update.html">Update</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link fs-6 text-dark" href="program.html">Program</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link fs-6 text-dark" href="Zakat/pay-zakat-page.html">Zakat</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link fs-6 text-dark" href="qurban-page.html">Qurban</a>
                        </li>
                     </ul>
                  </div>
                  <form class=" form-btn-container d-flex justify-content-center">
                     <a href="login/login-page.html" class="btn-no-border px-1 py-2 pr-2">Login</a>
                     <a href="login/registrasi-page.html" class="btn btn-outline-info ">Register</a>
                  </form>
               </div>
            </div>
         </nav>
      </div>
      <div class="container py-3 px-5 pt-5">
          <div class="centered-text d-flex justify-content-center "   >
              <p class="title display-5 w-75 text-center">Sunat masal untuk 1000 Yatim Dhuafa Pelosok Jawa Barat</p>
          </div>
      </div>

   </div>
     <div class="container w-100 ">
      <div class="row w-100 p-3">
         <div class="col md-6  w-100  ">
                  <div class="container d-flex justify-content-between  w-100">
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
        <div class=" py-2 px-1">
         <div class="container w-100">
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

     <div class="container-xxl    ">

      <img src="asset/img crausel/img-detail/slide1-content3.png" class="w-100 mt-5" alt="">

     </div>
     <div class="container display-5">
      <div class="text p-4">
         <p >
            Kesejahteraan sosial adalah komitmen bersama yang harus kita semua jaga. Di Jawa Barat, ada ribuan dhuafa yang membutuhkan dukungan dan perhatian kita. Untuk memberikan kontribusi positif kepada masyarakat yang memerlukan, kami mengumumkan kampanye sosial "Sunat Masal untuk 1000 Dhuafa Jawa Barat."
         </p>
            <a  class="selengkapnya pt-6" href=""> Selengkapnya <svg xmlns="http://www.w3.org/2000/svg" width="38" height="16" viewBox="0 0 38 16" fill="none">
               <path d="M37.7071 8.70711C38.0976 8.31658 38.0976 7.68342 37.7071 7.29289L31.3431 0.928932C30.9526 0.538408 30.3195 0.538408 29.9289 0.928932C29.5384 1.31946 29.5384 1.95262 29.9289 2.34315L35.5858 8L29.9289 13.6569C29.5384 14.0474 29.5384 14.6805 29.9289 15.0711C30.3195 15.4616 30.9526 15.4616 31.3431 15.0711L37.7071 8.70711ZM0 9H37V7H0V9Z" fill="#5AACA8"/>
               </svg></a>
      </div>

     </div>


         </div>
         <div class="col md-6 w-100">
               <div class="container w-100 p-3  d-flex align-items-center justify-content-center ">
                  <form  class=" w-100">
                      <div class="mb-4">
                          <label for="nama" class="form-label">Nominal</label>
                          <input type="text" class="form-control " id="custom-input" placeholder="Masukkan nominal donasi">
                      </div>
                      <div class="mb-4">
                          <label for="nama" class="form-label">Metode Pembayaran </label>
                          <select class="form-select" id="select-custom" aria-label="Default select example">
                           <option
                           selected>
                           Pilih metode pembayaran
                           </option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                         </select>
                      </div>
                      <div class="mb-4">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="custom-input" placeholder="Masukkan nama lengkap anda">
                    </div>
                    <div class="mb-4">
                     <label for="nama" class="form-label">Handphone atau WhatsApp</label>
                     <input type="text" class="form-control" id="custom-input" placeholder="Masukkan kontak anda">
                 </div>
                 <div class="mb-4">
                  <label for="nama" class="form-label">Email</label>
                  <input type="email" class="form-control" id="custom-input" placeholder="Masukkan Email anda">
              </div>
                  </form>
              </div>
              <div class="button">
               <form class="form-btn-container d-flex justify-content-center">
                  <a href="" class="btn text-light align-self-start" id="donate-button">Donasi Sekarang</a>
              </form>
              </div>
         </div>
      </div>
     </div>
</body>
</html>  
@endsection
