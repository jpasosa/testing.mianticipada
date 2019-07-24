<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TransactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'user_id'            => 2,
            'quant'              => 4,
            'location_normal_id' => 2,
            'status'             => 'approved',
            'observations'       => '',
            'created_at'         => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'         => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('transactions')->insert([
            'user_id'            => 4,
            'quant'              => 10,
            'location_normal_id' => 3,
            'status'             => 'approved',
            'observations'       => '',
            'created_at'         => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'         => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('transactions')->insert([
            'user_id'            => 5,
            'quant'              => 2,
            'location_normal_id' => 1,
            'status'             => 'inproccess',
            'observations'       => '',
            'created_at'         => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at'         => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
