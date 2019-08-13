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
            'url' => 'estacion-primera-de-lanus',
            'public' => true,
            'date' => '2019-10-30',
            'duration' => '4h',
            'finishdate' => '2019-10-28',
            'type' => 'recital',
            'place_id' => 2,
            'adultonly' => true,
            'image' => 'image_rio.jpg',
            // 'banner' => 'ban-primeralanus.jpg',
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
            'url' => 'show-estacatto-percusion',
            'public' => true,
            'date' => '2019-11-30',
            'duration' => '2h',
            'finishdate' => '2019-11-30',
            'type' => 'recital',
            'place_id' => 1,
            'adultonly' => true,
            'image' => 'image_estacato.jpg',
            'banner' => 'ban-estacato.jpg',
            'restquant' => 55,
            'totalquant' => 120,
            'usercreate_id' => 2,
            'usercoord_id' => 3,
            'userzone_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('events')->insert([
            'title' => 'Aladin',
            'description' => 'UN ESPECTÁCULO DE ARIEL DEL MASTRO CON FERNANDO DENTE (Aladin fines de semana), AGUSTIN CASANOVA (Aladin días de semana), JULIETA NAIR CALVO, DARIO BARASSI, CAROLINA KOPELIOFF, AGUSTIN ARISTARÁN Y GRAN ELENCO',
            'url' => 'aladin-sera-genial',
            'public' => true,
            'date' => '2019-11-15',
            'duration' => '4h',
            'finishdate' => '2019-11-15',
            'type' => 'teatro',
            'place_id' => 2,
            'adultonly' => true,
            'image' => 'aladin.jpg',
            // 'banner' => 'ban-aladin.jpg',
            'restquant' => 176,
            'totalquant' => 400,
            'usercreate_id' => 2,
            'usercoord_id' => 3,
            'userzone_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('events')->insert([
            'title' => 'El mago de OZ',
            'description' => 'Al mago de Oz la original, dirigida por Federico Husgary',
            'url' => 'el-mago-de-oz',
            'public' => true,
            'date' => '2019-11-25',
            'duration' => '2h',
            'finishdate' => '2019-11-22',
            'type' => 'teatro',
            'place_id' => 1,
            'adultonly' => true,
            'image' => 'mago-de-oz.jpg',
            'banner' => 'ban-magodeoz.jpg',
            'restquant' => 55,
            'totalquant' => 120,
            'usercreate_id' => 2,
            'usercoord_id' => 3,
            'userzone_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('events')->insert([
            'title' => 'Volar es humano, aterrizar es divino',
            'description' => 'Luego de 5 años en el Teatro Maipo, Enrique Piñeyro vuelve por 6to año consecutivo con el aclamado stand up “Volar es humano aterrizar es divino”, en el Teatro Coliseo. Convierte este original show en un nuevo género que alterna sin pausa entre la risa y la reflexión profunda, demostrándonos que si copiáramos muchas de las cosas que hacemos en aviación, este sería un lugar más bello e infinitamente más seguro para convivir y más respetuoso de los derechos ajenos.',
            'url' => 'volar-es-humano-atterizar-es-divino',
            'public' => true,
            'date' => '2019-12-15',
            'duration' => '2h',
            'finishdate' => '2019-12-15',
            'type' => 'teatro',
            'place_id' => 3,
            'adultonly' => true,
            'image' => 'volar.jpg',
            'banner' => 'ban-volarhumano.jpg',
            'restquant' => 176,
            'totalquant' => 400,
            'usercreate_id' => 2,
            'usercoord_id' => 3,
            'userzone_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
        DB::table('events')->insert([
            'title' => 'La Faraona',
            'description' => 'Martín Cirio (35) se hizo famoso a través de su canal de youtube. Comenzó con guías turísticas: “Videos sobre viajes, como Marley por el mundo, pero pobre”, diría él mismo. El salto definitivo hacia la popularidad fue luego de la creación de “La Faraona”, el mismo y habitual Martín en sus formas, pero con un minivestido blanco y una peluca rubia.',
            'url' => 'la-faraona',
            'public' => true,
            'date' => '2019-12-20',
            'duration' => '2h',
            'finishdate' => '2019-12-18',
            'type' => 'teatro',
            'place_id' => 4,
            'adultonly' => true,
            'image' => 'la-faraona.jpg',
            'banner' => 'ban-faraona.jpg',
            'restquant' => 55,
            'totalquant' => 120,
            'usercreate_id' => 2,
            'usercoord_id' => 3,
            'userzone_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('events')->insert([
            'title' => 'Los Gardelitos | Fiesta Clandestino',
            'description' => 'Recital de los gardelitos en las fiestas siempre arriba llamadas Fiestas Clandestinas, te lo vas a perder ?',
            'url' => 'los-gardelitos-fiesta-clandestina',
            'public' => true,
            'date' => '2019-12-20',
            'duration' => '2h',
            'finishdate' => '2019-12-15',
            'type' => 'recital',
            'place_id' => 5,
            'adultonly' => true,
            'image' => 'los-gardelitos.jpg',
            'banner' => 'banner-losgardelitos.jpg',
            'restquant' => 55,
            'totalquant' => 120,
            'usercreate_id' => 2,
            'usercoord_id' => 3,
            'userzone_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('events')->insert([
            'title' => 'Morcheeba',
            'description' => 'Morcheeba se presentará el día domingo 20 de octubre en el Teatro Coliseo.',
            'url' => 'morcheeba-live',
            'public' => true,
            'date' => '2019-12-22',
            'duration' => '3h',
            'finishdate' => '2019-12-20',
            'type' => 'recital',
            'place_id' => 4,
            'adultonly' => true,
            'image' => 'morcheeba.jpg',
            'banner' => 'ban-morcheeba.jpg',
            'restquant' => 129,
            'totalquant' => 400,
            'usercreate_id' => 2,
            'usercoord_id' => 3,
            'userzone_id' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
