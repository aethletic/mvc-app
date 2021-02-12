<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/app.css">

    @yield('styles')

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

    <title>@yield('title', 'Index') - @app_name</title>
</head>

<body>
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full ">
        @include('includes.sidebar')

        <div class="block w-full">
            @include('includes.header')
            <section class="flex-1 p-7 text-gray-700">
                @yield('content')
            </section>
        </div>
    </div>

    <script src="/assets/js/app.js"></script>

    <script>
        $(document).ready(function () {
            console.log('Page ready!');
        });
    </script>

    @yield('scripts')
</body>

</html>