<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ferry extends Model
{
    use HasFactory;
    public function equipements()
    {
        return $this->belongsToMany(Equipement::class, 'equipement_ferries', 'ferry_id', 'equipement_id');
    }

}
