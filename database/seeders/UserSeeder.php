<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'           => 'client',
            'email'           => 'client@evertec.com',
            'rol'           => 'client',
            'password'        => bcrypt('password')

        ]);
    }
}
