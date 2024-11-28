<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma Transport - KBT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body, html {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-image: url('image/Background.jpeg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-900 bg-opacity-75">
    <!-- Navbar -->
    <header class="bg-gradient-to-r from-black via-gray-800 to-black p-4">
        <nav class="container mx-auto flex justify-between items-center">
            <a href="home" class="text-2xl font-bold text-white hover:text-gray-400">SumaTransport</a>
            <button id="menu-toggle" class="lg:hidden text-white text-2xl">
                <i class="fas fa-bars"></i>
            </button>
            <ul id="navbar-menu" class="hidden lg:flex lg:items-center text-white space-x-4">
                <li><a href="home" class="hover:text-gray-400">Beranda</a></li>
                <li><a href="jadwal" class="hover:text-gray-400">Jadwal</a></li>
                <li><a href="rute" class="hover:text-gray-400">Rute</a></li>
                <li class="relative group">
                    <a href="#" class="hover:text-gray-400">Informasi Bus <i class="fas fa-chevron-down"></i></a>
                    <ul class="absolute hidden bg-white text-gray-700 group-hover:block rounded shadow-md mt-2">
                        <li><a href="kbt" class="block px-4 py-2 hover:bg-gray-200">KBT</a></li>
                        <li><a href="kpt" class="block px-4 py-2 hover:bg-gray-200">KPT</a></li>
                        <li><a href="tiomaz" class="block px-4 py-2 hover:bg-gray-200">Tiomaz</a></li>
                        <li><a href="karyaagung" class="block px-4 py-2 hover:bg-gray-200">Karya Agung</a></li>
                    </ul>
                </li>
                <li><a href="qna" class="hover:text-gray-400">QnA</a></li>
                @auth
                <li class="relative group">
                    <a href="#" class="flex items-center hover:text-gray-400">
                        <img src="{{ Auth::user()->avatar ?? asset('default-avatar.png') }}" alt="Avatar" class="w-8 h-8 rounded-full mr-2">
                        {{ Auth::user()->name }} <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="absolute hidden bg-white text-gray-700 group-hover:block rounded shadow-md mt-2">
                        <li><a href="{{ route('profile.show') }}" class="block px-4 py-2 hover:bg-gray-200">Profil Saya</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST" class="block px-4 py-2">
                                @csrf
                                <button type="submit" class="w-full text-left hover:bg-gray-200">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @endauth
                @guest
                <li><a href="login" class="hover:text-gray-400">Login</a></li>
                <li><a href="register" class="hover:text-gray-400">Register</a></li>
                @endguest
            </ul>
        </nav>
    </header>

    <!-- Konten Utama -->
    <main class="container mx-auto mt-4">
        <div class="bg-white p-6 shadow-md">
            <h1 class="text-2xl font-bold">KBT (Koperasi Bintang Tapanuli) Tarutung</h1>
            <p class="text-gray-600 mt-2">Jl. Mayjend. D. I. Panjaitan, Hutauroran VI, Tarutung, Kabupaten Tapanuli Utara, Sumatera Utara 22411, Indonesia</p>
        </div>
        <div class="flex mt-4">
            <!-- Informasi Loket -->
            <aside class="w-1/3 bg-white p-6 shadow-md">
                <h2 class="text-xl font-bold mb-4">Informasi Loket</h2>
                <p class="text-gray-600">Buka: 06.00 – 00.00</p>
                <p class="text-gray-600">Telepon: (0633) 21090</p>
                <a href="https://wa.me/6281234567890" class="block mt-4 bg-green-500 text-white text-center py-2 rounded">Pesan via WhatsApp</a>
            </aside>
            
            <!-- Tentang KBT -->
            <section class="w-2/3 bg-white p-6 shadow-md">
                <h2 class="text-xl font-bold mb-4">Tentang</h2>
                <p class="text-gray-600">KBT melayani transportasi di Sumatera Utara.</p>
            </section>
        </div>
    </main>
</body>
</html>