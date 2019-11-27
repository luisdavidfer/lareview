<?php

use Illuminate\Database\Seeder;

class GenresMoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres_movies')->truncate();
        
        DB::table('genres_movies')->insert([
            'genre_id' => '1',
            'movie_id' => '1',
            ]);              
        DB::table('genres_movies')->insert([
            'genre_id' => '2',
            'movie_id' => '2',
            ]);              
        DB::table('genres_movies')->insert([
            'genre_id' => '3',
            'movie_id' => '3',
            ]);              
        DB::table('genres_movies')->insert([
            'genre_id' => '4',
            'movie_id' => '4',
            ]);              
        DB::table('genres_movies')->insert([
            'genre_id' => '1',
            'movie_id' => '2',
            ]);              
        DB::table('genres_movies')->insert([
            'genre_id' => '1',
            'movie_id' => '3',
            ]);       
        DB::table('genres_movies')->insert([
            'genre_id' => '2',
            'movie_id' => '5',
            ]);       
        DB::table('genres_movies')->insert([
            'genre_id' => '3',
            'movie_id' => '1',
            ]);       
        DB::table('genres_movies')->insert([
            'genre_id' => '3',
            'movie_id' => '2',
            ]);       
        DB::table('genres_movies')->insert([
            'genre_id' => '5',
            'movie_id' => '5',
            ]);      
    }
}
