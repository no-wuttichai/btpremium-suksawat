@extends('layouts.main')

@section('title', 'BT Premium Auto Xeon - สาขาสุขสวัสดิ์')

@section('content')
<nav id="main">
    <div class="container pt-3 pb2">
        <div class="d-lg-flex">
            <div class="text-center w-100 menu my-lg-auto">
                <h2 class="font-sriracha text-white aos-init aos-animate" data-aos="fade-down">ร้านทำไฟหน้ารถยนต์ครบวงจร</h2>
                <div class="container">
                    <div class="text-center">
                        <a class="brand w-100" href="">
                            <img src="images/logo.jpg" alt="" data-aos="fade-right" class="animate__animated animate__shakeX aos-init aos-animate w-75">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="container mt-3">
    <div class="row">
        <div class="col-12 game">
        </div>
        <div class="col-12" id="session_2">
            <h2 class="text-white my-4">
                <div class="d-inline font-sriracha text-success" style="color: #FF6600 !important;"> BT Premium Auto Xenon</div>
                สาขาสุขสวัสดิ์
            </h2>
            <div class="row mt-3 full">
            
            </div>
            <h2 class="text-success font-sriracha mt-md-4" id="session_3" style="color: #FF6600 !important;">ผลงาน</h2>
            <div class="row mt-3 full px-2">
                @foreach ($portfolio as $file)

                <div class="col-6 col-md-6 col-lg-4 mb-3 mx-auto px-2">
                    <div class="d-inline-block zoom-zoom border- w-100 h-100 aos-init aos-animate" data-aos="fade-up">
                        <img src="{{ asset('images/portfolio/' . $file->getFilename()) }}" alt="" class="w-100 h-auto">
                        {{ $loop->index }}
                    </div>
                </div>
                @endforeach
            </div>
            <h2 class="text-success font-sriracha mt-md-4" id="session_3" style="color: #FF6600 !important;">สินค้าไฟหน้ารถยนต์</h2>
            <div class="row mt-3 full px-2">
                <div class="col-6 col-md-6 col-lg-4 mb-3 mx-auto px-2">
                    <div class="d-inline-block zoom-zoom border- w-100 h-100 aos-init aos-animate" data-aos="fade-up">
                        <img src="images/1.jpg" alt="" class="w-100 h-100">
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-4 mb-3 mx-auto px-2">
                    <div class="d-inline-block zoom-zoom border- w-100 h-100 aos-init aos-animate" data-aos="fade-up">
                        <img src="images/1.jpg" alt="" class="w-100 h-100">
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-4 mb-3 mx-auto px-2">
                    <div class="d-inline-block zoom-zoom border- w-100 h-100 aos-init" data-aos="fade-up">
                        <img src="images/1.jpg" alt="" class="w-100 h-100">
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-4 mb-3 mx-auto px-2">
                    <div class="d-inline-block zoom-zoom border- w-100 h-100 aos-init" data-aos="fade-up">
                        <img src="images/1.jpg" alt="" class="w-100 h-100">
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-4 mb-3 mx-auto px-2">
                    <div class="d-inline-block zoom-zoom border- w-100 h-100 aos-init" data-aos="fade-up">
                        <img src="images/1.jpg" alt="" class="w-100 h-100">
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-4 mb-3 mx-auto px-2">
                    <div class="d-inline-block zoom-zoom border- w-100 h-100 aos-init" data-aos="fade-up">
                        <img src="images/1.jpg" alt="" class="w-100 h-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 game mt-5">
            <h2 class="text-white font-sriracha mt-md-4">ทีมช่างของเรา</h2>
            <div class="row mt-3">
                <div class="col-12 col-md-6 col-lg-4 mb-3 mx-auto">
                    <div class="d-inline-block border- zoom-zoom aos-init" data-aos="fade-down-right">
                        <img src="images/1.jpg" class="w-100" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3 mx-auto">
                    <div class="d-inline-block border- zoom-zoom aos-init" data-aos="fade-down-right">
                        <img src="images/1.jpg" class="w-100" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12 mb-4 mx-auto">
                    <img src="images/1.jpg" class="w-100" alt="">
                </div>

            </div>
        </div>
    </div>
</div>
@endsection