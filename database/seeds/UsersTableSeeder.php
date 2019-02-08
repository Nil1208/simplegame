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
        DB::table('users')->insert([
            'email' => 'beer@buhojmedved.ru',
            'name' => 'beer',
            'password' => Hash::make('beerandsmile'),
            'events' => json_encode(['tokens' => ['personal' => Hash::make('beer@buhojmedved.ru')]]),
        ]);

        DB::table('users')->insert([
            'email' => 'smile@buhojmedved.ru',
            'name' => 'smile',
            'password' => Hash::make('beerandsmile'),
            'events' => json_encode(['tokens' => ['personal' => Hash::make('smile@buhojmedved.ru')]]),
        ]);
    }
}
