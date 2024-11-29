<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Route;

class RouteSeeder extends Seeder
{
    public function run()
    {
        Route::create([
            'start_point' => 'Medan',
            'end_point' => 'Tarutung',
        ]);

        Route::create([
            'start_point' => 'Tarutung',
            'end_point' => 'Medan',
        ]);

        Route::create([
            'start_point' => 'Tarutung',
            'end_point' => 'Laguboti',
        ]);

        Route::create([
            'start_point' => 'Laguboti',
            'end_point' => 'Tarutung',
        ]);

        Route::create([
            'start_point' => 'Siborong-borong',
            'end_point' => 'Balige',
        ]);

        Route::create([
            'start_point' => 'Balige',
            'end_point' => 'Siborong-borong',
        ]);

        Route::create([
            'start_point' => 'Medan',
            'end_point' => 'Pematang Siantar',
        ]);

        Route::create([
            'start_point' => 'Pematang Siantar',
            'end_point' => 'Medan',
        ]);

        Route::create([
            'start_point' => 'Parapat',
            'end_point' => 'Balige',
        ]);

        Route::create([
            'start_point' => 'Balige',
            'end_point' => 'Parapat',
        ]);

        Route::create([
            'start_point' => 'Parapat',
            'end_point' => 'Medan',
        ]);

        Route::create([
            'start_point' => 'Medan',
            'end_point' => 'Parapat',
        ]);

        Route::create([
            'start_point' => 'Medan',
            'end_point' => 'Siborong-borong',
        ]);

        Route::create([
            'start_point' => 'Siborong-borong',
            'end_point' => 'Medan',
        ]);

        Route::create([
            'start_point' => 'Siborong-borong',
            'end_point' => 'Pematang Siantar',
        ]);

        Route::create([
            'start_point' => 'Pematang Siantar',
            'end_point' => 'Siborong-borong',
        ]);

        Route::create([
            'start_point' => 'Pematang Siantar',
            'end_point' => 'Balige',
        ]);

        Route::create([
            'start_point' => 'Balige',
            'end_point' => 'Pematang Siantar',
        ]);

        Route::create([
            'start_point' => 'Balige',
            'end_point' => 'Siborong-borong',
        ]);

        Route::create([
            'start_point' => 'Siborong-borong',
            'end_point' => 'Balige',
        ]);

        Route::create([
            'start_point' => 'Siborong-borong',
            'end_point' => 'Parapat',
        ]);

        Route::create([
            'start_point' => 'Parapat',
            'end_point' => 'Siborong-borong',
        ]);

        Route::create([
            'start_point' => 'Parapat',
            'end_point' => 'Pematang Siantar',
        ]);

        Route::create([
            'start_point' => 'Pematang Siantar',
            'end_point' => 'Parapat',
        ]);

        Route::create([
            'start_point' => 'Pematang Siantar',
            'end_point' => 'Medan',
        ]);

        Route::create([
            'start_point' => 'Medan',
            'end_point' => 'Pematang Siantar',
        ]);

        Route::create([
            'start_point' => 'Medan',
            'end_point' => 'Balige',
        ]);

        Route::create([
            'start_point' => 'Balige',
            'end_point' => 'Medan',
        ]);

    }
}
