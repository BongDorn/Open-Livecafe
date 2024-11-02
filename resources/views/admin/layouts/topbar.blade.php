<div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <div class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg custom_click"><i
                                class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                class="fas fa-search"></i></a></li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown dropdown-list-toggle"><a target="_blank" href="" class="nav-link nav-link-lg"><i
                            class="fas fa-home"></i> Visit Website</i></a>

                </li>
                <li class="dropdown dropdown-list-toggle">
                    <form id="setLanguage" action="/set-language">
                        <select class="form-control select2 p-md-0" name="code">
                            <option value="">Select Language</option>
                            <option value="en" selected>English</option>
                            <option value="bn">Bangla</option>
                            <option value="ar">Arabic</option>
                        </select>
                    </form>
                </li>

                <li class="dropdown"><a href="#" data-toggle="dropdown"
                        class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="./bongdorn/images/profile.jpg" class="rounded-circle mr-1">
                        <div class="d-sm-none d-lg-inline-block"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">

                        <a href="/admin/profile" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        @if (Route::has('login'))
                        @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="common_btn nav-link" href="login"
                                onclick="return confirm('Are you sure you want to logout?')"> Logout
                            </button>
                        </form>
                        @endauth
                        @endif

                        <form id="admin-logout-form" action="/admin/logout" method="POST" class="d-none">
                            <input type="hidden" name="_token" value="2fFbKVzu9lFd74YgiCwx0cxITEVOrHcudkJ8AkRX"
                                autocomplete="off">
                        </form>



                    </div>
                </li>
            </ul>
        </nav>

        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="/admin/dashboard">LiveCafe</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="/admin/dashboard">Un</a>
                </div>

                <ul class="sidebar-menu">

                    <li class="active"><a class="nav-link" href="{{ url('admin/index') }}"><i class="fas fa-home"></i>
                            <span>Dashboard</span></a></li>

                    <li class=""><a class="nav-link" href="{{ url('pos') }}"><i class="fas fa-th-large"></i>
                            <span>POS</span></a></li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i
                                class="fas fa-shopping-cart"></i><span>Orders</span></a>
                        <ul class="dropdown-menu">

                            <li class=""><a class="nav-link" href="/admin/all-order">All Orders</a></li>


                            <li class=""><a class="nav-link" href="/admin/pending-order">Pending
                                    Orders</a></li>

                            <li class=""><a class="nav-link" href="/admin/pregress-order">Progress
                                    Orders</a></li>

                            <li class=""><a class="nav-link" href="/admin/delivered-order">Delivered
                                    Orders</a></li>

                            <li class=""><a class="nav-link" href="/admin/completed-order">Completed
                                    Orders</a></li>

                            <li class=""><a class="nav-link" href="/admin/declined-order">Declined
                                    Orders</a></li>

                            <li class=""><a class="nav-link" href="/admin/cash-on-delivery">Cash On
                                    Delivery</a></li>

                        </ul>

                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span>Manage
                                Restaurant</span></a>
                        <ul class="dropdown-menu">

                            <li><a class="nav-link" href="{{ url('products') }}">
                                    Product</a></li>


                            <li class=""><a class="nav-link" href="/admin/product-category">Categories</a>
                            </li>

                            <li class=""><a class="nav-link" href="/admin/reservation">Reservations</a>
                            </li>


                            <li class=""><a class="nav-link" href="/admin/product-review">Product
                                    Reviews</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i
                                class="fas fa-shopping-cart"></i><span>Ecommerce</span></a>
                        <ul class="dropdown-menu">

                            <li class=""><a class="nav-link" href="/admin/coupon">Coupon</a></li>

                            <li class=""><a class="nav-link" href="{{ url('payments') }}">Payment
                                    Method</a></li>

                            <li class=""><a class="nav-link" href="/admin/delivery-area">Delivery
                                    Area</a></li>

                        </ul>
                    </li>

                    <li class=""><a class="nav-link" href="/admin/advertisement"><i class="fas fa-ad"></i>
                            <span>Advertisement</span></a></li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Our
                                Customers</span></a>
                        <ul class="dropdown-menu">

                            <li class=""><a class="nav-link" href="/admin/customer-list">Customer
                                    List</a></li>

                            <li class=""><a class="nav-link" href="/admin/pending-customer-list">Pending
                                    Customers</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i
                                class="fas fa-shopping-cart"></i><span>Section</span></a>
                        <ul class="dropdown-menu">

                            <li class=""><a class="nav-link" href="/admin/service">Service</a></li>

                            <li class=""><a class="nav-link" href="/admin/slider">Slider</a></li>

                            <li class=""><a class="nav-link" href="/admin/counter">Counter</a></li>

                            <li class=""><a class="nav-link" href="/admin/partner">Partner</a></li>

                            <li class=""><a class="nav-link" href="/admin/app-section">App Section</a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-globe"></i><span>Manage
                                Website</span></a>

                        <ul class="dropdown-menu">

                            <li class=""><a class="nav-link" href="/admin/seo-setup">SEO Setup</a></li>

                            <li class=""><a class="nav-link" href="/admin/maintainance-mode">Maintainance
                                    Mode</a></li>

                            <li class=""><a class="nav-link" href="/admin/default-avatar">Default
                                    Avatar</a></li>

                            <li class=""><a class="nav-link" href="/admin/breadcrumb-image">Breadcrumb
                                    Image</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span>Header
                                and Footer</span></a>
                        <ul class="dropdown-menu">

                            <li class=""><a class="nav-link" href="/admin/footer">Footer</a></li>

                            <li class=""><a class="nav-link" href="/admin/social-link">Social Link</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-columns"></i><span>Pages</span></a>
                        <ul class="dropdown-menu">

                            <li class=""><a class="nav-link" href="/admin/homepage">Homepage</a></li>

                            <li class=""><a class="nav-link" href="/admin/about-us">About Us</a></li>

                            <li class=""><a class="nav-link" href="/admin/contact-us">Contact Us</a>
                            </li>

                            <li class=""><a class="nav-link" href="/admin/testimonial">Testimonial</a>
                            </li>

                            <li class=""><a class="nav-link" href="/admin/our-chef">Our Chef</a></li>

                            <li class=""><a class="nav-link" href="/admin/custom-page">Custom Page</a>
                            </li>

                            <li class=""><a class="nav-link" href="/admin/terms-and-condition">Terms And
                                    Conditions</a></li>

                            <li class=""><a class="nav-link" href="/admin/privacy-policy">Privacy
                                    Policy</a></li>

                            <li class=""><a class="nav-link" href="/admin/faq">FAQ</a></li>

                            <li class=""><a class="nav-link" href="/admin/error-page">Error Page</a>
                            </li>

                            <li class=""><a class="nav-link" href="/admin/login-page">Login / Register
                                    Page</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span>Blogs</span></a>
                        <ul class="dropdown-menu">

                            <li class=""><a class="nav-link" href="/admin/blog-category">Categories</a>
                            </li>

                            <li class=""><a class="nav-link" href="/admin/blog">Blogs</a></li>

                            <li class=""><a class="nav-link" href="/admin/popular-blog">Popular
                                    Blogs</a></li>

                            <li class=""><a class="nav-link" href="/admin/blog-comment">Comments</a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-envelope"></i><span>Email
                                Configuration</span></a>
                        <ul class="dropdown-menu">

                            <li class=""><a class="nav-link" href="/admin/email-configuration">Setting</a>
                            </li>

                            <li class=""><a class="nav-link" href="/admin/email-template">Email
                                    Template</a></li>

                        </ul>
                    </li>

                    <li class=""><a class="nav-link" href="/admin/languages"><i class="fas fa-language"></i>Manage
                            Language</a>
                    </li>

                    <li class=""><a class="nav-link" href="/admin/general-setting"><i class="fas fa-cog"></i>
                            <span>Setting</span></a></li>

                    <li class=""><a class="nav-link" href="/admin/clear-database"><i class="fas fa-trash"></i>
                            <span>Clear Database</span></a></li>

                    <li class=""><a class="nav-link" href="/admin/subscriber"><i class="fas fa-fire"></i>
                            <span>Subscribers</span></a></li>

                    <li class=""><a class="nav-link" href="/admin/contact-message"><i class="fas fa-fa fa-envelope"></i>
                            <span>Contact Message</span></a></li>

                    <li class=""><a class="nav-link" href="/admin/admin"><i class="fas fa-user"></i> <span>Admin
                                list</span></a></li>

                </ul>
            </aside>

        </div>
