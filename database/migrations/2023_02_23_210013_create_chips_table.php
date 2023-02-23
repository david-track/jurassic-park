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
        Schema::create("chips", function (Blueprint $table) {
            $table->id();
            $table->string("type"); //ie 3AA2
            $table->boolean("tracking")->nullable();
            $table->string("location")->nullable();
            $table->boolean("health_sensor");
            $table->string("notes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("chips");
    }
};
