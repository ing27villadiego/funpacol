<?php

use Illuminate\Database\Seeder;

use App\Funpacol\Entities\User;

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
            'id' => 1,
            'name' => 'jeavitu',
            'email' => 'open@gmail.com',
            'first_name' => 'jeaffer',
            'last_name' => 'villadiego',
            'password' => bcrypt('open123'),
            'city_id' => 1,
            'state' => 1,
        ]);

        User::create([
            'id' => 2,
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'first_name' => 'jeaffer',
            'last_name' => 'villadiego',
            'password' => bcrypt('open123'),
            'city_id' => 2,
            'state' => 1,
        ]);

        User::create([
            'id' => 3,
            'name' => 'user3',
            'email' => 'user3@gmail.com',
            'first_name' => 'jeaffer',
            'last_name' => 'villadiego',
            'password' => bcrypt('open123'),
            'city_id' => 3,
            'state' => 1,
        ]);

        User::create([
            'id' => 4,
            'name' => 'user4',
            'email' => 'user4@gmail.com',
            'first_name' => 'jeaffer',
            'last_name' => 'villadiego',
            'password' => bcrypt('open123'),
            'city_id' => 4,
            'state' => 1,
        ]);
    }
}
