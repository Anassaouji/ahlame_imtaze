
@extends('layouts.app')

@section('content')
    <h1>Liste des Congés</h1>
    <a href="{{ route('conges.create') }}">Ajouter un congé</a>
    <ul>
        @foreach($conges as $conge)
            <li>
                {{ $conge->employe->nom }} {{ $conge->employe->prenom }}:
                du {{ $conge->date_debut }} au {{ $conge->date_fin }}
                ({{ $conge->motif }})
                <a href="{{ route('conges.show', $conge->id) }}">Voir</a>
                <a href="{{ route('conges.edit', $conge->id) }}">Editer</a>
                <form action="{{ route('conges.destroy', $conge->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection

