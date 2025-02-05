<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("loading-screen").classList.add("hidden");
        });

        function showLoading() {
            document.getElementById("loading-screen").classList.remove("hidden");
        }
    </script>
</head>
<body class="bg-gray-100">
    <!-- Loading Screen -->
    <div id="loading-screen" class="fixed top-0 left-0 w-full h-full flex items-center justify-center bg-white z-50">
        <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-blue-500"></div>
    </div>

    <header class="bg-blue-600 text-white shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-xl font-bold">Navbar</h1>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="{{ route('showdashboard') }}" 
                           class="hover:text-gray-300 {{ Route::currentRouteName() == 'showdashboard' ? 'font-bold text-white' : 'opacity-75' }}" 
                           onclick="showLoading()">Dashboard</a></li>
                    <li><a href="{{ route('showblog') }}" 
                           class="hover:text-gray-300 {{ Route::currentRouteName() == 'showblog' ? 'font-bold text-white' : 'opacity-75' }}" 
                           onclick="showLoading()">Blog</a></li>
                    <li><a href="{{ route('showcontact') }}" 
                           class="hover:text-gray-300 {{ Route::currentRouteName() == 'showcontact' ? 'font-bold text-white' : 'opacity-75' }}" 
                           onclick="showLoading()">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto p-6">
        <h3 class="text-2xl font-semibold text-center">Dashboard</h3>
    </main>

    <footer class="text-center py-4">
        <p>&copy; 2025</p>
    </footer>
</body>
</html>
