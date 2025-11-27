<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Helpdesk')</title>
</head>

<body class="min-h-screen bg-gray-50 text-gray-800">
    @include('partials.navbar')
    <div class="flex">
        @include('partials.sidebar')
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
    @include('partials.footer')
</body>

</html>