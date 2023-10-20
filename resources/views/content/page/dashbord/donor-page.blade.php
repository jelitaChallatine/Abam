@extends('.content/index')
@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/agent-sharp/3.1/agent.min.js"></script>
    <link rel="stylesheet" href="{{ asset('asset/css/dashboard/mobile-dashboard.css') }}" id="mobile-css">
    <link rel="stylesheet" href="{{ asset('asset/css/dashboard/dashboard.css')}}" id="desktop-css"/>
</head>
<body>

    <script>
function changeDesignBasedOnScreenSize() {
    var desktopDesign = document.getElementById('desktop-design');
    var mobileDesign = document.getElementById('mobile-design');

    var desktopCSS = document.getElementById('desktop-css');
    var mobileCSS = document.getElementById('mobile-css');

    if (window.innerWidth <= 768) {
        desktopCSS.disabled = true;
        mobileCSS.disabled = false;
        desktopDesign.style.display = 'none';
        mobileDesign.style.display = 'block';
    } else {
        // Sembunyikan tampilan mobile
        mobileDesign.style.display = 'none';
        mobileCSS.disabled = true;
        desktopCSS.disabled = false;
        desktopDesign.style.display = 'block';
    }
}

// Panggil fungsi saat halaman dimuat dan saat ukuran layar berubah
window.addEventListener('load', changeDesignBasedOnScreenSize);
window.addEventListener('resize', changeDesignBasedOnScreenSize);

        </script>


     <!-- dashboard content -->
     <div class="container-fluid w-100" id="desktop-design" >
        @include('content.component.organism.dashboard.donor-page.menu-right')
     </div>

     <div class="mobile" id="mobile-design" >
        {{-- @include('content.page.dashbord.mobile.donor-page.menu-right') --}}
        @include('content.page.dashbord.mobile.donor-page.menu-right')
     </div>

     @php
     $hideFooter = true;
 @endphp

