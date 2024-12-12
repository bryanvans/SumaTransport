<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jadwal Bus</title>
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

        /* Kontainer utama untuk form */
        .main-content {
            flex-grow: 1;
            padding: 40px;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 28px;
        }

        /* Styling untuk label dan input */
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"],
        input[type="time"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f9f9f9;
        }

        input[type="text"]:focus,
        input[type="time"]:focus {
            border-color: #4CAF50;
            outline: none;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            padding: 15px;
        }

        button:hover {
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
        <h2>Admin Dashboard</h2>
        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.schedule.create') }}">Tambah Jadwal Bus</a>
        <a href="{{ route('logout') }}">Logout</a>
    </div>

    <div class="main-content">
        <div class="container">
            <h1>Tambah Jadwal Baru</h1>

            <form action="{{ route('admin.schedule.store') }}" method="POST">
                @csrf
                <label for="bus_name">Nama Bus:</label>
                <input type="text" id="bus_name" name="bus_name" required>

                <label for="departure_time">Waktu Keberangkatan:</label>
                <input type="time" id="departure_time" name="departure_time" required>

                <label for="route">Rute:</label>
                <input type="text" id="route" name="route" required>

                <button type="submit">Tambah Jadwal</button>
            </form>

            <div class="form-footer">
                <a href="{{ route('admin.dashboard') }}">Kembali ke Dashboard</a>
            </div>
        </div>
    </div>

</body>
</html>
