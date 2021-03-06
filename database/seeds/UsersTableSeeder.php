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
        App\User::create(
            [
                'name' => 'GreatAdmin',
                'email' => 'admin@la.fr',
                'password' => bcrypt('admin'),
                'role' => 'admin',
            ]
        );
    }
}
