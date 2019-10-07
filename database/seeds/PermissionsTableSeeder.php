<?php



use App\Permission;
use Illuminate\Database\Seeder;


class PermissionsTableSeeder extends Seeder  {





public function run()
{
    


$permissions = [
[
        'id' => '1',
        'title' => 'permission_create',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '2',
        'title' => 'permission_edit',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '3',
        'title' => 'permission_show',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '4',
        'title' => 'permission_delete',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '5',
        'title' => 'permission_access',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '6',
        'title' => 'role_create',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '7',
        'title' => 'role_edit',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '8',
        'title' => 'role_show',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '9',
        'title' => 'role_delete',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '10',
        'title' => 'role_access',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '11',
        'title' => 'tessting_create',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '12',
        'title' => 'tessting_edit',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '13',
        'title' => 'tessting_show',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '14',
        'title' => 'tessting_delete',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '15',
        'title' => 'tessting_access',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '16',
        'title' => 'user_management_access',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '17',
        'title' => 'user_create',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '18',
        'title' => 'user_edit',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '19',
        'title' => 'user_show',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '20',
        'title' => 'user_delete',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ],
    [
        'id' => '21',
        'title' => 'user_access',
        'created_at' => '2019-10-07 10:23:47',
        'updated_at' => '2019-10-07 10:23:47'
    ]
];



Permission::insert($permissions);
    
}


}