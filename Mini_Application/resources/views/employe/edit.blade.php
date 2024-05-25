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
<form method="post" action="{{ url('employe/'. $employe->id) }}" >
@method('PATCH')
@csrf
<div class="form-group mb-3">
<label for="nom">Nom:</label>
<input type="text" class="form-control" id="nom"
placeholder="Entrer Nom" name="nom" value="{{ $employe->nom }}"></div>
<div class="form-group mb-3">
<label for="prénom">Prénom:</label>
<input type="text" class="form-control" id="prénom"
placeholder="Entrer prénom" name="prénom" value="{{ $employe->prénom
}}">
</div>
<div class="form-group mb-3">
<label for="company">Company:</label>
<input type="text" class="form-control" id="company"
placeholder="Entrer Company" name="company" value="{{ $employe->company
}}">
</div>
<div class="form-group mb-3">
<label for="fortune">SALAIRE (DH):</label>
<input type="number" class="form-control" id="Salaire"
placeholder="Salaire" name="Salaire" value="{{ $employe->Salaire }}">
</div>
<div class="form-group mb-3">
<label for="detail">Adresse:</label>
<textarea class="form-control" id="Ville" name="Ville"
rows="10" placeholder="Ville">{{ $employe->Ville }}</textarea>
</div>
<button type="submit" class="btn btnprimary">Enregistrer</button>
</form>
@endsection
