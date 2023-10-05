@extends('.content/index')

@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/css/konsultasi-zakat.css ') }}" />

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
                    @include('.content/component.navbar')
                 </div>
              </div>
           </nav>
        </div>
        <div class="container py-3 px-5 pt-5">
            <div class="centered-text d-flex justify-content-center "   >
                <p class="title display-5 w-75 text-center">Kalkulator Zakat</p>
            </div>
        </div>

     </div>
     <div class="container w-100 ">
      <div class="row w-100 p-3">
         <div class="col md-6  w-100  ">
     <div class="container-xxl    ">

      <img src="{{ asset('asset/image/zakat/kalkulator-zakat.png') }}" class="w-100 mt-5" alt="">

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
                          </option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="form-label">Harga Beras</label>
                        <select class="form-select form-control" id="custom-input" aria-label="">
                          <option
                          selected>
                          </option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                    </div>
                      <div class="mb-4">
                          <label for="nama" class="form-label">Jumlah Zakat</label>
                          <input type="text" class="form-control " id="custom-input">
                      </div>
                      <div class="mb-4">
                        <label for="nama" class="form-label">Jumlah Jiwa</label>
                        <input type="text" class="form-control " id="custom-input">
                    </div>
                      <div class="mb-4">
                        <label for="nama" class="form-label">Total Kesesluruhan</label>
                        <input type="text" class="form-control" id="custom-input" >
                      </div>
                  </form>
              </div>
              <div class="button">
               <form class="form-btn-container d-flex justify-content-center">
                  <a href="" class="btn text-light align-self-start" id="donate-button"> Hitung Zakat</a>
              </form>
              </div>
         </div>
      </div>
     </div>
     {{-- footer --}}
</body>
</html>

@endsection
