<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Paddock extends Model
{
    use HasFactory;

    public function parkDinosaur(): HasMany
    {
        return $this->hasMany(ParkDinosaur::class);
    }
}
