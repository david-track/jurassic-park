<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("dinosaurs", function (Blueprint $table) {
            $table->id();
            $table->string("dinosaur");
            $table->string("alias")->nullable();
            $table->boolean("predator_warning");
            $table->string("digestive_system"); // Herbivore, omni, carni. Enum?
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("dinosaurs");
    }
};
