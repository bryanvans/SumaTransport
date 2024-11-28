<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>SumaTransport - Karya Agung</title>
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

<div class="container mx-auto mt-4 bg-white p-6 shadow -md">
    <h1 class="text-2xl font-bold">Karya Agung</h1>
    <div class="flex items-center mt-2">
        <div class="flex items-center text-blue-500">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
    </div>
    <p class="mt-2 text-gray-600">JL Besar Bah Agung, No. 72, Serbelawan, Bandar Selamat, Kec. Dolok Batu Nanggar, Kabupaten Simalungun, Sumatera Utara 21155, Indonesia</p>
    <p class="text-gray-600">Bus</p>
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
                <p class="text-blue-500">081265052505</p>
            </div>
        </div>
        <div class="mb-4">
            <p class="text-gray-600">Alamat</p>
            <p class="text-gray-600">JJL Besar Bah Agung, No. 72, Serbelawan, Bandar Selamat, Kec. Dolok Batu Nanggar, Kabupaten Simalungun, Sumatera Utara 21155, Indonesi</p>
            <p class="text-gray-600">Kota: Sumatera Utara</p>
            <p class="text-gray-600">Lingkungan: Bandar Selamat</p>
            <p class="text-gray-600">Kawasan administratif: Sumatera Utara</p>
            <p class="text-gray-600">Negara: Indonesia</p>
        </div>
        <div class="p-4">
        <div class="flex items-center">
            <i class="fas fa-clock text-gray-500 mr-2"></i>
            <span class="font-bold">Jam:</span>
            <span class="ml-1">· Buka 06.00</span>
            <span class="ml-1">· Menutup 23.00</span>
            <i class="fas fa-chevron-up ml-2"></i>
        </div>
        <div class="mt-2">
            <div class="flex justify-between">
                <span class="font-bold">Senin</span>
                <span>06.00 - 23.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Selasa</span>
                <span>06.00 - 23.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Rabu</span>
                <span>06.00 - 23.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Kamis</span>
                <span>06.00 - 23.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Jumat</span>
                <span>06.00 - 23.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Sabtu</span>
                <span>06.00 - 23.00</span>
            </div>
            <div class="flex justify-between">
                <span class="font-bold">Minggu</span>
                <span>06.00 - 23.00</span>
            </div>
        </div>
    </div>
        <div class="container mx-auto mt-4 flex">
            <div class="w-full bg-white p-6 shadow-md">
                <h2 class="text-xl font-bold mb-4">Pemesanan Tiket</h2>
                <p class="text-gray-600 mb-4">Untuk memesan tiket, silakan hubungi kami langsung melalui WhatsApp. Klik tombol di bawah untuk melanjutkan ke WhatsApp.</p>
                <a href="https://wa.me/081265052505?text=Halo%20SumaTransport,%20saya%20ingin%20memesan%20tiket%20bus%20KBT." target="_blank" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                    <i class="fab fa-whatsapp text-2xl mr-2"></i>
                    <span>Pesan Tiket via WhatsApp</span>
                </a>
            </div>
        </div>
    </div>
    <div class="w-2/3 bg-white p-6 shadow-md">
        <h2 class="text-xl font-bold mb-4">Tentang</h2>
        <p class="text-gray-600 mb-4">Moda transportasi modern dan terpercaya. Kami beroperasi di sepanjang Jalan Lintas Sumatera , Dimulai dari Kota Medan Hingga Ujung Sibolga. Sebagai transportasi terbaik di Sumatera Utara, Kami berusaha mengutamakan Keselamatan dan Kualitas Pelayanan.</p>
        <p class="text-gray-600 mb-4">Percayakan perjalanan anda bersama kami, dan temukan pengalaman bepergian dengan Nyaman dan Aman.</p>
        <h2 class="text-xl font-bold mb-4">
    Fasilitas Bus Karya Agung
</h2>
<div class="mb-4">
    <div class="flex items-center mb-2">
        <i class="fas fa-chair text-gray-600 text-2xl mr-2"></i>
        <div>
            <p class="text-gray-600 font-semibold">Tempat Duduk Nyaman</p>
            <p class="text-gray-600">Dilengkapi dengan tempat duduk yang ergonomis dan nyaman untuk penumpang.</p>
        </div>
    </div>
    <div class="flex items-center mb-2">
        <i class="fas fa-users text-gray-600 text-2xl mr-2"></i>
        <div>
            <p class="text-gray-600 font-semibold">Kapasitas Penumpang Besar</p>
            <p class="text-gray-600">Bus ini menyediakan banyak kursi untuk mengakomodasi lebih banyak penumpang.</p>
        </div>
    </div>
    <div class="flex items-center mb-2">
        <i class="fas fa-utensils text-gray-600 text-2xl mr-2"></i>
        <div>
            <p class="text-gray-600 font-semibold">Fasilitas di Terminal</p>
            <p class="text-gray-600">Setiap terminal pemberhentian sementara menyediakan layanan makanan dan minuman bagi penumpang.</p>
        </div>
    </div>
    <div class="flex items-center mb-2">
        <i class="fas fa-restroom text-gray-600 text-2xl mr-2"></i>
        <div>
            <p class="text-gray-600 font-semibold">Toilet di Terminal</p>
            <p class="text-gray-600">Tersedia fasilitas toilet yang bersih di setiap terminal untuk kenyamanan penumpang.</p>
        </div>
    </div>
</div>

        <h2 class="text-xl font-bold mb-4">Galeri</h2>
        <div class="grid grid-cols-2 gap-4">
            <div class="rounded overflow-hidden shadow-lg">
                <img src="karyaagungasset\images\slider\kaa1.jpg" alt="Foto Bus KBT 1" class="w-full h-48 object-cover">
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <img src="karyaagungasset\images\slider\kaa2.jpg" alt="Foto Bus KBT 2" class="w-full h-48 object-cover">
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <img src="karyaagungasset\images\slider\kaa3.jpg" alt="Foto Bus KBT 3" class="w-full h-48 object-cover">
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <img src="karyaagungasset\images\slider\kaa4.jpg" alt="Foto Bus KBT 3" class="w-full h-48 object-cover">
            </div>
        </div>

    </div>
</div>
</body>
</html>