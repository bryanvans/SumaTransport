<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma Transport - Login</title>
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
            overflow: hidden;
        }
    </style>
</head>
<body class="h-screen flex flex-col bg-gray-900 bg-opacity-75">
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
                <ul class="lg:flex lg:justify-between text-base text-white pt-4 lg:pt-0">
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="home">Beranda</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="jadwal">Jadwal</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="rute">Rute</a></li>
                    <li class="relative group">
                        <a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="#">Informasi Bus <i class="fas fa-chevron-down"></i></a>
                        <ul class="absolute hidden text-gray-700 pt-1 group-hover:block bg-white text-black">
                            <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="kbt">KBT</a></li>
                            <li><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="kpt">KPT</a></li>
                            <li><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="tiomaz">Tiomaz</a></li>
                            <li><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="karyaagung">Karya Agung</a></li>
                        </ul>
                    </li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="qna">QnA</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="login">Login</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="register">Register</a></li>
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
       <!-- Close Button (Di luar kotak) -->
       <button id="close-menu" class="text-white hover:text-gray-300 absolute top-24 right-12 text-2xl bg-gray-800 rounded-full p-2">
        &times;
    </button>
</div>

    <!-- Form Login (tetap tampil untuk layar besar) -->
<div class="flex items-start justify-center min-h-screen px-4 pt-8"> <!-- Menambahkan padding-top -->
    <div class="container mx-auto mt-16 p-4 bg-gray-900 bg-opacity-90 rounded-lg shadow-lg max-w-md w-full lg:w-2/3 xl:w-1/2">
        <h1 class="text-4xl font-bold text-center mb-6 text-white">Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @endif
            <div class="mb-4">
                <label for="email" class="block text-gray-300 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 ease-in-out transform hover:scale-105" placeholder="Masukkan Email Anda" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-300 text-sm font-bold mb-2">Password</label>
                <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 ease-in-out transform hover:scale-105" placeholder="Masukkan Password Anda" required>
            </div>
            <div class="flex items-center justify-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 transform hover:scale-105 transition-all duration-300 ease-in-out w-full">Login</button>
            </div>                           
            <!-- Tombol Login dengan Google -->
            <a href="/auth/google" class="flex items-center justify-center bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full w-full mt-4 transition-all duration-300 ease-in-out shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transform hover:scale-105">
                <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Logo" class="w-6 h-6 mr-2">
                Login dengan Google
            </a>
        </form>
        <!-- Tambahan: Belum punya akun -->
        <div class="text-center mt-6">
            <p class="text-gray-400">Belum punya akun? 
                <a href="register" class="text-blue-400 hover:text-blue-600 transition font-semibold">Daftar sekarang</a>
            </p>
        </div>
    </div>
</div>

    <!-- JavaScript -->
    <script>
        // Toggle Hamburger Menu
        document.getElementById('menu-toggle').addEventListener('click', function () {
            const menuOverlay = document.getElementById('menu-overlay');
            menuOverlay.classList.toggle('hidden');
        });

        // Close Hamburger Menu
        document.getElementById('close-menu').addEventListener('click', function () {
            const menuOverlay = document.getElementById('menu-overlay');
            menuOverlay.classList.add('hidden');
        });
    </script>
</body>
</html>