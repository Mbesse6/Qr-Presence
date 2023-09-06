<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function liste_employes(){

        $employes = Employe::all();
        return view('employe.liste', compact('employes'));
    }

    public function ajouter_employe(){
        return view('employe.ajouter');
    }

    public function ajouter_employe_traitement(Request $request){

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'matricule' => 'required',
            'adresse' => 'required',
            'departement' => 'required',
            'telephone' => 'required',
            'sexe' => 'required',
            'profil' => 'required',
            'login' => 'required',
            'password' => 'required',
            'statut' => 'required',
        ]);

        $employe = new Employe();
        $employe->nom = $request->nom;
        $employe->prenom = $request->prenom;
        $employe->matricule = $request->matricule;
        $employe->adresse = $request->adresse;
        $employe->departement = $request->departement;
        $employe->telephone = $request->telephone;
        $employe->sexe = $request->sexe;
        $employe->login = $request->login;
        $employe->password = $request->password;
        $employe->profil = $request->profil;
        $employe->statut = $request->statut;
        $employe->save();

        return redirect('/ajouter')->with('status', 'L\'employé a été enregistré avec succes.');
    }

    public function modifier_employe($id){

        $employes = Employe::find($id);


        return view('employe.modifier', compact('employes'));
    }

    public function modifier_employe_traitement(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'matricule' => 'required',
            'adresse' => 'required',
            'departement' => 'required',
            'telephone' => 'required',
            'sexe' => 'required',
            'profil' => 'required',
            'login' => 'required',
            'password' => 'required',
            'statut' => 'required',
        ]);

        $employe = Employe::find($request->id);
        $employe->nom = $request->nom;
        $employe->prenom = $request->prenom;
        $employe->matricule = $request->matricule;
        $employe->adresse = $request->adresse;
        $employe->departement = $request->departement;
        $employe->telephone = $request->telephone;
        $employe->sexe = $request->sexe;
        $employe->login = $request->login;
        $employe->password = $request->password;
        $employe->profil = $request->profil;
        $employe->statut = $request->statut;
        $employe->update();

        return redirect('/employe')->with('status', 'L\'employé a été modifié avec succes.');
    }
}
