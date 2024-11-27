<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BusScheduleController extends Controller
{
    public function getSchedules()
    {
        // URL endpoint API Jadwal Bus
        $url = 'https://api.busprovider.com/api/schedules';  // Ganti dengan URL API yang benar

        // Membuat instance Guzzle Client
        $client = new Client();

        // Mengirim request GET ke API
        $response = $client->get($url);

        // Mengambil body response dan mengubahnya ke format array
        $data = json_decode($response->getBody(), true);

        // Mengembalikan data ke view atau API response
        return response()->json($data);
    }
}
