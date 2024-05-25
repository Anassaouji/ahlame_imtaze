<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employes = Employe::all();
return view('employe.index', compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('employe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom'=>'required',
            'prénom'=>'required',
            'Ville'=> 'required',
            'company' => 'required',
            'Salaire' => 'required'
            ]);
            $employe = new Employe();
            $employe->nom= $request->input('nom');
            $employe->prénom= $request->input('prénom');
            $employe->Ville = $request->input('Ville');
            $employe->company = $request->input('company');
            $employe->Salaire= $request->input('Salaire');
            $employe->save();
            return redirect('/')->with('success', 'Employer Ajouté avec
        succès');
            }
   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $employe1 = Employe::find($id);
// $personnage = Personnage::findOrFail($id);
// return view('personnage.show', compact('personnage'));
return view('employe.show',['employe'=>$employe1]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $employe = Employe::findOrFail($id);
return view('employe.edit', compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'nom'=>'required',
            'prénom'=>'required',
            'Ville'=> 'required',
            'company' => 'required',
            'Salaire' => 'required']);
            $employe1 = Employe::findOrFail($id);
            $employe1->nom = $request->get('nom');
            $employe1->prénom = $request->get('prénom');
            $employe1->Ville = $request->get('Ville');
            $employe1->company = $request->get('company');
            $employe1->Salaire = $request->get('Salaire');
            $employe1->update();
            return redirect('/')->with('success', 'Employe Modifié avec
            succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
$emp = Employe::findOrFail($id);
$emp->delete();
return redirect('/')->with('success', 'Employé a été supprimé
avec succès');
}
}
