<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SumaTransport - Tanya Kami</title>
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
            display: flex;
            flex-direction: column;
            justify-content: space-between;
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

        table tbody tr:hover {
            background-color: rgba(229, 231, 235, 0.8); 
            transition: background-color 0.3s ease;
        }

        /* Footer specific styles */
        footer {
            margin-top: auto; /* Push footer to the bottom */
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
                        <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-1 px-4 block" href="kbt">KBT</a></li>
                        <li><a class="bg-gray-200 hover:bg-gray-400 py-1 px-4 block" href="kpt">KPT</a></li>
                        <li><a class="bg-gray-200 hover:bg-gray-400 py-1 px-4 block" href="tiomaz">Tiomaz</a></li>
                        <li><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-1 px-4 block" href="karyaagung">Karya Agung</a></li>
                    </ul>
                </li>
                <li><a href="qna" class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4">QnA</a></li>
                <li><a href="login" class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4">Login</a></li>
                <li><a href="register" class="block text-lg text-gray-700 hover:text-red-500 py-1 px-4">Register</a></li>
            </ul>
        </div>
        <!-- Close Button -->
        <button id="close-menu" class="text-white hover:text-gray-300 absolute top-24 right-12 text-2xl bg-gray-800 rounded-full p-2">
            &times;
        </button>
    </div>

    <!-- QnA Section -->
    <div class="container mx-auto mt-16 p-6 bg-gray-900 bg-opacity-90 rounded-lg shadow-lg max-w-4xl">
        <h1 class="text-3xl font-bold text-center mb-6 text-white">Tanya Kami</h1>
        @auth
        <form action="{{ route('qna.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="question" class="block text-gray-300 text-sm font-bold mb-2">Pertanyaan</label>
                <textarea id="question" name="question" class="w-full p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan pertanyaan Anda"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Kirim Pertanyaan</button>
        </form>
        @else
        <p class="text-white text-center">Silakan <a href="login" class="text-blue-400 hover:underline">login</a> untuk mengirim pertanyaan.</p>
        @endauth
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 mt-12">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 SumaTransport. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Toggle navbar for mobile
        document.getElementById('navbar-toggle').addEventListener('click', function() {
            document.getElementById('navbar-menu').classList.toggle('hidden');
        });

        // Open and close the mobile menu overlay
        document.getElementById('navbar-toggle').addEventListener('click', function() {
            document.getElementById('menu-overlay').classList.remove('hidden');
        });

        document.getElementById('close-menu').addEventListener('click', function() {
            document.getElementById('menu-overlay').classList.add('hidden');
        });
    </script>
</body>
</html>