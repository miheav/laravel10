<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Village;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);'



        Village::factory()->count(50)
            ->create();

        Hous::factory()->count(50)
            ->create();

        User::factory()->create([
            'name' => 'Test User',
            'password' => Hash::make('password'),
            'type' => User::USER,
            'email' => 'userphp @example.com',
        ]);
        User::factory()->create([
            'name' => 'Manager User',
            'password' => Hash::make('password'),
            'type' => User::MANAGER,
            'email' => 'manager@example.com',
        ]);
    }
}
