<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Example;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Example::factory()->count(5)->create();
    //     for ($i=0; $i <= 5; $i++) { 
    //     Example::create([
    //         'name' => 'Test_'.$i,
    //         'content' => 'Content_' . $i,
    //         'status' => ['enable', 'disable'][rand(0,1)],
    //         'show' => rand(0,1),
    //     ]);
    // }
    }
}
