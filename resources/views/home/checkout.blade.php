@extends('home.layouts.app')
@section('content')
<!--=============================
        BREADCRUMB START
    ==============================-->
<section class="wsus__breadcrumb" style="background: url();">
    <div class="wsus__breadcrumb_overlay">
        <div class="container">
            <div class="wsus__breadcrumb_text">
                <h1>Checkout</h1>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="javascript:;">Checkout</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--=============================
        BREADCRUMB END
    ==============================-->


<!--=============================
                        TEAM END
                    ==============================-->



<script>
    document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.menu_filter button');
    const items = document.querySelectorAll('.items-container .item');

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');

            items.forEach(item => {
                if (filter === 'all' || item.classList.contains(filter)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });

            // Optional: add active class to the clicked button
            buttons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
        });
    });
});
</script>

<style>
    /* Optional styling */
    .menu_filter button.active {
        background-color: #555;
        color: #fff;
    }

    .item {
        display: none;
        margin: 10px;
    }
</style>
<!--============================
        CHECK OUT PAGE START
    ==============================-->
<section class="wsus__cart_view mt_125 xs_mt_95 mb_100 xs_mb_70">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-lg-7 .category_2 wow fadeInUp" data-wow-duration="1s">
                <div class="wsus__checkout_form">
                    <div class="wsus__check_form">
                        <div class="row wow fadeInUp" data-wow-duration="1s">
                            <div class="col-8">
                                <div class="menu_filter d-flex flex-wrap justify-content-center">
                                    <button data-filter="checkout">address</button>
                                    <button data-filter="address">address</button>
                                    <button data-filter="checkout">Checkout</button>
                                    <button data-filter="payment">Payments</button>
                                    <button data-filter="category_5">Tea</button>
                                </div>
                            </div>
                            <div class="col-4">

                                <h5><a href="#" data-bs-toggle="modal" data-bs-target="#address_modal"><i
                                            class="far fa-plus"></i>
                                        New
                                        Address</a></h5>


                            </div>
                        </div>
                        {{-- --}}

                        {{-- --}}

                        <br></br>


                        <div class="items-container">


                            <div class="col-md-6 item address">
                                <div class="wsus__checkout_single_address">
                                    <div class="form-check">
                                        <input value="1" data-delivery-charge="25" class="form-check-input address_id"
                                            type="radio" name="address_id" id="home-1">

                                        <label class="form-check-label" for="home-1">
                                            <span class="icon"><i class="fas fa-home"></i>Home</span>
                                            <span class="address">Name : John Doe</span>
                                            <span class="address">Phone : 125-985-4587</span>
                                            <span class="address">Delivery area : Metrocenter Mall</span>

                                            <span class="address">Address : Los Angeles, CA, USA</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 item checkout">
                                <div class="wsus__checkout_single_address">
                                    <div class="form-check">
                                        <input value="1" data-delivery-charge="25" class="form-check-input address_id"
                                            type="radio" name="address_id" id="home-1">

                                        <label class="form-check-label" for="home-1">

                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 item payment">
                                <div class="wsus__checkout_single_address">
                                    <div class="form-check">
                                        <input value="1" data-delivery-charge="25" class="form-check-input address_id"
                                            type="radio" name="address_id" id="home-1">

                                        <span>Payments</span>


                                        <label class="form-check-label" for="home-1">

                                        </label>
                                    </div>
                                </div>
                                <div class="wsus__address_modal">
                                    <div class="modal fade" id="address_modal" data-bs-backdrop="static"
                                        data-bs-keyboard="false" aria-labelledby="address_modalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="address_modalLabele">add new
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="_token"
                                                            value="2fFbKVzu9lFd74YgiCwx0cxITEVOrHcudkJ8AkRX"
                                                            autocomplete="off">
                                                        <div class="row">

                                                            <div class="col-12">
                                                                <div class="wsus__check_single_form">
                                                                    <select name="delivery_area_id"
                                                                        class="modal_select2">
                                                                        <option value="">Select Delivery Area</option>
                                                                        <option value="1">Arizona State University West
                                                                            Campus
                                                                        </option>

                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 col-lg-12 col-xl-6">
                                                                <div class="wsus__check_single_form">
                                                                    <input type="text" placeholder="First Name*"
                                                                        name="first_name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-lg-12 col-xl-6">
                                                                <div class="wsus__check_single_form">
                                                                    <input type="text" placeholder="Last Name *"
                                                                        name="last_name">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 col-lg-12 col-xl-6">
                                                                <div class="wsus__check_single_form">
                                                                    <input type="text" placeholder="Phone" name="phone">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-lg-12 col-xl-6">
                                                                <div class="wsus__check_single_form">
                                                                    <input type="email" placeholder="Email"
                                                                        name="email">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-lg-12 col-xl-12">
                                                                <div class="wsus__check_single_form">
                                                                    <textarea name="address" cols="3" rows="4"
                                                                        placeholder="Address *"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="wsus__check_single_form check_area">
                                                                    <div class="form-check">
                                                                        <input value="home" class="form-check-input"
                                                                            type="radio" name="address_type"
                                                                            id="flexRadioDefault1">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault1">
                                                                            home
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-check">
                                                                        <input value="office" class="form-check-input"
                                                                            type="radio" name="address_type"
                                                                            id="flexRadioDefault2">
                                                                        <label class="form-check-label"
                                                                            for="flexRadioDefault2">
                                                                            office
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="wsus__check_single_form m-0">
                                                                    <button type="submit" class="common_btn">Save
                                                                        Address</button>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-4 wow fadeInUp" data-wow-duration="1s">

                <div id="sticky_sidebar" class="wsus__cart_list_footer_button">
                    <h6>total price</h6>
                    <p>subtotal: <span>$</span></p>
                    <p>discount (-): <span>$0</span></p>
                    <p>delivery (+): <span class="delivery_charge">$0.00</span></p>
                    <p class="total"><span>Total:</span> <span class="grand_total">$</span></p>
                    <input type="hidden" id="grand_total" value="430">
                    <form action="apply-coupon-from-checkout">
                        <input name="coupon" type="text" placeholder="Coupon Code">
                        <button type="submit">apply</button>
                    </form>
                    <a class="common_btn" href="javascript:;" id="continue_to_pay">Continue to pay</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============================
        CHECK OUT PAGE END
    ==============================-->

@endsection
