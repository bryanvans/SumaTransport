<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'adminsumatransport123@gmail.com',
            'password' => bcrypt('sumatransport100'), 
            'usertype' => 'admin', // Pastikan admin memiliki usertype 'admin'
        ]);
    }
}
