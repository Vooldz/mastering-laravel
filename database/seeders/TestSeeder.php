<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use App\Models\Test;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    // protected function random_en_di()
    // {

    //     $rand = ['enable', 'disable'][rand(0, 1)];
    //     return $rand;
    // }
    public function run(): void
    {
        Test::factory()->count(5)->state(new Sequence
        (
            ['status' => ['enable', 'disable'][rand(0, 1)]]))->create();
        // for ($i = 0; $i < 5; $i++) {
        //     Test::create([
        //         'name' => 'Test_' . $i,
        //         'content' => 'Content_' . $i,
        //         'show' => rand(0, 1),
        //         'status' => $this->random_en_di(),
        //     ]);
        // }
    }
}
