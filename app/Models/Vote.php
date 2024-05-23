<?php

namespace App\Models;

use App\Models\Son;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vote extends Model
{
    use HasFactory;
    protected $fillable = ["son_id","count"];

    public function son():BelongsTo{
        return $this->belongsTo(Son::class);
    }
}
