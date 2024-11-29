<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bus;

class BusSeeder extends Seeder
{
    public function run()
    {
        Bus::create([
            'name' => 'KBT',
            'operator' => 'KBT Operator',
            'capacity' => 50,
        ]);

        Bus::create([
            'name' => 'KPT',
            'operator' => 'KPT Operator',
            'capacity' => 45,
        ]);

        Bus::create([
            'name' => 'Tiomaz',
            'operator' => 'Tiomaz Transport',
            'capacity' => 40,
        ]);

        Bus::create([
            'name' => 'Karya Agung',
            'operator' => 'Karya Agung Transport',
            'capacity' => 35,
        ]);
    }
}
