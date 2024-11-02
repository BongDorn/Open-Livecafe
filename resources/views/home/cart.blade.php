@extends('home.layouts.app')
@section('content')
<div class="" id="preloader">
    <div class="img d-none">
        <img src="/public/uploads/website-images/Spinner.gif" alt="UniFood" class="img-fluid">
    </div>
</div>

<!-- CART POPUT START -->
<div class="wsus__cart_popup">
    <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fal fa-times"></i></button>
                    <div class="load_product_modal_response">
                        <img src="images/Spinner-1s-200px.gif" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CART POPUT END -->
<!--=============================
        OFFER ITEM END
         ==============================-->

<!--=============================
                BREADCRUMB START
==============================-->
<section class="wsus__breadcrumb"
    style="background: url(/public/uploads/website-images/breadcrumb_image-2022-12-31-01-18-17-5423.jpg);">
    <div class="wsus__breadcrumb_overlay">
        <div class="container">
            <div class="wsus__breadcrumb_text">
                <h1>Shopping Cart</h1>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="javascript:;">Shopping Cart</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--=============================
                BREADCRUMB END
                ==============================-->
<section class="wsus__cart_view mt_125 xs_mt_95 mb_100 xs_mb_70">
    <div class="container cart-main-body">
        <div class="row">
            <div class="col-lg-8 wow fadeInUp" data-wow-duration="1s">
                <div class="wsus__cart_list">
                    <div class="table-responsive">
                        <table>
                            <tbody>
                                <tr>
                                    <th class="wsus__pro_img">Image</th>
                                    <th class="wsus__pro_name">name</th>
                                    <th class="wsus__pro_status">price</th>
                                    <th class="wsus__pro_select">quantity</th>
                                    <th class="wsus__pro_tk">total</th>
                                    <th class="wsus__pro_icon">
                                        <a class="clear_all" href="javascript:;">clear all</a>
                                    </th>
                                </tr>

                                <?php
                                $total_price = 0;
                                ?>
                                @foreach ($carts as $cart)
                                <tr class="main-cart-item justify-items-center">
                                    <td class="wsus__pro_img"><img src="uploads/products/' . {{ ($cart->image) }}"
                                            alt="">
                                    </td>
                                    <td class="wsus__pro_name">
                                        <h5>{{ $cart->name }}</h5>
                                        <p>Size: {{ $cart->quantity }}</p>
                                        <p>Extra: {{ $cart->color }}</p>
                                    </td>
                                    <td class="wsus__pro_status">${{ $cart->price }}</td>
                                    <td class="wsus__pro_select">{{ $cart->quantity }}</td>
                                    <td class="wsus__pro_tk">
                                        <span>${{ $cart->price }}</span>
                                    </td>
                                    <td class="wsus__pro_icon">
                                        <a onclick="return confirm('Are you sure to remove this item?')"
                                            href="{{ url('remove_cart',$cart->id) }}"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <?php
                                $total_price = $total_price + $cart->price;

                                ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <input type="hidden" id="couon_price" value="0.00">
            <input type="hidden" id="couon_offer_type" value="0">

            <div class="col-lg-4 wow fadeInUp" data-wow-duration="1s">
                <div class="wsus__cart_list_footer_button">
                    <div class="grand_total">
                        <h6>total price</h6>
                        <p>subtotal: <span>${{ $total_price}}</span></p>
                        <p>discount (-): <span>$0</span></p>
                        <p>delivery (+): <span>$0.00</span></p>
                        <p class="total"><span>Total:</span> <span>${{ $total_price}}</span></p>
                    </div>
                    <form id="coupon_form">
                        <input name="coupon" type="text" placeholder="Coupon Code">
                        <button type="submit">apply</button>
                    </form>
                    <a class="common_btn" href="{{ url('checkout') }}">checkout</a>
                </div>
            </div>
        </div>

    </div>
</section>


@endsection