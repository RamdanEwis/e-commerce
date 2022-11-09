<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @yield('title')
    @include('web.partials.head')
</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div class="spinner-grow" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
{{--Start header --}}
@include('web.partials.header')

@yield('content')

{{--Start footer --}}
@include('web.partials.footer')


{{--javascript--}}
@include('web.partials.script')
{{--custom javascript--}}
@yield('js')

</body>
</html>
