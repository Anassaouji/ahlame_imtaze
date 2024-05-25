@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-lg-11">
<h2>Liste des employés</h2>
</div>
<div class="col-lg-1">
<a class="btn btn-success" href="{{ url('employe/create')
}}">Ajouter</a>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success"><p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>Numéro</th>
<th>Nom</th>
<th>prénom</th>
<th>Company</th>
<th>Ville</th>
<th>Salaire</th>
<th>Actions</th>
</tr>
@foreach ($employes as $index => $employe)
<tr>
<td>{{ $index+1 }}</td>
<td>{{ $employe->nom }}</td>
<td>{{ $employe->prénom }}</td>
<td>{{ $employe->company }}</td>
<td>{{ $employe->Ville }}</td>
<td>{{ $employe->Salaire }}</td>
<td>
<form action="{{ url('employe/'. $employe->id) }}"
method="POST">
@csrf
@method('DELETE')
<a class="btn btn-info" href="{{
url('employe/'. $employe->id) }}">Voir</a>
<a class="btn btn-primary" href="{{
url('employe/'. $employe->id .'/edit') }}">Modifier</a>
<button type="submit" class="btn btndanger">Supprimer</button>
</form>
</td></tr>
@endforeach
</table>
@endsection
