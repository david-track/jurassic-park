<?php

use App\Http\Controllers\JurassicParkController;
use App\Http\Controllers\ParkDinosaurController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//test
Route::get("/test", [ParkDinosaurController::class, "testview"]);

Route::get("/", [JurassicParkController::class, "home"])->name("home");
Route::get("/dinosaurs", [JurassicParkController::class, "dinosaurs"])->name(
    "dinosaurs"
);

Route::get("/dashboard", function () {
    return view("dashboard");
})
    ->middleware(["auth", "verified"])
    ->name("dashboard");

Route::get("/superuser", function () {
    return view("superuser");
})
    ->middleware(["auth", "verified"])
    ->name("superuser");

Route::middleware("auth")->group(function () {
    Route::get("/profile", [ProfileController::class, "edit"])->name(
        "profile.edit"
    );
    Route::patch("/profile", [ProfileController::class, "update"])->name(
        "profile.update"
    );
    Route::delete("/profile", [ProfileController::class, "destroy"])->name(
        "profile.destroy"
    );
});

require __DIR__ . "/auth.php";
