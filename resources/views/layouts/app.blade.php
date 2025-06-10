<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'FSI Coding Challenge')</title>
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-white shadow p-4 mb-6">
        <div class="container mx-auto">
            <a href="{{ route('customers.index') }}" class="font-bold text-xl">FSI Coding Challenge</a>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="mt-12 p-4 bg-white text-center text-sm text-gray-600">
        &copy; {{ date('Y') }} FSI Coding Challenge
    </footer>
</body>
</html>
