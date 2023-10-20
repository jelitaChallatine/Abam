<div class="container-xxl p-5 ">
        <div class=" overflow-auto d-flex w-100 h-100">
            @include('content.component.organism.dashboard.menu-left')
            <div class="col-md-9 right-content" style="border-radius: 0px 20px 20px 0px;" >
                <div class="container  ">
                    <div class="container align-items-center p-5">
                        <p class="Title-content-right">
                            Ganti Password
                        </p>
                        <form  class=" w-100">
                           <div class="mb-4">
                               <label for="nama" class="form-label">Password lama</label>
                               <input type="password" class="form-control " id="custom-input" placeholder="masukan password lama">
                           </div>
                           <div class="mb-4">
                               <label for="nama" class="form-label">Password baru</label>
                               <input type="password" class="form-control" id="custom-input" placeholder="masukan password baru">
                           </div>
                           <div class="mb-4">
                               <label for="nama" class="form-label">Ketik Ulang Password</label>
                               <input type="password" class="form-control" id="custom-input" placeholder="ketik ulang password baruvv">
                           </div>
                         </form>
                              <!-- button  -->
     <div class="container d-flex justify-content-start mt-5">
        <form class="form-btn-container d-flex justify-content-end">
           <a href="" class="btn text-light align-self-start" id="donate-button">ubah password</a>
       </form>
       </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
