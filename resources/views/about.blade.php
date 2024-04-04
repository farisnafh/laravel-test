
{{-- memanggil layouts main, yang berisi komponen navigation bar --}}
{{-- akan menggunakan bagian dari layout.main --}}
@extends('layouts.main')

{{-- section bagian yang akan mengisi 'container' --}}
@section('container')
    <link rel="stylesheet" href="assets/css/home.css">

    <h1>Halaman Views About</h1>
    <h3><?=  $name; ?></h3>
    <h3><?php echo $name; ?></h3>
    <p>Image source</p>
    <div class="about-views">
        <img src="assets/img/images1.png" alt="">
        <img src="assets/img/<?=  $images; ?>" alt="">
    </div>
    <div class="about-views">
        <img src="assets/img/{{ $images2 }}" alt=" {{ $name }}">
    </div>
@endsection
