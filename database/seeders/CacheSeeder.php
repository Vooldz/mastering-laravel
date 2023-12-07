<?php

namespace Database\Seeders;


use App\Models\Cache;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cache::factory()->count(3000)->create();
    }
}
