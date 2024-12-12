<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SumaTransport Admin</title>
    <style>
        /* Reset default padding dan margin */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Styling untuk body */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar styling */
        .sidebar {
            width: 250px;
            background-color: #2f3b52;
            padding: 20px;
            color: white;
            height: 100vh;
        }

        .sidebar h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: block;
            color: #ccc;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #4CAF50;
        }

        /* Kontainer utama untuk konten dashboard */
        .main-content {
            flex-grow: 1;
            padding: 40px;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            margin: auto;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
        }

        .dashboard-cards {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            flex-basis: 30%;
            text-align: center;
        }

        .card h3 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 18px;
            color: #555;
        }

        /* Styling untuk tombol */
        .button {
            display: inline-block;
            padding: 12px 25px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 20px;
        }

        .button:hover {
            background-color: #45a049;
        }

        .form-footer {
            text-align: center;
            margin-top: 20px;
        }

        .form-footer a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Admin SumaTransport</h2>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.schedule.create') }}">Tambah Jadwal Bus</a>
        <a href="{{ route('admin.bus-schedule') }}">Lihat Jadwal Bus</a>
        <a href="{{ route('logout') }}">Logout</a>
    </div>

    <div class="main-content">
        <div class="container">
            <h1>Selamat datang di Dashboard Admin</h1>

            <div class="dashboard-cards">
                <div class="card">
                    <h3>Tambah Jadwal Baru</h3>
                    <p>Tambah jadwal bus baru untuk rute tertentu.</p>
                    <a href="{{ route('admin.schedule.create') }}" class="button">Tambah Jadwal</a>
                </div>

                <div class="card">
                    <h3>Lihat Jadwal Bus</h3>
                    <p>Lihat dan kelola jadwal bus yang telah ditambahkan.</p>
                    <a href="{{ route('admin.bus-schedule') }}" class="button">Lihat Jadwal</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
