<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->truncate();
        
        DB::table('genres')->insert([
            'description' => 'Action',
            ]);        
        DB::table('genres')->insert([
            'description' => 'Sci-Fi',
            ]);        
        DB::table('genres')->insert([
            'description' => 'Drama',
            ]);        
        DB::table('genres')->insert([
            'description' => 'Fantasy',
            ]);
        DB::table('genres')->insert([
            'description' => 'Romance',
            ]);
    }
}
