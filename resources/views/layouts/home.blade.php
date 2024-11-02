<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />

        <title>Welcome to LiveCafe Management Project with Laravel</title>
        <meta name="description" content="Welcome to LiveCafe Management Project with Laravel">

        <link rel="icon" type="image/png" href="{{ asset('bongdorn/images/favicon.png')}}">
        <link rel="stylesheet" href="{{ asset('bongdorn/css/all.min.css')}}">
        <link rel="stylesheet" href="{{ asset('bongdorn/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('bongdorn/css/spacing.css')}}">
        <link rel="stylesheet" href="{{ asset('bongdorn/css/slick.css')}}">
        <link rel="stylesheet" href="{{ asset('bongdorn/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{ asset('bongdorn/css/venobox.min.css')}}">
        <link rel="stylesheet" href="{{ asset('bongdorn/css/animate.css')}}">
        <link rel="stylesheet" href="{{ asset('bongdorn/css/jquery.exzoom.css')}}">
        <link rel="stylesheet" href="{{ asset('bongdorn/toastr/toastr.min.css')}}">
        <link rel="stylesheet" href="{{ asset('bongdorn/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('bongdorn/css/responsive.css')}}">
        <link rel="stylesheet" href="{{ asset('bongdorn/css/bootstrap-datepicker.min.css')}}">
        <link rel="stylesheet" href="{{ asset('bongdorn/css/select2.min.css')}}">


        <style>
            :root {
                --colorPrimary: #f6d91c;
                --paraColor: #494949;
                --colorBlack: #010f1c;
                --colorWhite: #ffffff;
                --paraFont: 'Barlow', sans-serif;
                --headingFont: 'Jost', sans-serif;
                --cursiveFont: 'Lobster', cursive;
                --boxShadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
                --gradiantBg: rgb(156, 3, 30)linear-gradient(0deg, rgba(156, 3, 30, 1) 0%, rgba(235, 0, 41, 1) 100%);
                --gradiantHoverBg: rgb(235, 0, 41)linear-gradient(0deg, rgba(235, 0, 41, 1) 0%, rgba(156, 3, 30, 1) 100%);
            }


            .footer_overlay {
                background: #ffd902fa !important;
            }


            .topbar_icon li a {
                background: #f0fc0d !important;
            }
        </style>

        <!--jquery library js-->
        <script src="{{ asset('bongdorn/js/jquery-3.6.3.min.js')}}"></script>
        <script src="{{ asset('bongdorn/js/sweetalert2@11.js')}}"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>


        <script async src="https://www.googletagmanager.com/gtag/js?id=5248-fd-5fds"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());
            gtag('config', '5248-fd-5fds');
        </script>

        <script>
            !function (f, b, e, v, n, t, s) {
                if (f.fbq) return; n = f.fbq = function () {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
                n.queue = []; t = b.createElement(e); t.async = !0;
                t.src = v; s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', 'fsdf45sdf4sdf');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                src="https://www.facebook.com/tr?id=fsdf45sdf4sdf&ev=PageView&noscript=1" /></noscript>


    </head>

    <body>
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
                            <li><a href="callto:+855-937-020-59"><i class="fas fa-phone-alt"></i> +855-937-020-59</a></li>
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
                        class="img-fluid mt-3"> </a>
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
                        <li>
                            <a href=""><i class="fas fa-user"></i></a>
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

        <!-- CART POPUT START -->
        <div class="wsus__cart_popup">
            <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                    class="fal fa-times"></i></button>
                            <div class="load_product_modal_response">
                                <img src="{{ asset('bongdorn/images/chefs_bg.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CART POPUT END -->
        <!--=============================
        BANNER START
      ==============================-->
        <section class="wsus__banner" style="background: url(/bongdorn/images/slides/slider-bg.jpg);">
            <div class="wsus__banner_overlay">
                <span class="banner_shape_1">
                    <img src="{{ asset('bongdorn/images/chef_right_image.png') }}" alt="" class="img-fluid w-100">
                </span>
                <span class="banner_shape_2">
                    <img src="{{ asset('bongdorn/images/chef_left_image.png') }}" alt="" class="img-fluid w-100">
                </span>
                <div class="row banner_slider">
                    <div class="col-12">
                        <div class="wsus__banner_slider">
                            <div class=" container">
                                <div class="row">
                                    <div class="col-xl-5 col-md-5 col-lg-5">
                                        <div class="wsus__banner_img wow fadeInLeft" data-wow-duration="1s">
                                            <div class="img">
                                                <img src="{{ asset('bongdorn/images/foods/f10.png') }}" alt="food item"
                                                    class="img-fluid w-100">
                                                <span style="background: url(offer_shapes.png);">
                                                    35% off
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-5 col-md-7 col-lg-6">
                                        <div class="wsus__banner_text wow fadeInRight" data-wow-duration="1s">
                                            <h1>Special Deals Today</h1>
                                            <h3>Fast Food &amp; Restaurants</h3>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum fugit
                                                minima et debitis ut distinctio optio qui voluptate natus.</p>
                                            <ul class="d-flex flex-wrap">
                                                <li><a class="common_btn" href="product/fried-chicken">Shop now</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="wsus__banner_slider">
                            <div class=" container">
                                <div class="row">
                                    <div class="col-xl-5 col-md-5 col-lg-5">
                                        <div class="wsus__banner_img wow fadeInLeft" data-wow-duration="1s">
                                            <div class="img">
                                                <img src="/public/bongdorn/public/images/foods/f11.png" alt="food item"
                                                    class="img-fluid w-100">
                                                <span style="background: url(/public/offer_shapes.png);">
                                                    25% Off
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-5 col-md-7 col-lg-6">
                                        <div class="wsus__banner_text wow fadeInRight" data-wow-duration="1s">
                                            <h1>Delicious Food Options</h1>
                                            <h3>Satisfy Your Cravings</h3>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum fugit
                                                minima et debitis ut distinctio optio qui voluptate natus.</p>
                                            <ul class="d-flex flex-wrap">
                                                <li><a class="common_btn" href="product/daria-shevtsova">Shop now</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="wsus__banner_slider">
                            <div class=" container">
                                <div class="row">
                                    <div class="col-xl-5 col-md-5 col-lg-5">
                                        <div class="wsus__banner_img wow fadeInLeft" data-wow-duration="1s">
                                            <div class="img">
                                                <img src="/public/bongdorn/images/foods/f9.png" alt="food item"
                                                    class="img-fluid w-100">
                                                <span
                                                    style="background: url(/public/bongdorn/images/offer_shapes.png);">
                                                    20% off
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-5 col-md-7 col-lg-6">
                                        <div class="wsus__banner_text wow fadeInRight" data-wow-duration="1s">
                                            <h1>Mouth-Watering Dishes</h1>
                                            <h3>Try Something New</h3>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum fugit
                                                minima et debitis ut distinctio optio qui voluptate natus.</p>
                                            <ul class="d-flex flex-wrap">
                                                <li><a class="common_btn" href="product/onion-rings">Shop now</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============================
        BANNER END
       ==============================-->



        <!--=============================
                WHY CHOOSE START
            ==============================-->
        <section class="wsus__why_choose">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="wsus__choose_single d-flex flex-wrap align-items-center justify-content-between">
                            <div class="icon icon_1">
                                <i class="fal fa-badge-percent"></i>
                            </div>
                            <div class="text">
                                <h3>Discount Voucher</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit est</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="wsus__choose_single d-flex flex-wrap align-items-center justify-content-between">
                            <div class="icon icon_1">
                                <i class="fas fa-burger-soda"></i>
                            </div>
                            <div class="text">
                                <h3>Fresh Healthy Foods</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit est</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="wsus__choose_single d-flex flex-wrap align-items-center justify-content-between">
                            <div class="icon icon_1">
                                <i class="far fa-hat-chef"></i>
                            </div>
                            <div class="text">
                                <h3>Fast Serve On Table</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit est</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============================
                WHY CHOOSE END
            ==============================-->

        <!--=============================
            OFFER ITEM START
        ==============================-->
        <section class="wsus__offer_item mt_95 xs_mt_65">
            <span class="banner_shape_3">
                <img src="/public/bongdorn/images/today_special_image.png" alt="shape" class="img-fluid w-100">
            </span>
            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="1s">
                    <div class="col-md-8 col-lg-7 col-xl-6 m-auto text-center">
                        <div class="wsus__section_heading mb_50">
                            <h4>Daily Offer</h4>
                            <h2>Up To 75% Off For This Day</h2>
                            <span>
                                <img src="/public/bongdorn/images/heading_shapes.png" alt="shapes"
                                    class="img-fluid w-100">
                            </span>
                            <p>Objectively pontificate quality models before intuitive information. Dramatically
                                recaptiualize multifunctional.</p>
                        </div>
                    </div>
                </div>
                <div class="row offer_item_slider wow fadeInUp" data-wow-duration="1s">
                    <div class="col-xl-4">
                        <div class="wsus__offer_item_single"
                            style="background: url(/public/bongdorn/images/dal-makhani-paneer.jpg);">

                            <span>17% off</span>

                            <a class="title" href="product/dal-makhani-paneer">Dal Makhani Paneer</a>
                            <p>Nec in rebum primis causae. Affert iisque ex pri, vis utinam vivendo definitionem ad,
                                nostrum omnesque per et. Omnium antiopam cotidieque cu sit.</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="javascript:;" onclick="load_product_model(2)"><i
                                            class="fas fa-shopping-basket"></i></a></li>

                                <li><a href="javascript:;" onclick="before_auth_wishlist(2)"><i
                                            class="fal fa-heart"></i></a>
                                </li>


                                <li><a href="product/dal-makhani-paneer"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="wsus__offer_item_single"
                            style="background: url(/public/bongdorn/images/indian-cuisine-pakora.jpg);">

                            <span>17% off</span>

                            <a class="title" href="product/indian-cuisine-pakora">Indian cuisine Pakora</a>
                            <p>Per ex vero nonumy. Ius eu doming nominavi mediocrem, aliquid efficiantur no vim, sanctus
                                admodum mnesarchum ad pro. No sea invidunt partiendo. No postea numquam ocurreret duo,
                                unum abhorreant cu nam, fugit fastidii percipitur nam id.</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="javascript:;" onclick="load_product_model(3)"><i
                                            class="fas fa-shopping-basket"></i></a></li>

                                <li><a href="javascript:;" onclick="before_auth_wishlist(3)"><i
                                            class="fal fa-heart"></i></a>
                                </li>


                                <li><a href="product/indian-cuisine-pakora"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="wsus__offer_item_single"
                            style="background: url(/public/bongdorn/images/beef-masala-salad.jpg);">

                            <span>13% off</span>

                            <a class="title" href="product/beef-masala-salad">Beef Masala Salad</a>
                            <p>In vim natum soleat nostro, pri in eloquentiam contentiones. Eu sit sapientem
                                reprehendunt, omnis aliquid eu eos. No quot illum veniam est, ne pro iudico saperet
                                mnesarchum.</p>
                            <ul class="d-flex flex-wrap">
                                <li><a href="javascript:;" onclick="load_product_model(4)"><i
                                            class="fas fa-shopping-basket"></i></a></li>

                                <li><a href="javascript:;" onclick="before_auth_wishlist(4)"><i
                                            class="fal fa-heart"></i></a>
                                </li>


                                <li><a href="product/beef-masala-salad"><i class="far fa-eye"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--=============================
            MENU ITEM START
           ==============================-->
        <section class="wsus__menu mt_95 xs_mt_65">
            <span class="banner_shape_1">
                <img src="{{ asset('bongdorn/images/chef_left_image.png') }}" alt="shape" class="img-fluid w-100">
            </span>
            <span class="banner_shape_2">
                <img src="{{ asset('bongdorn/images/menu_right_image.png') }}" alt="shape" class="img-fluid w-100">
            </span>
            <div class="container">

                <div class="row wow fadeInUp" data-wow-duration="1s">
                    <div class="col-md-8 col-lg-7 col-xl-6 m-auto text-center">
                        <div class="wsus__section_heading mb_45">
                            <h4>Food Menu</h4>
                            <h2>Our Popular Delicious Foods</h2>
                            <span>
                                <img src="{{ asset('bongdorn/images/heading_shapes.png') }}" alt=""
                                    class="img-fluid w-100">
                            </span>
                            <p>Objectively pontificate quality models before intuitive information. Dramatically
                                recaptiualize multifunctional.</p>
                        </div>
                    </div>
                </div>

                <div class="row wow fadeInUp" data-wow-duration="1s">
                    <div class="col-12">
                        <div class="menu_filter d-flex flex-wrap justify-content-center">
                            <button class="first_menu_product" data-filter=".category_1">Burger</button>
                            <button class="" data-filter=".category_2">Chicken</button>
                            <button class="" data-filter=".category_3">Pizza</button>
                            <button class="" data-filter=".category_4">Dresserts</button>
                            <button class="" data-filter=".category_5">Sandwich</button>
                        </div>
                    </div>
                </div>

                <div class="row grid">
                    <div class="col-xl-3 col-sm-6 col-lg-4 category_1 wow fadeInUp " data-wow-duration="1s">
                        <div class="wsus__menu_item">
                            <div class="wsus__menu_item_img">
                                <img src="{{ asset('bongdorn/images/hyderabadi-biryani.png') }}" alt="menu"
                                    class="img-fluid w-100">
                                <a class="category" href="#">Burger</a>
                            </div>
                            <div class="wsus__menu_item_text">
                                <p class="rating">

                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>1</span>
                                </p>
                                <a class="title" href="product/hyderabadi-biryani1">Hyderabadi Biryani</a>

                                <h5 class="price">$130 <del>$150</del> </h5>

                                <ul class="d-flex flex-wrap justify-content-center">
                                    <li><a href="javascript:;" onclick="load_product_model(1)"><i
                                                class="fas fa-shopping-basket"></i></a></li>


                                    <li><a href="javascript:;" onclick="before_auth_wishlist(1)"><i
                                                class="fal fa-heart"></i></a></li>

                                    <li><a href="product/hyderabadi-biryani"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-4 category_1 wow fadeInUp " data-wow-duration="1s">
                        <div class="wsus__menu_item">
                            <div class="wsus__menu_item_img">
                                <img src="{{ asset('bongdorn/images/daria-shevtsova.png')}}" alt="menu"
                                    class="img-fluid w-100">
                                <a class="category" href="#">Burger</a>
                            </div>
                            <div class="wsus__menu_item_text">
                                <p class="rating">

                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>0</span>
                                </p>
                                <a class="title" href="product/daria-shevtsova">Daria Shevtsova</a>

                                <h5 class="price">$120 <del>$200</del> </h5>

                                <ul class="d-flex flex-wrap justify-content-center">
                                    <li><a href="javascript:;" onclick="load_product_model(6)"><i
                                                class="fas fa-shopping-basket"></i></a></li>


                                    <li><a href="javascript:;" onclick="before_auth_wishlist(6)"><i
                                                class="fal fa-heart"></i></a></li>

                                    <li><a href="product/daria-shevtsova"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 col-lg-4 category_1 wow fadeInUp " data-wow-duration="1s">
                        <div class="wsus__menu_item">
                            <div class="wsus__menu_item_img">
                                <img src="{{ asset('bongdorn/images/foods/f10.png')}}" alt="menu"
                                    class="img-fluid w-100">
                                <a class="category" href="#">Burger</a>
                            </div>
                            <div class="wsus__menu_item_text">
                                <p class="rating">

                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>0</span>
                                </p>
                                <a class="title" href="product/popcorn-chicken">Popcorn Chicken</a>

                                <h5 class="price">$60 <del>$90</del> </h5>

                                <ul class="d-flex flex-wrap justify-content-center">
                                    <li><a href="javascript:;" onclick="load_product_model(10)"><i
                                                class="fas fa-shopping-basket"></i></a></li>


                                    <li><a href="javascript:;" onclick="before_auth_wishlist(10)"><i
                                                class="fal fa-heart"></i></a></li>

                                    <li><a href="product/popcorn-chicken"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-lg-4 category_1 wow fadeInUp " data-wow-duration="1s">
                        <div class="wsus__menu_item">
                            <div class="wsus__menu_item_img">
                                <img src="{{ asset('bongdorn/images/foods/f8.png')}}" alt="menu"
                                    class="img-fluid w-100">
                                <a class="category" href="#">Burger</a>
                            </div>
                            <div class="wsus__menu_item_text">
                                <p class="rating">

                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <span>0</span>
                                </p>
                                <a class="title" href="product/chicken-wings">Chicken Wings</a>

                                <h5 class="price">$75 <del>$80</del> </h5>

                                <ul class="d-flex flex-wrap justify-content-center">
                                    <li><a href="javascript:;" onclick="load_product_model(11)"><i
                                                class="fas fa-shopping-basket"></i></a></li>


                                    <li><a href="javascript:;" onclick="before_auth_wishlist(11)"><i
                                                class="fal fa-heart"></i></a></li>

                                    <li><a href="product/chicken-wings"><i class="far fa-eye"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>
        <!--=============================
            MENU ITEM END
        ==============================-->


        <!--=============================
        ADD SLIDER START
    ==============================-->
        {{--<section class="wsus__add_slider mt_100 xs_mt_70">
            <div class="container">
                <div class="row add_slider wow fadeInUp" data-wow-duration="1s">
                    <div class="col-xl-4">
                        <a href="product/onion-rings" class="wsus__add_slider_single"
                            style="background: url(images/advertisement.png);">
                            <div class="text">
                                <h3>Fried Chicken</h3>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4">
                        <a href="product/fried-chicken" class="wsus__add_slider_single"
                            style="background: url(images/advertisement.png);">
                            <div class="text">
                                <h3>Spicy Burger</h3>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4">
                        <a href="product/spicy-burger" class="wsus__add_slider_single"
                            style="background: url(images/advertisement.png);">
                            <div class="text">
                                <h3>New Year</h3>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4">
                        <a href="product/mozzarella-sticks" class="wsus__add_slider_single"
                            style="background: url(images/advertisement.png);">
                            <div class="text">
                                <h3>Black Firday</h3>
                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>--}}
        <!--=============================
        ADD SLIDER END
    ==============================-->

        <!--=============================
            TEAM START
        ==============================-->
        <section class="wsus__team pt_95 xs_pt_65 pb_150 xs_pb_120"
            style="background: url(/public/bongdorn/images/chefs_bg.jpg);">
            <span class="banner_shape_1">
                <img src="../bongdorn/images/chef_left_image.png" alt="shape" class="img-fluid w-100">
            </span>
            <span class="banner_shape_2">
                <img src="../bongdorn/images/chef_right_image.png" alt="shape" class="img-fluid w-100">
            </span>
            <div class="container">
                <div class="row wow fadeInUp" data-wow-duration="1s">
                    <div class="col-md-8 col-lg-7 col-xl-6 m-auto text-center">
                        <div class="wsus__section_heading mb_25">
                            <h4>Our Team</h4>
                            <h2>Meet Our Expert Chefs</h2>
                            <span>
                                <img src="../bongdorn/images/heading_shapes.png" alt="shapes" class="img-fluid w-100">
                            </span>
                            <p>Objectively pontificate quality models before intuitive information. Dramatically
                                recaptiualize multifunctional.</p>
                        </div>
                    </div>
                </div>

                <div class="row team_slider">
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="wsus__single_team">
                            <div class="wsus__single_team_img">
                                <img src="../bongdorn/images/olivia-ava.jpg" alt="team" class="img-fluid w-100">
                            </div>
                            <div class="wsus__single_team_text">
                                <h4>Olivia Ava</h4>
                                <p>Senior Chef</p>
                                <ul class="d-flex flex-wrap justify-content-center">
                                    <li><a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>

                                    <li><a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>

                                    <li><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>

                                    <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="wsus__single_team">
                            <div class="wsus__single_team_img">
                                <img src="../bongdorn/images/john-doe-20230305042351.jpg" alt="team"
                                    class="img-fluid w-100">
                            </div>
                            <div class="wsus__single_team_text">
                                <h4>John Doe</h4>
                                <p>Senior Chef</p>
                                <ul class="d-flex flex-wrap justify-content-center">
                                    <li><a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>

                                    <li><a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>

                                    <li><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>

                                    <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="wsus__single_team">
                            <div class="wsus__single_team_img">
                                <img src="../bongdorn/images/sophia-charle-20230305042513.jpg" alt="team"
                                    class="img-fluid w-100">
                            </div>
                            <div class="wsus__single_team_text">
                                <h4>Sophia Charle</h4>
                                <p>Intern Chef</p>
                                <ul class="d-flex flex-wrap justify-content-center">
                                    <li><a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>

                                    <li><a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>

                                    <li><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>

                                    <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 wow fadeInUp" data-wow-duration="1s">
                        <div class="wsus__single_team">
                            <div class="wsus__single_team_img">
                                <img src="../bongdorn/images/david-richard-20230305042547.jpg" alt="team"
                                    class="img-fluid w-100">
                            </div>
                            <div class="wsus__single_team_text">
                                <h4>David Richard</h4>
                                <p>Junior Chef</p>
                                <ul class="d-flex flex-wrap justify-content-center">
                                    <li><a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>

                                    <li><a href="https://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>

                                    <li><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>

                                    <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--=============================
            TEAM END
        ==============================-->


        <!--=============================
            DOWNLOAD APP START
        ==============================-->

        <section class="wsus__download mt_100 xs_mt_70">
            <div class="container">
                <div class="wsus__download_bg" style="background: url(../bongdorn/images/app_background_one.jpg);">
                    <div class="wsus__download_overlay">
                        <div class="row justify-content-between">
                            <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                                <div class="wsus__download_text">
                                    <div class="wsus__section_heading mb_25">
                                        <h2>Download Our Mobile Apps</h2>
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque assumenda
                                            tenetur, provident earum consequatur, ut voluptas laboriosam fuga error aut
                                            eaque architecto quo pariatur. Vel dolore omnis quisquam. Lorem ipsum dolor,
                                            sit amet consectetur adipisicing elit Cumque.</p>
                                    </div>
                                    <ul class="d-flex flex-wrap">
                                        <li>
                                            <a href="https://play.google.com/">
                                                <i class="fab fa-google-play"></i>
                                                <p> <span>download from</span> google play </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.apple.com/app-store/">
                                                <i class="fab fa-apple"></i>
                                                <p> <span>download from</span> apple store </p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-duration="1s">
                                <div class="wsus__download_img">
                                    <img src="../app-image.png" alt="download" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============================
            DOWNLOAD APP END
        ==============================-->



        <!--=============================
       TESTIMONIAL  START
    ==============================-->
        <section class="wsus__testimonial pt_90 xs_pt_60 mb_150 xs_mb_120">
            <div class="container">

                <div class="row wow fadeInUp" data-wow-duration="1s">
                    <div class="col-md-8 col-lg-7 col-xl-6 m-auto text-center">
                        <div class="wsus__section_heading mb_40">
                            <h4>Testimonial</h4>
                            <h2>Our Customar Feedbacks</h2>
                            <span>
                                <img src="/public/bongdorn/images/heading_shapes.png" alt="shapes"
                                    class="img-fluid w-100">
                            </span>
                            <p>Objectively pontificate quality models before intuitive information. Dramatically
                                recaptiualize multifunctional.</p>
                        </div>
                    </div>
                </div>

                <div class="row testi_slider">
                    <div class="col-xl-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="wsus__single_testimonial">
                            <div class="wsus__testimonial_header d-flex flex-wrap align-items-center">
                                <div class="img">
                                    <img src="/public/bongdorn/images/elia-navy-20230305045641.jpg" alt="clients"
                                        class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h4>Elia Navy</h4>
                                    <p>Web Developer</p>
                                </div>
                            </div>
                            <div class="wsus__single_testimonial_body">
                                <p class="feedback">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                                    accusamus praesentium quaerat nihil magnam a porro eaque numquam</p>
                                <span class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                            </div>
                            <div class="wsus__testimonial_product">
                                <img src="/public/bongdorn/images/testimonial-product-20230305045641.png" alt="product"
                                    class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="wsus__single_testimonial">
                            <div class="wsus__testimonial_header d-flex flex-wrap align-items-center">
                                <div class="img">
                                    <img src="/public/bongdorn/images/john-abraham-20230305045819.jpg" alt="clients"
                                        class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h4>John Abraham</h4>
                                    <p>MBBS, FCPS, FRCS</p>
                                </div>
                            </div>
                            <div class="wsus__single_testimonial_body">
                                <p class="feedback">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                                    accusamus praesentium quaerat nihil magnam a porro eaque numquam</p>
                                <span class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </span>
                            </div>
                            <div class="wsus__testimonial_product">
                                <img src="/public/bongdorn/images/testimonial-product-20230305045819.png" alt="product"
                                    class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="wsus__single_testimonial">
                            <div class="wsus__testimonial_header d-flex flex-wrap align-items-center">
                                <div class="img">
                                    <img src="/public/bongdorn/images/jose-larry-20230305050016.jpg" alt="clients"
                                        class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h4>Jose Larry</h4>
                                    <p>Web Designer</p>
                                </div>
                            </div>
                            <div class="wsus__single_testimonial_body">
                                <p class="feedback">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                                    accusamus praesentium quaerat nihil magnam a porro eaque numquam</p>
                                <span class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                            </div>
                            <div class="wsus__testimonial_product">
                                <img src="/public/bongdorn/images/testimonial-product-20230305050016.png" alt="product"
                                    class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="wsus__single_testimonial">
                            <div class="wsus__testimonial_header d-flex flex-wrap align-items-center">
                                <div class="img">
                                    <img src="/public/bongdorn/images/david-richard-20230305050113.jpg" alt="clients"
                                        class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h4>David Richard</h4>
                                    <p>Graphic Designer</p>
                                </div>
                            </div>
                            <div class="wsus__single_testimonial_body">
                                <p class="feedback">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                                    accusamus praesentium quaerat nihil magnam a porro eaque numquam</p>
                                <span class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </span>
                            </div>
                            <div class="wsus__testimonial_product">
                                <img src="/public/bongdorn/images/testimonial-product-20230305050113.png" alt="product"
                                    class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="wsus__single_testimonial">
                            <div class="wsus__testimonial_header d-flex flex-wrap align-items-center">
                                <div class="img">
                                    <img src="/public/bongdorn/images/david-simmons-20230305050400.jpg" alt="clients"
                                        class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h4>David Simmons</h4>
                                    <p>MBBS, FCPS, FRCS</p>
                                </div>
                            </div>
                            <div class="wsus__single_testimonial_body">
                                <p class="feedback">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                                    accusamus praesentium quaerat nihil magnam a porro eaque numquam</p>
                                <span class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </span>
                            </div>
                            <div class="wsus__testimonial_product">
                                <img src="/public/bongdorn/images/testimonial-product-20230305050400.png" alt="product"
                                    class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 wow fadeInUp" data-wow-duration="1s">
                        <div class="wsus__single_testimonial">
                            <div class="wsus__testimonial_header d-flex flex-wrap align-items-center">
                                <div class="img">
                                    <img src="/public/bongdorn/images/mary-patricia-20230305050436.jpg" alt="clients"
                                        class="img-fluid w-100">
                                </div>
                                <div class="text">
                                    <h4>Mary Patricia</h4>
                                    <p>Senior Chef</p>
                                </div>
                            </div>
                            <div class="wsus__single_testimonial_body">
                                <p class="feedback">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut
                                    accusamus praesentium quaerat nihil magnam a porro eaque numquam</p>
                                <span class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </span>
                            </div>
                            <div class="wsus__testimonial_product">
                                <img src="/public/bongdorn/images/testimonial-product-20230305050436.png" alt="product"
                                    class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============================
        TESTIMONIAL END
    ==============================-->

        <!--=============================
        BLOG START
    ==============================-->

        <section class="wsus__blog" style="background: url(/public/bongdorn/images/blog_background.jpg);">
            <div class="wsus__blog_overlay pt_95 xs_pt_65 pb_100 xs_pb_70">
                <div class="container">

                    <div class="row wow fadeInUp" data-wow-duration="1s">
                        <div class="col-md-8 col-lg-7 col-xl-6 m-auto text-center">
                            <div class="wsus__section_heading mb_25">
                                <h4>Our Blogs</h4>
                                <h2>Our Latest Foods Blog</h2>
                                <span>
                                    <img src="./bongdorn/images/blog.png" alt="shapes" class="img-fluid w-100">
                                </span>
                                <p>Objectively pontificate quality models before intuitive information. Dramatically
                                    recaptiualize multifunctional.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                            <div class="wsus__single_blog">
                                <a href="blog/the-secret-to-perfectly-cooked-steaks" class="wsus__single_blog_img">
                                    <img src="./bongdorn/images/blog2.jpg" alt="blog" class="img-fluid w-100">
                                </a>
                                <div class="wsus__single_blog_text">
                                    <a class="category" href="blogs?category=chicken">Chicken</a>
                                    <ul class="d-flex flex-wrap mt_15">
                                        <li><i class="fas fa-user"></i>by admin</li>
                                        <li><i class="fas fa-calendar-alt"></i> 05 Mar 2023</li>
                                        <li><i class="fas fa-comments"></i> 0comment</li>
                                    </ul>
                                    <a class="title" href="blog/the-secret-to-perfectly-cooked-steaks">The Secret to
                                        Perfectly Cooked Steaks</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                            <div class="wsus__single_blog">
                                <a href="blog/why-our-pasta-is-worth-the-visit" class="wsus__single_blog_img">
                                    <img src="./bongdorn/images/blog2.jpg" alt="blog" class="img-fluid w-100">
                                </a>
                                <div class="wsus__single_blog_text">
                                    <a class="category" href="blogs?category=chicken">Chicken</a>
                                    <ul class="d-flex flex-wrap mt_15">
                                        <li><i class="fas fa-user"></i>by admin</li>
                                        <li><i class="fas fa-calendar-alt"></i> 05 Mar 2023</li>
                                        <li><i class="fas fa-comments"></i> 0comment</li>
                                    </ul>
                                    <a class="title" href="blog/why-our-pasta-is-worth-the-visit">Why Our Pasta is Worth
                                        the Visit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                            <div class="wsus__single_blog">
                                <a href="blog/the-science-of-pairing-wine-and-cheese" class="wsus__single_blog_img">
                                    <img src="./bongdorn/images/blog1.jpg" alt="blog" class="img-fluid w-100">
                                </a>
                                <div class="wsus__single_blog_text">
                                    <a class="category" href="blogs?category=fresh-food">Fresh Food</a>
                                    <ul class="d-flex flex-wrap mt_15">
                                        <li><i class="fas fa-user"></i>by admin</li>
                                        <li><i class="fas fa-calendar-alt"></i> 05 Mar 2023</li>
                                        <li><i class="fas fa-comments"></i> 0comment</li>
                                    </ul>
                                    <a class="title" href="blog/the-science-of-pairing-wine-and-cheese">The Science of
                                        Pairing Wine and Cheese</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============================
        BLOG END
    ==============================-->



        <!--=============================
        BRAND START
    ==============================-->
        <section class="wsus__brand" style="background: url(/public/bongdorn/images/counter-bg.jpg);">
            <div class="wsus__brand_overlay">
                <div class="container">
                    <div class="row brand_slider wow fadeInUp" data-wow-duration="1s">
                        <div class="col-xl-2">
                            <a class="wsus__single_brand" href="javascript:;">
                                <img src="/images/partner.png" alt="brand" class="img-fluid w-100">
                            </a>

                        </div>
                        <div class="col-xl-2">
                            <a class="wsus__single_brand" href="javascript:;">
                                <img src="/partner.png" alt="brand" class="img-fluid w-100">
                            </a>

                        </div>
                        <div class="col-xl-2">
                            <a class="wsus__single_brand" href="javascript:;">
                                <img src="/partner1.png" alt="brand" class="img-fluid w-100">
                            </a>

                        </div>
                        <div class="col-xl-2">
                            <a class="wsus__single_brand" href="javascript:;">
                                <img src="/partner2.png" alt="brand" class="img-fluid w-100">
                            </a>

                        </div>
                        <div class="col-xl-2">
                            <a class="wsus__single_brand" href="javascript:;">
                                <img src="/partner3.png" alt="brand" class="img-fluid w-100">
                            </a>

                        </div>
                        <div class="col-xl-2">
                            <a class="wsus__single_brand" href="javascript:;">
                                <img src="/partner4.png" alt="brand" class="img-fluid w-100">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=============================
        BRAND END
    ==============================-->


        <!--=============================
        FOOTER START
    ==============================-->
        <footer style="background: url(../bongdorn/images/footer_background.jpg);">
            <div class="footer_overlay pt_100 xs_pt_70 pb_100 xs_pb_70">
                <div class="container wow fadeInUp" data-wow-duration="1s">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-sm-8 col-md-6">
                            <div class="wsus__footer_content">
                                <a class="footer_logo" href="/">
                                    <img src="../bongdorn/images/livecafe/images/cafe/logo_live.png" alt="UniFood"
                                        class="img-fluid w-100">
                                </a>
                                <span>There are many variations of Lorem Ipsum available, but the majority have
                                    suffered.</span>
                                <p class="info"><i class="far fa-map-marker-alt"></i> 7232 Broadway 308, United States
                                </p>
                                <a class="info" href="callto:+1347-430-9510"><i class="fas fa-phone-alt"></i>
                                    +1347-430-9510</a>
                                <a class="info" href="mailto:livecafe30@gmail.com"><i class="fas fa-envelope"></i>
                                    livecafe30@gmail.com</a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-md-6">
                            <div class="wsus__footer_content">
                                <h3>Important Link</h3>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li><a href="about-us">About Us</a></li>
                                    <li><a href="contact-us">Contact Us</a></li>
                                    <li><a href="our-chef">Our Chef</a></li>
                                    <li><a href="our-chef">Dashboard</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 col-md-6 order-sm-4 order-lg-3">
                            <div class="wsus__footer_content">
                                <h3>Help Link</h3>
                                <ul>
                                    <li><a href="blogs">Our Blogs</a></li>
                                    <li><a href="testimonial">Testimonial</a></li>
                                    <li><a href="faq">FAQ</a></li>
                                    <li><a href="privacy-policy">Privacy and Policy</a></li>
                                    <li><a href="terms-and-condition">Terms anc Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-8 col-md-6 order-lg-4">
                            <div class="wsus__footer_content">
                                <h3>Subscribe to Newsletter</h3>
                                <form id="subscribe_form">
                                    <input type="hidden" name="_token" value="D9SHBTEWROSuwuRfvVvARUCbu1SZQaweSqyAaEcl"
                                        autocomplete="off"> <input type="email" placeholder="Email" name="email">
                                    <button id="subscribe_btn" type="submit"><i class="fas fa-paper-plane"></i></button>
                                </form>
                                <div class="wsus__footer_social_link">
                                    <h5>Follow us:</h5>
                                    <ul class="d-flex flex-wrap">
                                        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li><a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                        <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wsus__footer_bottom d-flex flex-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="wsus__footer_bottom_text d-flex flex-wrap justify-content-between">
                                <p>©2024 websolutionus All rights reserved</p>
                                <ul class="d-flex flex-wrap">
                                    <li><a href="faq">FAQ</a></li>
                                    <li><a href="payment">Payment</a></li>
                                    <li><a href="checkout">Checkout</a></li>
                                    <li><a href="dashboard">Dashboard</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--=============================
        FOOTER END
    ==============================-->


        <!--=============================
        SCROLL BUTTON START
    ==============================-->
        <div class="wsus__scroll_btn">
            Go to top
        </div>
        <!--=============================
        SCROLL BUTTON END
    ==============================-->














    </body>

</html>
