<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SumaTransport- Tanya Kami</title>
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

        table tbody tr:hover {
            background-color: rgba(229, 231, 235, 0.8); 
            transition: background-color 0.3s ease;
        }

        .navbar-toggle-active i {
            transform: rotate(90deg);
            transition: transform 0.3s ease;
        }
    </style>
</head>
<body class="h-screen flex flex-col bg-gray-900 bg-opacity-75">
    <!-- Navbar (Updated Header) -->
    <nav class="bg-black bg-opacity-70 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-2xl font-bold text-white" href="home">SumaTransport</a>
            <!-- Hamburger Button -->
            <button id="navbar-toggle" class="text-white text-2xl block lg:hidden">
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
                        <ul class="absolute hidden text-gray-700 pt-1 group-hover:block bg-white text-black z-10">
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

<div class="min-h-screen flex flex-col justify-between">
    <div class="flex-grow">
        <div class="bg-blue-800 text-white text-center py-4 shadow-lg">
            <h1 class="text-3xl font-bold">Tanya Kami</h1>
        </div>

        <div class="max-w-4xl mx-auto mt-8 p-6 bg-blue-700 rounded-lg shadow-lg transform transition duration-500 hover:scale-105">
            @auth
                <form action="{{ route('qna.store') }}" method="POST">
                    @csrf
                    <label for="question" class="block text-white text-lg mb-2">Pertanyaan:</label>
                    <textarea id="question" name="question" class="w-full p-2 rounded-md mb-4 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Masukkan pertanyaan Anda"></textarea>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition duration-300">Kirim Pertanyaan</button>
                </form>
                @if(session('success'))
                    <div class="bg-green-500 text-white p-4 rounded-md mt-4">
                        {{ session('success') }}
                    </div>
                @endif
            @else
                <div class="text-white text-center">
                    <p>Anda harus <a href="{{ route('login') }}" class="underline text-blue-300">login</a> untuk mengajukan pertanyaan.</p>
                </div>
            @endauth
        </div>

        <div class="max-w-4xl mx-auto mt-8 p-6 bg-gray-200 rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold mb-4">Pertanyaan yang Sering Diajukan</h2>
    <ul class="space-y-4">
        @foreach($questions as $question)
            <li class="bg-white p-4 rounded-md shadow-md transform transition duration-500 hover:scale-105">
                <div class="flex items-center justify-between faq-toggle cursor-pointer">
                    <div class="flex items-center">
                        <i class="fas fa-plus mr-2 text-blue-500"></i>
                        <span>{{ $question->question }}</span>
                    </div>
                </div>
                <div class="hidden mt-2">
                    @if($question->answers->isEmpty())
                        <p>Belum ada jawaban untuk pertanyaan ini.</p>
                    @else
                        @foreach($question->answers as $answer)
                            <p class="text-gray-800 mt-1">{{ $answer->answer }}</p>
                        @endforeach
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
</div>

    </div>
 <!-- Footer -->
 <footer class="bg-black bg-opacity-70 p-4 mt-10">
    <div class="container mx-auto text-center text-white">
        <p>&copy; 2023 SumaTransport. All rights reserved.</p>
    </div>
</footer>
</div>

  <!-- JavaScript -->
  <script>
    // Toggle Hamburger Menu
    document.getElementById('navbar-toggle').addEventListener('click', function () {
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