<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Suma Transport - KPT</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-image: url('image/Background.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: repeat;
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

    
<div class="container mx-auto mt-4 bg-white p-6 shadow -md">
    <h1 class="text-2xl font-bold">KPT (Kevin Pratama)</h1>
    <div class="flex items-center mt-2">
        <div class="flex items-center text-blue-500">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
    </div>
    <p class="mt-2 text-gray-600">Jl. Mayjen J Samosir Aek Sipollas Hutabarat, Desa Parbaju Julu, Kecamatan Tarutung, Kabupaten Tapanuli Utara</p>
    <p class="text-gray-600">Jasa Transportasi Darat</p>
    <div class="flex mt-4">
    </div>
</div>
<div class="container mx-auto mt-4 flex">
    <div class="w-1/3 bg-white p-6 shadow-md mr-4">
        <div class="flex items-center mb-4">
            <i class="fas fa-clock text-blue-500 text-2xl mr-2"></i>
            <div>
                <p class="text-gray-600">Jam</p>
                <p class="text-green-500">Buka hingga pukul 23.00</p>
            </div>
        </div>
        <div class="flex items-center mb-4">
            <i class="fas fa-phone text-blue-500 text-2xl mr-2"></i>
            <div>
                <p class="text-gray-600">Telepon</p>
                <p class="text-blue-500">081375688880</p>
            </div>
        </div>
        <div class="mb-4">
            <p class="text-gray-600">Alamat</p>
            <p class="text-gray-600">KM 6.5 no.15, Jl. Sisingamangaraja, Harjosari I, Medan Amplas, Medan City, North Sumatra 20229, Indonesia</p>
            <p class="text-gray-600">Kota: Sumatera Utara</p>
            <p class="text-gray-600">Lingkungan: Medan Amplas</p>
            <p class="text-gray-600">Kode Pos: 2</p>
            <p class="text-gray-600">Kawasan administratif: Sumatera Utara</p>
            <p class="text-gray-600">Negara: Indonesia</p>
        </div>
        <div class="p-4">
        <div class="flex items-center">
            <i class="fas fa-clock text-gray-500 mr-2"></i>
            <span class="font-bold">Jam:</span>
            <span class="text-green-600 font-bold ml-1">Buka</span>
            <span class="ml-1">· Menutup 23.00</span>
            <i class="fas fa-chevron-up ml-2"></i>
        </div>
        <div class="mt-2">
            <div class="flex justify-between">
                <span class="font-bold">Senin</span>
                <span>04.00 – 23.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Selasa</span>
                <span>04.00 – 23.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Rabu</span>
                <span>04.00 – 23.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Kamis</span>
                <span>04.00 – 23.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Jumat</span>
                <span>04.00 – 23.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Sabtu</span>
                <span>04.00 – 23.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Minggu</span>
                <span>04.00 – 23.00</span>
            </div>
        </div>
    </div>
        <div class="container mx-auto mt-4 flex">
            <div class="w-full bg-white p-6 shadow-md">
                <h2 class="text-xl font-bold mb-4">Pemesanan Tiket</h2>
                <p class="text-gray-600 mb-4">Untuk memesan tiket, silakan hubungi kami langsung melalui WhatsApp. Klik tombol di bawah untuk melanjutkan ke WhatsApp.</p>
                <a href="https://wa.me/081375688880?text=Halo%20SumaTransport,%20saya%20ingin%20memesan%20tiket%20bus%20KBT." target="_blank" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                    <i class="fab fa-whatsapp text-2xl mr-2"></i>
                    <span>Pesan Tiket via WhatsApp</span>
                </a>
            </div>
        </div>
    </div>
    <div class="w-2/3 bg-white p-6 shadow-md">
        <h2 class="text-xl font-bold mb-4">Tentang</h2>
        <p class="text-gray-600 mb-4">Loket KPT (Kevin Pratama Trans) terletak di Sumatera Utara. Loket KPT (Kevin Pratama Trans) bekerja di aktivitas jasa transportasi darat. Anda dapat menghubungi perusahaan di 081375688880.</p>
        <p class="text-gray-600 mb-4"><strong>Kategori:</strong> Kegiatan layanan insidental terhadap transportasi darat, Transportasi darat untuk penumpang dalam perkotaan dan pinggiran kota.</p>
        <p class="text-gray-600 mb-4"><strong>Kode ISIC:</strong> 817365.</p>
        <h2 class="text-xl font-bold mb-4">Fasilitas Bus</h2>
        <div class="mb-4">
            <div class="flex items-center mb-2">
                <i class="fas fa-chair text-gray-600 text-2xl mr-2"></i>
                <div>
                    <p class="text-gray-600 font-semibold">Kenyamanan dan Keamanan</p>
                    <p class="text-gray-600">Mitsubishi L300 dgn 8 Kursi penumpang.</p>
                    <p class="text-gray-600">Isuzu ELF dgn 14 Kursi Penumpang.</p>
                </div>
            </div>
            <div class="flex items-center mb-2">
                <i class="fas fa-hand-sparkles text-gray-600 text-2xl mr-2"></i>
                <div>
                    <p class="text-gray-600 font-semibold">Kebersihan dan Kesehatan</p>
                    <p class="text-gray-600">Kebersihan bus dijaga dengan sanitasi harian.</p>
                </div>
            </div>
            <div class="flex items-center mb-2">
                <i class="fas fa-suitcase-rolling text-gray-600 text-2xl mr-2"></i>
                <div>
                    <p class="text-gray-600 font-semibold">Kapasitas Bagasi</p>
                    <p class="text-gray-600">Ruang bagasi yang cukup luas untuk membawa barang bawaan dengan aman.</p>
                </div>
            </div>
            <div class="flex items-center mb-2">
                <i class="fas fa-headset text-gray-600 text-2xl mr-2"></i>
                <div>
                    <p class="text-gray-600 font-semibold">Layanan</p>
                    <p class="text-gray-600">Pengemudi profesional dan titik layanan pelanggan tersedia di beberapa loket.</p>
                </div>
            </div>
        </div>

        <h2 class="text-xl font-bold mb-4">Galeri</h2>
        <div class="grid grid-cols-2 gap-4">
            <div class="rounded overflow-hidden shadow-lg">
                <img src="kptasset\images\slider\kpt1.jpg" alt="Foto Bus KBT 1" class="w-full h-48 object-cover">
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <img src="kptasset\images\slider\kpt2.jpg" alt="Foto Bus KBT 2" class="w-full h-48 object-cover">
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <img src="kptasset\images\slider\KPT3.jpg" alt="Foto Bus KBT 3" class="w-full h-48 object-cover">
            </div>
        </div>

    </div>
</div>
 <!-- Footer -->
 <footer class="bg-black bg-opacity-70 p-4 mt-10">
    <div class="container mx-auto text-center text-white">
        <p>&copy; 2023 SumaTransport. All rights reserved.</p>
    </div>
</footer>

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