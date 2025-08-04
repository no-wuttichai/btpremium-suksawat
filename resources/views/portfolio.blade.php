@extends('layouts.main')

@section('title', 'BT Premium Auto Xeon - สาขาสุขสวัสดิ์')

@section('content')

<div class="container mt-3">
    <h2 class="text-white my-4 mt-5">
        ผลงานของทางร้าน
    </h2>
    <div class="row">
        @foreach ($files as $file)
        <div class="col-6 col-md-6 col-lg-4 mb-3 mx-auto px-2">
            <div class="d-inline-block zoom-zoom border- w-100 h-100 aos-init aos-animate" data-aos="fade-up">
                <img src="{{ asset('images/portfolio/' . $file->getFilename()) }}" alt="" class="w-100 h-auto">
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection