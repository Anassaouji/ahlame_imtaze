@extends('layouts.app')
@section('content')
<h1>Modifier employé</h1>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form method="post" action="{{ url('tache/'. $tache->id) }}" >@method('PATCH')
@csrf
<div class="form-group mb-3">
<label for="intituléTache">intitulé Tache:</label>
<input type="text" class="form-control" id="intituléTache"
placeholder="Entrer l' intitulé Tache" name="intituléTache" value="{{
$tache->intituléTache }}">
</div>
<div class="form-group mb-3">
<label for="date_tache">la date de la tache:</label>
<input type="text" class="form-control" id="date_tache"
placeholder="Entrer la date de la tache" name="date_tache" value="{{
$tache->date_tache }}">
</div>
<div class="form-group mb-3">
<label for="Num_Employe">choisir le Numéro Employé
:</label>
<select class="form-control" id="Num_Employe"
placeholder="Numéro de l'Employé" name="Num_Employe" value="{{ $tache->Num_Employe }}">
@foreach ($employes as $index => $employe)
@if( $tache->Num_Employe ==$employe->id)
<option selected>{{ $employe->id }}</option>
@else
<option >{{ $employe->id }}</option>
@endif
@endforeach
</select>
</div>
<button type="submit" class="btn btnprimary">Enregistrer</button>
</form>
@endsection
