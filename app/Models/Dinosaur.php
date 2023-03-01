<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Dinosaur extends Model
{
    use HasFactory;

    public function digestiveSystem(): HasOne
    {
        return $this->hasOne(DigestiveSystem::class);
    }

    public function parkDinosaur(): HasMany
    {
        return $this->hasMany(ParkDinosaur::class);
    }
}
