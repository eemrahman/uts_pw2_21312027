@extends('layout.master')

@section('judul')
Selamat datang
@endsection

@section('content')
<body>
    <h1>SELAMAT DATANG {{$firstName}} {{$lastName}}</h1>
    <h5>Terima kasih telah bergabung diwebsite Kami. Media Belajar kita bersama. </h5>
</body>
@endsection