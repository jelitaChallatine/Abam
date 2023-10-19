@extends('.content/index')
@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Mulish:wght@300&family=Open+Sans:wght@500&family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/qurban.css') }}" />
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
               @include('.content/component/navbar ')
            </div>
         </nav>
      </div>
      <div class="container py-4 px-5">
          <div class="centered-text d-flex justify-content-center "   >
              <p class="title display-5 w-75 text-center">Qurban</p>
          </div>
      </div>

   </div>
     <div class="container-fluid d-flex flex-column  w-100 ">
      <div class="row w-100 ">
         <div class="col md-6  w-100  ">
     <div class="container-fluid d-flex flex-column  justify-content-center align-items-center w-100 pt-4">
                <img src="{{ asset('asset/image/update/card-4.png') }}" class="image-content " alt="">
     </div>
     <div class="container-fluid data pt-4 " >
        <div class="container progres-bar">
           <div class="d-flex justify-content-between pt-2">
              <div class="d-flex flex-column align-items-start">
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

           <div class="prog-bg">
              <div class="progres">
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

           <div class="d-flex justify-content-between pt-2">
              <div class="d-flex flex-column align-items-start">
                 <div>
                    <span class="title_rinc">Pequrban</span>
                 </div>
                 <div>
                    <b class="rinc">Rp 3.021.000</b>
                 </div>
              </div>
              <div class="d-flex flex-column align-items-start">
                 <div>
                    <span class="title_rinc">Target Pequrban</span>
                 </div>
                 <div>
                    <b class="rinc">Rp 3.021.000</b>
                 </div>
              </div>
           </div>
           <hr>
        </div>
     </div>

    <div class="container-fluid d-flex flex-column w-100 pt-1">
        <div class="container-fluid  d-flex flex-column  pr-5 text w-100 align-items-center">
            <p class="paragraph-qurban  w-75  ">
                Kami mengundang Anda untuk bergabung dalam kampanye qurban kami. Dengan berqurban,
                 Anda tidak hanya memenuhi kewajiban agama, tetapi juga memberikan harapan kepada mereka yang membutuhkan.
                 Setiap sumbangan Anda akan membantu menyediakan makanan bagi yang kurang beruntung dan membantu mengurangi kesenjangan sosial.
                  Mari bersama-sama berbagi berkah, menjalankan ibadah dengan tulus, dan membuka pintu kebahagiaan bagi mereka yang membutuhkan.
                  Bergabunglah dengan kami dalam kampanye "Qurban: Berbagi Berkah, Mengisi Hati" dan rasakan kebahagiaan dalam berqurban.
            </p>
        </div>
    </div>

         </div>
         <div class="col md-6 w-100">
               <div class="container w-100 p-3  d-flex align-items-center justify-content-center ">
                  <form  class=" w-100">
                      <div class="mb-4">
                        <label for="nama" class="form-label">Jenis hewan </label>
                        <select class="form-select" id="select-custom" aria-label="Default select example">
                         <option
                         selected>
                         Pilih Jenis hewan
                         </option>
                         <option value="1">One</option>
                         <option value="2">Two</option>
                         <option value="3">Three</option>
                       </select>
                    </div>
                    <div class="mb-4">
                     <label for="nama" class="form-label">Harga hewan</label>
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
                        <label for="nama" class="form-label">Nama Lengkap atau pequrban</label>
                        <input type="text" class="form-control" id="custom-input" placeholder="Masukkan nama atau pequrban">
                    </div>
                    <div class="mb-4">
                     <label for="nama" class="form-label">Handphone atau WhatsApp</label>
                     <input type="text" class="form-control" id="custom-input" placeholder="Masukkan kontak anda">
                 </div>
                 <div class="mb-4">
                  <label for="nama" class="form-label">Email</label>
                  <input type="email" class="form-control" id="custom-input" placeholder="Masukkan Email anda">
              </div>
              <div class="mb-4">
               <label for="nama" class="form-label">Alamat</label> <br>
               <textarea name="" id="custom-input" class="w-100" placeholder="Masukkan alamat anda"></textarea>
           </div>
                  </form>
              </div>
              <div class="button">
               <form class="form-btn-container d-flex justify-content-center">
                  <a href="" class="btn text-light align-self-start" id="donate-button">Tunaikan Qurban</a>
              </form>
              </div>
         </div>
      </div>
     </div>
</body>
</html>

@endsection
