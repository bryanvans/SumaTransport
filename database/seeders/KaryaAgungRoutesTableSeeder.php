<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Route;

class KaryaAgungRoutesTableSeeder extends Seeder
{
    public function run()
    {
        Route::create([
            'bus_id' => 3, // Pastikan ID bus Karya Agung sudah ada
            'departure_city' => 'Medan',
            'arrival_city' => 'Tanjung Balai',
            'departure_time' => '07:00:00',
            'arrival_time' => '09:00:00',
        ]);

        Route::create([
            'bus_id' => 3,
            'departure_city' => 'Medan',
            'arrival_city' => 'Pematang Siantar',
            'departure_time' => '08:30:00',
            'arrival_time' => '10:30:00',
        ]);

        Route::create([
            'bus_id' => 3,
            'departure_city' => 'Medan',
            'arrival_city' => 'Siborong Borong',
            'departure_time' => '10:00:00',
            'arrival_time' => '12:00:00',
        ]);
    }
}
