<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class EventsImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events_images')->insert([
            'file' => 'image-fiesta01.jpg',
            'alt' => 'Fiesta 01',
            'hover' => 'Fiesta 01',
            'event_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('events_images')->insert([
            'file' => 'image-fiesta02.jpg',
            'alt' => 'Fiesta 02',
            'hover' => 'Fiesta 02',
            'event_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('events_images')->insert([
            'file' => 'image-recitalBrasil.jpg',
            'alt' => 'Recital Estacato',
            'hover' => 'Recital Estacato',
            'event_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('events_images')->insert([
            'file' => 'image-estactos.jpg',
            'alt' => 'Recital Estacato',
            'hover' => 'Recital Estacato',
            'event_id' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
