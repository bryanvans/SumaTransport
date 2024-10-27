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
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(34, 34, 34, 1)), 
                              url('image/Background.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        table tbody tr:hover {
            background-color: rgba(229, 231, 235, 0.8); /* Efek highlight */
            transition: background-color 0.3s ease; /* Smooth transition */
        }

        .navbar-toggle-active i {
            transform: rotate(90deg);
            transition: transform 0.3s ease;
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
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400 transition" href="home">Beranda</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400 transition" href="jadwal">Jadwal</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400 transition" href="rute">Rute</a></li>
                    <li class="relative group">
                        <a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400 transition" href="#">Informasi Bus <i class="fas fa-chevron-down"></i></a>
                        <ul class="absolute hidden text-gray-700 pt-1 group-hover:block bg-white text-black shadow-lg rounded">
                            <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block" href="kbt">KBT</a></li>
                            <li><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block" href="kpt">KPT</a></li>
                            <li><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block" href="tiomaz">Tiomaz</a></li>
                            <li><a class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block" href="karyaagung">Karya Agung</a></li>
                        </ul>
                    </li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400 transition" href="qna">QnA</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400 transition" href="login">Login</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400 transition" href="register">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mx-auto mt-10 p-6 bg-gray-900 bg-opacity-90 rounded-lg shadow-lg">
        <h1 class="text-5xl font-bold text-center mb-8 text-white">Jadwal Bus</h1>

        <!-- Tabel Jadwal -->
        <div class="space-y-8">
            <div>
                <h2 class="text-3xl font-semibold mb-4 text-gray-300">Jadwal Bus KBT</h2>
                <table class="min-w-full bg-white rounded-lg overflow-hidden">
                    <thead class="bg-gray-800">
                        <tr>
                            <th class="py-2 px-4 text-white">Kota Keberangkatan</th>
                            <th class="py-2 px-4 text-white">Kota Tujuan</th>
                            <th class="py-2 px-4 text-white">Waktu Keberangkatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-100 hover:bg-gray-300 transition">
                            <td class="py-2 px-4">Medan</td>
                            <td class="py-2 px-4">Tarutung</td>
                            <td class="py-2 px-4">08:00</td>
                        </tr>
                        <tr class="bg-gray-200 hover:bg-gray-300 transition">
                            <td class="py-2 px-4">Medan</td>
                            <td class="py-2 px-4">Balige</td>
                            <td class="py-2 px-4">09:00</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Jadwal Bus KPT -->
            <div>
                <h2 class="text-3xl font-semibold mb-4 text-gray-300">Jadwal Bus KPT</h2>
                <table class="min-w-full bg-white rounded-lg overflow-hidden">
                    <thead class="bg-gray-800">
                        <tr>
                            <th class="py-2 px-4 text-white">Kota Keberangkatan</th>
                            <th class="py-2 px-4 text-white">Kota Tujuan</th>
                            <th class="py-2 px-4 text-white">Waktu Keberangkatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-100 hover:bg-gray-300 transition">
                            <td class="py-2 px-4">Medan</td>
                            <td class="py-2 px-4">Balige</td>
                            <td class="py-2 px-4">09:00</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Jadwal Bus Tiomaz -->
            <div>
                <h2 class="text-3xl font-semibold mb-4 text-gray-300">Jadwal Bus Tiomaz</h2>
                <table class="min-w-full bg-white rounded-lg overflow-hidden">
                    <thead class="bg-gray-800">
                        <tr>
                            <th class="py-2 px-4 text-white">Kota Keberangkatan</th>
                            <th class="py-2 px-4 text-white">Kota Tujuan</th>
                            <th class="py-2 px-4 text-white">Waktu Keberangkatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-100 hover:bg-gray-300 transition">
                            <td class="py-2 px-4">Medan</td>
                            <td class="py-2 px-4">Balige</td>
                            <td class="py-2 px-4">09:00</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Jadwal Bus Karya Agung -->
            <div>
                <h2 class="text-3xl font-semibold mb-4 text-gray-300">Jadwal Bus Karya Agung</h2>
                <table class="min-w-full bg-white rounded-lg overflow-hidden">
                    <thead class="bg-gray-800">
                        <tr>
                            <th class="py-2 px-4 text-white">Kota Keberangkatan</th>
                            <th class="py-2 px-4 text-white">Kota Tujuan</th>
                            <th class="py-2 px-4 text-white">Waktu Keberangkatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-gray-100 hover:bg-gray-300 transition">
                            <td class="py-2 px-4">Medan</td>
                            <td class="py-2 px-4">Balige</td>
                            <td class="py-2 px-4">09:00</td>
                        </tr>
                        <tr class="bg-gray-200 hover:bg-gray-300 transition">
                            <td class="py-2 px-4">Medan</td>
                            <td class="py-2 px-4">Tarutung</td>
                            <td class="py-2 px-4">10:00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-black via-gray-800 to-black p-4 mt-10">
        <div class="container mx-auto text-center text-white">
            <p>&copy; 2023 SumaTransport. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.getElementById('navbar-toggle').addEventListener('click', function() {
            var menu = document.getElementById('navbar-menu');
            menu.classList.toggle('hidden');
            this.classList.toggle('navbar-toggle-active');
        });
    </script>
</body>
</html>
