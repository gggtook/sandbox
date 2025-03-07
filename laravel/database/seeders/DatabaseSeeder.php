<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use App\Models\Message;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(20)
            ->has(Profile::factory())
            ->has(Message::factory()->count(3))
            ->create();
    }
}
