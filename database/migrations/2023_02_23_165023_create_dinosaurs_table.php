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
            $table->dateTime("date_of_birth");
            $table->boolean("predator_warning");
            $table->string("digestive_system_id"); //Foreign id,  tabel Herbivore, omni, carni
            $table->string("chip_id"); // foreign id
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
