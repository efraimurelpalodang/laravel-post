<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('partials.navbar')
    <main class="p-8 bg-gray-900 min-h-screen text-white sm:py-10">
        <div class="mx-auto max-w-7xl lg:px-10">
            @yield('content')
        </div>
    </main>
</body>

</html>
