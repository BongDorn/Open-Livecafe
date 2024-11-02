<!DOCTYPE html>
<html lang="en">

    <head>
        @include('admin.layouts.head')

    </head>

    <body>
        
                @include('admin.layouts.topbar')

                <!-- Main Content -->
                <div class="main-content">
                    @yield('content')
                </div>

                <!-- Modal -->
{{--  --}}


        @include('admin.layouts.footer')
{{--  --}}
    </body>

</html>
