<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
use App\Models\Conge;

class CongeController extends Controller
{
    public function index()
    {
        // Récupérer tous les congés
        $conges = Conge::all();
        return view('conge.index', compact('conges'));
    }

    public function create()
    {
        // Récupérer tous les employés pour le formulaire de création de congé
        $employes = Employe::all();
        return view('conge.create', compact('employes'));
    }

    public function store(Request $request)
    {
        // Valider et créer un nouveau congé
        $data = $request->validate([
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'motif' => 'required|string|max:255',
            'employe_id' => 'required|exists:employes,id',
        ]);

        Conge::create($data);

        return redirect()->route('conge.index');
    }

    public function show($id)
    {
        // Afficher les détails d'un congé spécifique
        $conge = Conge::with('employe')->findOrFail($id);
        return view('conge.show', compact('conge'));
    }

    public function edit($id)
    {
        // Récupérer les données pour l'édition d'un congé
        $conge = Conge::findOrFail($id);
        $employes = Employe::all();
        return view('conge.edit', compact('conge', 'employes'));
    }

    public function update(Request $request, $id)
    {
        // Valider et mettre à jour un congé existant
        $data = $request->validate([
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'motif' => 'required|string|max:255',
            'employe_id' => 'required|exists:employes,id',
        ]);

        $conge = Conge::findOrFail($id);
        $conge->update($data);

        return redirect()->route('conge.index');
    }

    public function destroy($id)
    {
        // Supprimer un congé
        $conge = Conge::findOrFail($id);
        $conge->delete();

        return redirect()->route('conge.index');
    }
}

