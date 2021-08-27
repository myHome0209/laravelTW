<html>
    <head>
        <title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- スマホ対応 -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap4 -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @component('components.header')
        @endcomponent
        <div class="containe pt-5 pb-5r">
            @component('components.flash')
            @endcomponent
            @yield('content')
        </div>
        
        @component('components.footer')
        @endcomponent
        
        <!-- bootstrap4 -->
         <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html> 

