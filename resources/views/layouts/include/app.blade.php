{{--<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ $value }}
</div>
@endsession

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <x-label for="email" value="{{ __('Email') }}" />
        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus
            autocomplete="username" />
    </div>

    <div class="mt-4">
        <x-label for="password" value="{{ __('Password') }}" />
        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
            autocomplete="current-password" />
    </div>

    <div class="block mt-4">
        <label for="remember_me" class="flex items-center">
            <x-checkbox id="remember_me" name="remember" />
            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
        @endif

        <x-button class="ms-4">
            {{ __('Log in') }}
        </x-button>
    </div>
</form>
</x-authentication-card>
</x-guest-layout>--}}

<!DOCTYPE html>
<html lang="en">

    <head>

        @include('include.head')


    </head>

    <body>

        {{-- --}}
        @include('include.topbar')
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
        <section class="wsus__breadcrumb"
            style="background: url(../bongdorn/uploads/website-images/breadcrumb_image.jpg);">
            <div class="wsus__breadcrumb_overlay">
                <div class="container">
                    <div class="wsus__breadcrumb_text">
                        <h1>Login</h1>
                        <ul>
                            <li><a href="https://unifood.websolutionus.com">Home</a></li>
                            <li><a href="https://unifood.websolutionus.com/login">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
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

        @include('include/footer')



    </body>

</html>