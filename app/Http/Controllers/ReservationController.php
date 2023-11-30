<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Reservation;
use App\Notifications\EmailReservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
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
    public function create(Evenement $evenement)
    {
        // dd($evenement);
        return view("client.faireReservation",compact('evenement'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Evenement $evenement)
    {
        // dd($evenement->id);
        $request->validate([
            'reference' => 'required|string',
            'nombre_de_place' => 'required|integer|min:1',
        ]);

        $reservation= new Reservation();
        $reservation->reference=$request->reference;
        $reservation->user_id=Auth::guard("web")->id();
        $reservation->evenement_id=$evenement->id;
        $reservation->nombreReservation=$request->nombre_de_place;

        $reservation->save();
        $reservation->user->notify(new EmailReservation());
        //en bas le redirect
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
