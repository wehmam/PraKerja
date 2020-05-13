<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand mx-5" href="#">
            <img src="{{ Storage::url('assets/PraKerja/logoNavbar.png') }}" class="d-inline-block align-top" width="150"
                alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto font-weight-bold">
                <a class="nav-item nav-link text-primary @yield('home')" href="{{ route('home') }}">Home</a>
                <a class="nav-item nav-link text-primary @yield('index')" href="{{ route('prakerja.index') }}">Pendaftar</a>
                <a class="nav-item nav-link text-primary @yield('create')" href="{{ route('prakerja.create') }}">Daftar</a>
                {{-- <a class="nav-item nav-link disabled" href="#">Disabled</a> --}}
            </div>
        </div>
    </div>
</nav>
