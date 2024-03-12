<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consommation extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function affectation():BelongsTo
    {
        return $this->belongsTo(Affectation::class,"affectation_id");
    }
    public function typeVehicule():BelongsTo
    {
        return $this->belongsTo(typeVehicule::class,"type_vehicule_id");
    }
}

