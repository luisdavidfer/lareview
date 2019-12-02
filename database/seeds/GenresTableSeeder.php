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
            'description' => 'Acción',
            ]);        
        DB::table('genres')->insert([
            'description' => 'Ciencia Ficción',
            ]);        
        DB::table('genres')->insert([
            'description' => 'Drama',
            ]);        
        DB::table('genres')->insert([
            'description' => 'Terror',
            ]);
        DB::table('genres')->insert([
            'description' => 'Romántica',
            ]);
        DB::table('genres')->insert([
            'description' => 'Comedia',
            ]);
        DB::table('genres')->insert([
            'description' => 'Misterio',
            ]);
        DB::table('genres')->insert([
            'description' => 'Fantasía',
            ]);
        DB::table('genres')->insert([
            'description' => 'Animación',
            ]);
        DB::table('genres')->insert([
            'description' => 'Biográfica',
            ]);
        DB::table('genres')->insert([
            'description' => 'Bélica',
            ]);
        DB::table('genres')->insert([
            'description' => 'Musical',
            ]);
    }
}
