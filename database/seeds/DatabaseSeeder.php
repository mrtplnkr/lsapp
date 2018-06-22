<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('products')->insert([
            'title' => str_random(10),
            'description' => str_random(50),
            'image' => str_random(20),
            'user_id' => 1,
            'price' => 5.99,
        ]);
    }
}
