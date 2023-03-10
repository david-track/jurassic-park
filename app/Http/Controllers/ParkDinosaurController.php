<?php

namespace App\Http\Controllers;

use App\Models\ParkDinosaur;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;

use Illuminate\Http\Request;

class ParkDinosaurController extends Controller
{
    public function getAllParkDinosaurs(): Collection
    {
        return ParkDinosaur::all();
    }

    public function testview(): View
    {
        $parkDinosaurs = $this->getAllParkDinosaurs();
        return view("test", compact(["parkDinosaurs"]));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ParkDinosaur $parkDinosaur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ParkDinosaur $parkDinosaur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ParkDinosaur $parkDinosaur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ParkDinosaur $parkDinosaur)
    {
        //
    }
}
