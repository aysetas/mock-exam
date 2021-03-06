<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Ayşe Taş',
            'email' => 'aysetas@gmail.com',
            'type' => 'admin',
            'email_verified_at' => now(),
            'password' => bcrypt(123456),
            'remember_token' => Str::random(10),
        ]);
        User::factory(5)->create();
    }
}
