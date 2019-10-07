<?php



use App\User;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder  {





public function run()
{
    


$users = [
[
        'id' => 1,
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => '$2y$10$YTCS.BXg7ON15LLkDkhbH.OmlW4te7FLE6cSgsAJ0vb.Wl47Zptd2',
        'remember_token' => null,
        'created_at' => '2019-10-07 10:17:57',
        'updated_at' => '2019-10-07 10:17:57'
    ]
];



User::insert($users);
    
}


}