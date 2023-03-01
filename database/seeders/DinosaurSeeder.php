<?php

namespace Database\Seeders;

use App\Models\Dinosaur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DinosaurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Dinosaur::factory()->create([
            "dinosaur" => "Apatosaurus",
            "alias" => "Brontosaurus",
            "predator_warning" => false,
            "digestive_system_id" => 1,
        ]);
        Dinosaur::factory()->create([
            "dinosaur" => "Cearadactylus",
            "alias" => "Pterodactylus",
            "predator_warning" => false,
            "digestive_system_id" => 2,
        ]);
        Dinosaur::factory()
        ->create([
            "dinosaur" => "Dilophosaurus",
            "alias" => "",
            "predator_warning" => true,
            "digestive_system_id" => 2,
        ]);
        Dinosaur::factory()
        ->create([
            "dinosaur" => "Dryosaurus",
            "alias" => "Hypsilophodont",
            "predator_warning" => false,
            "digestive_system_id" => 1,
        ]);
        Dinosaur::factory()
        ->create([
            "dinosaur" => "Euoplocephalus",
            "alias" => "",
            "predator_warning" => false,
            "digestive_system_id" => 1,
        ]);
        Dinosaur::factory()
        ->create([
            "dinosaur" => "Hadrosaurus",
            "alias" => "",
            "predator_warning" => false,
            "digestive_system_id" => 1,
        ]);
        Dinosaur::factory()
        ->create([
            "dinosaur" => "Maiasaura",
            "alias" => "",
            "predator_warning" => false,
            "digestive_system_id" => 1,
        ]);
        Dinosaur::factory()
        ->create([
            "dinosaur" => "Microceratus",
            "alias" => "Microceratops",
            "predator_warning" => false,
            "digestive_system_id" => 1,
        ]);
        Dinosaur::factory()
        ->create([
            "dinosaur" => "Nanosaurus",
            "alias" => "Othnielia",
            "predator_warning" => false,
            "digestive_system_id" => 3,
        ]);
        Dinosaur::factory()
        ->create([
            "dinosaur" => "Procompsognathus",
            "alias" => "",
            "predator_warning" => false,
            "digestive_system_id" => 2,
        ]);
        Dinosaur::factory()
        ->create([
            "dinosaur" => "Stegosaurus",
            "alias" => "",
            "predator_warning" => false,
            "digestive_system_id" => 1,
        ]);
        Dinosaur::factory()
        ->create([
            "dinosaur" => "Styracosaurus",
            "alias" => "",
            "predator_warning" => false,
            "digestive_system_id" => 1,
        ]);
        Dinosaur::factory()
        ->create([
            "dinosaur" => "Triceratops",
            "alias" => "",
            "predator_warning" => false,
            "digestive_system_id" => 1,
        ]);
        Dinosaur::factory()
        ->create([
            "dinosaur" => "Tyrannosaurus",
            "alias" => "T-Rex",
            "predator_warning" => true,
            "digestive_system_id" => 2,
        ]);
        Dinosaur::factory()
        ->create([
            "dinosaur" => "Velociraptor",
            "alias" => "Raptor",
            "predator_warning" => false,
            "digestive_system_id" => 1,
        ]);
    }
}
