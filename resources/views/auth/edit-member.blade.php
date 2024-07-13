<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    {{-- <div class="navbar bg-purple-900 w-full h-[80px]">
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
                <a href="{{route('logout')}}" class="block lg:inline-block">Logout</a>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="lg:hidden hidden px-6 py-4 bg-purple-800 text-white">
            <a href="{{route('logout')}}" class="block py-2">Logout</a>
        </div>
    </div> --}}

    <div class="hero h-screen flex items-center justify-center bg-cover bg-center relative" style="background-image: url('/images/GENZ.jpg');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="max-w-3xl lg:w-[50%] w-[80%] mx-auto p-6 bg-white bg-opacity-80 backdrop-blur-lg rounded-lg shadow-lg relative z-10">
            <h2 class="text-2xl font-bold mb-4">Edit Member</h2>
            <form action="{{ route('update.member', $member->id) }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                    <input type="text" id="name" name="name" value="{{ $member->name }}" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>
                <div>
                    <label for="nickname" class="block text-gray-700 font-bold mb-2">Nickname</label>
                    <input type="text" id="nickname" name="nickname" value="{{ $member->nickname }}" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Update</button>
            </form>
        </div>
    </div>
    {{-- <script>
        document.getElementById('menu-button').addEventListener('click', function () {
            var mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
            }
        });
    </script> --}}
</body>
</html>
