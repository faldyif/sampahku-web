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
        DB::table('users')->insert([
            'name' => "Faldy Ikhwan Fadila",
            'email' => 'faldy.if@gmail.com',
            'password' => bcrypt('rahasia'),
        ]);
    }
}
