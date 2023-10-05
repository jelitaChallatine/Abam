
@extends('.content/index')
@section('konten')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Document</title>
      <link rel="stylesheet" href="{{ asset('asset/css/program.css') }}" />
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
         <div class="container-xxl px-5 pt-5">
            <div>
               <span class="h1 program">Update</span>
            </div>
         </div>
         <div class="container-xxl px-5 pt-2 pb-5">
            <div>
               <span class="style-parag">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de.</span>
            </div>
         </div>
      </div>
      <div class="container-xxl px-5 d-flex align-items-center py-3 pt-5" >
         <div>
            <span class="h1 title-2">Update <span class="berbagi">terbaru</span> hari ini?</span>
         </div>
      </div>
      @include('content.component.update.card-update')
   </body>
</html>

@endsection
