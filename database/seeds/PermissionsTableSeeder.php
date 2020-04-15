<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'         => '1',
                'title'      => 'user_management_access',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '17',
                'title'      => 'asset_management_access',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '18',
                'title'      => 'asset_category_create',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '19',
                'title'      => 'asset_category_edit',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '20',
                'title'      => 'asset_category_show',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '21',
                'title'      => 'asset_category_delete',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '22',
                'title'      => 'asset_category_access',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '23',
                'title'      => 'asset_location_create',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '24',
                'title'      => 'asset_location_edit',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '25',
                'title'      => 'asset_location_show',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '26',
                'title'      => 'asset_location_delete',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '27',
                'title'      => 'asset_location_access',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '28',
                'title'      => 'asset_status_create',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '29',
                'title'      => 'asset_status_edit',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '30',
                'title'      => 'asset_status_show',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '31',
                'title'      => 'asset_status_delete',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '32',
                'title'      => 'asset_status_access',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '33',
                'title'      => 'asset_create',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '34',
                'title'      => 'asset_edit',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '35',
                'title'      => 'asset_show',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '36',
                'title'      => 'asset_delete',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '37',
                'title'      => 'asset_access',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '38',
                'title'      => 'assets_history_access',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '39',
                'title'      => 'test_create',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '40',
                'title'      => 'test_edit',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '41',
                'title'      => 'test_show',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '42',
                'title'      => 'test_delete',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
            [
                'id'         => '43',
                'title'      => 'test_access',
                'created_at' => '2019-10-03 09:42:50',
                'updated_at' => '2019-10-03 09:42:50',
            ],
        ];

        Permission::insert($permissions);
    }
}
