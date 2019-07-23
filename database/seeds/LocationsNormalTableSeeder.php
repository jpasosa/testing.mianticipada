<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LocationsNormalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations_normal')->insert([
            'name'         => 'Pullman',
            'description'  => 'Asientos, a 100m del escenario',
            'price'        => 150.00,
            'serviceprice' => 15.00,
            'restquant'    => 120,
            'totalquant'   => 350,
            'event_id'     => 1,
            'activeimage'  => 'pullman_rio.chaucheclu.jpg',
            'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'   => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('locations_normal')->insert([
            'name'         => 'Campo',
            'description'  => 'Campo, parados',
            'price'        => 100.00,
            'serviceprice' => 10.00,
            'restquant'    => 200,
            'totalquant'   => 800,
            'event_id'     => 1,
            'activeimage'  => 'campo_rio.chaucheclu.jpg',
            'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'   => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('locations_normal')->insert([
            'name'         => 'Entrada General',
            'description'  => 'Única entrada General',
            'price'        => 200.00,
            'serviceprice' => 20.00,
            'restquant'    => 87,
            'totalquant'   => 250,
            'event_id'     => 2,
            'activeimage'  => 'general_estacato.jpg',
            'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'   => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
