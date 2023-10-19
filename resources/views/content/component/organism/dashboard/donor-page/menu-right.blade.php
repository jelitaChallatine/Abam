@extends('content.component.organism.dashboard.donor-page.menu-left')

@section('dashboard')
    <div class="col-md-9 right-content" style="border-radius: 0px 20px 20px 0px;">
        <div class="container  ">
            <div class="container align-items-center p-5">
                <p class="Title-content-right">
                    informasi akun
                </p>
                <form class=" w-100">
                    <div class="mb-4">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control " id="custom-input"
                            placeholder="Masukkan nama lengkap anda ">
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="form-label">Handphone atau WhatsApp</label>
                        <input type="text" class="form-control" id="custom-input" placeholder="Masukkan kontak anda">
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="form-label">Email</label>
                        <input type="email" class="form-control" id="custom-input" placeholder="Masukkan Email anda">
                    </div>
                    <div class="mb-5">
                        <label for="nama" class="form-label">Bio</label> <br>
                        <textarea name="" id="textarea" placeholder="Masukkan Informasi mengenai anda"></textarea>
                    </div>
                    <div class="mb-5">
                        <label for="nama" class="form-label">Alamat</label> <br>
                        <textarea name="" id="textarea" placeholder="Masukkan alamat anda"></textarea>
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
@endsection
