<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->truncate();
        
        DB::table('people')->insert([
            'name' => 'Clint Eastwood',
            'external_url' => 'https://www.imdb.com/name/nm0000142/?ref_=nv_sr_1?ref_=nv_sr_1',
            'photo' => 'clint.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Robin Williams',
            'external_url' => 'https://www.imdb.com/name/nm0000245/?ref_=nv_sr_1?ref_=nv_sr_1',
            'photo' => 'robin.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Will Smith',
            'external_url' => 'https://www.imdb.com/name/nm0000226/?ref_=nv_sr_1?ref_=nv_sr_1',
            'photo' => 'will.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Paul Walker',
            'external_url' => 'https://www.imdb.com/name/nm0908094/?ref_=nv_sr_1?ref_=nv_sr_1',
            'photo' => 'paul.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Vin Diesel',
            'external_url' => 'https://www.imdb.com/name/nm0004874/?ref_=nv_sr_1?ref_=nv_sr_1',
            'photo' => 'vin.jpg'
            ]);  
    }
}
