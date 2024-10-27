<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Route;

class KPTRoutesTableSeeder extends Seeder
{
    public function run()
    {
        Route::create([
            'bus_id' => 1, // Pastikan ID bus sudah ada
            'departure_city' => 'Medan',
            'arrival_city' => 'Kota A',
            'departure_time' => '09:00:00',
            'arrival_time' => '11:00:00',
        ]);

        Route::create([
            'bus_id' => 1,
            'departure_city' => 'Medan',
            'arrival_city' => 'Kota B',
            'departure_time' => '10:00:00',
            'arrival_time' => '12:00:00',
        ]);
    }
}
