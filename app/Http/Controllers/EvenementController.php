<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
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
    public function create()
    {
        return view("association.ajoutEvenement");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'libelle' => 'required|string|max:255',
            'dateLimite' => 'required|date',
            'description' => 'required|string',
            'image' => 'required|string',
            'cloturer' => 'required|in:oui,non',
            'dateEvenement' => 'required|date',
        ];

        $request->validate($rules);

        $evenement= new Evenement();
        $evenement->libelle= $request->libelle;
        $evenement->image_mise_en_avant= $request->image;
        $evenement->description= $request->description;
        $evenement->date_limite_inscription= $request->dateLimite;
        $evenement->est_cloturer= $request->cloturer;
        $evenement->date_evenement= $request->dateEvenement; 
        $evenement->association_id= 1; 
        $evenement->save();
           
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Evenement $evenement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evenement $evenement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evenement $evenement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $evenement)
    {
        //
    }
}
