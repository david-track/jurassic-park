<?php

namespace Database\Seeders;

use App\Models\Paddock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaddockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Paddock::factory()
            ->count(10)
            ->create();
    }
}
