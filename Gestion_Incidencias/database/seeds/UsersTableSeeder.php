<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        		'name' => 'Jose',
        		'email' => 'paredes_191@hotmail.com',
        		'password' => bcrypt('paredes_191'),
        		'role' => 0
        	]);

        User::create([
        		'name' => 'Maria',
        		'email' => 'support@hotmail.com',
        		'password' => bcrypt('support'),
        		'role' => 1
        	]);

        User::create([
        		'name' => 'Claudia',
        		'email' => 'cliente@hotmail.com',
        		'password' => bcrypt('cliente'),
        		'role' => 2
        	]);
    }
}
