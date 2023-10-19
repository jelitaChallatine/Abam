<div class="lay5 h-100" id="footer">
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
                   src="{{ asset('asset/image/logo.png') }}"
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
          <div class="col mb-4 ">
             <ul class="List_1">
                <span class="title_List">Fasilitas</span>
                <li class="list-footer">
                   <a href="/kalkulator" class="text-decoration-none"
                      >kalkulator Zakat</a
                      >
                </li>
                <li class="list-footer">
                   <a href="/konsultasi" class="text-decoration-none"
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
          <div class="col mb-4">
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
          <div class="col mb-4">
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
@if(isset($hideFooter) && $hideFooter)
<style>
    #footer {
        display: none;
    }
</style>
@endif
