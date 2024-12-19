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

    <div class="min-h-screen flex flex-col justify-between overflow-y-auto">
        <div class="flex-grow">
            <div class="text-white text-center py-4 shadow-lg">
                <h1 class="text-3xl font-bold">Tanya Kami</h1>
            </div>

            <div class="max-w-4xl mx-auto mt-8 p-6 bg-blue-700 rounded-lg shadow-lg">
            @auth
                <form action="{{ route('qna.store') }}" method="POST" class="mt-8">
                    @csrf <label for="question" class="text-white text-lg mb-2">Pertanyaan:</label>
                    <textarea id="question" name="question" class="w-full p-2 rounded-md mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan pertanyaan Anda"></textarea>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Kirim Pertanyaan</button>
                </form>
                @else
                <p class="text-white mt-2">Anda harus <a href="{{ route('login') }}" class="text-blue-300">login</a> untuk mengajukan pertanyaan.</p>
                @endauth
            </div>
            <div class="max-w-4xl mx-auto mt-8 p-6 bg-blue-700 rounded-lg shadow-lg">
                <h2 class="text-2xl text-white font-semibold">Pertanyaan yang Sering Ditanyakan</h2>
                <div class="mt-6">
                    @foreach($questions as $index => $question)
                    <div class="bg-gray-800 p-4 rounded-md shadow-lg mb-4">
                        <h3 class="text-lg text-white font-semibold">{{ $question->question }}</h3>
                        <p class="text-white mt-2">{{ $question->answer ? $question->answer : 'Belum ada jawaban' }}</p>
                        @auth
                        <form action="{{ route('qna.answer.store', $question->id) }}" method="POST" class="mt-4">
                            @csrf
                            <label for="answer" class="text-white text-lg font-semibold">Jawaban Anda:</label>
                            <textarea name="answer" id="answer" rows="4" class="w-full p-3 mt-2 rounded-md bg-gray-700 text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan jawaban..."></textarea>
                            <button type="submit" class="mt-4 w-full bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600 transition duration-300">Kirim Jawaban</button>
                        </form>
                        @else
                        <p class="text-white mt-2">Anda harus <a href="{{ route('login') }}" class="text-blue-300">login</a> untuk memberikan jawaban.</p>
                        @endauth
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle Navbar
        const navbarToggle = document.getElementById('navbar-toggle');
        const menuOverlay = document.getElementById('menu-overlay');
        const closeMenu = document.getElementById('close-menu');
        
        navbarToggle.addEventListener('click', function() {
            menuOverlay.classList.remove('hidden');
        });
        
        closeMenu.addEventListener('click', function() {
            menuOverlay.classList.add('hidden');
        });
    </script>
</body>
</html>