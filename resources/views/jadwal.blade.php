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
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(34, 34, 34, 1)), 
                              url('image/Background.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
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
    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-black via-gray-800 to-black p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-2xl font-bold text-white hover:text-gray-400 transition" href="home">SumaTransport</a>
            <button class="text-white block lg:hidden" id="navbar-toggle">
                <i class="fas fa-bars"></i>
            </button>
            <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="navbar-menu">
                <ul class="lg:flex lg:justify-between text-base text-white pt-4 lg:pt-0">
                    <li><a class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition" href="home">Beranda</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition" href="jadwal">Jadwal</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition" href="rute">Rute</a></li>
                    <li class="relative group">
                        <a class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition" href="#">Informasi Bus <i class="fas fa-chevron-down"></i></a>
                        <ul class="absolute hidden text-gray-700 pt-1 group-hover:block bg-white text-black shadow-lg rounded">
                            <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block" href="kbt">KBT</a></li>
                            <li><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block" href="kpt">KPT</a></li>
                            <li><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block" href="tiomaz">Tiomaz</a></li>
                            <li><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block" href="karyaagung">Karya Agung</a></li>
                        </ul>
                    </li>
                    <li><a class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition" href="qna">QnA</a></li>
                    @auth
                        <li class="relative group">
                            <a class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition flex items-center" href="#">
                                <img src="{{ Auth::user()->avatar ?? asset('default-avatar.png') }}" alt="Avatar" class="rounded-full w-8 h-8 mr-2">
                                {{ Auth::user()->name }} <i class="fas fa-chevron-down ml-2"></i>
                            </a>
                            <ul class="absolute hidden text-gray-700 pt-1 group-hover:block bg-white text-black shadow-lg rounded">
                                <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block" href="{{ route('profile.show') }}">Profil Saya</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block text-left w-full">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth
                    @guest
                        <li><a class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition" href="login">Login</a></li>
                        <li><a class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition" href="register">Register</a></li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hamburger Menu Overlay -->
    <div id="menu-overlay" class="hidden lg:hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
        <div class="bg-white w-3/4 p-4 rounded-lg relative">
            <ul class="space-y-2">
                <li><a href="home" class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4">Beranda</a></li>
                <li><a href="jadwal" class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4">Jadwal</a></li>
                <li><a href="rute" class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4">Rute</a></li>
                <li class="relative group">
                    <a class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4" href="#">Informasi Bus <i class="fas fa-chevron-down"></i></a>
                    <ul class="absolute hidden text-gray-700 pt-1 group-hover:block bg-white text-black">
                        <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-1 px-4 block whitespace-no-wrap" href="kbt">KBT</a></li>
                        <li><a class="bg-gray-200 hover:bg-gray-400 py-1 px-4 block whitespace-no-wrap" href="kpt">KPT</a></li>
                        <li><a class="bg-gray-200 hover:bg-gray-400 py-1 px-4 block whitespace-no-wrap" href="tiomaz">Tiomaz</a></li>
                        <li><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-1 px-4 block whitespace-no-wrap" href="karyaagung">Karya Agung</a></li>
                    </ul>
                </li>
                <li><a href="qna" class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4">QnA</a></li>
                <li><a href="login" class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4">Login</a></li>
                <li><a href="register" class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4">Register</a></li>
            </ul>
        </div>  
        <button id="close-menu" class="text-white hover:text-gray-300 absolute top-24 right-12 text-2xl bg-gray-800 rounded-full p-2">
            &times;
        </button>
    </div>

    <!-- Content -->
    <div class="container mx-auto mt-10 p-6 bg-gray-900 bg-opacity-90 rounded-lg shadow-lg">
        <h1 class="text-5xl font-bold text-center mb-8 text-white">Jadwal Bus</h1>

        <!-- Jadwal Bus (Example for one route) -->
        <div>
            <h2 class="text-3xl font-semibold mb-4 text-gray-300">Jadwal Bus KBT</h2>
            <table class="min-w-full bg-white rounded-lg overflow-hidden">
                <thead class="bg-gray-800">
                    <tr>
                        <th class="py-2 px-4 text-white">Kota Keberangkatan</th>
                        <th class="py-2 px-4 text-white">Tujuan</th>
                        <th class="py-2 px-4 text-white">Waktu Keberangkatan</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr>
                        <td class="py-2 px-4">Medan</td>
                        <td class="py-2 px-4">Tarutung</td>
                        <td class="py-2 px-4">10:00</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4">Medan</td>
                        <td class="py-2 px-4">Toba</td>
                        <td class="py-2 px-4">14:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const navbarToggle = document.getElementById('navbar-toggle');
        const navbarMenu = document.getElementById('navbar-menu');
        const menuOverlay = document.getElementById('menu-overlay');
        const closeMenu = document.getElementById('close-menu');

        navbarToggle.addEventListener('click', () => {
            navbarMenu.classList.toggle('hidden');
            menuOverlay.classList.toggle('hidden');
        });

        closeMenu.addEventListener('click', () => {
            navbarMenu.classList.add('hidden');
            menuOverlay.classList.add('hidden');
        });
    </script>
</body>
</html>