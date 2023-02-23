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
            $table->string("digestive_classification"); // tabel Herbivore, omni, carni
            // $table->string("chip_id"); // foreign id (has one)
            // $table->string("health_report_id"); // (has many health reports)
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
