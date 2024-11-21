<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to bottom right, #2b5876, #4e4376), url('{{ asset('image/Background.jpeg') }}');
            background-size: cover;
            background-attachment: fixed;
            color: #ffffff;
        }

        .btn:hover {
            background-color: #2563eb;
            transform: scale(1.05);
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #2563eb;
            box-shadow: 0 0 10px rgba(37, 99, 235, 0.5);
        }

        .modal {
            transition: all 0.3s ease-in-out;
        }

        .modal.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .modal.visible {
            opacity: 1;
            pointer-events: auto;
        }

        .container {
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .avatar {
            width: 120px; 
            height: 120px; 
            object-fit: cover; 
            border-radius: 50%;
            border: 3px solid #2563eb;
        }

        h1, p {
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
        }

        footer p {
            font-size: 0.875rem;
            color: #d1d5db;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="bg-gray-800 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-bold hover:text-gray-300">SumaTransport</a>
            <ul class="flex space-x-4">
                <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="hover:underline">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Flash Messages -->
    @if(session('success'))
        <div class="container mx-auto mt-4 bg-green-500 text-white p-4 rounded shadow-lg">
            <p class="text-center">{{ session('success') }}</p>
        </div>
    @endif

    @if($errors->any())
        <div class="container mx-auto mt-4 bg-red-500 text-white p-4 rounded shadow-lg">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Profil Container -->
    <main class="container mx-auto mt-10 p-6 rounded-lg shadow-2xl max-w-2xl">
        <div class="text-center">
            <!-- Avatar -->
            <img src="{{ Auth::user()->avatar ? asset('storage/' . Auth::user()->avatar) : asset('homepage/img/default-avatar.png') }}"
                class="avatar mx-auto" alt="Foto Profil">

            <h1 class="text-3xl font-bold mt-4">{{ Auth::user()->name }}</h1>
            <p class="text-gray-400">Email: {{ Auth::user()->email }}</p>
            <p class="text-gray-400">Bergabung sejak: {{ Auth::user()->created_at->format('d M Y') }}</p>

            <div class="mt-6 space-x-4">
                <!-- Edit Profil Button -->
                <button class="btn px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded"
                    onclick="toggleModal('editProfileModal')">
                    Edit Profil
                </button>
                <!-- Ubah Kata Sandi Button -->
                <button class="btn px-6 py-2 bg-gray-500 hover:bg-gray-600 text-white font-semibold rounded"
                    onclick="toggleModal('changePasswordModal')">
                    Ubah Kata Sandi
                </button>
            </div>
        </div>
    </main>

    <!-- Modal Edit Profil -->
    <div class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" id="editProfileModal">
        <div class="bg-gray-800 text-white rounded-lg shadow-xl w-full max-w-md">
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="px-6 py-4 border-b border-gray-700 flex justify-between items-center">
                    <h5 class="text-xl font-semibold">Edit Profil</h5>
                    <button type="button" class="text-gray-400 hover:text-gray-300" onclick="toggleModal('editProfileModal')">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="p-6">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium mb-2">Nama</label>
                        <input type="text" id="name" name="name" class="bg-gray-700 text-white p-3 rounded w-full"
                            value="{{ Auth::user()->name }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="avatar" class="block text-sm font-medium mb-2">Foto Profil</label>
                        <input type="file" id="avatar" name="avatar" class="bg-gray-700 text-white p-3 rounded w-full">
                    </div>
                </div>
                <div class="flex justify-end p-4 border-t border-gray-700">
                    <button type="button" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded mr-2"
                        onclick="toggleModal('editProfileModal')">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Ubah Kata Sandi -->
    <div id="changePasswordModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-gray-800 text-white rounded-lg shadow-xl w-full max-w-md">
            <!-- Form Ubah Kata Sandi -->
            <form action="{{ route('password.update') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="current_password" class="block text-sm font-medium mb-2">Kata Sandi Lama</label>
                    <input type="password" id="current_password" name="current_password"
                        class="bg-gray-700 text-white p-3 rounded w-full" required>
                </div>
                <div class="mb-4">
                    <label for="new_password" class="block text-sm font-medium mb-2">Kata Sandi Baru</label>
                    <input type="password" id="new_password" name="new_password" class="bg-gray-700 text-white p-3 rounded w-full" required>
                </div>
                <div class="mb-4">
                    <label for="new_password_confirmation" class="block text-sm font-medium mb-2">Konfirmasi Kata Sandi Baru</label>
                    <input type="password" id="new_password_confirmation" name="new_password_confirmation"
                        class="bg-gray-700 text-white p-3 rounded w-full" required>
                </div>
                <div class="flex justify-end p-4 border-t border-gray-700">
                    <button type="button" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded mr-2"
                        onclick="toggleModal('changePasswordModal')">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script -->
    <script>
        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
        }
    </script>
</body>

<script>
    setTimeout(() => {
        const alerts = document.querySelectorAll('.container .bg-green-500, .container .bg-red-500');
        alerts.forEach(alert => alert.remove());
    }, 5000); 
</script>

</html>
