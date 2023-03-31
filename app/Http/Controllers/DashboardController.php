<?php

namespace App\Http\Controllers;
use App\Models\ParkDinosaur;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function home(): View
    {
        $parkDinosaursAmount = $this->countDinosaurs();
        return view("dashboard", compact(["parkDinosaursAmount"]));
    }

    public function countDinosaurs()
    {
        $countParkDinosaurs = ParkDinosaur::all()->count();
        return $countParkDinosaurs;
    }
}
