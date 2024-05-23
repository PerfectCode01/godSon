<?php

namespace App\Models;

use App\Models\Projet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artiste extends Model
{
    use HasFactory;
    protected $fillable = ["nom","description"];

    public function projets():HasMany{
        return $this->hasMany(Projet::class);
    }
}

