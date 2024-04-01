<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://127.0.0.2/bootstrap-5.3.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/navbars.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebars.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>{{ env('APP_NAME', 'Laravel') }}</title>
</head>

<body>
    <div class="d-flex flex-nowrap">
        @include('layouts.components.left_menu')
        <div class="width-max">
            @include('layouts.components.top_menu')
            <div class="px-5">
                @yield('content')
            </div>
        </div>
    </div>
    @include('layouts.components.footer')

    <script src="http://127.0.0.2/bootstrap-5.3.0-dist/js/bootstrap.min.js"></script>
    {{-- <script src="http://127.0.0.2/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="{{ asset('js/sidebars.js') }}"></script>

</body>

</html>
