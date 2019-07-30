<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PlacesTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(EventsCategoriesTableSeeder::class);
        $this->call(EventsImagesTableSeeder::class);
        $this->call(LocationsNormalTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(PublicitiesTableSeeder::class);
    }
}
