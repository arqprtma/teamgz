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
                <a href="{{route('logout')}}" class="block lg:inline-block">Logout</a>
                {{-- <a href="{{route('register')}}" class="block lg:inline-block">Register</a> --}}
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="lg:hidden hidden px-6 py-4 bg-purple-800 text-white">
            <a href="{{route('logout')}}" class="block py-2">Logout</a>
            {{-- <a href="{{route('register')}}" class="block py-2">Register</a> --}}
        </div>
    </div>

    <div class="hero h-screen bg-cover bg-center">
        <div class="max-w-3xl mx-auto p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Tambah Member</h2>
            <form action="{{route('member-proses')}}" method="POST" class="space-y-4">
                @csrf
                {{-- <input type="hidden" id="judul" name="id_user" value="1"> --}}
                <div>
                    <label for="name" class="block text-gray-700 font-bold mb-2">Nama</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>
                <div>
                    <label for="nickname" class="block text-gray-700 font-bold mb-2">Nickname</label>
                    <input type="text" id="nickname" name="nickname" class="w-full p-2 border border-gray-300 rounded-lg">
                </div>
                {{-- <input type="hidden" id="status" name="status" value="belum"> --}}
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
            </form>
        </div>
    
        <div class="max-w-3xl mx-auto mt-8  p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Data Member</h2>
            <table class="min-w-full text-center">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">No</th>
                        <th class="py-2 px-4 border-b">Nama</th>
                        <th class="py-2 px-4 border-b">Nickname</th>
                       
                        <th class="py-2 px-4 border-b">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($members as $m)
                   <tr>
                        <td class="py-2 px-4 border-b">{{$loop->iteration}}</td>
                        <td class="py-2 px-4 border-b">{{$m->name}}</td>
                        <td class="py-2 px-4 border-b">{{$m->nickname}}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('edit.member', $m->id) }}" class="bg-green-500 text-white text-sm px-4 py-2 rounded-lg hover:bg-green-600">Edit</a>
                            <a href="{{ route('delete.member', $m->id) }}" class="bg-red-500 text-white text-sm px-4 py-2 rounded-lg hover:bg-red-600">Delete</a>

                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
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
