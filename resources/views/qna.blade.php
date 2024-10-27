<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SumaTransport - Tanya Kami</title>
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
    <nav class="bg-black bg-opacity-70 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-2xl font-bold text-white" href="home">SumaTransport</a>
            <button class="text-white block lg:hidden" id="navbar-toggle">
                <i class="fas fa-bars"></i>
            </button>
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

    <!-- Bagian Tanya Kami dengan Latar Belakang Biru Tua Gelap -->
    <div class="container mx-auto mt-10 p-6 bg-gradient-to-r from-blue-800 to-blue-900 rounded-lg shadow-lg">
        <h1 class="text-4xl font-bold text-center text-white mb-8">Tanya Kami</h1>
        
        <!-- Status login pengguna -->
        <script>
            var isLoggedIn = false; // Ganti dengan logika untuk mengecek status login
        </script>

        <!-- Formulir Tanya -->
        <form id="question-form" style="display: none;">
            <div class="mb-4">
                <label for="name" class="block text-gray-200 text-sm font-bold mb-2">Nama:</label>
                <input type="text" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-200 text-sm font-bold mb-2">Email:</label>
                <input type="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan email Anda" required>
            </div>
            <div class="mb-4">
                <label for="question" class="block text-gray-200 text-sm font-bold mb-2">Pertanyaan:</label>
                <textarea id="question" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:shadow-outline" placeholder="Masukkan pertanyaan Anda" required></textarea>
            </div>
            <button type="submit" class="bg-white hover:bg-gray-300 text-blue-600 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Kirim Pertanyaan</button>
        </form>

        <!-- Pesan untuk pengguna yang belum login -->
        <div id="login-message" style="display: none;" class="text-center text-white mt-4">
            <p>Silakan <a href="login" class="underline">login</a> untuk mengajukan pertanyaan.</p>
        </div>

        <script>
            // Tampilkan form atau pesan berdasarkan status login
            if (isLoggedIn) {
                document.getElementById('question-form').style.display = 'block';
            } else {
                document.getElementById('login-message').style.display = 'block';
            }
        </script>
    </div>

    <div class="container mx-auto mt-10 p-6 bg-white bg-opacity-90 rounded-lg">
        <h2 class="text-3xl font-bold mb-4">Pertanyaan yang Sering Diajukan</h2>
        <div class="mb-4 border-b-2 border-gray-300">
            <h5 class="text-xl font-semibold cursor-pointer py-2" onclick="toggleAnswer('faq1')">
                <i class="fas fa-plus-circle mr-2"></i> Apa saja rute yang tersedia?
            </h5>
            <p id="faq1" class="hidden text-gray-700 pl-4">Kami memiliki beberapa rute utama yang melayani berbagai kota. Silakan cek halaman Rute untuk informasi lebih lanjut.</p>
        </div>
        <div class="mb-4 border-b-2 border-gray-300">
            <h5 class="text-xl font-semibold cursor-pointer py-2" onclick="toggleAnswer('faq2')">
                <i class="fas fa-plus-circle mr-2"></i> Bagaimana cara membeli tiket?
            </h5>
            <p id="faq2" class="hidden text-gray-700 pl-4">Tiket dapat dibeli melalui website kami atau langsung di loket stasiun bus.</p>
        </div>
        <div class="mb-4 border-b-2 border-gray-300">
            <h5 class="text-xl font-semibold cursor-pointer py-2" onclick="toggleAnswer('faq3')">
                <i class="fas fa-plus-circle mr-2"></i> Apakah ada diskon untuk grup?
            </h5>
            <p id="faq3" class="hidden text-gray-700 pl-4">Ya, kami menawarkan diskon untuk pemesanan grup. Silakan hubungi customer service untuk informasi lebih lanjut.</p>
        </div>
        <div class="mb-4 border-b-2 border-gray-300">
            <h5 class="text-xl font-semibold cursor-pointer py-2" onclick="toggleAnswer('faq4')">
                <i class="fas fa-plus-circle mr-2"></i> Bagaimana jika jadwal keberangkatan saya berubah?
            </h5>
            <p id="faq4" class="hidden text-gray-700 pl-4">Jika jadwal Anda berubah, silakan hubungi kami sesegera mungkin untuk mengatur perubahan.</p>
        </div>
    </div>

    <footer class="bg-black bg-opacity-70 p-4 mt-10">
        <div class="container mx-auto text-center text-white">
            <p>&copy; 2023 SumaTransport. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.getElementById('navbar-toggle').addEventListener('click', function() {
            var menu = document.getElementById('navbar-menu');
            menu.classList.toggle('hidden');
        });

        function toggleAnswer(id) {
            var answer = document.getElementById(id);
            answer.classList.toggle('hidden');
        }
    </script>
</body>
</html>
