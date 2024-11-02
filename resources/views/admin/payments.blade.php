@extends('admin.layouts.app')

@section('content')
<style>
    .fade.in {
        opacity: 1 !important;
    }

    .tox .tox-promotion,
    .tox-statusbar__branding {
        display: none !important;
    }
</style>

<style>
    dl {
        margin: 20px 0;
    }

    dt {
        font-size: 120%;
    }

    dd {
        padding: 10px 20px 20px 20px;
    }

    dd:last-child {
        border-bottom: none;
    }

    code {
        color: black;
        border: none;
        background: rgba(128, 128, 128, .1);
    }

    [dir=rtl] code {
        direction: ltr;
    }

    pre {
        background: #f8f8f8;
        border: none;
        color: #333;
        padding: 20px;
    }

    [dir=rtl] pre {
        direction: ltr;
    }

    h2 {
        margin-top: 50px;
    }

    h3 {
        color: #aaa;
    }

    .jumbotron {
        padding: 40px;
    }

    .jumbotron h1 {
        margin-top: 0;
    }

    .jumbotron p:last-child {
        margin-bottom: 0;
    }

    .minicolors-theme-bootstrap .minicolors-input {
        padding-left: 44px !important;
    }

    .minicolors-theme-bootstrap .minicolors-swatch {
        top: 7px !important;
    }
</style>

<div class="section-body">
    <div class="row mt-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-3">
                                <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">


                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link active" id="paypal-tab" data-toggle="tab" href="#paypalTab"
                                            role="tab" aria-controls="paypalTab" aria-selected="true">Paypal</a>
                                    </li>

                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="stripe-tab" data-toggle="tab" href="#stripeTab"
                                            role="tab" aria-controls="stripeTab" aria-selected="true">Stripe</a>
                                    </li>

                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="razorpay-tab" data-toggle="tab" href="#razorpayTab"
                                            role="tab" aria-controls="razorpayTab" aria-selected="true">Razorpay</a>
                                    </li>

                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="flutterwave-tab" data-toggle="tab"
                                            href="#flutterwaveTab" role="tab" aria-controls="flutterwaveTab"
                                            aria-selected="true">Flutterwave</a>
                                    </li>



                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="mollie-tab" data-toggle="tab" href="#mollieTab"
                                            role="tab" aria-controls="mollieTab" aria-selected="true">Mollie</a>
                                    </li>

                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="pay-stack-tab" data-toggle="tab" href="#payStackTab"
                                            role="tab" aria-controls="payStackTab" aria-selected="true">PayStack</a>
                                    </li>

                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="instamojo-tab" data-toggle="tab" href="#instamojoTab"
                                            role="tab" aria-controls="instamojoTab" aria-selected="true">Instamojo</a>
                                    </li>

                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="sslcommerz-tab" data-toggle="tab" href="#sslcommerzTab"
                                            role="tab" aria-controls="sslcommerzTab" aria-selected="true">SslCommerz</a>
                                    </li>

                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="bank-account-tab" data-toggle="tab"
                                            href="#bankAccountTab" role="tab" aria-controls="bankAccountTab"
                                            aria-selected="true">Bank Account</a>
                                    </li>
                                    <li class="nav-item border rounded mb-1">
                                        <a class="nav-link" id="cash-tab" data-toggle="tab" href="#cashTab" role="tab"
                                            aria-controls="cashTab" aria-selected="true">Cash On
                                            Deliver</a>
                                    </li>


                                </ul>
                            </div>
                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
                            <div class="col-12 col-sm-12 col-md-9">
                                <div class="border rounded">
                                    <div class="tab-content no-padding" id="settingsContent">

                                        <div class="tab-pane fade show active" id="paypalTab" role="tabpanel"
                                            aria-labelledby="paypal-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="/admin/update-paypal" method="POST"
                                                        enctype="multipart/form-data">
                                                        <input type="hidden" name="_token" autocomplete="off"> <input
                                                            type="hidden" name="_method" value="PUT">
                                                        <div class="form-group">
                                                            <label for="">Paypal Status</label>
                                                            <div>
                                                                <input id="status_toggle" type="checkbox" checked
                                                                    data-toggle="toggle" name="status">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Account Mode</label>
                                                            <select name="account_mode" id="account_mode"
                                                                class="form-control">
                                                                <option value="live">Live</option>
                                                                <option selected value="sandbox">Sandbox
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Country Name</label>
                                                            <select name="country_name" id=""
                                                                class="form-control select2">
                                                                <option value="">Select Country
                                                                </option>


                                                                <option value="KH">Cambodia
                                                                </option>



                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Currency Name</label>
                                                            <select name="currency_name" id=""
                                                                class="form-control select2">
                                                                <option value="">Select Currency
                                                                </option>

                                                                <option value="CAD">Canadian Dollar
                                                                </option>

                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Currency rate ( Per USD)</label>
                                                            <input type="text" class="form-control" name="currency_rate"
                                                                value="1">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Paypal Client Id</label>
                                                            <input type="text" class="form-control"
                                                                name="paypal_client_id"
                                                                >
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Paypal Secret Key</label>
                                                            <input type="text" class="form-control"
                                                                name="paypal_secret_key"
                                                                >
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="">Payment page image</label>
                                                            <div>
                                                                <img class="payment_page_image"
                                                                    src="/bongdorn/images/paypal.jpg" alt="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">New image</label>
                                                            <input type="file" name="payment_page_image"
                                                                class="form-control-file">
                                                        </div>


                                                        <button class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="stripeTab" role="tabpanel"
                                            aria-labelledby="stripe-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="/admin/update-stripe" method="POST"
                                                        enctype="multipart/form-data">
                                                        <input type="hidden" name="_token"
                                                            value="2fFbKVzu9lFd74YgiCwx0cxITEVOrHcudkJ8AkRX"
                                                            autocomplete="off"> <input type="hidden" name="_method"
                                                            value="PUT">
                                                        <div class="form-group">
                                                            <label for="">Stripe Status</label>
                                                            <div>
                                                                <input id="status_toggle" type="checkbox" checked
                                                                    data-toggle="toggle" name="status">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Country Name</label>
                                                            <select name="country_name" id=""
                                                                class="form-control select2">
                                                                <option value="">Select Country
                                                                </option>

                                                                <option value="BE">Belgium
                                                                </option>
                                                                <option value="BZ">Belize
                                                                </option>
                                                                <option value="BJ">Benin
                                                                </option>
                                                                <option value="BM">Bermuda
                                                                </option>
                                                                <option value="BT">Bhutan
                                                                </option>
                                                                <option value="BO">Bolivia (Plurinational State
                                                                    of)
                                                                </option>
                                                                <option value="BQ">Bonaire, Sint Eustatius and
                                                                    Saba
                                                                </option>
                                                                <option value="BA">Bosnia and Herzegovina
                                                                </option>
                                                                <option value="BW">Botswana
                                                                </option>
                                                                <option value="BV">Bouvet Island
                                                                </option>
                                                                <option value="BR">Brazil
                                                                </option>
                                                                <option value="IO">British Indian Ocean
                                                                    Territory
                                                                </option>
                                                                <option value="BN">Brunei Darussalam
                                                                </option>
                                                                <option value="BG">Bulgaria
                                                                </option>
                                                                <option value="BF">Burkina Faso
                                                                </option>
                                                                <option value="BI">Burundi
                                                                </option>
                                                                <option value="CV">Cabo Verde
                                                                </option>
                                                                <option value="KH">Cambodia
                                                                </option>

                                                                <option value="TK">Tokelau
                                                                </option>
                                                                <option value="TO">Tonga
                                                                </option>
                                                                <option value="TT">Trinidad and Tobago
                                                                </option>
                                                                <option value="TN">Tunisia
                                                                </option>
                                                                <option value="TR">Turkey
                                                                </option>

                                                                <option value="UGX">Ugandan Shilling
                                                                </option>
                                                                <option value="UAH">Ukrainian Hryvnia
                                                                </option>
                                                                <option value="AED">United Arab Emirates Dirham
                                                                </option>

                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Currency rate ( per USD)</label>
                                                            <input type="text" class="form-control" name="currency_rate"
                                                                value="1">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Stripe Key</label>
                                                            <input type="text" class="form-control" name="stripe_key"
                                                                value="pk_test_51JU61aF56Pb8BOOX5ucAe5DlDwAkCZyffqlKMDUWsAwhKbdtuY71VvIzr0NgFKjq4sOVVaaeeyVXXnNWwu5dKgeq00kMzCBUm5">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Stripe Secret</label>
                                                            <input type="text" class="form-control" name="stripe_secret"
                                                                value="sk_test_51JU61aF56Pb8BOOXlz7jGkzJsCkozuAoRlFJskYGsgunfaHLmcvKLubYRQLCQOuyYHq0mvjoBFLzV7d8F6q8f6Hv00CGwULEEV">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Payment page image</label>
                                                            <div>
                                                                <img class="payment_page_image"
                                                                    src="/public/uploads/website-images/paypal-2023-02-27-05-51-33-8540.png"
                                                                    alt="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">New image</label>
                                                            <input type="file" name="payment_page_image"
                                                                class="form-control-file">
                                                        </div>

                                                        <button class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="razorpayTab" role="tabpanel"
                                            aria-labelledby="razorpay-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="/admin/update-razorpay" method="POST"
                                                        enctype="multipart/form-data">
                                                        <input type="hidden" name="_token"
                                                            value="2fFbKVzu9lFd74YgiCwx0cxITEVOrHcudkJ8AkRX"
                                                            autocomplete="off"> <input type="hidden" name="_method"
                                                            value="PUT">
                                                        <div class="form-group">
                                                            <label for="">Razorpay Status</label>
                                                            <div>
                                                                <input id="status_toggle" type="checkbox" checked
                                                                    data-toggle="toggle" name="status">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Razorpay Key</label>
                                                            <input type="text" class="form-control" name="razorpay_key"
                                                                value="rzp_test_K7CipNQYyyMPiS">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Razorpay Secret Key</label>
                                                            <input type="text" class="form-control"
                                                                name="razorpay_secret" value="zSBmNMorJrirOrnDrbOd1ALO">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                value="Ecommerce">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Description</label>
                                                            <input type="text" class="form-control" name="description"
                                                                value="This is description">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Country Name</label>
                                                            <select name="country_name" id=""
                                                                class="form-control select2">
                                                                <option value="">Select Country
                                                                </option>

                                                                <option value="KH">Cambodia
                                                                </option>
                                                                <option value="CM">Cameroon
                                                                </option>
                                                                <option value="CA">Canada
                                                                </option>

                                                                <option value="GB">United Kingdom of Great
                                                                    Britain and Northern Ireland
                                                                </option>
                                                                <option value="UM">United States Minor Outlying
                                                                    Islands
                                                                </option>
                                                                <option value="US">United States of America
                                                                </option>

                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Currency Name</label>
                                                            <select name="currency_name" id=""
                                                                class="form-control select2">
                                                                <option value="">Select Currency
                                                                </option>

                                                                <option value="KHR">Cambodian Riel
                                                                </option>
                                                                <option value="CAD">Canadian Dollar
                                                                </option>

                                                                <option value="THB">Thai Baht
                                                                </option>
                                                                <option value="TOP">Tongan pa&#039;anga
                                                                </option>
                                                                <option value="TTD">Trinidad &amp; Tobago Dollar
                                                                </option>

                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Currency Rate (per USD)</label>
                                                            <input type="text" class="form-control" name="currency_rate"
                                                                value="74.66">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Current Image</label>
                                                            <div>
                                                                <img src="/public/uploads/website-images/razorpay-2021-12-14-06-35-49-6602.png"
                                                                    width="200px" alt="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">New Image</label>
                                                            <input type="file" class="form-control-file" name="image">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Theme Color</label>
                                                            <input type="color" value="#2d15e5" class="form-control"
                                                                name="theme_color">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Payment page image</label>
                                                            <div>
                                                                <img class="payment_page_image"
                                                                    src="/public/uploads/website-images/paypal-2023-02-27-12-32-17-8428.jpeg"
                                                                    alt="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">New image</label>
                                                            <input type="file" name="payment_page_image"
                                                                class="form-control-file">
                                                        </div>

                                                        <button class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="flutterwaveTab" role="tabpanel"
                                            aria-labelledby="flutterwave-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="/admin/update-flutterwave" method="POST"
                                                        enctype="multipart/form-data">
                                                        <input type="hidden" name="_token"
                                                            value="2fFbKVzu9lFd74YgiCwx0cxITEVOrHcudkJ8AkRX"
                                                            autocomplete="off"> <input type="hidden" name="_method"
                                                            value="PUT">
                                                        <div class="form-group">
                                                            <label for="">Flutterwave Status</label>
                                                            <div>
                                                                <input id="status_toggle" type="checkbox" checked
                                                                    data-toggle="toggle" name="status">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Public Key</label>
                                                            <input type="text" class="form-control" name="public_key"
                                                                value="FLWPUBK_TEST-5760e3ff9888aa1ab5e5cd1ec3f99cb1-X">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Secret Key</label>
                                                            <input type="text" class="form-control" name="secret_key"
                                                                value="FLWSECK_TEST-81cb5da016d0a51f7329d4a8057e766d-X">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Title</label>
                                                            <input type="text" class="form-control" name="title"
                                                                value="Ecommerce">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Country Name</label>
                                                            <select name="country_name" id=""
                                                                class="form-control select2">
                                                                <option value="">Select Country
                                                                </option>

                                                                <option value="KH">Cambodia
                                                                </option>
                                                                <option value="CM">Cameroon
                                                                </option>
                                                                <option value="CA">Canada
                                                                </option>
                                                                <option value="KY">Cayman Islands
                                                                </option>

                                                                <option value="TZ">Tanzania, United Republic of
                                                                </option>
                                                                <option value="TH">Thailand
                                                                </option>
                                                                <option value="TL">Timor-Leste
                                                                </option>

                                                                <option value="WF">Wallis and Futuna
                                                                </option>
                                                                <option value="EH">Western Sahara
                                                                </option>
                                                                <option value="YE">Yemen
                                                                </option>
                                                                <option value="ZM">Zambia
                                                                </option>
                                                                <option value="ZW">Zimbabwe
                                                                </option>
                                                                <option value="AX">Åland Islands
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Currency Name</label>
                                                            <select name="currency_name" id=""
                                                                class="form-control select2">
                                                                <option value="">Select Currency
                                                                </option>

                                                                <option value="KHR">Cambodian Riel
                                                                </option>
                                                                <option value="CAD">Canadian Dollar
                                                                </option>

                                                                <option value="THB">Thai Baht
                                                                </option>
                                                                <option value="TOP">Tongan pa&#039;anga
                                                                </option>
                                                                <option value="TTD">Trinidad &amp; Tobago Dollar
                                                                </option>
                                                                <option value="TND">Tunisian Dinar
                                                                </option>

                                                                <option value="ZMK">Zambian Kwacha
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Currency Rate (Per USD)</label>
                                                            <input type="text" class="form-control" name="currency_rate"
                                                                value="417.35">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Current Image</label>
                                                            <div>
                                                                <img src="/public/uploads/website-images/flutterwave-2021-12-30-03-44-30-8813.jpg"
                                                                    width="200px" alt="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">New Image</label>
                                                            <input type="file" class="form-control-file" name="image">
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="">Payment page image</label>
                                                            <div>
                                                                <img class="payment_page_image"
                                                                    src="/public/uploads/website-images/paypal-2023-02-27-12-34-33-3437.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">New image</label>
                                                            <input type="file" name="payment_page_image"
                                                                class="form-control-file">
                                                        </div>

                                                        <button class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="mollieTab" role="tabpanel"
                                            aria-labelledby="mollie-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="/admin/update-mollie" method="POST"
                                                        enctype="multipart/form-data">
                                                        <input type="hidden" name="_token"
                                                            value="2fFbKVzu9lFd74YgiCwx0cxITEVOrHcudkJ8AkRX"
                                                            autocomplete="off"> <input type="hidden" name="_method"
                                                            value="PUT">
                                                        <div class="form-group">
                                                            <label for="">Mollie Status</label>
                                                            <div>
                                                                <input id="status_toggle" type="checkbox" checked
                                                                    data-toggle="toggle" name="status">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Mollie Key</label>
                                                            <input type="text" class="form-control" name="mollie_key"
                                                                value="test_p9qgUn7Sg22xF3Q8D9heBSVEzrzM5Q">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Country Name</label>
                                                            <select name="mollie_country_name" id=""
                                                                class="form-control select2">
                                                                <option value="">Select Country
                                                                </option>

                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Currency Name</label>
                                                            <select name="mollie_currency_name" id=""
                                                                class="form-control select2">
                                                                <option value="">Select Currency
                                                                </option>

                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Currency Rate (per USD)</label>
                                                            <input type="text" class="form-control"
                                                                name="mollie_currency_rate" value="1.27">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Payment page image</label>
                                                            <div>
                                                                <img class="payment_page_image"
                                                                    src="/public/uploads/website-images/paypal-2023-02-27-12-37-11-4911.png"
                                                                    alt="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">New image</label>
                                                            <input type="file" name="mollie_payment_page_image"
                                                                class="form-control-file">
                                                        </div>

                                                        <button class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="payStackTab" role="tabpanel"
                                            aria-labelledby="pay-stack-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="/admin/update-paystack" method="POST"
                                                        enctype="multipart/form-data">
                                                        <input type="hidden" name="_token"
                                                            value="2fFbKVzu9lFd74YgiCwx0cxITEVOrHcudkJ8AkRX"
                                                            autocomplete="off"> <input type="hidden" name="_method"
                                                            value="PUT">
                                                        <div class="form-group">
                                                            <label for="">PayStack Status</label>
                                                            <div>
                                                                <input id="status_toggle" type="checkbox" checked
                                                                    data-toggle="toggle" name="status">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Public Key</label>
                                                            <input type="text" name="paystack_public_key"
                                                                class="form-control"
                                                                value="pk_test_057dfe5dee14eaf9c3b4573df1e3760c02c06e38">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Secret Key</label>
                                                            <input type="text" name="paystack_secret_key"
                                                                class="form-control"
                                                                value="sk_test_77cb93329abbdc18104466e694c9f720a7d69c97">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Country Name</label>
                                                            <select name="paystack_country_name" id=""
                                                                class="form-control select2">
                                                                <option value="">Select Country
                                                                </option>
                                                                <option value="AF">Afghanistan
                                                                </option>
                                                                <option value="AL">Albania
                                                                </option>
                                                                <option value="DZ">Algeria
                                                                </option>
                                                                <option value="AS">American Samoa
                                                                </option>
                                                                <option value="AD">Andorra
                                                                </option>
                                                                <option value="AO">Angola
                                                                </option>
                                                                <option value="AI">Anguilla
                                                                </option>
                                                                <option value="AQ">Antarctica
                                                                </option>
                                                                <option value="AG">Antigua and Barbuda
                                                                </option>
                                                                <option value="AR">Argentina
                                                                </option>
                                                                <option value="AM">Armenia
                                                                </option>

                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Currency Name</label>
                                                            <select name="paystack_currency_name" id=""
                                                                class="form-control select2">
                                                                <option value="">Select Currency
                                                                </option>

                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Currency Rate (per USD)</label>
                                                            <input type="text" class="form-control"
                                                                name="paystack_currency_rate" value="417.35">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Payment page image</label>
                                                            <div>
                                                                <img class="payment_page_image"
                                                                    src="/public/uploads/website-images/paypal-2023-02-27-12-38-55-3407.png"
                                                                    alt="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">New image</label>
                                                            <input type="file" name="paystack_payment_page_image"
                                                                class="form-control-file">
                                                        </div>

                                                        <button class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="instamojoTab" role="tabpanel"
                                            aria-labelledby="instamojo-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="/admin/update-instamojo" method="POST"
                                                        enctype="multipart/form-data">
                                                        <input type="hidden" name="_token"
                                                            value="2fFbKVzu9lFd74YgiCwx0cxITEVOrHcudkJ8AkRX"
                                                            autocomplete="off"> <input type="hidden" name="_method"
                                                            value="PUT">
                                                        <div class="form-group">
                                                            <label for="">Instamojo Status</label>
                                                            <div>
                                                                <input id="status_toggle" type="checkbox" checked
                                                                    data-toggle="toggle" name="status">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Account Mode</label>
                                                            <select name="account_mode" id="account_mode"
                                                                class="form-control">
                                                                <option value="Sandbox">Sandbox</option>
                                                                <option value="Live">Live</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Api Key</label>
                                                            <input type="text" name="api_key" class="form-control"
                                                                value="test_5f4a2c9a58ef216f8a1a688910f">
                                                        </div>



                                                        <div class="form-group">
                                                            <label for="">Auth Token</label>
                                                            <input type="text" name="auth_token" class="form-control"
                                                                value="test_994252ada69ce7b3d282b9941c2">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">INR Currency Rate (per USD)</label>
                                                            <input type="text" class="form-control" name="currency_rate"
                                                                value="74.66">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Payment page image</label>
                                                            <div>
                                                                <img class="payment_page_image"
                                                                    src="/public/uploads/website-images/paypal-2023-02-27-12-41-07-1786.png"
                                                                    alt="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">New image</label>
                                                            <input type="file" name="payment_page_image"
                                                                class="form-control-file">
                                                        </div>

                                                        <button class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="sslcommerzTab" role="tabpanel"
                                            aria-labelledby="sslcommerz-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="/admin/update-sslcommerz" method="POST"
                                                        enctype="multipart/form-data">
                                                        <input type="hidden" name="_token"
                                                            value="2fFbKVzu9lFd74YgiCwx0cxITEVOrHcudkJ8AkRX"
                                                            autocomplete="off"> <input type="hidden" name="_method"
                                                            value="PUT">
                                                        <div class="form-group">
                                                            <label for="">SslCommerz Status</label>
                                                            <div>
                                                                <input id="status_toggle" type="checkbox" checked
                                                                    data-toggle="toggle" name="status">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Account Mode</label>
                                                            <select name="account_mode" id="account_mode"
                                                                class="form-control">
                                                                <option value="live">Live</option>
                                                                <option selected value="sandbox">Sandbox
                                                                </option>
                                                            </select>
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="">Store Id</label>
                                                            <input type="text" class="form-control" name="store_id"
                                                                value="wsus628f03bb09670">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Store Password</label>
                                                            <input type="text" class="form-control"
                                                                name="store_password" value="wsus628f03bb09670@ssl">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Country Name</label>
                                                            <select name="country_name" id=""
                                                                class="form-control select2">
                                                                <option value="">Select Country
                                                                </option>

                                                                <option value="ZW">Zimbabwe
                                                                </option>
                                                                <option value="AX">Åland Islands
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Currency Name</label>
                                                            <select name="currency_name" id=""
                                                                class="form-control select2">
                                                                <option value="">Select Currency
                                                                </option>
                                                                <option value="AFA">Afghan Afghani
                                                                </option>

                                                                <option value="UZS">Uzbekistan Som
                                                                </option>
                                                                <option value="VUV">Vanuatu Vatu
                                                                </option>
                                                                <option value="VEF">Venezuelan BolÃ­var
                                                                </option>
                                                                <option value="VND">Vietnamese Dong
                                                                </option>
                                                                <option value="YER">Yemeni Rial
                                                                </option>
                                                                <option value="ZMK">Zambian Kwacha
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Currency Rate (Per USD)</label>
                                                            <input type="text" class="form-control" name="currency_rate"
                                                                value="80">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Payment page image</label>
                                                            <div>
                                                                <img class="payment_page_image"
                                                                    src="/public/uploads/website-images/paypal-2023-03-06-10-20-41-9078.png"
                                                                    alt="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">New image</label>
                                                            <input type="file" name="payment_page_image"
                                                                class="form-control-file">
                                                        </div>

                                                        <button class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="bankAccountTab" role="tabpanel"
                                            aria-labelledby="bank-account-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="/admin/update-bank" method="POST"
                                                        enctype="multipart/form-data">
                                                        <input type="hidden" name="_token"
                                                            value="2fFbKVzu9lFd74YgiCwx0cxITEVOrHcudkJ8AkRX"
                                                            autocomplete="off"> <input type="hidden" name="_method"
                                                            value="PUT">
                                                        <div class="form-group">
                                                            <label for="">Bank Payment Status</label>
                                                            <div>
                                                                <input id="status_toggle" type="checkbox" checked
                                                                    data-toggle="toggle" name="status">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Account Information</label>
                                                            <textarea name="account_info" id="" cols="30" rows="10"
                                                                class="text-area-5 form-control">Bank Name: Your bank name
                                                                Account Number:  Your bank account number
                                                                Routing Number: Your bank routing number
                                                                Branch: Your bank branch name</textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Payment page image</label>
                                                            <div>
                                                                <img class="payment_page_image"
                                                                    src="/public/uploads/website-images/paypal-2023-02-27-12-46-51-5806.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">New image</label>
                                                            <input type="file" name="bank_payment_page_image"
                                                                class="form-control-file">
                                                        </div>

                                                        <button class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="cashTab" role="tabpanel"
                                            aria-labelledby="cash-tab">
                                            <div class="card m-0">
                                                <div class="card-body">
                                                    <form action="/admin/update-cash-on-delivery" method="POST"
                                                        enctype="multipart/form-data">
                                                        <input type="hidden" name="_token"
                                                            value="2fFbKVzu9lFd74YgiCwx0cxITEVOrHcudkJ8AkRX"
                                                            autocomplete="off">
                                                        <input type="hidden" name="_method" value="PUT">
                                                        <div class="form-group">
                                                            <label for="">Cash on delivery Status</label>
                                                            <div>
                                                                <a href="javascript:;">
                                                                    <input id="status_toggle" type="checkbox" checked
                                                                        data-toggle="toggle" data-on="Enable"
                                                                        data-off="Disable" data-onstyle="success"
                                                                        data-offstyle="danger" name="status">
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Payment page image</label>
                                                            <div>
                                                                <img class="payment_page_image"
                                                                    src="/public/uploads/website-images/paypal-2023-02-27-12-51-02-6222.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">New image</label>
                                                            <input type="file" name="handcash_payment_page_image"
                                                                class="form-control-file">
                                                        </div>

                                                        <button class="btn btn-primary">Update</button>

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
        </div>
    </div>

    @endsection
