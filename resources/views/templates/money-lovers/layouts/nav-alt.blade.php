<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <a class="mobile_menu_icon" aria-controls="navbarNav" href="#">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </button>
        <a class="navbar-brand justify-content-center justify-content-lg-start d-flex" href="{{ url('/?t=2') }}">
            <img src="<?php echo asset('storage/images/moneylovers/logo.png') ?>" alt="">
        </a>
        <div class="nav-item justify-content-end d-flex d-lg-none">
            <a class="nav-link rounded-pill py-0 my-auto px-4"  data-toggle="modal" href="#loginModal">Login</a>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav navigation">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/?t=2#welcome') }}">Welcome</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/?t=2#chat') }}">ML Chat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/?t=2#mail') }}">ML Mail</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/?t=2#signup') }}">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/?t=2#contact') }}">Contact Us</a>
                </li>
                <li class="nav-item justify-content-center d-none d-lg-flex">
                    <a class="nav-link rounded-pill py-0 my-auto px-4"  data-toggle="modal" href="#loginModal">Login</a>
                </li>
            </ul>
        </div><!-- collapse -->
    </div><!-- container -->
</nav>
