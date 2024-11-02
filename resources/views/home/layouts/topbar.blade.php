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
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
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

                @if (Route::has('login'))
                <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-user"></i></a>
                @auth
                <li class="pd-2">
                    <a class="cart_icon pd-1"><i class="fas fa-shopping-basket"></i> <span
                            class="topbar_cart_qty">0</span></a>
                </li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" class="common_btn" value="logout">
                </form>
                @else
                <a href="{{ route('login') }}" class="common_btn pd-1"><i class="fas fa-user-circle pd-4"></i>Login</a>
                {{--<a href="{{ route('register') }}" class=" nav-link">Register</a>--}}
                @endauth
                @endif

            </ul>
        </div>
    </div>
</nav>
<!-- Authentication -->
<br><br><br><br>
<div class="wsus__menu_cart_area">
    <div class="wsus__menu_cart_boody">

        <div class="wsus__menu_cart_header">
            <h5>Your shopping cart is empty!</h5>
            <span class="close_cart"><i class="fal fa-times"></i></span>
            <h5>Total:Item</h5>
        </div>
        <div class="row menu_cart_body">
            <div class="col-lg-12">
                <div class="menu_cart_item">
                    <div class="menu_cart_item_img">
                        <img src="upload/products/" alt="">
                    </div>
                    <div class="menu_cart_item_content">
                        <h5>Chicken Burger</h5>
                        <div class="menu_cart_item_price">
                            <span class="menu_cart_item_price_old">$ 20</span>
                            <span class="menu_cart_item_price_new">$ 15</span>
                        </div>
                        <div class="menu_cart_item_qty">
                            <span class="menu_cart_item_qty_minus"><i class="fal fa-minus"></i></span>
                            <span class="menu_cart_item_qty_number">1</span>
                            <span class="menu_cart_item_qty_plus"><i class="fal fa-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="menu_cart_item">
                    <div class="menu_cart_item_img">
                        <img src="{{ asset('assets/img/menu_cart_img.png') }}" alt="">
                    </div>
                    <div class="menu_cart_item_content">
                        <h5>Chicken Burger</h5>
                        <div class="menu_cart_item_price">
                            <span class="menu_cart_item_price_old">$ 20</span>
                            <span class="menu_cart_item_price_new">$ 15</span>
                        </div>
                        <div class="menu_cart_item_qty">
                            <span class="menu_cart_item_qty_minus"><i class="fal fa-minus"></i></span>
                            <span class="menu_cart_item_qty_number">1</span>
                            <span class="menu_cart_item_qty_plus"><i class="fal fa-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="menu_cart_item_total">
                    <span class="menu_cart_item_total_text">SubTotal:</span>
                    <span class="menu_cart_item_total_price">$ 15</span>
                </div>
            </div>
            <div class="col-12">
                <a href="{{ url('show_cart') }}" class="common_btn cart_view menu_cart_btn">View_cart</a>
                <a href="" class="common_btn checkout">checkout</a>
            </div>

        </div>
    </div>
</div>



<div class="wsus__reservation">
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Book a Table</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="wsus__reservation_form" method="POST" action="store-reservation">
                        <input type="hidden" name="_token" value="bZUpVkzKUcPaHE4SPo584OD0ZBbuW6kNVafaiZUz"
                            autocomplete="off">
                        <input class="reservation_input datepicker" type="text" autocomplete="off" name="reserve_date"
                            required placeholder="Select date">

                        <select class="reservation_input" id="select_js" required name="reserve_time">
                            <option value="">Select Time</option>

                            <option value="08:00 AM - 09:00 AM">08:00 AM - 09:00 AM</option>
                            <option value="09:00 AM - 10:00 AM">09:00 AM - 10:00 AM</option>
                            <option value="10:00 AM - 11:00 AM">10:00 AM - 11:00 AM</option>
                            <option value="11:00 AM - 12:00 PM">11:00 AM - 12:00 PM</option>
                            <option value="12:00 PM - 01:00 PM">12:00 PM - 01:00 PM</option>
                            <option value="01:00 PM - 02:00 PM">01:00 PM - 02:00 PM</option>
                            <option value="02:00 PM - 03:00 PM">02:00 PM - 03:00 PM</option>
                            <option value="03:00 PM - 04:00 PM">03:00 PM - 04:00 PM</option>
                            <option value="04:00 PM - 05:00 PM">04:00 PM - 05:00 PM</option>
                            <option value="05:00 PM - 06:00 PM">05:00 PM - 06:00 PM</option>
                            <option value="06:00 PM - 07:00 PM">06:00 PM - 07:00 PM</option>
                            <option value="07:00 PM - 08:00 PM">07:00 PM - 08:00 PM</option>
                            <option value="08:00 PM - 09:00 PM">08:00 PM - 09:00 PM</option>
                            <option value="09:00 PM - 10:00 PM">09:00 PM - 10:00 PM</option>
                            <option value="10:00 PM - 11:00 PM">10:00 PM - 11:00 PM</option>
                            <option value="11:00 PM - 12:00 AM">11:00 PM - 12:00 PM</option>
                        </select>

                        <input class="reservation_input" type="number" placeholder="Number of person" name="person"
                            required>
                        <button type="submit">Send Request</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=============================
        MENU END
    ==============================-->


<!-- CART POPUT START -->
<div class="wsus__cart_popup">
    <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fal fa-times"></i></button>
                    <div class="load_product_modal_response">
                        <img src="public/uploads/website-images/Spinner-1s-200px.gif" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=============================
        MENU END
    ==============================-->
