<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SumaTransport - Rute</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-image: url('image/Background.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: 'Roboto', sans-serif;
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

    
<div class="container mx-auto mt-8 mb-8">
    <div class="bg-white bg-opacity-80 p-6 rounded-lg shadow-lg max-w-3xl mx-auto">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Daftar Rute SumaTransport</h1>
    <div class="grid grid-cols-2 gap-8">
        
        <!-- Kolom kiri -->
        <div class="space-y-4">
            <div class="flex items-center">
                <span class="bg-red-500 text-white font-bold px-4 py-2 rounded-full">MS</span>
                <span class="ml-4 text-gray-800 cursor-pointer hover:text-red-500" onclick="showImage('image/M-S.png')">Medan - Siantar</span>
            </div>
            <div class="flex items-center">
                <span class="bg-yellow-500 text-white font-bold px-4 py-2 rounded-full">MPR</span>
                <span class="ml-4 text-gray-800 cursor-pointer hover:text-red-500" onclick="showImage('image/M-PR.png')">Medan - Parapat</span>
            </div>
            <div class="flex items-center">
                <span class="bg-purple-700 text-white font-bold px-4 py-2 rounded-full">MP</span>
                <span class="ml-4 text-gray-800 cursor-pointer hover:text-red-500" onclick="showImage('image/M-P.png')">Medan - Porsea</span>
            </div>
            <div class="flex items-center">
                <span class="bg-teal-400 text-white font-bold px-4 py-2 rounded-full">ML</span>
                <span class="ml-4 text-gray-800 cursor-pointer hover:text-red-500" onclick="showImage('image/M-L.png')">Medan - Laguboti</span>
            </div>
            <div class="flex items-center">
                <span class="bg-green-500 text-white font-bold px-4 py-2 rounded-full">MB</span>
                <span class="ml-4 text-gray-800 cursor-pointer hover:text-red-500" onclick="showImage('image/M-B.png')">Medan - Balige</span>
            </div>
            <div class="flex items-center">
                <span class="bg-red-600 text-white font-bold px-4 py-2 rounded-full">MSB</span>
                <span class="ml-4 text-gray-800 cursor-pointer hover:text-red-500" onclick="showImage('image/M-SB.png')">Medan - Siborongborong</span>
            </div>
            <div class="flex items-center">
                <span class="bg-gray-500 text-white font-bold px-4 py-2 rounded-full">MT</span>
                <span class="ml-4 text-gray-800 cursor-pointer hover:text-red-500" onclick="showImage('image/M-T.png')">Medan - Tarutung</span>
            </div>
        </div>

        <!-- Kolom kanan -->
        <div class="space-y-4">
            <div class="flex items-center">
                <span class="bg-blue-800 text-white font-bold px-4 py-2 rounded-full">TM</span>
                <span class="ml-4 text-gray-800 cursor-pointer hover:text-red-500" onclick="showImage('image/M-S.png')">Tarutung - Medan</span>
            </div>
            <div class="flex items-center">
                <span class="bg-yellow-600 text-white font-bold px-4 py-2 rounded-full">SBM</span>
                <span class="ml-4 text-gray-800 cursor-pointer hover:text-red-500" onclick="showImage('image/M-S.png')">Siborongborong - Medan</span>
            </div>
            <div class="flex items-center">
                <span class="bg-pink-500 text-white font-bold px-4 py-2 rounded-full">BM</span>
                <span class="ml-4 text-gray-800 cursor-pointer hover:text-red-500" onclick="showImage('image/M-S.png')">Balige - Medan</span>
            </div>
            <div class="flex items-center">
                <span class="bg-orange-600 text-white font-bold px-4 py-2 rounded-full">LM</span>
                <span class="ml-4 text-gray-800 cursor-pointer hover:text-red-500" onclick="showImage('image/M-S.png')">Laguboti - Medan</span>
            </div>
            <div class="flex items-center">
                <span class="bg-green-700 text-white font-bold px-4 py-2 rounded-full">PM</span>
                <span class="ml-4 text-gray-800 cursor-pointer hover:text-red-500" onclick="showImage('image/M-S.png')">Porsea - Medan</span>
            </div>
            <div class="flex items-center">
                <span class="bg-green-600 text-white font-bold px-4 py-2 rounded-full">PRM</span>
                <span class="ml-4 text-gray-800 cursor-pointer hover:text-red-500" onclick="showImage('image/PR-M.png')">Parapat - Medan</span>
            </div>
            <div class="flex items-center">
                <span class="bg-purple-700 text-white font-bold px-4 py-2 rounded-full">SM</span>
                <span class="ml-4 text-gray-800 cursor-pointer hover:text-red-500" onclick="showImage('image/M-S.png')">Siantar - Medan</span>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- Modal untuk menampilkan gambar -->
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
    <div class="bg-white p-4 rounded-lg max-w-lg w-full flex flex-col relative">
        <span class="close cursor-pointer text-gray-500 text-xl absolute top-2 right-2" onclick="closeModal()">&times;</span>
        <div class="flex justify-center">
            <img id="modalImage" src="" alt="Rute Image" class="w-full h-auto max-w-sm">
        </div>
    </div>
</div>

<!-- Script untuk menampilkan dan menutup modal -->
<script>
function showImage(imageSrc) {
    document.getElementById('modalImage').src = imageSrc;
    document.getElementById('imageModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('imageModal').classList.add('hidden');
}
</script>


    <footer class="bg-black bg-opacity-70 p-4 mt-10">
        <div class="container mx-auto text-center text-white">
            <p>&copy; 2023 SumaTransport. All rights reserved.</p>
        </div>
    </footer>

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
