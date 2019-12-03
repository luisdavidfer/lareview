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
        DB::table('people')->insert([
            'name' => 'Arnold Schwarzenegger',
            'external_url' => 'https://www.imdb.com/name/nm0000216/?ref_=tt_ov_st_sm',
            'photo' => 'arnold.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Mackenzie Davis',
            'external_url' => 'https://www.imdb.com/name/nm4496875/?ref_=tt_ov_st_sm',
            'photo' => 'mackenzie.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Linda Hamilton',
            'external_url' => 'https://www.imdb.com/name/nm0000157/?ref_=tt_ov_st_sm',
            'photo' => 'lindahamilton.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Robert De Niro',
            'external_url' => 'https://www.imdb.com/name/nm0000134/?ref_=tt_ov_st_sm',
            'photo' => 'robertdeniro.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Anthony Mackie',
            'external_url' => 'https://www.imdb.com/name/nm1107001/?ref_=tt_ov_st_sm',
            'photo' => 'anthony.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'George Lucas',
            'external_url' => 'https://www.imdb.com/name/nm0000184/?ref_=tt_ov_dr',
            'photo' => 'georgelucas.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Mark Hamill',
            'external_url' => 'https://www.imdb.com/name/nm0000434/?ref_=tt_ov_st_sm',
            'photo' => 'markhamill.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Martin Scorsese',
            'external_url' => 'https://www.imdb.com/name/nm0000217/?ref_=tt_ov_dr',
            'photo' => 'martin.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Leonardo DiCaprio',
            'external_url' => 'https://www.imdb.com/name/nm0000138/?ref_=tt_ov_st_sm',
            'photo' => 'dicaprio.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Margaret Qualley',
            'external_url' => 'https://www.imdb.com/name/nm4960279/?ref_=tt_ov_st_sm',
            'photo' => 'margaret.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Denis Villeneuve',
            'external_url' => 'https://www.imdb.com/name/nm0898288/?ref_=tt_ov_dr',
            'photo' => 'denisvilleneuve.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Harrison Ford',
            'external_url' => 'https://www.imdb.com/name/nm0000148/?ref_=tt_ov_st_sm',
            'photo' => 'harrisonford.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Ryan Gosling',
            'external_url' => 'https://www.imdb.com/name/nm0331516/?ref_=tt_ov_st_sm',
            'photo' => 'ryangosling.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Hugh Jackman',
            'external_url' => 'https://www.imdb.com/name/nm0413168/?ref_=tt_ov_st_sm',
            'photo' => 'hughjackman.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Michael Gracey',
            'external_url' => 'https://www.imdb.com/name/nm1243905/?ref_=tt_ov_dr',
            'photo' => 'michaelgracey.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Cary Elwes',
            'external_url' => 'https://www.imdb.com/name/nm0000144/?ref_=tt_ov_st_sm',
            'photo' => 'caryelwes.jpg'
            ]);  
        DB::table('people')->insert([
            'name' => 'Rob Reiner',
            'external_url' => 'https://www.imdb.com/name/nm0001661/?ref_=tt_ov_dr',
            'photo' => 'robreiner.jpg'
            ]);  
    }
}
