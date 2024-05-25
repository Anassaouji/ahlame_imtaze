@extends('layouts.app')
@section('content')
<h1>Ajouter une Tache</h1>
@if ($errors->any())
<div class="alert alert-danger"><ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ url('tache') }}" method="POST">
@csrf
<div class="form-group mb-3">
<label for="nom">intitulé Tache :</label>
<input type="text" class="form-control" id="intituléTache"
placeholder="Entrez intitulé Tache" name="intituléTache">
</div>
<div class="form-group mb-3">
<label for="nom">date tache :</label>
<input type="date" class="form-control" id="date_tache"
placeholder="Entrez la date de la ache" name="date_tache">
</div>
<div class="form-group mb-3">
<label for="Num_Employe">Numéro Employé:</label>
<select class="form-control" id="Num_Employe"
placeholder="Numéro de l'Employé" name="Num_Employe">
@foreach ($employes as $index => $employe)
<option>{{ $employe->id }}</option>
@endforeach
</select>
</div>
<button type="submit" class="btn btnprimary">Enregister</button>
</form>
@endsection
