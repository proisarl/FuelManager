<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        return $this->belongsTo(TypeVehicule::class,"type_vehicule_id");
    }
}

