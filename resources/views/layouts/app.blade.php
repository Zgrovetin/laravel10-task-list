<!DOCTYPE html>
<html>
    <head>
        <title> Laravel 10 task list app</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @yield('styles')
    </head>

    <body class="container mx-auto mt-10 mb-10 mac-w-lg">
        <h1 class="mb-4 text-2xl">@yield('title')</h1>
        <div>
            @if (session()->has('success'))
                <div>{{ session('success') }}</div>
            @endif

            @yield('content')
        </div>
    </body>

</html>
