<!doctype html>
<html lang="en" class="">

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

    <style>
        .navbar {
            z-index: 1;
            background: rgba(255,255,255,0.6) !important;
            backdrop-filter: blur(10px) saturate(125%);
            -webkit-backdrop-filter: blur(10px) saturate(125%);
        }

        .icon-middle {
            display: flex;
            align-items: center;
        }

        .vcenter {
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }
    </style>
</head>

<body class="bg-white text-gray-700 dark:bg-gray-900 dark:text-gray-200">
    <div class="md:flex flex-col md:flex-row md:min-h-screen w-full ">
        
        <div class="w-full md:w-64 md:h-screen border-r-0 sm:border-r dark:border-gray-800 z-20 fixed top-0 ">
            @include('includes.sidebar')
        </div>

   
            <div class="w-full">
                @include('includes.header')
                <section class="px-2 py-4 sm:p-12 mt-16 md:ml-64">
                    @yield('content')
                </section>
            </div>
        
    </div>

    <script src="/assets/js/app.js"></script>

    <script>
        $(document).ready(function () {
            
            if (localStorage.theme === 'dark') {
                document.documentElement.classList.add('dark');
                $(".moon").each(function () { $(this).addClass("hidden") });
                $(".sun").each(function () { $(this).removeClass("hidden") });
            } else {
                document.documentElement.classList.remove('dark');
                $(".sun").each(function () { $(this).addClass("hidden") });
                $(".moon").each(function () { $(this).removeClass("hidden") });
            }

            $(document).on("click", "#theme", () => {
                if (localStorage.theme === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.theme = 'dark';
                    $(".moon").each(function () { $(this).addClass("hidden") });
                    $(".sun").each(function () { $(this).removeClass("hidden") });
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.theme = 'light';
                    $(".sun").each(function () { $(this).addClass("hidden") });
                    $(".moon").each(function () { $(this).removeClass("hidden") });
                }
            });
        });

    </script>

    @yield('scripts')
</body>

</html>