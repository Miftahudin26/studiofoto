<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservasis')->insert([
            'name' => 'Miftahuddin',
            'email' => 'miftah@gmail.com',
            'nohp' => '08977777777',
            'alamat' => 'Kaliwungu Kudus',
            'tanggal' => '2023-04-10 23:59:59',
            'paket' => 'Potrait',
        ]);
    }
}
