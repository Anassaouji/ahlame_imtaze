@extends('layouts.app')
@section('content')
<p>
<BR><BR><BR><BR>
<div class="row">
<div class="col-lg-11">
<h2>Liste des Taches</h2>
</div>
<div class="col-lg-1">
<a class="btn btn-success" href="{{ url('tache/create')
}}">Ajouter</a>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif<table class="table table-bordered">
<tr>
<th>Numéro</th>
<th>Intitulé tache</th>
<th>Date Tache</th>
<th>Numéro Employé</th>
</tr>
@foreach ($taches as $index => $tache)
<tr>
<td>{{ $index+1 }}</td>
<td>{{ $tache->intituléTache }}</td>
<td>{{ $tache->date_tache }}</td>
<td>{{ $tache->Num_Employe}}</td>
<td>
<form action="{{ url('tache/'. $tache->id) }}"
method="POST">
@csrf
@method('DELETE')
<a class="btn btn-info" href="{{ url('tache/'.
$tache->id) }}">Voir</a>
<a class="btn btn-primary" href="{{
url('tache/'. $tache->id .'/edit') }}">Modifier</a>
<button type="submit" class="btn btndanger">Supprimer</button>
</form>
</td>
</tr>
@endforeach
</table>
</p>
@endsection
