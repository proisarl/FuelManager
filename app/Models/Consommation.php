<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consommation extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=["plaque","littre","index","companie","chauffeur","affectation_id","pompiste"];
    public function affectation():BelongsTo
    {
        return $this->belongsTo(Affectation::class,"affectation_id");
    }
}

