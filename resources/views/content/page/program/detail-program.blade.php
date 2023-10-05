@extends('content/index')
@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/css/detail-program-page.css') }}" />
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
                 @include('.content/component/navbar')
              </div>
           </nav>
        </div>
        <div class="container py-3 px-5 pt-5">
            <div class="centered-text d-flex justify-content-center "   >
                <p class="title display-5 w-75 text-center">Sunat masal untuk 1000 Yatim Dhuafa Pelosok Jawa Barat</p>
            </div>
        </div>

     </div>

     <div class=" container px-1 pt-3">
        <div class="container d-flex justify-content-between align-items-end py-3 px-6 w-75">
        <div class="d-flex flex-column align-items-start ">
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
        <div class=" py-1 px-6 ">
         <div class="container w-75">
         <div class="prog-bg w-100 " >
           <div class="progres ">
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
         </div>

     </div>
     </div>
     <div class="container pt-5">
                <img src="asset/img crausel/coba.jpg" class="w-100" alt="">
     </div>
     <div class="container pt-5 ">
         <div class="paraf d-flex justify-content-center">
            <p>
               Kesejahteraan sosial adalah komitmen bersama yang harus kita semua jaga.
               Di Jawa Barat, ada ribuan dhuafa yang membutuhkan dukungan dan perhatian kita.
               Untuk memberikan kontribusi positif kepada masyarakat yang memerlukan,
               kami mengumumkan kampanye sosial "Sunat Masal untuk 1000 Dhuafa Jawa Barat."
            </p>
         </div>
         <div class="paraf d-flex justify-content-center">
            <p class="text-bold">
               Mengapa Sunat Masal?
            </p>
         </div>
         <div class="paraf d-flex  justify-content-center">
            <p>
               Sunat adalah tindakan medis yang memiliki manfaat kesehatan yang besar. Selain itu, sunat juga memiliki nilai agama yang penting bagi banyak keluarga di Jawa Barat. Namun, tidak semua keluarga mampu membayar biaya sunat bagi anak-anak mereka. Inilah mengapa kami ingin menjalankan kampanye ini untuk membantu mereka yang membutuhkan.
            </p>
         </div>
         <div class="paraf d-flex justify-content-center">
            <p class="text-bold mb-1">
               Tujuan Kampanye
            </p>
         </div>
         <div class="paraf d-flex justify-content-center">
               <ul class="list">
                  <li>
                     Memberikan Kesehatan: Sunat memiliki manfaat kesehatan yang terbukti, seperti mengurangi risiko infeksi dan penyakit tertentu.
                  </li>
                  <li>
                     Mengurangi Beban Keluarga: Dengan menyediakan sunat gratis, kami berharap dapat mengurangi beban finansial keluarga yang kurang mampu.
                  </li>
                  <li>
                     Memenuhi Kewajiban Agama: Kampanye ini juga bertujuan untuk membantu keluarga yang ingin memenuhi kewajiban agama dengan menyediakan sunat secara gratis.
                  </li>
               </ul>
         </div>
            <div class="paraf d-flex justify-content-center">
            <p class="text-bold mb-1">
               Bagaimana Anda Dapat Berkontribusi?
            </p>
         </div>
         <div class="paraf d-flex justify-content-center">
            <p>
               Anda juga dapat menjadi bagian dari kampanye ini:
            </p>
         </div>
         <div class="paraf d-flex justify-content-center" >
            <ul class="list">
               <li>
                  <span class="text-bold">Donasi</span> :
                  Setiap sumbangan Anda akan membantu kami mencapai target sunat masal untuk 1000 dhuafa di Jawa Barat.
               </li>
               <li>
                  <span class="text-bold">Sumbangan Barang</span>:
                  Selain sumbangan uang, kami juga menerima sumbangan barang seperti alat medis dan perlengkapan sunat.
               </li>
               <li>
                  <span class="text-bold">Sukarelawan</span>:
                  Jika Anda memiliki keterampilan medis atau ingin menjadi sukarelawan dalam proses sunat masal, silakan bergabung.
               </li>
            </ul>
         </div>
         <div class="paraf d-flex justify-content-center">
            <p class="text-bold">
               Bersama-sama, Kita Bisa Membuat Perbedaan
            </p>
         </div>
         <div class="paraf d-flex justify-content-center">
            <p>
               Kami percaya bahwa dengan kolaborasi dan dukungan dari masyarakat, kita dapat mencapai tujuan kami untuk memberikan sunat masal kepada 1000 dhuafa di Jawa Barat. Sunat bukan hanya tentang aspek medis, tetapi juga tentang memberikan harapan dan kebahagiaan kepada keluarga yang memerlukannya.
               Mari bersama-sama menjadi bagian dari perubahan positif dalam komunitas kita. Dukung kampanye "Sunat Masal untuk 1000 Dhuafa Jawa Barat" dan bantu kami memberikan kesehatan dan kebahagiaan kepada mereka yang membutuhkan.
               Untuk informasi lebih lanjut tentang bagaimana Anda dapat berkontribusi atau bergabung sebagai sukarelawan, hubungi kami di [kontak kami].
            </p>
         </div>
         <div class="paraf d-flex justify-content-center">
            <p class="text-bold pt-2">
               Bersama Kita Bisa Mewujudkan Perubahan Positif!
            </p>
         </div>
     </div>

     <!-- button  -->
     <div class="container d-flex justify-content-center mt-5">
      <form class="form-btn-container d-flex justify-content-center">
         <a href="/checkout" class="btn text-light align-self-start" id="donate-button">Donasi Sekarang</a>
     </form>
     </div>
     <div class="container d-flex justify-content-center mt-5 ">
         <p class="text-bottom">
            Sahabat dermawan  yang mendukung program ini
         </p>
     </div>
     <div class="container-xxl w-100 d-flex">
      <div class=" overflow-auto d-flex pl-3 py-5 w-100 ">
         <div class="col" >
            <div class="card " id="profile" style="width: 160px; height: 180px;">
                   <img src="{{ asset('asset/image/program/card/card-people1.png') }}" class="card-image p-2" alt="...">
               <div class="card-content p-2">
                 <p class="card-date w-100">16-07-2021 19:17:41</p>
                 <p class="card-name w-100">John Birmingham</p>
                 <p class="besar-donasi w-100">Rp. 50.000,-</p>
               </div>
             </div>
           </div>
           <div class="col " >
            <div class="card " id="profile" style="width: 160px; height: 180px;">
                   <img src="{{ asset('asset/image/program/card/card-people2.png') }}" class="card-image p-2" alt="...">
               <div class="card-content  p-2 ">
                 <p class="card-date w-100">16-07-2021 19:17:41</p>
                 <p class="card-name w-100">Jacob Jones</p>
                 <p class="besar-donasi w-100">Rp. 50.000,-</p>
               </div>
             </div>
           </div>
           <div class="col" >
            <div class="card" id="profile" style="width: 160px; height: 180px;">
                   <img src="{{ asset('asset/image/program/card/card-people3.png') }}" class="card-image p-2" alt="...">
               <div class="card-content p-2 ">
                 <p class="card-date w-100">16-07-2021 19:17:41</p>
                 <p class="card-name w-100">Brooklyn Simmons</p>
                 <p class="besar-donasi w-100">Rp. 100.000,-</p>
               </div>
             </div>
           </div>
           <div class="col" >
            <div class="card" id="profile" style="width: 160px; height: 180px;">
                   <img src="{{ asset('asset/image/program/card/card-people4.png') }}" class="card-image p-2" alt="...">
               <div class="card-content p-2">
                 <p class="card-date w-100">16-07-2021 19:17:41</p>
                 <p class="card-name w-100">Esther Howard</p>
                 <p class="besar-donasi w-100">Rp. 500.000,-</p>
               </div>
             </div>
           </div>
           <div class="col" >
            <div class="card" id="profile" style="width: 160px; height: 180px;">
                   <img src="{{ asset('asset/image/program/card/card-people-5.png') }}" class="card-image p-2" alt="...">
               <div class="card-content p-2">
                 <p class="card-date w-100">16-07-2021 19:17:41</p>
                 <p class="card-name w-100">Devon Lane</p>
                 <p class="besar-donasi w-100">Rp. 1.000.000,-</p>
               </div>
             </div>
           </div>
           <div class="col" >
            <div class="card" id="profile" style="width: 160px; height: 180px;">
                   <img src="{{ asset('asset/image/program/card/card-people6.png') }}" class="card-image p-2" alt="...">
               <div class="card-content p-2">
                 <p class="card-date w-100">16-07-2021 19:17:41</p>
                 <p class="card-name w-100">Robert Fox</p>
                 <p class="besar-donasi w-100">Rp.400.000,-</p>
               </div>
             </div>
           </div>

        </div>
      </div>
     <!-- pagination -->
     <div class="pagination-content container mt-1 mb-5 ">
      <ul class="pagination justify-content-center">
         <li class="page-item"><a class="page-link" href="#">1</a></li>
         <li class="page-item"><a class="page-link" href="#">2</a></li>
         <li class="page-item"><a class="page-link" href="#">3</a></li>
      </ul>
   </div>
</div>
</div>
</body>
</html>
@endsection
