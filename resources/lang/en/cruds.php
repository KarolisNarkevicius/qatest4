<?php

return [
    'permission' => [
        'title' => 'Permissions',
        'title_singular' => 'Permission',
    'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'title' => 'Title',
            'title_helper' => '',
            'created_at' => 'Created at',
            'created_at_helper' => '',
            'updated_at' => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ''
        ]
    ],
    'role' => [
        'title' => 'Roles',
        'title_singular' => 'Role',
    'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'title' => 'Title',
            'title_helper' => '',
            'permissions' => 'Permissions',
            'permissions_helper' => '',
            'created_at' => 'Created at',
            'created_at_helper' => '',
            'updated_at' => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ''
        ]
    ],
    'tessting' => [
        'title' => 'Tessting',
        'title_singular' => 'Tessting',
    'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'testas' => 'Testas',
            'testas_helper' => '',
            'created_at' => 'Created at',
            'created_at_helper' => '',
            'updated_at' => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ''
        ]
    ],
    'test' => [
        'title' => 'Test',
        'title_singular' => 'Test',
    'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'papai' => 'Papai',
            'papai_helper' => '',
            'created_at' => 'Created at',
            'created_at_helper' => '',
            'updated_at' => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ''
        ]
    ],
    'userManagement' => [
        'title' => 'User Management',
        'title_singular' => 'User Management'
    ],
    'user' => [
        'title' => 'Users',
        'title_singular' => 'User',
    'fields' => [
            'id' => 'ID',
            'id_helper' => '',
            'name' => 'Name',
            'name_helper' => '',
            'email' => 'Email',
            'email_helper' => '',
            'email_verified_at' => 'Email verified at',
            'email_verified_at_helper' => '',
            'password' => 'Password',
            'password_helper' => '',
            'roles' => 'Roles',
            'roles_helper' => '',
            'remember_token' => 'Remember Token',
            'remember_token_helper' => '',
            'created_at' => 'Created at',
            'created_at_helper' => '',
            'updated_at' => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at' => 'Deleted at',
            'deleted_at_helper' => ''
        ]
    ]
];
