<?php

use Mekaeil\LaravelUserManagement\Seeders\Permission\MasterPermissionTableSeeder;

class PermissionTableSeeder extends MasterPermissionTableSeeder
{
    protected $permissions = [
        [
            'name'          => 'admin.manager',
            'title'         => 'Admin Panel',
            'guard_name'    => 'web',
            'description'   => 'This permission is for access to admin panel.',
            'module'        => 'User',
            'roles'         => [
                'Admin',
            ],
        ],
    ];

    
}
