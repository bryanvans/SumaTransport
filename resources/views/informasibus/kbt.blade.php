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
        <div class="flex items-center mb-4">
            <i class="fas fa-phone text-blue-500 text-2xl mr-2"></i>
            <div>
                <p class="text-gray-600">Telepon</p>
                <p class="text-blue-500">(0633) 21090</p>
            </div>
        </div>
        <div class="mb-4">
            <p class="text-gray-600">Alamat</p>
            <p class="text-gray-600">Jl. Mayjend. D. I. Panjaitan, Hutauroran VI, Tarutung, Kabupaten Tapanuli Utara, Sumatera Utara 22411, Indonesia</p>
            <p class="text-gray-600">Kota: Sumatera Utara</p>
            <p class="text-gray-600">Lingkungan: Hutauroran VI, Tarutung</p>
            <p class="text-gray-600">Kode Pos: 22411</p>
            <p class="text-gray-600">Kawasan administratif: Sumatera Utara</p>
            <p class="text-gray-600">Negara: Indonesia</p>
        </div>
        <div class="mt-2">
            <div class="flex justify-between">
                <span class="font-bold">Senin</span>
                <span>06.00 – 00.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Selasa</span>
                <span>06.00 – 00.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Rabu</span>
                <span>06.00 – 00.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Kamis</span>
                <span>06.00 – 00.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Jumat</span>
                <span>06.00 – 00.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Sabtu</span>
                <span>06.00 – 00.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Minggu</span>
                <span>06.00 – 00.00</span>
            </div>
        </div>
        <div class="container mx-auto mt-4 flex">
            <div class="w-full bg-white p-6 shadow-md">
                <h2 class="text-xl font-bold mb-4">Pemesanan Tiket</h2>
                <p class="text-gray-600 mb-4">Untuk memesan tiket, silakan hubungi kami langsung melalui WhatsApp. Klik tombol di bawah untuk melanjutkan ke WhatsApp.</p>
                <a href="https://wa.me/6281234567890?text=Halo%20SumaTransport,%20saya%20ingin%20memesan%20tiket%20bus%20KBT." target="_blank" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                    <i class="fab fa-whatsapp text-2xl mr-2"></i>
                    <span>Pesan Tiket via WhatsApp</span>
                </a>
            </div>
        </div>
    </div>
    <div class="w-2/3 bg-white p-6 shadow-md">
        <h2 class="text-xl font-bold mb-4">Tentang</h2>
        <p class="text-gray-600 mb-4">Loket KBT (Koperasi Bintang Tapanuli) Tarutung terletak di Sumatera Utara. Loket KBT (Koperasi Bintang Tapanuli) Tarutung bekerja di aktivitas Bus dan kereta. Anda dapat menghubungi perusahaan di (0633) 21090.</p>
        <p class="text-gray-600 mb-4">Koperasi Pengankutan Umum Bintang Tapanuli (KPU-KBT) yang dipimpin oleh Jubel Silitongan bersama rekan-rekan pengurus lainnya lahir untuk memenuhi kebutuhan masyarakat k hususnya di Sumatera Utara, untuk mendukung dan membantu perkembangan ekonomi masyarakat Tapanuli Utara khususnya di bidang Transportasi Pengangkutan Umum.</p>
        <p class="text-gray-600 mb-4"><strong>Kategori:</strong> Kegiatan layanan insidental terhadap transportasi darat, Transportasi darat untuk penumpang dalam perkotaan dan pinggiran kota.</p>
        <p class="text-gray-600 mb-4"><strong>Kode ISIC:</strong> 4921, 5221.</p>
        <h2 class="text-xl font-bold mb-4">Fasilitas Bus</h2>
        <div class="mb-4">
            <div class="flex items-center mb-2">
                <i class="fas fa-chair text-gray-600 text-2xl mr-2"></i>
                <div>
                    <p class="text-gray-600 font-semibold">Kenyamanan dan Keamanan</p>
                    <p class="text-gray-600">Setiap bus dilengkapi dengan kursi ergonomis, sabuk pengaman, dan sistem suspensi berkualitas.</p>
                </div>
            </div>
            <div class="flex items-center mb-2">
                <i class="fas fa-tv text-gray-600 text-2xl mr-2"></i>
                <div>
                    <p class="text-gray-600 font-semibold">Hiburan</p>
                    <p class="text-gray-600">Fasilitas televisi dan sistem audio tersedia, beberapa unit dilengkapi Wi-Fi gratis untuk penumpang.</p>
                </div>
            </div>
            <div class="flex items-center mb-2">
                <i class="fas fa-hand-sparkles text-gray-600 text-2xl mr-2"></i>
                <div>
                    <p class="text-gray-600 font-semibold">Kebersihan dan Kesehatan</p>
                    <p class="text-gray-600">Kebersihan bus dijaga dengan sanitasi harian, serta disediakan penyanitasi tangan di beberapa titik.</p>
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
                    <p class="text-gray-600">Pengemudi profesional dan titik layanan pelanggan tersedia di beberapa terminal.</p>
                </div>
            </div>
        </div>

        <h2 class="text-xl font-bold mb-4">Galeri</h2>
        <div class="grid grid-cols-2 gap-4">
            <div class="rounded overflow-hidden shadow-lg">
                <img src="kbtasset\images\slider\kbt1.jpg" alt="Foto Bus KBT 1" class="w-full h-48 object-cover">
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <img src="kbtasset\images\slider\kbt2.jpg" alt="Foto Bus KBT 2" class="w-full h-48 object-cover">
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <img src="kbtasset\images\slider\kbt3.jpg" alt="Foto Bus KBT 3" class="w-full h-48 object-cover">
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <img src="kbtasset\images\slider\kbt4.jpg" alt="Foto Bus KBT 4" class="w-full h-48 object-cover">
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <img src="kbtasset\images\slider\kbt5.jpg" alt="Foto Bus KBT 4" class="w-full h-48 object-cover">
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <img src="kbtasset\images\slider\kbt6.jpg" alt="Foto Bus KBT 4" class=" w-full h-48 object-cover">
            </div>
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