<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="assets/css/pay-zakat.css" />
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
                 <img src="../asset/logo.png" height="25" alt="" />
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
                             <a class="nav-link fs-6 text-dark" href="../index.html">Tentang</a>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link fs-6 text-dark" href="../update.html">Update</a>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link fs-6 text-dark" href="../program.html">Program</a>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link fs-6 text-dark" href="pay-zakat-page.html">Zakat</a>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link fs-6 text-dark" href="../qurban-page.html">Qurban</a>
                          </li>
                       </ul>
                    </div>
                    <form class=" form-btn-container d-flex justify-content-center">
                       <a href="../login/login-page.html" class="btn-no-border px-1 py-2 pr-2">Login</a>
                       <a href="../login/registrasi-page.html" class="btn btn-outline-info ">Register</a>
                    </form>
                 </div>
              </div>
           </nav>
        </div>
        <div class="container py-3 px-5 ">
            <div class="centered-text d-flex justify-content-center "   >
                <p class="title display-5 w-75 text-center">Tunaikan Zakat</p>
            </div>
        </div>

     </div>
     <div class="container w-100 ">
      <div class="row w-100 p-3">
         <div class="col md-6  w-100  ">
     <div class="container-xxl    ">

      <img src="assets/img/konsul-zakat.png" class="w-100 mt-5" alt="">

     </div>
     <div class="container display-5">
      <div class="text p-4">
         <p >
            Zakat itu penting! Mari tunaikan kewajiban kita. Dengan zakat, kita bantu yang membutuhkan. Berkah akan datang dalam lipatan rezeki. Jadi, zakatlah sekarang! #BerkahZakat.
         </p>
      </div>

     </div>


         </div>
         <div class="col md-6  w-100">
               <div class="container w-100 p-3  d-flex align-items-center justify-content-center ">
                  <form  class=" w-100">
                    <div class="mb-4">
                        <label for="nama" class="form-label">Kategori Zakat</label>
                        <select class="form-select form-control" id="custom-input" aria-label="Default select example">
                          <option
                          selected>
                          Pilih kategori Zakat
                          </option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                    </div>
                      <div class="mb-4">
                          <label for="nama" class="form-label">Nominal</label>
                          <input type="text" class="form-control " id="custom-input" placeholder="Masukkan nominal donasi">
                      </div>
                      <div class="mb-4">
                          <label for="email" class="form-label">Metode Pembayaran </label>
                          <select class="form-select" id="custom-input" aria-label="Default select example">
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
                  <a href="" class="btn text-light align-self-start" id="donate-button"> Tunaikan Zakat</a>
              </form>
              </div>
         </div>
      </div>
     </div>
     <div class="lay5 h-100">
      <div class="container-xxl lay5_posision d-flex ">
         <div
            class="row d-flex align-items-center justify-content-center row_lay5 px-1"
            >
            <div class="col-md-6">
               <div class="mb-3">
                  <a
                     class="navbar-brand img_posision_lay5"
                     href="#"
                     >
                  <img
                     src="../asset/logo.png"
                     alt=""
                     class="img_lay5"
                     />
                  </a>
               </div>
               <div class="parag_posision ">
                  <p class="parag_lay5 w-100">
                     Agro Bina Alam Mandiri adalah yayasan yang
                     focus pada program sosial dan dakwah di
                     Indonesia.
                  </p>
               </div>
               <div class="copy_posision">
                  <span class="Copyright"
                     >© Copyright Yayasan Abam. All right
                  reserved</span
                     >
               </div>
            </div>
            <div class="col mb-4 ">
               <ul class="List_1">
                  <span class="title_List">Fasilitas</span>
                  <li class="list-footer">
                     <a href="../Zakat/kalkulator-zakat-page.html" class="text-decoration-none"
                        >kalkulator Zakat</a
                        >
                  </li>
                  <li class="list-footer">
                     <a href="../Zakat/konsultasi-page.html" class="text-decoration-none"
                        >Konsultasi</a
                        >
                  </li>
                  <li>
                   .
                  </li>
                  <li>
                   .
                  </li>
               </ul>
            </div>
            <div class="col mb-4">
               <ul class="List_1">
                  <span class="title_List">Kategori</span>
                  <li class="list-footer">
                     <a href="" class="text-decoration-none"
                        >Pendidikan</a
                        >
                  </li>
                  <li class="list-footer">
                     <a href="" class="text-decoration-none"
                        >Dakwah</a
                        >
                  </li>
                  <li class="list-footer">
                     <a href="" class="text-decoration-none"
                        >Wakaf</a
                        >
                  </li>
                  <li class="list-footer">
                     <a href="" class="text-decoration-none"
                        >Qurban</a
                        >
                  </li>
               </ul>
            </div>
            <div class="col mb-4">
               <ul class="List_1">
                  <span class="title_List">Tentang Kami</span>
                  <li class="list-footer">
                     <a href="" class="text-decoration-none"
                        >Profil</a
                        >
                  </li>
                  <li class="list-footer">
                     <a href="" class="text-decoration-none"
                        >Kontak Kami</a
                        >
                  </li>
                  <li class="list-footer">
                     <a href="" class="text-decoration-none"
                        >FAQ</a
                        >
                  </li>
                  <li class="list-footer ">
                     <a href="" class="text-decoration-none"
                        >Bantuan</a
                        >
                  </li>
               </ul>
            </div>
            <div class="copy_posision2">
               <span class="Copyright"
                  >© Copyright Yayasan Abam. All right
               reserved</span
                  >
            </div>
         </div>
      </div>
      </div>
</body>
</html>  
