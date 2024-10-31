<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanya Kami - SumaTransport</title>
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
    </style>
</head>
<body>
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
                <li><a class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition" href="qna"> QnA</a></li>
                @guest
                    <li><a class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition" href="{{ route('login') }}">Login</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition" href="{{ route('register') }}">Register</a></li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

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
                            <p>Jawaban untuk pertanyaan ini akan ditambahkan di sini.</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <footer class="bg-blue-900 text-white text-center py-4 shadow-inner">
        <p>© 2023 SumaTransport. All rights reserved.</p>
    </footer>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggles = document.querySelectorAll('.faq-toggle');
        toggles.forEach(toggle => {
            toggle.addEventListener('click', function () {
                const content = this.nextElementSibling;
                content.classList.toggle('hidden');
                const icon = this.querySelector('i');
                icon.classList.toggle('fa-plus');
                icon.classList.toggle('fa-minus');
            });
        });
    });
</script>

</body>
</html>
