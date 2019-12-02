<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('root'),
            ]);

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('user'),
            ]);

        DB::table('users')->insert([
            'name' => 'Bentlee',
            'email' => 'bent@mail.com',
            'password' => Hash::make('231sdfsd'),
            ]);

        DB::table('users')->insert([
            'name' => 'Sax',
            'email' => 'sax@mail.com',
            'password' => Hash::make('das234'),
            ]);

        DB::table('users')->insert([
            'name' => 'mike',
            'email' => 'mick@mail.com',
            'password' => Hash::make('ey123'),
            ]);

        DB::table('users')->insert([
            'name' => 'raven',
            'email' => 'raven@mail.com',
            'password' => Hash::make('r4v1ns'),
            ]);

        DB::table('users')->insert([
            'name' => 'ghost',
            'email' => 'ghst@mail.com',
            'password' => Hash::make('g24hdsf'),
            ]);

        DB::table('users')->insert([
            'name' => 'stan',
            'email' => 'steeve@mail.com',
            'password' => Hash::make('ton2t'),
            ]);

        DB::table('users')->insert([
            'name' => 'castelo',
            'email' => 'costela@mail.com',
            'password' => Hash::make('contra123'),
            ]);

        DB::table('users')->insert([
            'name' => 'castefa',
            'email' => 'castgd@mail.com',
            'password' => Hash::make('2307'),
            ]);

        DB::table('users')->insert([
            'name' => 'paula',
            'email' => 'exmp@mail.com',
            'password' => Hash::make('irl33'),
            ]);

    }
}
