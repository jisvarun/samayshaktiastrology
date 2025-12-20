<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard | Samay Shakti Astrology Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">

    {{-- App favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    {{-- App css --}}
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">

    {{-- Icons css --}}
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    {{-- Theme Config Js --}}
    <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body>

    <div class="flex wrapper">

        {{-- Sidenav Menu --}}
        @include('admin.includes.sidebar')
        {{-- Sidenav Menu End  --}}

        <div class="page-content">

            {{-- Topbar Start --}}
            @include('admin.includes.header')
            {{-- Topbar End --}}

            {{-- Topbar Search Modal --}}
            @include('admin.includes.search-modal')

            <main class="flex-grow p-6">

                @yield('content')

            </main>

            {{-- Footer Start --}}
            @include('admin.includes.footer')
            {{-- Footer End --}}

        </div>

    </div>

    {{-- Back to Top Button --}}
    <button data-toggle="back-to-top" class="fixed hidden h-10 w-10 items-center justify-center rounded-full z-10 bottom-20 end-14 p-2.5 bg-primary cursor-pointer shadow-lg text-white">
        <i class="mgc_arrow_up_line text-lg"></i>
    </button>


    {{-- Plugin Js --}}
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/libs/frostui/tailwindcss/frostui.js') }}"></script>
    {{-- <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    
     --}}

    {{-- App Js --}}
    <script src="{{ asset('assets/js/app.js') }}"></script>

    {{-- Dashboard Project Page js --}}
    {{-- <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script> --}}
    @yield('script')

</body>
</html>