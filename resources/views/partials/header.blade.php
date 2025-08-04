<nav id="main">
    <div class="container pt-3 pb2">
        <div class="d-lg-none mobile green block-btn-top">
            <div class="row mb-4 text-center">
                <div class="col-4 px-0">
                    <a href="{{ url('/') }}" class="d-block py-2" style="background: #FF6600;">
                        <i class="fas fa-home mr-2"></i> หน้าหลัก
                    </a>
                </div>
                <div class="col-4 px-1">
                    <a href="{{ url('/review') }}" class="d-block py-2" style="background: #FF6600;">
                        <i class="fas fa-video mr-2"></i> รีวิว
                    </a>
                </div>
                <div class="col-4 px-0">
                    <a href="{{ url('/contact') }}" class="d-block py-2" style="background: #FF6600;">
                        <i class="fas fa-map mr-2"></i> แผนที่
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="nav-menu d-none d-lg-block">
    <div class="container">
        <ul class="d-flex pl-0 m-0 text-center">
            <li class="w-100">
                <a href="{{ url('/') }}" class="py-3 px-4 px-lg-3 d-block">
                    <div class="span"><i class="fa fa-home mr-2"></i> หน้าหลัก</div>
                </a>
            </li>
            <li class="w-100">
                <a href="{{ url('/portfolio') }}" class="py-3 px-4 px-lg-3 d-block">
                    <div class="span"><i class="fas fa-cubes mr-2"></i> สินค้า</div>
                </a>
            </li>
            <li class="w-100">
                <a href="{{ url('/portfolio') }}" class="py-3 px-4 px-lg-3 d-block">
                    <div class="span"><i class="fas fa-eye mr-2"></i> ผลงาน</div>
                </a>
            </li>
            <li class="w-100">
                <a href="{{ url('/review') }}" class="py-3 px-4 px-lg-3 d-block">
                    <div class="span"><i class="fas fa-star mr-2"></i> รีวิว</div>
                </a>
            </li>
            <li class="w-100">
                <a href="{{ url('/contact') }}" class="py-3 px-4 px-lg-3 d-block">
                    <div class="span"> <i class="fas fa-map mr-2"></i> แผนที่</div>
                </a>
            </li>
        </ul>
    </div>
</div>