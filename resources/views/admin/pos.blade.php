@extends('admin.layouts.app')

@section('content')
<!-- Main Content -->

<section class="section">
    <div class="section-header">
        <h1>POS</h1>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="section-body">
        <div class="row ">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <form id="product_search_form" class="pos_pro_search_form">
                            <div class="row">
                                <div class="col-6">
                                    <input type="text" class="form-control" name="name" placeholder="Search here..">
                                </div>
                                <div class="col-md-3">
                                    <select name="category_id" id="category_id" class="form-control">
                                        <option value="">Select Category</option>
                                        <option value="1">Burger</option>
                                        <option value="2">Chicken</option>
                                        <option value="3">Pizza</option>
                                        <option value="4">Dresserts</option>
                                        <option value="5">Sandwich</option>
                                        <option value="7">Burrito</option>
                                        <option value="8">Cheeseburger</option>
                                        <option value="9">Muffin</option>

                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <button type="submit" class="btn btn-primary" id="search_btn_text">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="card-body product_body">
                        <div class="row">
                            @foreach ($products as $product)


                            <div class="col-4">
                                <div class="card box_shadow bg-slate-400">
                                    <div class="card-header">
                                        <img src="upload/products/{{ $product->image }}" alt="{{ $product->name }}"
                                            width="100">

                                    </div>
                                    <h6 class="card-title">Name:{{ $product->name }}</h6>
                                    <p>Price:${{ $product->price }}</p>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header pos_sidebar_button">
                        <div class="row w-100">
                            <div class="col-8">
                                <select name="customer_id" id="customer_id" class="form-control select2">
                                    <option value="">Select Customer</option>
                                    <option value="3">Nabin ul haq - 123456874</option>
                                    <option value="2">Ibrahim Khalil - 32112344</option>
                                    <option value="1">John Doe - 123-343-4444</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <button data-toggle="modal" data-target="#createNewUser" type="button"
                                    class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>New</button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <h6>
                            <i class="fa fa-user" aria-hidden="true"></i> Delivery Information
                            <button id="createNewAddressBtn" class="btn btn-primary btn-sm"><i class="fa fa-plus"
                                    aria-hidden="true"></i></button>
                        </h6>
                        <div class="shopping-card-body">
                            <table class="table">
                                <thead>
                                    <th>Item</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>

                            <div>
                                <p><span>Subtotal</span> : <span>$0</span></p>
                                <p><span>Delivery</span> : <span id="report_delivery_fee">$0.00</span></p>
                                <p><span>Total</span> : <span id="report_total_fee">$0</span></p>
                            </div>

                            <input type="hidden" id="cart_sub_total" value="0">
                        </div>

                        <div>
                            <button id="placeOrderBtn" class="btn btn-success">Place order</button>
                            <a href="./admin/pos/cart-clear" class="btn btn-danger">Reset</a>
                        </div>

                        <form id="placeOrderForm" action="./admin/pos/place-order" method="POST">
                            <input type="hidden" name="_token" value="" autocomplete="off"> <input type="hidden"
                                value="0" name="sub_total" id="order_sub_total">
                            <input type="hidden" value="" name="customer_id" id="order_customer_id">
                            <input type="hidden" value="" name="address_id" id="order_address_id">
                            <input type="hidden" value="0.00" name="delivery_fee" id="order_delivery_fee">
                            <input type="hidden" value="0" name="total_fee" id="order_total_fee">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Product Modal -->
<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid load_product_modal_response">

                </div>
            </div>

        </div>
    </div>
</div>


<!-- Create new user modal -->
<div class="modal pos_sidebar fade" id="createNewUser" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create new customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form id="createNewUserForm" method="POST">
                        <input type="hidden" name="_token" value="" autocomplete="off">
                        <div class="form-group">
                            <label for="">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" autocomplete="off" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" autocomplete="off" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Phone <span class="text-danger">*</span></label>
                            <input type="text" name="phone" autocomplete="off" class="form-control">
                        </div>


                        <button class="btn btn-primary" type="submit">Save</button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Create New Address Modal -->
<div class="modal fade" id="newAddress" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New address</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form id="add_new_address_form" method="POST">
                        <input type="hidden" name="_token" autocomplete="off">
                        <div class="row">

                            <input type="hidden" name="customer_id" value="" id="address_customer_id">
                            <div class="form-group col-12">
                                <label for="">Delivery area *</label>
                                <select name="delivery_area_id" class="select2">
                                    <option value="">Select Delivery Area</option>
                                    <option value="1">Arizona State University West Campus</option>
                                    <option value="2">Thunderbird Paseo Park</option>
                                    <option value="3">Metrocenter Mall</option>
                                    <option value="4">Reach 11 Recreation Area</option>
                                    <option value="5">Pioneer Community Park</option>
                                    <option value="6">Deer Valley Rock Art Center</option>
                                    <option value="7">Cave Creek Regional Park</option>
                                    <option value="8">Turf Soaring School</option>
                                </select>
                            </div>

                            <div class="col-md-6 col-lg-12 col-xl-6 form-group">
                                <label for="">First Name *</label>
                                <input class="form-control" type="text" placeholder="First Name" name="first_name">
                            </div>
                            <div class="col-md-6 col-lg-12 col-xl-6 form-group">
                                <label for="">Last Name *</label>
                                <input class="form-control" type="text" placeholder="Last Name" name="last_name">
                            </div>

                            <div class="col-md-6 col-lg-12 col-xl-6 form-group">

                                <label for="">Phone</label>
                                <input class="form-control" type="text" placeholder="Phone" name="phone">
                            </div>
                            <div class="col-md-6 col-lg-12 col-xl-6 form-group">
                                <label for="">Email</label>
                                <input class="form-control" type="email" placeholder="Email" name="email">
                            </div>
                            <div class="col-md-12 col-lg-12 col-xl-12 form-group">
                                <label for="">Address *</label>
                                <textarea class="form-control height_auto" name="address" cols="3" rows="4"
                                    placeholder="Address"></textarea>
                            </div>
                            <div class="col-12 form-group">
                                <div class="wsus__check_single_form check_area d-flex flex-wrap">
                                    <div class="form-check mr-3">
                                        <input value="home" class="form-check-input" type="radio" name="address_type"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Home
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input value="office" class="form-check-input" type="radio" name="address_type"
                                            id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Office
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">

                                <button type="submit" class="btn btn-primary">Save Address</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection

@section('scripts')
@push('scripts')
<script>
    $(document).ready(function() {
            // Add product to cart
            $('#product_list').change(function() {
                var productId = $(this).val();
                var quantity = 1;
                var url = "{{ route('admin.pos.add_to_cart') }}";
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                    _token: '{{ csrf_token() }}',
                        product_id: productId,
                        quantity: quantity
                    },
                    success: function(response) {
                        $('#cart_table tbody').append(response);
                        updateCartTotal();
                    }
                });
            });

            // Update cart item quantity
            $(document).on('change', '.cart_quantity', function() {
                var cartItemId = $(this).data('cart-item-id');
                var quantity = $(this).val();
                var url = "{{ route('admin.pos.update_cart') }}";
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                    _token: '{{ csrf_token() }}',
                        cart_item_id: cartItemId,
                        quantity: quantity
                    },
                    success: function(response) {
                        updateCartTotal();
                    }
                });
            });

            // Remove cart item
            $(document).on('click', '.remove_cart_item', function() {
                var cartItemId = $(this).data('cart-item-id');
                var url = "{{ route('admin.pos.remove_cart') }}";
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                    _token: '{{ csrf_token() }}',
                        cart_item_id: cartItemId
                    },
                    success: function(response) {
                        $('#cart_item_' + cartItemId).remove();
                        updateCartTotal();
                    }
                });
            });

            // Update cart total

            // Update cart total
            function updateCartTotal() {
            var url = "{{ route('admin.pos.update_cart_total') }}";
            $.ajax({
            url: url,
            type: 'POST',
            data: {
        _token: '{{ csrf_token() }}'
            },
            success: function(response) {
            $('#cart_total').text('$' + response.total);
            }
            });
            }

            });
</script>

{{-- --}}
<script>
    (function($) {
    "use strict";
    $(document).ready(function () {
        tinymce.init({
            selector: '.summernote',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ]
        });
        $('#dataTable').DataTable();
        $('.select2').select2();
        $('.sub_cat_one').select2();
        $('.tags').tagify();
        $('.datetimepicker_mask').datetimepicker({
            format:'Y-m-d H:i',

        });
        $('.custom-icon-picker').iconpicker({
            templates: {
                popover: '<div class="iconpicker-popover popover"><div class="arrow"></div>' +
                    '<div class="popover-title"></div><div class="popover-content"></div></div>',
                footer: '<div class="popover-footer"></div>',
                buttons: '<button class="iconpicker-btn iconpicker-btn-cancel btn btn-default btn-sm">Cancel</button>' +
                    ' <button class="iconpicker-btn iconpicker-btn-accept btn btn-primary btn-sm">Accept</button>',
                search: '<input type="search" class="form-control iconpicker-search" placeholder="Type to filter" />',
                iconpicker: '<div class="iconpicker"><div class="iconpicker-items"></div></div>',
                iconpickerItem: '<a role="button" href="javascript:;" class="iconpicker-item"><i></i></a>'
            }
        })
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            startDate: '-Infinity'
        });
        $('.clockpicker').clockpicker();

        $("#setLanguage").on('change', function(e){
            this.submit();
        });

    });

    })(jQuery);
</script>
@endpush
@endsection
