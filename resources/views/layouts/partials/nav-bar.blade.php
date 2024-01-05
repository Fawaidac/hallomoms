    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0">Hallomoms.</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link {{ Route::is('home') ? 'active' : '' }}">Home</a>
                <a href="/about" class="nav-item nav-link {{ Route::is('about') ? 'active' : '' }} ">About</a>
                <a href="/services" class="nav-item nav-link {{ Route::is('services') ? 'active' : '' }} ">Services</a>
                <a href="/article" class="nav-item nav-link {{ Route::is('article') ? 'active' : '' }}">Article</a>
                <a href="/contact" class="nav-item nav-link {{ Route::is('contact') ? 'active' : '' }}">Feedback</a>
                <a href="/login" class="nav-item nav-link {{ Route::is('login') ? 'active' : '' }} ">Login</a>
            </div>
            {{-- <a href="" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Get A Quote<i
                    class="fa fa-arrow-right ms-3"></i></a> --}}
        </div>
    </nav>
