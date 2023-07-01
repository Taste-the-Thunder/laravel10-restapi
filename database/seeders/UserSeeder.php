<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'email' => 'dhruvin@ljku.edu.in',
        ]);
        User::factory()->create([
            'email' => 'dhruvin1@ljku.edu.in',
        ]);
    }
}
