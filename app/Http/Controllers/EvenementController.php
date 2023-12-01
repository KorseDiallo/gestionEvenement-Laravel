<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dateEvenement' => 'required|date',
        ];

        $fileName = time() . "." . $request->image->extension();
        $image= $request->image->storeAs(
            'images',
            $fileName,
            'public'
        );
        // dd($image);

        $request->validate($rules);

        $evenement= new Evenement();
        $evenement->libelle= $request->libelle;
        $evenement->image_mise_en_avant= $image;
        $evenement->description= $request->description;
        $evenement->date_limite_inscription= $request->dateLimite;
        $evenement->date_evenement= $request->dateEvenement; 
        $evenement->association_id= Auth::guard("association")->id(); 
        $evenement->save();
      

        // try {
        //     // Votre code pour créer un nouvel événement
        //     $evenement->save();
        
        //     return redirect("/dashboard")->with('success', 'Événement créé avec succès!');
        // } catch (\Exception $e) {
        //     return redirect("/dashboard")->with('error', 'Une erreur est survenue lors de la création de l\'événement.');
        // }
    
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
        
        return view("association.modifierEvenement",compact("evenement"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evenement $evenement)
    {
        $rules = [
            'libelle' => 'required|string|max:255',
            'dateLimite' => 'required|date',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'dateEvenement' => 'required|date',
        ];

        $fileName = time() . "." . $request->image->extension();
        $image= $request->image->storeAs(
            'images',
            $fileName,
            'public'
        );

        $request->validate($rules);

        $evenement->libelle= $request->libelle;
        $evenement->image_mise_en_avant= $image;
        $evenement->description= $request->description;
        $evenement->date_limite_inscription= $request->dateLimite;
        $evenement->date_evenement= $request->dateEvenement; 
        $evenement->association_id= Auth::guard("association")->id(); 

        $evenement->update();
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $evenement)
    {
        // dd('ok');
        $evenement->delete();
    }

    public function cloturer(Evenement $evenement){
        $evenement->est_cloturer="oui";

        $evenement->update();
    }
}
