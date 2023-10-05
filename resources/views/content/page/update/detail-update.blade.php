@extends('.content/index')

@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('asset/css/detail-update-page.css') }}" />

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
                <p class="title display-5 w-75 text-center">Tata cara memilih hewan qurban yang sehat.</p>
            </div>
        </div>

     </div>
     <div class="container pt-5">
                <img src="asset/img crausel/coba.jpg" class="w-100" alt="">
     </div>
     <div class="container pt-5 ">
         <div class="paraf d-flex justify-content-center">
            <p>
               Mengikuti tradisi qurban adalah salah satu ibadah penting dalam agama Islam.
               Selain aspek ibadahnya, pemilihan hewan qurban yang sehat juga memiliki kontribusi
               besar terhadap keberhasilan pelaksanaan ibadah ini.
            </p>
         </div>
         <div class="paraf d-flex justify-content-center">
            <p>
               Dalam panduan ini, kita akan membahas tata cara memilih hewan qurban yang sehat sehingga kita dapat memastikan bahwa apa
               yang kita berikan adalah yang terbaik dalam rangka berbagi berkah.
            </p>
         </div>
         <div class="paraf d-flex justify-content-center">
            <p class="text-bold">
               1. Memilih Sumber yang Terpercaya
            </p>
         </div>
         <div class="paraf d-flex  justify-content-center">
            <p>
               Langkah pertama dalam memilih hewan qurban yang sehat adalah memastikan sumbernya dapat dipercaya.
               Anda dapat mencari hewan qurban dari peternak ternama atau melalui lembaga amil zakat yang terkemuka.
               Ini akan membantu Anda memastikan bahwa hewan tersebut dikelola dan diberi perawatan yang baik.
            </p>
         </div>
         <div class="paraf d-flex justify-content-center">
            <p class="text-bold">
               2. Kesehatan Fisik Hewan
            </p>
         </div>
         <div class="paraf d-flex  justify-content-center">
            <p>
               Kesehatan fisik hewan adalah faktor utama yang perlu diperhatikan.
               Pastikan hewan tersebut tidak memiliki cacat fisik atau penyakit yang dapat membahayakan kesehatan manusia.
               Periksa mata, hidung, dan kulitnya untuk melihat tanda-tanda penyakit atau infeksi.
            </p>
         </div>
            <div class="paraf d-flex justify-content-center">
            <p class="text-bold mt-2">
               3. Usia yang Tepat
            </p>
         </div>
         <div class="paraf d-flex  justify-content-center">
            <p>
               Pilih hewan yang memiliki usia yang sesuai. Dalam Islam, hewan qurban harus mencapai usia tertentu agar dianggap sah.
               Misalnya, kambing harus berusia minimal satu tahun, sedangkan sapi minimal dua tahun.
               Pastikan hewan yang Anda pilih memenuhi persyaratan usia ini.

            </p>
         </div>
         <div class="paraf d-flex  justify-content-center">
            <p>
               Dalam melaksanakan ibadah qurban, penting untuk menjaga aspek kualitas dan kesehatan hewan yang kita berikan.
               Dengan memilih hewan qurban yang sehat, kita dapat memastikan bahwa kita telah melaksanakan ibadah dengan baik,
               dan berbagi berkah dengan mereka yang membutuhkan.
            </p>
         </div>
         <div class="paraf d-flex justify-content-center">
            <p class="text-bold mt-5">
               Semoga Ibadah Qurban Anda Diterima dan Membawa Berkah Bagi Semua yang Membutuhkan!
            </p>
         </div>
     </div>

     <!-- button  -->
     <div class="container d-flex justify-content-center mt-5">
      <form class="form-btn-container d-flex justify-content-center">
         <a href="" class="btn text-light align-self-start" id="donate-button">Bagikan Tulisan ini</a>
     </form>
     </div>

     <!-- pagination -->
     <div class="pagination-content container mt- mb-5 ">
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

