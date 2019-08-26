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
        DB::table('locations_normal')->insert([
            'name'         => 'Entrada General / Anticipada hasta 30-Nov',
            'description'  => 'Única entrada General',
            'price'        => 250.00,
            'serviceprice' => 30.00,
            'restquant'    => 223,
            'totalquant'   => 400,
            'event_id'     => 3,
            'activeimage'  => 'general_aladin.jpg',
            'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'   => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('locations_normal')->insert([
            'name'         => 'Pullman',
            'description'  => 'Pullman',
            'price'        => 400.00,
            'serviceprice' => 50.00,
            'restquant'    => 115,
            'totalquant'   => 700,
            'event_id'     => 4,
            'activeimage'  => 'pullman_magodeoz.jpg',
            'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'   => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('locations_normal')->insert([
            'name'         => 'Pullman',
            'description'  => 'Pullman',
            'price'        => 300.00,
            'serviceprice' => 40.00,
            'restquant'    => 117,
            'totalquant'   => 300,
            'event_id'     => 5,
            'activeimage'  => 'colar_humano.jpg',
            'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'   => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('locations_normal')->insert([
            'name'         => 'Platea',
            'description'  => 'Platea',
            'price'        => 300.00,
            'serviceprice' => 40.00,
            'restquant'    => 117,
            'totalquant'   => 300,
            'event_id'     => 6,
            'activeimage'  => 'lafaraona.jpg',
            'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'   => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('locations_normal')->insert([
            'name'         => 'Platea',
            'description'  => 'Platea',
            'price'        => 400.00,
            'serviceprice' => 40.00,
            'restquant'    => 199,
            'totalquant'   => 500,
            'event_id'     => 7,
            'activeimage'  => 'fiesta_gardelitos.jpg',
            'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'   => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('locations_normal')->insert([
            'name'         => 'Platea baja',
            'description'  => 'Platea baja',
            'price'        => 600.00,
            'serviceprice' => 60.00,
            'restquant'    => 238,
            'totalquant'   => 800,
            'event_id'     => 8,
            'activeimage'  => 'morcheeba.jpg',
            'created_at'   => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'   => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
