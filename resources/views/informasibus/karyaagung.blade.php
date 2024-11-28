<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SumaTransport - Karya Agung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background-image: url('image/Background.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="bg-gray-900 bg-opacity-75">

<!-- Navbar -->
<nav class="bg-gradient-to-r from-black via-gray-800 to-black p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="home" class="text-2xl font-bold text-white hover:text-gray-400 transition">SumaTransport</a>
        <button id="navbar-toggle" class="text-white block lg:hidden">
            <i class="fas fa-bars"></i>
        </button>
        <ul id="navbar-menu" class="hidden lg:flex lg:items-center lg:space-x-4 text-white">
            <li><a href="home" class="hover:bg-gray-700 px-4 py-2 rounded">Beranda</a></li>
            <li><a href="jadwal" class="hover:bg-gray-700 px-4 py-2 rounded">Jadwal</a></li>
            <li><a href="rute" class="hover:bg-gray-700 px-4 py-2 rounded">Rute</a></li>
            <li class="relative group">
                <a href="#" class="hover:bg-gray-700 px-4 py-2 rounded">Informasi Bus <i class="fas fa-chevron-down"></i></a>
                <ul class="absolute hidden group-hover:block bg-white text-black mt-2 rounded shadow-lg">
                    <li><a href="kbt" class="block px-4 py-2 hover:bg-gray-200">KBT</a></li>
                    <li><a href="kpt" class="block px-4 py-2 hover:bg-gray-200">KPT</a></li>
                    <li><a href="tiomaz" class="block px-4 py-2 hover:bg-gray-200">Tiomaz</a></li>
                    <li><a href="karyaagung" class="block px-4 py-2 hover:bg-gray-200">Karya Agung</a></li>
                </ul>
            </li>
            <li><a href="qna" class="hover:bg-gray-700 px-4 py-2 rounded">QnA</a></li>
            @auth
            <li class="relative group">
                <a href="#" class="flex items-center hover:bg-gray-700 px-4 py-2 rounded">
                    <img src="{{ Auth::user()->avatar ?? asset('default-avatar.png') }}" alt="Avatar" class="w-8 h-8 rounded-full mr-2">
                    {{ Auth::user()->name }} <i class="fas fa-chevron-down ml-2"></i>
                </a>
                <ul class="absolute hidden group-hover:block bg-white text-black mt-2 rounded shadow-lg">
                    <li><a href="{{ route('profile.show') }}" class="block px-4 py-2 hover:bg-gray-200">Profil Saya</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="w-full">
                            @csrf
                            <button type="submit" class="block px-4 py-2 w-full text-left hover:bg-gray-200">Logout</button>
                        </form>
                    </li>
                </ul>
            </li>
            @endauth
            @guest
            <li><a href="login" class="hover:bg-gray-700 px-4 py-2 rounded">Login</a></li>
            <li><a href="register" class="hover:bg-gray-700 px-4 py-2 rounded">Register</a></li>
            @endguest
        </ul>
    </div>
</nav>

<!-- Konten Utama -->
<div class="container mx-auto mt-6 bg-white p-6 shadow-md rounded">
    <h1 class="text-2xl font-bold mb-4">Karya Agung</h1>
    <p class="text-gray-600">JL Besar Bah Agung, No. 72, Serbelawan, Bandar Selamat, Kec. Dolok Batu Nanggar, Kabupaten Simalungun, Sumatera Utara 21155, Indonesia</p>
    <p class="mt-2 text-gray-600">Moda transportasi modern dan terpercaya. Kami beroperasi di sepanjang Jalan Lintas Sumatera.</p>
</div>

<!-- Fasilitas -->
<div class="container mx-auto mt-6 grid grid-cols-1 md:grid-cols-2 gap-4">
    <div class="bg-white p-6 shadow-md rounded">
        <h2 class="text-xl font-bold mb-4">Fasilitas Bus Karya Agung</h2>
        <ul class="space-y-4">
            <li class="flex items-center">
                <i class="fas fa-chair text-gray-600 text-2xl mr-4"></i>
                <p>Tempat duduk ergonomis yang nyaman.</p>
            </li>
            <li class="flex items-center">
                <i class="fas fa-utensils text-gray-600 text-2xl mr-4"></i>
                <p>Fasilitas terminal menyediakan layanan makanan dan minuman.</p>
            </li>
        </ul>
    </div>
</div>

        <h2 class="text-xl font-bold mb-4">Galeri</h2>
        <div class="grid grid-cols-2 gap-4">
            <div class="rounded overflow-hidden shadow-lg">
                <img src="karyaagungasset\images\slider\kaa1.jpg" alt="Foto Bus KBT 1" class="w-full h-48 object-cover">
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <img src="karyaagungasset\images\slider\kaa2.jpg" alt="Foto Bus KBT 2" class="w-full h-48 object-cover">
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <img src="karyaagungasset\images\slider\kaa3.jpg" alt="Foto Bus KBT 3" class="w-full h-48 object-cover">
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <img src="karyaagungasset\images\slider\kaa4.jpg" alt="Foto Bus KBT 3" class="w-full h-48 object-cover">
            </div>
        </div>

    </div>
</div>
<!-- JavaScript -->
<script>
    // Toggle Menu Script
    document.getElementById('navbar-toggle').addEventListener('click', () => {
        const menu = document.getElementById('navbar-menu');
        menu.classList.toggle('hidden');
    });
</script>
</body>
</html>
