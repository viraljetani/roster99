<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        /*
        |--------------------------------------------------------------------------
        |  SEEDERS FOR LARAVEL USER MANAGEMENT
        |--------------------------------------------------------------------------
        |
        */
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
    }
}
