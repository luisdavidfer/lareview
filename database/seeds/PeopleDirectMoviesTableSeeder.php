<?php

use Illuminate\Database\Seeder;

class PeopleDirectMoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people_direct_movies')->truncate();
        
        DB::table('people_direct_movies')->insert([
            'person_id' => '1',
            'movie_id' => '2',
            ]);     

        DB::table('people_direct_movies')->insert([
            'person_id' => '1',
            'movie_id' => '3',
            ]);             
        DB::table('people_direct_movies')->insert([
            'person_id' => '3',
            'movie_id' => '1',
            ]);             
        DB::table('people_direct_movies')->insert([
            'person_id' => '4',
            'movie_id' => '5',
            ]);             
        DB::table('people_direct_movies')->insert([
            'person_id' => '5',
            'movie_id' => '5',
            ]);               
        DB::table('people_direct_movies')->insert([
            'person_id' => '6',
            'movie_id' => '4',
            ]);               
        DB::table('people_direct_movies')->insert([
            'person_id' => '15',
            'movie_id' => '4',
            ]);               
        DB::table('people_direct_movies')->insert([
            'person_id' => '10',
            'movie_id' => '6',
            ]);               
        DB::table('people_direct_movies')->insert([
            'person_id' => '12',
            'movie_id' => '6',
            ]);               
        DB::table('people_direct_movies')->insert([
            'person_id' => '14',
            'movie_id' => '7',
            ]);               
        DB::table('people_direct_movies')->insert([
            'person_id' => '17',
            'movie_id' => '8',
            ]);               
        DB::table('people_direct_movies')->insert([
            'person_id' => '19',
            'movie_id' => '9',
            ]);               
        DB::table('people_direct_movies')->insert([
            'person_id' => '20',
            'movie_id' => '10',
            ]);               
        DB::table('people_direct_movies')->insert([
            'person_id' => '22',
            'movie_id' => '10',
            ]);               
        DB::table('people_direct_movies')->insert([
            'person_id' => '21',
            'movie_id' => '11',
            ]);               
        DB::table('people_direct_movies')->insert([
            'person_id' => '1',
            'movie_id' => '12',
            ]);               
        DB::table('people_direct_movies')->insert([
            'person_id' => '6',
            'movie_id' => '13',
            ]);               
        DB::table('people_direct_movies')->insert([
            'person_id' => '18',
            'movie_id' => '14',
            ]);               
        DB::table('people_direct_movies')->insert([
            'person_id' => '11',
            'movie_id' => '15',
            ]);               
        DB::table('people_direct_movies')->insert([
            'person_id' => '15',
            'movie_id' => '17',
            ]);               
        DB::table('people_direct_movies')->insert([
            'person_id' => '3',
            'movie_id' => '16',
            ]);             
        
    }
}
