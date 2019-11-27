<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'root',
            'email' => 'root@root.com',
            'password' => 'root',
            ]);

        DB::table('users')->insert([
            'name' => 'Bentlee',
            'email' => 'bent@mail.com',
            'password' => '231sdfsd',
            ]);

        DB::table('users')->insert([
            'name' => 'Sax',
            'email' => 'sax@mail.com',
            'password' => 'das234',
            ]);

        DB::table('users')->insert([
            'name' => 'mike',
            'email' => 'mick@mail.com',
            'password' => 'ey123',
            ]);

        DB::table('users')->insert([
            'name' => 'raven',
            'email' => 'raven@mail.com',
            'password' => 'r4v1ns',
            ]);

        DB::table('users')->insert([
            'name' => 'ghost',
            'email' => 'ghst@mail.com',
            'password' => 'g24hdsf',
            ]);

        DB::table('users')->insert([
            'name' => 'stan',
            'email' => 'steeve@mail.com',
            'password' => 'ton2t',
            ]);

        DB::table('users')->insert([
            'name' => 'castelo',
            'email' => 'costela@mail.com',
            'password' => 'contra123',
            ]);

        DB::table('users')->insert([
            'name' => 'castefa',
            'email' => 'castgd@mail.com',
            'password' => '2307',
            ]);

        DB::table('users')->insert([
            'name' => 'paula',
            'email' => 'exmp@mail.com',
            'password' => 'irl33',
            ]);

    }
}
