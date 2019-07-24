<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Juan Pablo Sosa, coordinador de zona',
            'email' => 'jpasosa@gmail.com',
            'password' => bcrypt('qwerpoiu15'),
            'internalnotes' => 'es coordinador de zona',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Andrés Sosa, user comun',
            'email' => 'juanpablososa@gmail.com',
            'password' => bcrypt('qwerpoiu15'),
            'internalnotes' => 'es usuario común',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Andrés Sosa, coordinador dle evento',
            'email' => 'info+testuser@amancayweb.com',
            'password' => bcrypt('qwerpoiu15'),
            'internalnotes' => 'es usuario coordinador del evento',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Alejo Sosa',
            'email' => 'alejososa@gmail.com',
            'password' => bcrypt('alejo'),
            'internalnotes' => 'es usuario común para comprar',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'Agustina Mortola',
            'email' => 'jugandocreamos@gmail.com',
            'password' => bcrypt('namaste'),
            'internalnotes' => 'es usuario coordinador de zona y de eventos',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
