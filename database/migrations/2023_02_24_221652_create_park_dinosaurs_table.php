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
        Schema::create("park_dinosaurs", function (Blueprint $table) {
            $table->id();
            $table->foreignId("dinosaur_id");
            $table->date("date_of_birth");
            $table->foreignId("paddock_id");
            // $table->foreignId("chip_id");
            $table->foreignId("health_report_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("park_dinosaurs");
    }
};
