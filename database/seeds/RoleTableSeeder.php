<?php

use Mekaeil\LaravelUserManagement\Seeders\Permission\MasterRoleTableSeeder;
class RoleTableSeeder extends MasterRoleTableSeeder
{
    protected $roles = [
        [
            'name'          => "Super",
            'title'         => "Super Administrator",
            'guard_name'    => "web",
            'description'   => "This role will assign to Super Administrator",
        ],
        [
            'name'          => "Admin",
            'title'         => "Administrator",
            'guard_name'    => "web",
            'description'   => "This role will assign to Administrator",
        ],
        [
            'name'          => "Manager",
            'title'         => "Manager",
            'guard_name'    => "web",
            'description'   => "This role will assign to Manager",
        ],
        [
            'name'          => "Employee",
            'title'         => "Employee",
            'guard_name'    => "web",
            'description'   => "This role will assign to Employee.",
        ],
        
    ];

    
}
