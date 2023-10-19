{{-- <link rel="stylesheet" href="{{ asset('asset/css/dashboard/mobile-dashboard.css') }}">
<div class="container-fluid d-flex flex-column w-100 top-profile">
    <div class="container-fluid h-100 d-flex justify-content-end">
         <img src="{{ asset('asset/image/dashboard/profile-1.png') }}" class="card-image-mobile py-2 " style="width: 50px" alt="...">
      </div>

</div>
 --}}
 <div id="mySidenav" class="sidenav">
    <div class="d-flex justify-content-between"> <!-- Use the d-flex class to enable flexbox -->
        <div class="container-fluid d-flex flex-column w-100 ">
      <div class=" w-100 d-flex justify-content-center">
         <img src="{{ asset('asset/image/dashboard/profile-1.png') }}" class="card-image-mobile " style="width: 50px" alt="...">
      </div>
   <div class="card-content-mobile ">
     <p class="profile-name w-100 pt-4 text-center">Ahmad Imran</p>
     <p class="nomor-telepon  text-center">08123456789</p>
   </div>
 </div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    </div>
    <div class=" container-fluid  menu-dashboard">
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
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


  <script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  </script>


<div class="container">
    <div class="col-md-9 my-custom-right-content" style="border-radius: 0px 20px 20px 0px;">
        <div class="my-custom-container">
            <div class="my-custom-inner-container p-5">
                <p class="my-custom-title">informasi akun</p>
                <form class="w-100">
                    <div class="my-custom-form-group mb-4">
                        <label for="my-nama" class="my-custom-form-label">Nama Lengkap</label>
                        <input type="text" class="my-custom-form-control" id="my-custom-input" placeholder="Masukkan nama lengkap anda">
                    </div>
                    <div class="my-custom-form-group mb-4">
                        <label for="my-handphone" class="my-custom-form-label">Handphone atau WhatsApp</label>
                        <input type="text" class="my-custom-form-control" id="my-custom-input" placeholder="Masukkan kontak anda">
                    </div>
                    <div class="my-custom-form-group mb-4">
                        <label for="my-email" class="my-custom-form-label">Email</label>
                        <input type="email" class="my-custom-form-control" id="my-custom-input" placeholder="Masukkan Email anda">
                    </div>
                    <div class="my-custom-form-group mb-5">
                        <label for="my-bio" class="my-custom-form-label">Bio</label><br>
                        <textarea class="my-custom-form-control" id="my-textarea" placeholder="Masukkan Informasi mengenai anda"></textarea>
                    </div>
                    <div class="my-custom-form-group mb-5">
                        <label for="my-alamat" class="my-custom-form-label">Alamat</label><br>
                        <textarea class="my-custom-form-control" id="my-textarea" placeholder="Masukkan alamat anda"></textarea>
                    </div>
                    <div class="my-custom-container d-flex justify-content-start mt-5">
                        <div class="my-custom-form-btn-container">
                            <a href="" class="btn my-custom-btn my-custom-primary text-light" id="my-custom-donate-button">Simpan</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>




{{-- <div class="container-fluid d-flex flex-column w-100">

<div class="col-3 left-content">
    <div class="container-fluid d-flex flex-column w-100 ">
      <div class=" w-100 d-flex justify-content-center">
         <img src="{{ asset('asset/image/dashboard/profile-1.png') }}" class="card-image-mobile " style="width: 50px" alt="...">
      </div>
   <div class="card-content-mobile ">
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

</div> --}}
