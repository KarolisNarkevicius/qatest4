<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$kYuq96yzPR95QY9Il1Q01evsFdJfJQDyfLCh6yX5YKFWwOF0CxxXO',
                'remember_token' => null,
                'created_at'     => '2019-10-03 09:27:52',
                'updated_at'     => '2019-10-03 09:27:52',
            ],
        ];

        User::insert($users);
    }
}
