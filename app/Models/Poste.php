<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Poste extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded=[];
    public function pompes():HasMany
    {
        return $this->hasMany(Pompe::class);
    }
    public function users():BelongsToMany
    {
        return $this->belongsToMany(User::class,'affectations')->withPivot("id","created_at")->whereNull('affectations.deleted_at');
    }
}
