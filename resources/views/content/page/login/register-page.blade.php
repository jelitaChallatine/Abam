@extends('.content/index')

@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/css/login/register.css') }}" />
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
                 @include('.content/component/navbar')
              </div>
           </nav>
        </div>
        <div class="container py-3 px-5a">
            <div class="centered-text d-flex justify-content-center "   >
                <p class="title display-5 w-75 text-center">Register</p>
            </div>
        </div>

     </div>
     <div class="container w-100 ">
      <div class="row w-100 p-3">
         <div class="col md-6  w-100  ">
            <div class="container-fluid content-photo">

             <img src="{{ asset('asset/image/login/regist.png') }}"  class="w-100 mt-5" alt="">

            </div>
            <div class="container display-5">
             <div class="text p-4">
                <p >
                   Akses informasi penting, update terbaru, dan manfaat eksklusif. Jangan lewatkan kesempatan, login sekarang! #AksesMudah
                </p>
             </div>

            </div>


                </div>
         <div class="col md-6  w-100">
               <div class="container w-100 p-3  d-flex align-items-center justify-content-center ">
                  <form  class=" w-100">
                      <div class="mb-4">
                          <label for="nama" class="form-label">Username</label>
                          <input type="text" class="form-control " id="custom-input" placeholder="masukkan email atau username">
                      </div>
                      <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control " id="custom-input" placeholder="masukkan email atau username">
                    </div>
                      <div class="mb-4">
                        <label for="nama" class="form-label">Password</label>
                        <input type="text" class="form-control " id="custom-input" placeholder="masukkan password">
                    </div>
                    <div class="mb-2">
                        <p class="Captcha">Captcha</p>
                        <div class="form-check">
                            <input class="form-check-input checkbox" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ml-2" for="flexCheckDefault" id="form-label">
                               Saya telah membaca dan menyetujui <a href="" class="syarat-ketentuan"> Syarat dan Ketentuan</a>  yang berlaku
                            </label>
                        </div>
                    </div>
                    <div class="mb-2">
                        <p class="Captcha">Captcha</p>
                        <div class="form-check">
                            <input class="form-check-input checkbox" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label ml-2" for="flexCheckDefault" id="form-label">
                               i am human
                            </label>
                        </div>
                    </div>
                  </form>
              </div>
              <div class="button">
               <form class="form-btn-container d-flex justify-content-start">
                  <a href="" class="btn text-light align-self-start" id="donate-button"> Register</a>
              </form>
              </div>
         </div>
      </div>
     </div>
</body>
</html>

@endsection
