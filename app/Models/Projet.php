<?php

namespace App\Models;

use App\Models\Artiste;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = ["artiste_id","start_vote","end_vote","description"];

    public function artiste():BelongsTo{
        return $this->belongsTo(Artiste::class);
    }
}
