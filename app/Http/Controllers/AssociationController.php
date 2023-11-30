<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Models\Evenement;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('association.connexion');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('association.inscription');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'prenom' => ['required', 'string', 'max:255'],
        //     'telephone' => ['required', 'string', 'max:10'],
        //     'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', 'string', 'max:10'],
           
        // ]);

        $fileName = time() . "." . $request->logo->extension();
        $image= $request->logo->storeAs(
            'images',
            $fileName,
            'public'
        );

        $association = Association::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'slogan' => $image,
            'logo' => $request->logo,
            'dateCreation' => $request->datecreation,
           
        ]);
    }

    public function logginAssoc(Request $request){

        $credentials= $request->validate([
            "email"=>["required","email"],
            "password"=>["required"],
        ]);

        $test=auth()->guard("association")->attempt($credentials);
      
        if($test){
           
            $associationId = Auth::guard("association")->id();
            $evenements= Evenement::where("association_id",$associationId)->get();
    
            return view("association.dashboard",compact("evenements"));
        }

       
    }

    public function declinerReservation(){
        // $reservations= Reservation::all();
        $reservations = Reservation::where("est_reserver", "oui")->get();
        return view("association.declinerReservation",compact('reservations'));
    }

    public function declineReservation(Reservation $reservation){
        // dd($reservation);

        $reservation->est_reserver="non";

        $reservation->update();
    }

    public function voirListeDecliner(){
        $reservations = Reservation::where("est_reserver", "non")->get();
        return view("association.voirListeDecliner",compact('reservations'));
    }

   

    

   

    /**
     * Display the specified resource.
     */
    public function show(Association $association)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Association $association)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Association $association)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Association $association)
    {
        //
    }
}
