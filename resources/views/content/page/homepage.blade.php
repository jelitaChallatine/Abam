@extends('../content/index')
@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('asset/css/index.css') }}">
    <title>Document</title>
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
