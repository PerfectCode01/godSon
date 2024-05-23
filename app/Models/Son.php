<?php

namespace App\Models;

use App\Models\Don;
use App\Models\Vote;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Son extends Model
{
    use HasFactory;
    protected $fillable = ["titre","projet_id","description","url"];
    public function votes():HasMany{
        return $this->hasMany(Vote::class);
    }
    public function dons():HasMany{
        return $this->hasMany(Don::class);
    }
}
