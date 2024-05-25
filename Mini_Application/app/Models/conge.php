<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conge extends Model
{
    use HasFactory;
    protected $fillable = ['date_debut', 'date_fin', 'motif', 'employe_id'];

    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }
}
