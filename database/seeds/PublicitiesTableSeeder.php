<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PublicitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publicities')->insert([
            'image'     => 'amanca.jpg',
            'title'     => 'Amancay Web',
            'text'      => 'AmancayWeb Diseño y Programación a tu medida.',
            'textnote'  => 'EN Amancay sabemos lo que querés, nosotros lo hacemos, vos seguí trabajando.',
            'link'      => 'https://amancayweb.com/',
            'finish'    => '2019-10-01',
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('publicities')->insert([
            'image'     => 'sudestada.jpg',
            'title'     => 'Revista Sudestada',
            'text'      => 'Editorial Colectivo, revista Sudestada.',
            'textnote'  => '',
            'link'      => 'http://www.revistasudestada.com.ar/',
            'finish'    => '2019-10-01',
            'created_at'=> Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
