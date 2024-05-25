@extends('layouts.app')

@section('content')
    <h1>Détails du Congé</h1>
    <p><strong>Employé:</strong> {{ $conge->employe->nom }} {{ $conge->employe->prenom }}</p>
    <p><strong>Date de début:</strong> {{ $conge->date_debut }}</p>
    <p><strong>Date de fin:</strong> {{ $conge->date_fin }}</p>
    <p><strong>Motif:</strong> {{ $conge->motif }}</p>
    <a href="{{ route('conges.index') }}">Retour à la liste</a>
@endsection
