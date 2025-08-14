@extends('layouts.main')

@section('title', 'BT Premium Auto Xeon - สาขาสุขสวัสดิ์')

@section('content')

<div class="container mt-3">
    <h2 class="text-white my-4 mt-5">
        โปรโมชั่น!
    </h2>
    <div class="row">
        <div class="col-12 game">
            <div class="row mt-3 px-2 g-3">
                @foreach ($files as $file)
                <div class="col-6 col-md-6 col-lg-4 mb-3 px-2 mx-auto">
                    <div class="square">
                        <img src="{{ asset('images/promotion/' . $file->getFilename()) }}" alt="" class="w-100 h-auto">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection