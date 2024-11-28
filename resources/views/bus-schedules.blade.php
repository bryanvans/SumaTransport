<!DOCTYPE html>
<html>
<head>
    <title>Jadwal Bus</title>
</head>
<body>
    <h1>Jadwal Bus</h1>
    <ul>
        @foreach ($data as $schedule)
            <li>{{ $schedule['departure_time'] }} - {{ $schedule['destination'] }}</li>
        @endforeach
    </ul>
</body>
</html>
