<body>
    @php
        $currentRouteName = Route::currentRouteName();
    @endphp
    <nav class="navbar navbar-expand-md navbar-dark " style="background-color: black">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1">
                <img class="img-fluid" src="{{ Vite::asset('resources/images/logo.png') }}"alt="image"
                    style="width: 30px;"> Data Barang</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link ">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('barang.index') }}" class="nav-link">List
                            Barang</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i
                        class="bi-person-circle me-1"></i>
                    Data Diri</a>
            </div>
        </div>
    </nav>
</body>
