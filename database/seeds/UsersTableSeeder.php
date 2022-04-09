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
		'name'=>'Mauri',
		'email'=>'mau@gmail.com',
		'password'=> bcrypt('mauri123'),
        'admin' => true
		]);
    }
}
