<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom','company','Salaire','Ville'];
//one to one :tache
    public function tache()
    {
        return $this->hasOne(Tache::class);
    }
    //one to many
    public function conges()
    {
        return $this->hasMany(Conge::class);
    }
    //many to many
    public function projets()
    {
        return $this->belongsToMany(Projet::class);
    }
}
