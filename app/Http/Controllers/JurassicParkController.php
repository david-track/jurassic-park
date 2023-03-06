<?php

namespace App\Http\Controllers;

use App\Models\ParkDinosaur;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Ramsey\Uuid\Type\Integer;

class JurassicParkController extends Controller
{
    //
    public function home(): View
    {
        $parkDinosaursCount = $this->countDinosaurs();
        return view("jurassicpark", compact(["parkDinosaursCount"]));
    }

    public function dinosaurs(): View
    {
        return view("dinosaurs");
    }

    public function countDinosaurs()
    {
        $countParkDinosaurs = ParkDinosaur::all()->count();
        return $countParkDinosaurs;
    }
}
