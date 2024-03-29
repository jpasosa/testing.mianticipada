<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('places')->insert([
            'name' => 'Espacio Cultural Despierta',
            'address' => 'Av. Federico Lacroze 3578, C1427EDN CABA',
            'phone' => '11.7656.8374',
            'googlelocation' => 'https://www.google.com/maps/place/Espacio+Cultural+Despierta/@-34.5819137,-58.4514772,18.25z/data=!4m8!1m2!2m1!1sespacio+despertar!3m4!1s0x0:0x795ffe6952b194f1!8m2!3d-34.5813084!4d-58.4513013',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('places')->insert([
            'name' => 'Chau Che Clú',
            'address' => 'Av. Vélez Sarsfield 222, C1282 CABA',
            'phone' => '11.4533.2376',
            'googlelocation' => 'https://www.google.com/maps/place/Chau+Che+Cl%C3%BA/@-34.6367806,-58.3922027,17z/data=!3m1!4b1!4m5!3m4!1s0x95bccb3edda0209b:0x7c9e148a5b64ac9b!8m2!3d-34.636785!4d-58.390014',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('places')->insert([
            'name' => 'Teatro Coliseo',
            'address' => 'Marcelo T de Alvear 1125, C1282 CABA',
            'phone' => '11.7656.2376',
            'googlelocation' => 'https://www.google.com/maps/place/Chau+Che+Cl%C3%BA/@-34.6367806,-58.3922027,17z/data=!3m1!4b1!4m5!3m4!1s0x95bccb3edda0209b:0x7c9e148a5b64ac9b!8m2!3d-34.636785!4d-58.390014',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('places')->insert([
            'name' => 'Teatro Nini Marshal',
            'address' => 'Peru 1401, Tigre, prov. Buenos Aires CP 1648',
            'phone' => '11.2345.8564',
            'googlelocation' => 'https://www.google.com/maps/place/Chau+Che+Cl%C3%BA/@-34.6367806,-58.3922027,17z/data=!3m1!4b1!4m5!3m4!1s0x95bccb3edda0209b:0x7c9e148a5b64ac9b!8m2!3d-34.636785!4d-58.390014',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('places')->insert([
            'name' => 'Groove',
            'address' => 'Avenida Santa Fe 4389, CABA 5465',
            'phone' => '11.5132.9874',
            'googlelocation' => 'https://www.google.com/maps/place/Groove/@-34.5794605,-58.4252767,17z/data=!3m1!4b1!4m5!3m4!1s0x95bcb59b4e07a685:0x57be92636048e0f9!8m2!3d-34.5794649!4d-58.423088',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
