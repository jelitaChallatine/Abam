@extends('.content/index')

@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/css/dashboard/dashboard.css') }}" />
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
                 @include('content/component/navbar')
              </div>
           </nav>
        </div>
        <div class="container py-3 px-5 pt-5">
            <div class="centered-text d-flex justify-content-center "   >
                <p class="title display-5 w-75 text-center">Dashboard
                </p>
            </div>
        </div>
     </div>
     <!-- dashboard content -->
     <div class="container-xxl p-5">
        <div class=" overflow-auto d-flex w-100 h-100">
            @include('content.component.organism.dashboard.menu-left')
            <div class="col-md-9 right-content" style="border-radius: 0px 20px 20px 0px;" >
                <div class="container h-100 ">
                     <div class="container align-items-center p-5 h-75 justify-content-center">
                        <div class="container">
                           <p class="Title-content-right p-3">
                              Histori Zakat
                          </p>
                        </div>
                           <!-- card-content -->
                           <div class="container">
                              <div class=" overflow-auto d-flex gap-3 pt-3">
                                 <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 230px; height: 230px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 500.000,-</p>
                                         <p class="card-name mb-2">
                                          Zakat Penghasilan <span class="pending">(Pending)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                   <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 230px; height: 230px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 500.000,-</p>
                                         <p class="card-name mb-2">
                                          Zakat Penghasilan <span class="pending">(Pending)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                   <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 230px; height: 230px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 500.000,-</p>
                                         <p class="card-name mb-2">
                                          Zakat Penghasilan <span class="pending">(Pending)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                </div>
                             </div>
                             <div class="container">
                              <div class=" overflow-auto d-flex gap-3 pt-3">
                                 <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 230px; height: 230px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 500.000,-</p>
                                         <p class="card-name mb-2">
                                          Zakat Penghasilan <span class="pending">(Pending)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                   <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 230px; height: 230px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 500.000,-</p>
                                         <p class="card-name mb-2">
                                          Zakat Penghasilan <span class="pending">(Pending)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                   <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 230px; height: 230px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 500.000,-</p>
                                         <p class="card-name mb-2">
                                          Zakat Penghasilan <span class="pending">(Pending)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                </div>
                             </div>
                             <div class="container">
                              <div class=" overflow-auto d-flex gap-3 pt-3">
                                 <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 230px; height: 230px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 500.000,-</p>
                                         <p class="card-name mb-2">
                                          Zakat Penghasilan <span class="pending">(Pending)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                   <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 230px; height: 230px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 500.000,-</p>
                                         <p class="card-name mb-2">
                                          Zakat Penghasilan <span class="gagal">(Gagal)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                   <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 230px; height: 230px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 500.000,-</p>
                                         <p class="card-name mb-2">
                                          Zakat Penghasilan <span class="pending">(Pending)</span>
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
</body>
</html>

@endsection
