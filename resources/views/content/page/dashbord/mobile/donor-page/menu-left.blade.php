<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/css/dashboard/dashboard.css')}}" />
</head>
<body>
    <div class="bg-utama">
        <div class="row w-100">
           @include('content.component.navbar')
        </div>
        <div class="container py-3 px-5 pt-5">
            <div class="centered-text d-flex justify-content-center "   >
                <p class="title display-5 w-75 text-center">Dashboard</p>
            </div>
        </div>
     </div>
     <!-- dashboard content -->
     <div class="container p-5">
      <div class=" row overflow-auto d-flex  h-100">
          <div class="col-2 left-content">
              <div class="container-fluid mb-4">
                <div class=" w-100 d-flex justify-content-center">
                   <img src="{{ asset('asset/image/dashboard/profile-1.png') }}" class="card-image " alt="...">
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
                <a href="ganti-password.html" class="text-decoration-none">Ganti Password</a>
             </li>
        </div>
           </div>
           @yield('dashboard')
        </div>
     </div>


</body>
</html>
