<?php

namespace Database\Seeders;

use App\Models\ParkDinosaur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParkDinosaurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ParkDinosaur::factory()
            ->count(17)
            ->create([
                "dinosaur_id" => 1,
            ]);
        ParkDinosaur::factory()
            ->count(6)
            ->create([
                "dinosaur_id" => 2,
            ]);
        ParkDinosaur::factory()
            ->count(7)
            ->create([
                "dinosaur_id" => 3,
            ]);
        ParkDinosaur::factory()
            ->count(34)
            ->create([
                "dinosaur_id" => 4,
            ]);
        ParkDinosaur::factory()
            ->count(16)
            ->create([
                "dinosaur_id" => 5,
            ]);
        ParkDinosaur::factory()
            ->count(11)
            ->create([
                "dinosaur_id" => 6,
            ]);
        ParkDinosaur::factory()
            ->count(22)
            ->create([
                "dinosaur_id" => 7,
            ]);
        ParkDinosaur::factory()
            ->count(22)
            ->create([
                "dinosaur_id" => 8,
            ]);
        ParkDinosaur::factory()
            ->count(23)
            ->create([
                "dinosaur_id" => 9,
            ]);
        ParkDinosaur::factory()
            ->count(65)
            ->create([
                "dinosaur_id" => 10,
            ]);
        ParkDinosaur::factory()
            ->count(4)
            ->create([
                "dinosaur_id" => 11,
            ]);
        ParkDinosaur::factory()
            ->count(18)
            ->create([
                "dinosaur_id" => 12,
            ]);
        ParkDinosaur::factory()
            ->count(8)
            ->create([
                "dinosaur_id" => 13,
            ]);
        ParkDinosaur::factory()
            ->count(2)
            ->create([
                "dinosaur_id" => 14,
            ]);
        ParkDinosaur::factory()
            ->count(37)
            ->create([
                "dinosaur_id" => 15,
            ]);
    }
}
