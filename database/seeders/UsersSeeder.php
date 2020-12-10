<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Fadi Sarwat',
            'username' => 'fadi',
            'email' => 'fady.sarwat377@gmail.com',
            'password' => bcrypt('fadi123'),
        ]);

        $user->is_admin = true;
        $user->save();
    }
}
