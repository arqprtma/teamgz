<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="navbar bg-purple-900 w-full h-[80px]">
        <div class="flex justify-between items-center py-4 px-6">
            <div class="judul text-white text-lg lg:pt-3 pt-2">TEAM GENZ</div>
            <!-- Hamburger button for mobile -->
            <div class="lg:hidden">
                <button id="menu-button" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <!-- Menu -->
            <div id="menu" class="hidden lg:flex gap-10 w-full lg:w-auto lg:pt-3 pt-2 text-white">
                <a href="{{route('login')}}" class="block lg:inline-block">Login</a>
                <a href="{{route('register')}}" class="block lg:inline-block">Register</a>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="lg:hidden hidden px-6 py-4 text-white">
            <a href="{{route('login')}}" class="block py-2">Login</a>
            <a href="{{route('register')}}" class="block py-2">Register</a>
        </div>
    </div>

    <div class="hero h-screen bg-cover bg-center flex flex-col lg:flex-row justify-evenly items-center space-y-6 lg:space-y-0 lg:space-x-10" style="background-image: url('/images/GENZ.jpg');">
       
    </div>
    <script>
        document.getElementById('menu-button').addEventListener('click', function () {
            var mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
