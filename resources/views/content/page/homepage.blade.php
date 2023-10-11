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
@include('content.component.homepage.banner')
<div class="container">
    @include('content.component.homepage.info')
</div>
    @include('content.component.homepage.program')
    @include('content.component.homepage.update')

</body>
</html>
@endsection
