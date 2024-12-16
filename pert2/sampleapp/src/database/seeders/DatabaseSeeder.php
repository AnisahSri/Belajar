<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call Roleseeder first to create roles
        $this->call([RoleSeeder::class]);

        //Seed users after rolesexits
        $this->seedUsers();

        //Aditional seeder
        $this->call([BooksSeeder::class]);
        $this->call([VisitorsSeeder::class]);
        $this->call([BorrowingsSeeder::class]);
        $this->call([PermissionsSeeder::class]);
    }
    private function seedUsers(): void
    {
        //Create Admin user if not exitst
        $adminEmail = 'admin@admin.com';
        if (! User::where('email', $adminEmail)->exists()){
            $admin = User::create([
                'name' => 'Admin',
                'email' => $adminEmail,
                'password' => bcrypt('password'),
            ]);
            $admin->assignRole('super_admin');
        }

        //Create Staff user if not exitst
        $stafEmail = 'staf@admin.com';
        if (! User::where('email', $stafEmail)->exists()){
            $staf = User::create([
                'name' => 'Staff',
                'email' => $stafEmail,
                'password' => bcrypt('password'),
            ]);
            $staf->assignRole('Staff');
        }
    }
}