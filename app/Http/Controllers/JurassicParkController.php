<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class JurassicParkController extends Controller
{
    //
    public function home(): View
    {
        return view("jurassicpark");
    }

    public function dinosaurs(): View
    {
        return view("dinosaurs");
    }
}
