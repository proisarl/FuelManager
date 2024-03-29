<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Affectation extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];

    public function poste():BelongsTo
    {
        return $this->belongsTo(Poste::class);
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
