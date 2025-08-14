@extends('layouts.main')

@section('title', 'BT Premium Auto Xeon - สาขาสุขสวัสดิ์')

@section('content')

<div class="container mt-3">
    <h2 class="text-white my-4 mt-5">
        ที่ตั้งของร้าน
    </h2>
    <div class="row">
        <div class="col-12 mb-3 mx-auto px-2 text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.413139535106!2d100.52777037586384!3d13.63261460004025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2a1cfc89f017d%3A0x839e859409c6012c!2zQlQgUHJlbWl1bSBBdXRvIFhlbm9uIOC4quC4suC4guC4siDguKrguLjguILguKrguKfguLHguKrguJTguLTguYw!5e0!3m2!1sth!2sth!4v1754320778605!5m2!1sth!2sth" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <h2 class="text-white my-4 mt-5">
        หน้าร้าน
    </h2>
    <div class="row">
        <div class="col-12 mb-3 mx-auto px-2 text-center">
            <img src="{{ asset('images/store.jpg') }}" class="w-100">
        </div>
    </div>
</div>

@endsection