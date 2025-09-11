<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased flex flex-col items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
        <nav class="mb-8">
            <a href="{{ route('products.index') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                View Products
            </a>
        </nav>

        <h1 class="text-3xl font-bold mb-4">Welcome to Our Product Catalog</h1>
        <p class="text-lg text-gray-700 dark:text-gray-300">Explore our wide range of amazing products.</p>
    </body>
</html>