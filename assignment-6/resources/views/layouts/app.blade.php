<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Laravel Saya')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>

        .star {
            color: gold; 
            font-size: 1.2em; 
            margin-right: 2px; 
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased">
    <header class="bg-blue-600 text-white p-4 shadow-md">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold">@yield('header_title', 'Halaman Aplikasi')</h1>
        </div>
    </header>

    <main class="container mx-auto p-4 mt-8 bg-white shadow-lg rounded-lg">
        @yield('content')
    </main>

  
</body>
</html>