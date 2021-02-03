<!doctype html>
<html lang="en">

<head>
    @include('includes.style')

    <title>@yield('title')</title>
</head>

<body>
    @include('includes.navbar')


    @yield('content')

    @include('includes.footer')


    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    @include('includes.script')
</body>

</html>