<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bus;
use App\Models\Route; 
use App\Models\Facility; 

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Seeder untuk Bus KBT
        $kbt = Bus::create(['name' => 'KBT']);
        
        Route::create([
            'bus_id' => $kbt->id,
            'departure_city' => 'Medan',
            'arrival_city' => 'Tarutung',
            'departure_time' => '08:00:00',
            'arrival_time' => '12:00:00',
        ]);

        Facility::create([
            'bus_id' => $kbt->id,
            'facility_name' => 'WiFi',
        ]);

        // Seeder untuk Bus KPT
        $kpt = Bus::create(['name' => 'KPT']);

        Route::create([
            'bus_id' => $kpt->id,
            'departure_city' => 'Medan',
            'arrival_city' => 'Balige',
            'departure_time' => '09:00:00',
            'arrival_time' => '11:00:00',
        ]);

        Facility::create([
            'bus_id' => $kpt->id,
            'facility_name' => 'AC',
        ]);

        // Seeder untuk Bus TIOMAZ
        $tiomaz = Bus::create(['name' => 'TIOMAZ']);

        Route::create([
            'bus_id' => $tiomaz->id,
            'departure_city' => 'Medan',
            'arrival_city' => 'Siborong Borong',
            'departure_time' => '10:00:00',
            'arrival_time' => '12:00:00',
        ]);

        Facility::create([
            'bus_id' => $tiomaz->id,
            'facility_name' => 'Toilet',
        ]);

        // Seeder untuk Bus Karya Agung
        $karyaAgung = Bus::create(['name' => 'Karya Agung']);

        Route::create([
            'bus_id' => $karyaAgung->id,
            'departure_city' => 'Medan',
            'arrival_city' => 'Pematang Siantar',
            'departure_time' => '11:00:00',
            'arrival_time' => '13:00:00',
        ]);

        Facility::create([
            'bus_id' => $karyaAgung->id,
            'facility_name' => 'Entertainment',
        ]);
    }
}
