<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma Transport - Register</title>
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
    </style>
</head>

<body>
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
                    <li><a class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition" href="login">Login</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition" href="register">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Register Form -->
    <div class="flex items-center justify-center min-h-screen">
        <div class="p-6 bg-gray-900 bg-opacity-90 rounded-lg shadow-lg max-w-md w-full">
            <h1 class="text-4xl font-bold text-center mb-6 text-white">Daftar Akun</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
                @endif
                <div class="mb-4">
                    <label for="name" class="block text-gray-300 text-sm font-bold mb-2">Nama</label>
                    <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan nama anda" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-300 text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan email anda" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-300 text-sm font-bold mb-2">Password</label>
                    <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan password anda" required>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-300 text-sm font-bold mb-2">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Konfirmasi password anda" required>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full">Register</button>
            </form>
            <div class="text-center mt-4">
                <p class="text-gray-400">Atau daftar dengan:</p>
                <a href="{{ url('auth/google') }}" class="flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full w-full mt-4 transition duration-300 ease-in-out shadow-md hover:shadow-lg">
                    <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Logo" class="w-6 h-6 mr-2">
                    Daftar dengan Google
                </a>
            </div>
            <div class="text-center mt-4">
                <p class="text-gray-400">Sudah memiliki akun? <a href="login" class="text-blue-400 hover:text-blue-600">Login sekarang</a></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-black via-gray-800 to-black p-4">
        <div class="container mx-auto text-center text-white">
            <p>&copy; 2024 SumaTransport. All rights reserved.</p>
        </div>
    </footer>

    <script>
        const navbarToggle = document.getElementById('navbar-toggle');
        const navbarMenu = document.getElementById('navbar-menu');

        navbarToggle.addEventListener('click', () => {
            navbarMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
