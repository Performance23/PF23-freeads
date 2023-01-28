<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>FreeAds</title>
</head>
<body>
    <header>
    @include('partials.navbar')
    </header>
    <main class="bg-gray-200 fixed bottom-0 left-0 right-0 top-14">
        @yield('content')
    </main>
</body>
</html>
