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
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '2',
        'title' => 'permission_edit',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '3',
        'title' => 'permission_show',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '4',
        'title' => 'permission_delete',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '5',
        'title' => 'permission_access',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '6',
        'title' => 'role_create',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '7',
        'title' => 'role_edit',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '8',
        'title' => 'role_show',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '9',
        'title' => 'role_delete',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '10',
        'title' => 'role_access',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '11',
        'title' => 'tessting_create',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '12',
        'title' => 'tessting_edit',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '13',
        'title' => 'tessting_show',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '14',
        'title' => 'tessting_delete',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '15',
        'title' => 'tessting_access',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '16',
        'title' => 'test_create',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '17',
        'title' => 'test_edit',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '18',
        'title' => 'test_show',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '19',
        'title' => 'test_delete',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '20',
        'title' => 'test_access',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '21',
        'title' => 'user_management_access',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '22',
        'title' => 'user_create',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '23',
        'title' => 'user_edit',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '24',
        'title' => 'user_show',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '25',
        'title' => 'user_delete',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ],
    [
        'id' => '26',
        'title' => 'user_access',
        'created_at' => '2019-10-07 10:27:42',
        'updated_at' => '2019-10-07 10:27:42'
    ]
];



Permission::insert($permissions);
    
}


}