<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Bus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-image: url('image/Background.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        table tbody tr:hover {
            background-color: rgba(229, 231, 235, 0.8);
            transition: background-color 0.3s ease;
        }

        .navbar-toggle-active i {
            transform: rotate(90deg);
            transition: transform 0.3s ease;
        }

        .logout-button {
            padding: 0.75rem 1rem;
            color: white;
            background: none;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .logout-button:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>

<body class="bg-gray-900 bg-opacity-75">

    <!-- Navbar (Updated Header) -->
    <nav class="bg-black bg-opacity-70 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-2xl font-bold text-white" href="home">SumaTransport</a>

            <!-- Hamburger Button -->
            <button id="menu-toggle" class="text-white text-2xl block lg:hidden">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Menu -->
            <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="navbar-menu">
                <ul class="lg:flex lg:justify-between text-base text-white pt-4 lg:pt-0 flex items-center">
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="home">Beranda</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="jadwal">Jadwal</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="rute">Rute</a></li>

                    <!-- Dropdown for Informasi Bus -->
                    <li class="relative group">
                        <a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="#">Informasi Bus
                            <i class="fas fa-chevron-down"></i>
                        </a>
                        <ul class="absolute hidden text-gray-700 pt-1 group-hover:block bg-white text-black">
                            <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="kbt">KBT</a></li>
                            <li><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="kpt">KPT</a></li>
                            <li><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="tiomaz">Tiomaz</a></li>
                            <li><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="karyaagung">Karya Agung</a></li>
                        </ul>
                    </li>

                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="qna">QnA</a></li>

                    <!-- User Authentication (Login / Register or Profile) -->
                    @if(Auth::check())
                    <li class="relative group">
                        <!-- Avatar and Name -->
                        <a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400 flex items-center" href="#">
                            <img src="{{ Auth::user()->avatar ?? asset('default-avatar.png') }}" alt="Avatar" class="rounded-full mr-2" style="width: 30px; height: 30px;">
                            <span>{{ Auth::user()->name }}</span>
                            <i class="fas fa-chevron-down ml-2"></i>
                        </a>

                        <!-- Dropdown Menu -->
                        <ul class="absolute hidden text-gray-700 pt-1 group-hover:block bg-white text-black z-20 w-48">
                            <li><a href="{{ route('profile.show') }}" class="rounded-t bg-gray-200 hover:bg-gray-400 py-1 px-4 block whitespace-no-wrap">Profil Saya</a></li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST" class="block">
                                    @csrf
                                    <button type="submit" class="bg-gray-200 hover:bg-gray-400 py-1 px-4 block w-full text-left whitespace-no-wrap">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <!-- Guest User Links -->
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="login">Login</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="register">Register</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

<!-- Hamburger Menu Overlay -->
<div id="menu-overlay" class="hidden lg:hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
    <!-- Menu Container -->
    <div class="bg-white w-3/4 p-4 rounded-lg relative">
        <ul class="space-y-2">
            <li><a href="home" class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4">Beranda</a></li>
            <li><a href="jadwal" class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4">Jadwal</a></li>
            <li><a href="rute" class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4">Rute</a></li>
            <li class="relative group">
                <a class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4" href="#">Informasi Bus <i class="fas fa-chevron-down"></i></a>
                <ul class="absolute hidden text-gray-700 pt-1 group-hover:block bg-white text-black z-10">
                    <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-1 px-4 block whitespace-no-wrap" href="kbt">KBT</a></li>
                    <li><a class="bg-gray-200 hover:bg-gray-400 py-1 px-4 block whitespace-no-wrap" href="kpt">KPT</a></li>
                    <li><a class="bg-gray-200 hover:bg-gray-400 py-1 px-4 block whitespace-no-wrap" href="tiomaz">Tiomaz</a></li>
                    <li><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-1 px-4 block whitespace-no-wrap" href="karyaagung">Karya Agung</a></li>
                </ul>
            </li>
            <li><a href="qna" class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4">QnA</a></li>
            
            <!-- Jika pengguna login -->
            @auth
            <li class="relative group">
                <button class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4 flex items-center">
                    <img src="{{ Auth::user()->avatar ?? asset('default-avatar.png') }}" alt="Avatar" class="rounded-full mr-2" style="width: 30px; height: 30px;">
                    <span>{{ Auth::user()->name }}</span> 
                    <i class="ml-1 fas fa-chevron-down"></i>
                </button>
                <!-- Dropdown Menu -->
                <ul class="absolute hidden text-gray-700 pt-1 group-hover:block bg-white text-black z-20 w-48">
                    <li><a href="{{ route('profile.show') }}" class="rounded-t bg-gray-200 hover:bg-gray-400 py-1 px-4 block whitespace-no-wrap">Profil Saya</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="block">
                            @csrf
                            <button type="submit" class="bg-gray-200 hover:bg-gray-400 py-1 px-4 block w-full text-left whitespace-no-wrap">Logout</button>
                        </form>
                    </li>
                 </ul>
                </li>
                @endauth

                <!-- Jika pengguna belum login -->
                @guest
                <li><a href="{{ route('login') }}" class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4">Login</a></li>
                <li><a href="{{ route('register') }}" class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4">Register</a></li>
                @endguest
        </ul>
       </div>
        <!-- Close Button (Di luar kotak) -->
        <button id="close-menu" class="text-white hover:text-gray-300 absolute top-24 right-12 text-2xl bg-gray-800 rounded-full p-2">
            &times;
        </button>
    </div>

<!-- Content -->
<div class="container mx-auto mt-10 p-6 bg-gray-900 bg-opacity-90 rounded-lg shadow-lg max-w-4xl">
    <h1 class="text-5xl font-bold text-center mb-8 text-white">Jadwal Bus</h1>
    <!-- Jadwal Bus -->
    <div>
        <h2 class="text-3xl font-semibold mb-4 text-gray-300">Jadwal Bus</h2>
        <table class="min-w-full bg-white rounded-lg overflow-hidden">
            <thead class="bg-gray-800">
                <tr>
                    <th class="py-2 px-4 text-white">Nama Bus</th>
                    <th class="py-2 px-4 text-white">Waktu Keberangkatan</th>
                    <th class="py-2 px-4 text-white">Rute</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach($schedules as $schedule)
                    <tr>
                        <td class="py-2 px-4">{{ $schedule->bus_name }}</td>
                        <td class="py-2 px-4">{{ $schedule->departure_time }}</td>
                        <td class="py-2 px-4">{{ $schedule->route }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    // Toggle Hamburger Menu
    document.getElementById('menu-toggle').addEventListener('click', function () {
        const menuOverlay = document.getElementById('menu-overlay');
        // Toggle kelas 'hidden' untuk menampilkan atau menyembunyikan menu
        menuOverlay.classList.toggle('hidden');
    });

    // Close Hamburger Menu (Ketika klik pada tombol close-menu)
    document.getElementById('close-menu').addEventListener('click', function () {
        const menuOverlay = document.getElementById('menu-overlay');
        // Menambahkan kelas 'hidden' untuk menyembunyikan menu
        menuOverlay.classList.add('hidden');
    });

    // Close Hamburger Menu jika klik di luar menu
    document.addEventListener('click', function (event) {
        const menuOverlay = document.getElementById('menu-overlay');
        const menuToggle = document.getElementById('menu-toggle');

        // Jika klik di luar menu dan tombol hamburger, sembunyikan menu
        if (!menuOverlay.contains(event.target) && !menuToggle.contains(event.target)) {
            menuOverlay.classList.add('hidden');
        }
    });
</script>

</body>
</html>