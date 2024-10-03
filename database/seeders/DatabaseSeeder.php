<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create roles based on RBAC
        $roles = [
            'marketing',
            'logistic',
            'finance',
            'noc',
            'csp',
            'admin',
            'super-admin',
        ];

        // Loop through each role and create a user for each
        foreach ($roles as $roleName) {
            // Check if the role already exists before creating it
            if (!Role::where('name', $roleName)->exists()) {
                Role::create(['name' => $roleName]);
            }

            // Check if a user with this email already exists
            $email = $roleName . '@wilzio.com';
            if (!User::where('email', $email)->exists()) {
                // Create a user and assign the role if the user doesn't exist
                $user = User::factory()->create([
                    'name' => ucfirst($roleName) . ' User', // e.g., "Marketing User"
                    'email' => $email,  // e.g., "marketing@example.com"
                ]);

                // Assign the role to the created user
                $user->assignRole($roleName);
            }
        }
    }
}
