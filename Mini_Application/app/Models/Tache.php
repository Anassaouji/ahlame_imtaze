<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;
    protected $fillable = ['intituléTache', 'date_tache', 'employe_id'];

    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }
}
