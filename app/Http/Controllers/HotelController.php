<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $hotels=Hotel::all();

        return view('hotel.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hotel.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'direccion' => 'required|max:255',
            'n_pisos' => 'required|integer',
        ]);
        Hotel::create($request->all());

        return redirect()->route('hotel.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('hotel.edit', compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'direccion' => 'required|max:255',
            'n_pisos' => 'required|integer',
        ]);
        $hotel=Hotel::findOrFail($id);
        $hotel->update($request->all());

        return redirect()->route('hotel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('hotel.index');


    }
}
