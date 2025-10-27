<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        \App\Models\User::firstOrCreate(
            ['username' => 'owner'],
            [
            'name' => 'Owner',
            'email' => 'owner@example.com',
            'password' => bcrypt('password'),
            ]
        );

        \App\Models\User::firstOrCreate(
            ['username' => 'meimei'],
            [
            'name' => 'Owner',
            'email' => 'meimei@example.com',
            'password' => bcrypt('12345678'),
            ]
        );
    }

}
