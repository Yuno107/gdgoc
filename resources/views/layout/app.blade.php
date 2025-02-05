<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body x-data="{ pageTransition: true }" x-init="setTimeout(() => pageTransition = false, 300)" class="transition-all duration-300 ease-in-out">
    <header class="bg-blue-600 text-white shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-xl font-bold">Navbar</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="{{ route('showdashboard') }}" class="hover:text-gray-300">Dashboard</a></li>
                    <li><a href="{{ route('showblog') }}" class="hover:text-gray-300">Blog</a></li>
                    <li><a href="{{ route('showcontact') }}" class="hover:text-gray-300">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container mx-auto p-6">
        <div x-show="!pageTransition" x-transition.opacity.duration.500ms>
            @yield('content')
        </div>
    </main>
</body>
</html>
