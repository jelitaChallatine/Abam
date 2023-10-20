@extends('content.page.dashbord.mobile.donor-page')

@section('mobile-content')
<link rel="stylesheet" href="{{ asset('asset/css/dashboard/mobile-dashboard.css') }}">
<div class="d-flex">
    <div class="col-md- mobile-content" style="border-radius: 0px 20px 20px 0px;">
        <div class="container  ">
            <div class="container-fluid w-100 p-5">
                <div class="d-flex align-items-center justify-content-between">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('asset/image/logo.png') }}" height="25" alt="" />
                    </a>
                    <span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </div>
                <script>
                function openNav() {
                  document.getElementById("mySidenav").style.width = "250px";
                }

                function closeNav() {
                  document.getElementById("mySidenav").style.width = "0";
                }
                </script>
            </div>
            <div class="container align-items-center vh-100">
                <p class="Title-mobile">
                    informasi akun
                </p>
                <form class=" w-100">
                    <div class="mb-4">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control " id="custom-input-mobile"
                            placeholder="Masukkan nama lengkap anda ">
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="form-label">Handphone atau WhatsApp</label>
                        <input type="text" class="form-control" id="custom-input-mobile" placeholder="Masukkan kontak anda">
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="form-label">Email</label>
                        <input type="email" class="form-control" id="custom-input-mobile" placeholder="Masukkan Email anda">
                    </div>
                    <div class="mb-5">
                        <label for="nama" class="form-label">Bio</label> <br>
                        <textarea name="" id="textarea-mobile" placeholder="Masukkan Informasi mengenai anda"></textarea>
                    </div>
                    <div class="mb-5">
                        <label for="nama" class="form-label">Alamat</label> <br>
                        <textarea name="" id="textarea-mobile" placeholder=" Masukkan alamat anda"></textarea>
                    </div>
                    <div class="container-fluid w-100  d-flex flex-column justify-content-center align-items-center mt-5">
                        <form class="form-btn-container d-flex justify-content-center">
                            <a href="" class="btn text-light align-self-center" id="donate-button-mobile">simpan</a>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
