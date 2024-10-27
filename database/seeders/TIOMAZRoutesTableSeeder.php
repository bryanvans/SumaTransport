<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Route;

class TIOMAZRoutesTableSeeder extends Seeder
{
    public function run()
    {
        Route::create([
            'bus_id' => 2, // Pastikan ID bus TIOMAZ sudah ada
            'departure_city' => 'Medan',
            'arrival_city' => 'Balige',
            'departure_time' => '08:00:00',
            'arrival_time' => '10:00:00',
        ]);

        Route::create([
            'bus_id' => 2,
            'departure_city' => 'Medan',
            'arrival_city' => 'Tarutung',
            'departure_time' => '09:00:00',
            'arrival_time' => '11:30:00',
        ]);

        Route::create([
            'bus_id' => 2,
            'departure_city' => 'Medan',
            'arrival_city' => 'Siantar',
            'departure_time' => '10:30:00',
            'arrival_time' => '12:30:00',
        ]);
    }
}
