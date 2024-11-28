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
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), rgba(34, 34, 34, 1)), 
                              url('{{ asset('image/Background.jpeg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
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
<body class="bg-gray-900 bg-opacity-75">

    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-black via-gray-800 to-black p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-2xl font-bold text-white hover:text-gray-400 transition" href="{{ route('home') }}">SumaTransport</a>
            <button class="text-white block lg:hidden" id="navbar-toggle">
                <i class="fas fa-bars"></i>
            </button>
            <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="navbar-menu">
                <ul class="lg:flex lg:justify-between text-base text-white pt-4 lg:pt-0">
                    <li><a class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition" href="{{ route('home') }}">Beranda</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition" href="{{ route('jadwal') }}">Jadwal</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition" href="{{ route('rute') }}">Rute</a></li>
                    <li><a class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition" href="{{ route('qna') }}">QnA</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="lg:p-4 py-3 px-0 block hover:bg-gray-700 transition logout-button">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Profil -->
    <div class="container mx-auto mt-16 p-4 bg-gray-900 bg-opacity-90 rounded-lg shadow-lg max-w-md">
        <h1 class="text-4xl font-bold text-center mb-6 text-white">Profil Saya</h1>
        <div class="text-center">
            <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('homepage/img/default-avatar.png') }}"
                class="w-24 h-24 rounded-full mx-auto border-2 border-blue-600" alt="Foto Profil">
            <h2 class="text-2xl font-semibold mt-4 text-white">{{ Auth::user()->name }}</h2>
            <p class="text-sm text-gray-300">Email: {{ Auth::user()->email }}</p>
            <p class="text-sm text-gray-300">Bergabung sejak: {{ Auth::user()->created_at->format('d M Y') }}</p>
        </div>
        <div class="mt-6 space-y-4">
            <button onclick="toggleModal('editProfileModal')"
                class="w-full py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Edit Profil</button>
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
                    <input type="text" id="name" name="name" class="w-full p-2 border rounded"
                        value="{{ Auth::user()->name }}" required>
                </div>
                <div class="mb-4">
                    <label for="avatar" class="block text-sm font-medium">Foto Profil</label>
                    <input type="file" id="avatar" name="avatar" class="w-full p-2 border rounded">
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" class="px-4 py-2 bg-gray-500 text-white rounded"
                        onclick="toggleModal('editProfileModal')">Batal</button>
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
        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
        }

        const navbarToggle = document.getElementById('navbar-toggle');
        const navbarMenu = document.getElementById('navbar-menu');

        navbarToggle.addEventListener('click', () => {
            navbarMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>