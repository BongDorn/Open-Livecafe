<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('home.layouts.head')
    </head>

    <body>


        {{-- --}}
        @include('home.layouts.topbar')
        {{-- --}}

        <!-- CART POPUT START -->
        <div class="wsus__cart_popup">
            <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                    class="fal fa-times"></i></button>
                            <div class="load_product_modal_response">
                                <img src="../bongdorn/uploads/website-images/Spinner-1s-200px.gif" alt="">
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

        <!--=============================
        BREADCRUMB END
    ==============================-->
        <section>
            @yield('content')
        </section>
        <!--=========================
        SIGNIN START
    ==========================-->

        <!--=========================
        SIGNIN END
    ==========================-->

        @include('home.layouts/footer')




    </body>

</html>
