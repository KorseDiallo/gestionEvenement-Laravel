<?php

namespace App\Http\Controllers;

use App\Models\Association;
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

        $association = Association::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'slogan' => $request->slogan,
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
            return view("association.dashboard");
        }

       
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
