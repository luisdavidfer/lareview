<?php

use Illuminate\Database\Seeder;

class PeopleActMoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people_act_movies')->truncate();
        
        DB::table('people_act_movies')->insert([
            'person_id' => '1',
            'movie_id' => '4',
            ]);     

        DB::table('people_act_movies')->insert([
            'person_id' => '2',
            'movie_id' => '3',
            ]);             
        DB::table('people_act_movies')->insert([
            'person_id' => '3',
            'movie_id' => '1',
            ]);             
        DB::table('people_act_movies')->insert([
            'person_id' => '3',
            'movie_id' => '2',
            ]);             
        DB::table('people_act_movies')->insert([
            'person_id' => '4',
            'movie_id' => '1',
            ]);             
        DB::table('people_act_movies')->insert([
            'person_id' => '4',
            'movie_id' => '5',
            ]);             
        DB::table('people_act_movies')->insert([
            'person_id' => '5',
            'movie_id' => '2',
            ]);             
        DB::table('people_act_movies')->insert([
            'person_id' => '5',
            'movie_id' => '1',
            ]);             
        DB::table('people_act_movies')->insert([
            'person_id' => '5',
            'movie_id' => '3',
            ]);             
        DB::table('people_act_movies')->insert([
            'person_id' => '1',
            'movie_id' => '1',
            ]);             
        DB::table('people_act_movies')->insert([
            'person_id' => '2',
            'movie_id' => '2',
            ]);              
    }
}
