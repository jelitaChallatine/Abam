@extends('.content/index')

@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/donor-page.css" />
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
                 @include('content.component.navbar')
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
     <div class="container p-5">
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
                <a href="/donor" class="text-decoration-none">Profile</a>
             </li>
             <li class="mb-4">
                <a href="#" class="text-decoration-none">Tabungan Qurban</a>
             </li>
             <li class="mb-4">
                <a href="/histori-donasi" class="text-decoration-none">Histori Donasi</a>
             </li>
             <li class="mb-4">
                <a href="/histori-zakat" class="text-decoration-none">Histori Zakat</a>
             </li>
             <li class="mb-4">
                <a href="/histori-qurban" class="text-decoration-none">Histori Qurban</a>
             </li>
             <li class="mb-4">
                <a href="#" class="text-decoration-none">Tunaikan Zakat</a>
             </li>
             <li class="mb-4">
                <a href="/ganti-password" class="text-decoration-none">Ganti Password</a>
             </li>
        </div>
           </div>
            <div class="col-md-10 right-content" style="border-radius: 0px 20px 20px 0px;" >
                <div class="container  ">
                    <div class="container align-items-center p-5">
                        <p class="Title-content-right">
                            informasi akun
                        </p>
                        <form  class=" w-100">
                           <div class="mb-4">
                               <label for="nama" class="form-label">Nama Lengkap</label>
                               <input type="text" class="form-control " id="custom-input" placeholder="Masukkan nama lengkap anda ">
                           </div>
                           <div class="mb-4">
                               <label for="nama" class="form-label">Handphone atau WhatsApp</label>
                               <input type="text" class="form-control" id="custom-input" placeholder="Masukkan kontak anda">
                           </div>
                           <div class="mb-4">
                               <label for="nama" class="form-label">Email</label>
                               <input type="email" class="form-control" id="custom-input" placeholder="Masukkan Email anda">
                           </div>
                           <div class="mb-5" >
                               <label for="nama" class="form-label">Bio</label> <br>
                               <textarea name="" id="textarea" placeholder="Masukkan Informasi mengenai anda"></textarea>
                           </div>
                           <div class="mb-5">
                              <label for="nama" class="form-label">Alamat</label> <br>
                              <textarea name="" id="textarea"  placeholder="Masukkan alamat anda"></textarea>
                          </div>
                          <div class="container d-flex justify-content-start mt-5">
        <form class="form-btn-container d-flex justify-content-end">
           <a href="" class="btn text-light align-self-start" id="donate-button">simpan</a>
       </form>
       </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
     </div>


</body>
</html>

@endsection
