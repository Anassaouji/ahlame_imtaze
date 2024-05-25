@extends('layouts.app')

@section('content')
    <h1>Ajouter un Congé</h1>
    <form action="{{ route('conges.store') }}" method="POST">
        @csrf
        <label for="employe_id">Employé:</label>
        <select name="employe_id" id="employe_id">
            @foreach($employes as $employe)
                <option value="{{ $employe->id }}">{{ $employe->nom }} {{ $employe->prenom }}</option>
            @endforeach
        </select>
        <br>
        <label for="date_debut">Date de début:</label>
        <input type="date" name="date_debut" id="date_debut">
        <br>
        <label for="date_fin">Date de fin:</label>
        <input type="date" name="date_fin" id="date_fin">
        <br>
        <label for="motif">Motif:</label>
        <input type="text" name="motif" id="motif">
        <br>
        <button type="submit">Ajouter</button>
    </form>
@endsection

