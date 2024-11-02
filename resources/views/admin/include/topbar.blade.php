<div class="" id="preloader">
    <div class="img d-none">
        <img src="../bongdorn/uploads/website-images/Spinner.gif" alt="UniFood" class="img-fluid">
    </div>
</div>

<!--=============================
        TOPBAR START
    ==============================-->
<section class="wsus__topbar">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-6 d-none d-md-block">
                <ul class="wsus__topbar_info d-flex flex-wrap">
                    <li><a href="mailto:livecafe30@gmail.com"><i class="fas fa-envelope"></i>
                            livecafe30@gmail.com</a>
                    </li>
                    <li><a href="callto:+855 93702035"><i class="fas fa-phone-alt"></i> +855 93702035</a></li>
                </ul>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="topbar_right">
                    <div class="topbar_language">
                        <form id="setLanguage" action="set-language">
                            <select id="select_js3" name="code">
                                <option value="en" selected>English</option>
                                <option value="bn">Bangla</option>
                                <option value="ar">Arabic</option>
                            </select>
                        </form>
                    </div>
                    <ul class="topbar_icon d-flex flex-wrap">
                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=============================
        TOPBAR END
    ==============================-->


<!--=============================
        MENU START
    ==============================-->
<nav class="navbar navbar-expand-lg main_menu">
    <div class="container">
        <a class="navbar-brand" href="">
            <img src="{{ asset('bongdorn/images/livecafe/images/cafe/logo_live.png') }}" alt="LiveCafe"
                class="img-fluid mt-3">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="far fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">

                <li class="nav-item">
                    <a class="nav-link" href="">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about-us">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="products">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">pages <i class="far fa-plus"></i></a>
                    <ul class="droap_menu">

                        <li>
                            <a href="our-chef">Our chef</a>
                        </li>

                        <li><a href="testimonial">Testimonial</a></li>

                        <li><a href="faq">FAQs</a></li>

                        <li><a href="privacy-policy">privacy policy</a></li>
                        <li><a href="terms-and-condition">terms and
                                condition</a></li>

                        <li><a href="page/custom-page-one">Custom Page One</a>
                        </li>
                        <li><a href="page/custom-page-two">Custom Page Two</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blogs">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us">contact us</a>
                </li>
            </ul>
            <ul class="menu_icon d-flex flex-wrap">
                <li>
                    <a href="javascript:;" class="menu_search"><i class="far fa-search"></i></a>
                    <div class="wsus__search_form">
                        <form action="products">
                            <span class="close_search"><i class="far fa-times"></i></span>
                            <input name="search" type="text" placeholder="Type your keyword">
                            <button type="submit">search</button>
                        </form>
                    </div>
                </li>
                <li>
                    <a class="cart_icon"><i class="fas fa-shopping-basket"></i> <span
                            class="topbar_cart_qty">0</span></a>
                </li>
                @if (Route::has('login'))
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="common_btn nav-link" href="login"
                        onclick="return confirm('Are you sure you want to logout?')"> Logout
                    </button>
                </form>
                @else
                <a href="{{ route('login') }}" class="btn btn-outline-primary nav-link">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-primary nav-link">Register</a>
                @endauth
                @endif

            </ul>
        </div>
    </div>
</nav>
<!-- Authentication -->


<div class="wsus__menu_cart_area">
    <div class="wsus__menu_cart_boody">

        <div class="wsus__menu_cart_header">
            <h5>Your shopping cart is empty!</h5>
            <span class="close_cart"><i class="fal fa-times"></i></span>
        </div>

    </div>
</div>

<!--=============================
        MENU END
    ==============================-->
