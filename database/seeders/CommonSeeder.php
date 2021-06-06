<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Common;

class CommonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Common::create([
            'id' => 2,
            'name' => 'usuario11',
            'password' => Hash::make('1234')
        ]);
        Common::create([
            'id' => 3,
            'name' => 'usuario12',
            'password' => Hash::make('1234'),
            'indicator' => 2,
            'points' => 200
        ]);
        Common::create([
            'id' => 4,
            'name' => 'usuario13',
            'password' => Hash::make('1234'),
            'indicator' => 2,
            'points' => 100
        ]);

        Common::create([
            'id' => 5,
            'name' => 'usuario21',
            'password' => Hash::make('1234')
        ]);
        Common::create([
            'id' => 6,
            'name' => 'usuario22',
            'password' => Hash::make('1234'),
            'indicator' => 5,
            'points' => 400
        ]);
        Common::create([
            'id' => 7,
            'name' => 'usuario23',
            'password' => Hash::make('1234'),
            'indicator' => 5,
            'points' => 50
        ]);

        Common::create([
            'id' => 8,
            'name' => 'usuario31',
            'password' => Hash::make('1234')
        ]);
        Common::create([
            'id' => 9,
            'name' => 'usuario32',
            'password' => Hash::make('1234'),
            'indicator' => 8,
            'points' => 600
        ]);
        Common::create([
            'id' => 10,
            'name' => 'usuario33',
            'password' => Hash::make('1234'),
            'indicator' => 8,
            'points' => 500
        ]);

        Common::create([
            'id' => 11,
            'name' => 'usuario41',
            'password' => Hash::make('1234')
        ]);
        Common::create([
            'id' => 12,
            'name' => 'usuario42',
            'password' => Hash::make('1234'),
            'indicator' => 11,
            'points' => 70
        ]);
        Common::create([
            'id' => 13,
            'name' => 'usuario43',
            'password' => Hash::make('1234'),
            'indicator' => 11,
            'points' => 430
        ]);
    }
}
