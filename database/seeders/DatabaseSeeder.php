<?php

namespace Database\Seeders;

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
        $this->call(LaratrustSeeder::class);

        $seller = \App\Models\User::factory()->create([
            'name' => 'Mark John',
            'email' => 'markjohn@gmail.com',
            'password' => Hash::make('markjohn@gmail.com'),
        ]);

        $seller->addRole('seller');

        $superadministrator = \App\Models\User::factory()->create([
            'name' => 'PSU Marketplace',
            'email' => 'psuaccmarketplace@gmail.com',
            'password' => Hash::make('psumarketplace_1'),
        ]);

        $superadministrator->addRole('superadministrator');

        $customer = \App\Models\User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => Hash::make('johndoe@gmail.com'),
        ]);

        $customer->addRole('customer');

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
