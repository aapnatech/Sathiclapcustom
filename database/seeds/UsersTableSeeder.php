<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$RScoDLqa6Lo/JtTA2YuKFuze3MT1Ewr7366EM7Hv5duiqHbI.JIRG',
            'remember_token' => null,
            'created_at'     => '2019-06-08 10:45:37',
            'updated_at'     => '2019-06-08 10:45:37',
            'deleted_at'     => null,
            'verified'       => 1,
            'verified_at'    => '2019-06-08 10:45:37',
        ]];

        User::insert($users);
    }
}
