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
        $this->call(GenresTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(GenresMoviesTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(PeopleActMoviesTableSeeder::class);
        $this->call(PeopleDirectMoviesTableSeeder::class);
    }
}
