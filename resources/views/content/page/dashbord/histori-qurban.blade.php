@extends('.content/index')
@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/css/dashboard/dashboard.css') }}" />
</head>
<body>
    @php
    $hideFooter = true;
@endphp
     <!-- dashboard content -->
     <div class="container-fluid align-items-center justify-content-center bg-success w-100">
        <div class=" container-fluid w-100 bg-dark overflow-auto d-flex ">
            <div class="row">
                @include('content.component.organism.dashboard.donor-page.menu-left')
            </div>
            @include('content.component.organism.dashboard.menu-left')
            <div class="col-md-10 right-content" style="border-radius: 0px 20px 20px 0px;" >
                <div class="container h-100 ">
                     <div class="container align-items-center p-5 h-75 justify-content-center">
                        <div class="container">
                           <p class="Title-content-right p-3">
                              Histori Qurban
                          </p>
                        </div>
                           <!-- card-content -->
                           <div class="container">
                              <div class=" overflow-auto d-flex gap-3 pt-3">
                                 <div class="col-mb-2">
                                    <div class="card" id="profile" style="width: 230px; height: 210px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 5.000.000,-</p>
                                         <p class="card-name mb-2">
                                          Domba 35 Kg<span class="sukses d-block">(Success)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                   <div class="col-mb-2" >
                                    <div class="card" id="profile" style="width: 230px; height: 210px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 5.000.000,-</p>
                                         <p class="card-name mb-2">
                                          Domba 35 Kg<span class="gagal">(Cancel)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                   <div class="col-mb-2" >
                                    <div class="card" id="profile" style="width: 230px; height: 210px;">
                                       <div class="card-content py-4 px-2 mb-2 justify-content-center">
                                         <p class="besar-donasi mb-2 pt-4 ">Rp. 5.000.000,-</p>
                                         <p class="card-name mb-2">
                                          Domba 35 Kg<span class="sukses d-block">(Success)</span>
                                       </p>
                                         <p class="card-date">16-07-2021 19:17:41</p>
                                       </div>
                                     </div>
                                    </div>
                                </div>
                             </div>
                            </div>

                </div>
            </div>
        </div>
     </div>


     <!-- footer -->
</body>
</html>

@endsection
