<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Don extends Model
{
    use HasFactory;
    protected $fillable = ["son_id","montant","user_id"];

    public function son():BelongsTo{
        return $this->belongsTo(Son::class);
    }
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
