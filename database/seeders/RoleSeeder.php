<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Role::create([
        //     'name' => 'admin',
        //     'description' => 'Administrator',
        // ]);

        // Role::create([
        //     'name' => 'manager',
        //     'description' => 'Manager',
        // ]);        

        // Role::create([
        //     'name' => 'supervisor',
        //     'description' => 'Supervisor',
        // ]);

        Role::factory(10)->create();
    }
}
