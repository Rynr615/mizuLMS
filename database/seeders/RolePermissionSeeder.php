<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $adminRole = Role::create([
            'name' => 'admin'
        ]);

        $studentRole = Role::create([
            'name' => 'student'
        ]);
        
        $mentorRole = Role::create([
            'name' => 'mentor'
        ]);

        $user = User::create([
            'name' => 'Team Mizu',
            'email' => 'team@mizu.com',
            'password' => bcrypt('123123123')
        ]);
        $user->assignRole($adminRole);
    }
}
