<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio de [Votre Nom]</title>
    @vite(['resources/css/tailwind.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900">
    <!-- Contenu de votre page -->
    @yield('content')
</body>
</html>
