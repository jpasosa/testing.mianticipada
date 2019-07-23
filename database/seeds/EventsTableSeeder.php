<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'title' => 'Estación primera de Lanus',
            'description' => 'Show todos los vienres, un portar a Río de Janeiro te espera en Barracas',
            'public' => true,
            'date' => '2019-07-30',
            'duration' => '4h',
            'type' => 'recital',
            'place_id' => 2,
            'adultonly' => true,
            'image' => 'image_rio.jpg',
            'restquant' => 123,
            'totalquant' => 200,
            'usercreate_id' => 2,
            'usercoord_id' => 3,
            'userzone_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('events')->insert([
            'title' => 'Show Estacato Percusion',
            'description' => 'Show de estacato percusión',
            'public' => true,
            'date' => '2019-07-30',
            'duration' => '2h',
            'type' => 'recital',
            'place_id' => 1,
            'adultonly' => true,
            'image' => 'image_estacato.jpg',
            'restquant' => 55,
            'totalquant' => 120,
            'usercreate_id' => 2,
            'usercoord_id' => 3,
            'userzone_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
    }
}
