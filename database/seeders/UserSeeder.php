<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->first_name = 'Admin';
        $user->last_name = 'test';
        $user->email = 'admin@test.com';
        $user->password = Hash::make('123456789');
        $user->save();
    }
}
