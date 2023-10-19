@extends('../content/index')
@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <link rel="stylesheet" href="{{ asset('asset/css/index.css') }}"> --}}
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&family=Open+Sans:wght@500&family=Raleway:wght@100&display=swap" rel="stylesheet">
</head>
<body>
{{-- @include('content.component.navbar') --}}
@include('content.component.organism.homepage.banner')
<div class="container-fluid py-5" >
    @include('content.component.organism.homepage.info')
</div>
    @include('content.component.organism.homepage.program')
    <div class="container-fluid py-5">
        @include('content.component.organism.homepage.update')
    </div>


</body>
</html>
@endsection
