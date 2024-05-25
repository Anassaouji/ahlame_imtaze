@extends('layouts.app')
@section('content')
<h1>afficher détail d'une Tache</h1>
<br><br>
<table class="table table-bordered">
<tr>
<th>intitulé Tache:</th>
<td>{{ $tache->intituléTache }}</td>
</tr>
<tr>
<th>date tache:</th>
<td>{{ $tache->date_tache }}</td>
</tr>
<tr>
<th>Numéro Employe:</th><td>{{ $tache->Num_Employe }}</td>
</tr>
</table>
@endsection
