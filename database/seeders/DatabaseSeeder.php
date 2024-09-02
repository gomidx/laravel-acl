<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            PermissionSeeder::class,
            PermissionRoleSeeder::class,
            ContentSeeder::class,
            ModuleSeeder::class,
            ContentModuleSeeder::class,
        ]);

        User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@teste.com',
            'role_id' => 1
        ]);

        User::factory()->create([
            'name' => 'Lucas',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'role_id' => 1
        ]);
    }
}
