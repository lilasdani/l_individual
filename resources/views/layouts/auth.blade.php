<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    ​<div class="flex items-center justify-center h-screen">
        <div class="w-full max sm:w-96">
            <div class="bg-white shadow-md rounded-md p-8">
                <h1 class="text-3xl font-bold text-center">@yield('title')</h1>
                <div class="mt-8">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>