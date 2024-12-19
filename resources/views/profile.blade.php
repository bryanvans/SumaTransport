<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya - SumaTransport</title>
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

        .profile-section, .password-section {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .modal {
            background-color: rgba(0, 0, 0, 0.7);
        }
    </style>
</head>
<body class="bg-gray-900 bg-opacity-75">

<!-- Navbar -->
<nav class="bg-black bg-opacity-70 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a class="text-2xl font-bold text-white" href="home">SumaTransport</a>
        <!-- Hamburger Button -->
        <button id="navbar-toggle" class="text-white text-2xl block lg:hidden">
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
                <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="qna">QnA</a>
                </li>
                @if(Auth::check())
                <li class="relative group">
                    <a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="#">
                        {{ Auth::user()->name }} <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="absolute hidden text-gray-700 pt-1 group-hover:block bg-white text-black">
                        <li><a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="profile">Profil Saya</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST" class="py-2 px-4">
                                @csrf
                                <button type="submit" class="w-full text-left bg-gray-200 hover:bg-gray-400">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="login">Login</a></li>
                <li><a class="lg:p-4 py-3 px-0 block border-b-2 border-transparent hover:border-gray-400" href="register">Register</a></li>
                @endif
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

    <!-- Profil -->
    <div class="container mx-auto mt-16 p-4 bg-gray-900 bg-opacity-90 rounded-lg shadow-lg max-w-md">
        <h1 class="text-4xl font-bold text-center mb-6 text-white">Profil Saya</h1>
        
        <!-- Profil Section -->
        <div class="profile-section mb-4">
            <div class="text-center">
                <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('homepage/img/default-avatar.png') }}"
                    class="w-24 h-24 rounded-full mx-auto border-2 border-blue-600" alt="Foto Profil">
                <h2 class="text-2xl font-semibold mt-4 text-white">{{ Auth::user()->name }}</h2>
                <p class="text-sm text-gray-300">Email: {{ Auth::user()->email }}</p>
                <p class="text-sm text-gray-300">Bergabung sejak: {{ Auth::user()->created_at->format('d M Y') }}</p>
            </div>
            <button onclick="toggleModal('editProfileModal')"
                class="w-full py-2 bg-blue-500 text-white rounded mt-4 hover:bg-blue-600">Edit Profil</button>
        </div>

        <!-- Password Section -->
        <div class="password-section">
            <button onclick="toggleModal('changePasswordModal')"
                class="w-full py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Ubah Kata Sandi</button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-black via-gray-800 to-black p-4 mt-auto">
        <div class="container mx-auto text-center text-white">
            <p>&copy; 2024 SumaTransport. All rights reserved.</p>
        </div>
    </footer>

    <!-- Modal Edit Profil -->
    <div id="editProfileModal" class="modal hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded shadow-lg max-w-sm w-full p-6">
            <h3 class="text-lg font-semibold mb-4">Edit Profil</h3>
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label for="name" class="block text-sm font-medium">Nama</label>
        <input type="text" id="name" name="name" class="w-full p-2 border rounded" value="{{ Auth::user()->name }}" required>
    </div>

    <div class="mb-4">
        <label for="avatar" class="block text-sm font-medium">Foto Profil</label>
        <input type="file" id="avatar" name="avatar" class="w-full p-2 border rounded">
    </div>

    <div class="flex justify-end space-x-2">
        <button type="button" class="px-4 py-2 bg-gray-500 text-white rounded" onclick="toggleModal('editProfileModal')">Batal</button>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Simpan</button>
    </div>
</form>

        </div>
    </div>

    <!-- Modal Ubah Kata Sandi -->
    <div id="changePasswordModal" class="modal hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
        <div class="bg-white rounded shadow-lg max-w-sm w-full p-6">
            <h3 class="text-lg font-semibold mb-4">Ubah Kata Sandi</h3>
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="current_password" class="block text-sm font-medium">Kata Sandi Lama</label>
                    <input type="password" id="current_password" name="current_password" class="w-full p-2 border rounded"
                        required>
                </div>
                <div class="mb-4">
                    <label for="new_password" class="block text-sm font-medium">Kata Sandi Baru</label>
                    <input type="password" id="new_password" name="new_password" class="w-full p-2 border rounded"
                        required>
                </div>
                <div class="mb-4">
                    <label for="new_password_confirmation" class="block text-sm font-medium">Konfirmasi Kata Sandi Baru</label>
                    <input type="password" id="new_password_confirmation" name="new_password_confirmation"
                        class="w-full p-2 border rounded" required>
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" class="px-4 py-2 bg-gray-500 text-white rounded"
                        onclick="toggleModal('changePasswordModal')">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Simpan</button>
                </div>
            </form>
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
