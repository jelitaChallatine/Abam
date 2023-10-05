<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/donor-page.css" />
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
                             <a class="nav-link fs-6 text-dark" href="../Zakat/pay-zakat-page.html">Zakat</a>
                          </li>
                          <li class="nav-item">
                             <a class="nav-link fs-6 text-dark" href="../qurban-page.html">Qurban</a>
                          </li>
                       </ul>
                    </div>
                    <form class=" form-btn-container d-flex justify-content-center">
                       <a href="donor-page.html" class="btn-no-border px-1 py-2 pr-2">dashboard</a>
                       <a href="../login/login-page.html" class="btn btn-outline-info ">logout</a>
                    </form>
                 </div>
              </div>
           </nav>
        </div>
        <div class="container py-3 px-5 pt-5">
            <div class="centered-text d-flex justify-content-center "   >
                <p class="title display-5 w-75 text-center">Dashboard</p>
            </div>
        </div>
     </div>
     <!-- dashboard content -->
     <div class="container p-5 w-100">
        <div class=" overflow-auto d-flex  h-100">
            <div class="col-md-2 left-content">
                <div class="container-fluid mb-4">
                  <div class=" w-100 d-flex justify-content-center">
                     <img src="assets/img/profile-ahmad-imran.png" class="card-image " alt="...">
                  </div>
               <div class="card-content ">
                 <p class="profile-name w-100 pt-4 text-center">Ahmad Imran</p>
                 <p class="nomor-telepon  text-center">08123456789</p>
               </div>
             </div>
             <div class=" container menu-dashboard">
               <li class="mb-4">
                  <a href="donor-page.html" class="text-decoration-none">Profile</a>
               </li>
               <li class="mb-4">
                  <a href="#" class="text-decoration-none">Tabungan Qurban</a>
               </li>
               <li class="mb-4">
                  <a href="histori-donasi.html" class="text-decoration-none">Histori Donasi</a>
               </li>
               <li class="mb-4">
                  <a href="histori-zakat.html" class="text-decoration-none">Histori Zakat</a>
               </li>
               <li class="mb-4">
                  <a href="histori-qurban.html" class="text-decoration-none">Histori Qurban</a>
               </li>
               <li class="mb-4">
                  <a href="#" class="text-decoration-none">Tunaikan Zakat</a>
               </li>
               <li class="mb-4">
                  <a href="#" class="text-decoration-none">Ganti Password</a>
               </li>
          </div>
             </div>
            <div class="col-md-10 right-content" style="border-radius: 0px 20px 20px 0px;" >
                <div class="container h-100 ">
                     <div class="container align-items-center p-5 h-75 justify-content-center">
                        <div class="container">
                           <p class="Title-content-right p-3">
                              Histori Donasi
                          </p>
                        </div>
                           <!-- card-content -->
                           <div class="container-xxl">
                              <div class=" overflow-auto d-flex gap-3 pt-3">
                                 <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 270px; height: 210px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 50.000,-</p>
                                         <p class="card-name mb-2">
                                          Donasi Operasional Qurban<span class="pending">(Pending)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                   <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 270px; height: 210px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 50.000,-</p>
                                         <p class="card-name mb-2">
                                          Donasi Operasional Qurban<span class="pending">(Pending)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                   <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 270px; height: 210px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 50.000,-</p>
                                         <p class="card-name mb-2">
                                          Donasi Operasional Qurban<span class="pending">(Pending)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                </div>
                             </div>
                             <div class="container-xxl">
                              <div class=" overflow-auto d-flex gap-3 pt-3">
                                 <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 270px; height: 210px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 50.000,-</p>
                                         <p class="card-name mb-2">
                                          Donasi Operasional Qurban<span class="pending">(Pending)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                   <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 270px; height: 210px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 50.000,-</p>
                                         <p class="card-name mb-2">
                                          Donasi Operasional Qurban<span class="pending">(Pending)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                   <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 270px; height: 210px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 50.000,-</p>
                                         <p class="card-name mb-2">
                                          Donasi Operasional Qurban<span class="pending">(Pending)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                </div>
                             </div>
                             <div class="container-xxl">
                              <div class=" overflow-auto d-flex gap-3 pt-3">
                                 <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 270px; height: 210px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 50.000,-</p>
                                         <p class="card-name mb-2">
                                          Donasi Operasional Qurban<span class="pending">(Pending)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                   <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 270px; height: 210px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 50.000,-</p>
                                         <p class="card-name mb-2">
                                          Donasi Operasional Qurban<span class="pending">(Pending)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                   <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 270px; height: 210px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 50.000,-</p>
                                         <p class="card-name mb-2">
                                          Donasi Operasional Qurban<span class="pending">(Pending)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                </div>
                             </div>
                       </div>
                                               <!-- pagination -->
                                               <div class="container p-5 ">
                                                <ul class="pagination justify-content-center">
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                </ul>
                                            </div>

                </div>
            </div>
        </div>
     </div>


     <!-- footer -->
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
            <div class="col  ">
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
            <div class="col">
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
            <div class="col ">
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
