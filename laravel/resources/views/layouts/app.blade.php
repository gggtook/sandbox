<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    </head>
    <body class="bg-gray-900">
        <div class="container m-auto">
            <h1 class="flex items-center text-5xl my-20 font-extrabold dark:text-white">@yield('title')</h1>
            @yield('content')
        </div>
    </body>
</html>
