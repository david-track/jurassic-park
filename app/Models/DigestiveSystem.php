<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class DigestiveSystem extends Model
{
    use HasFactory;

    public function dinosaur(): BelongsToMany
    {
        return $this->belongsToMany(Dinosaur::class);
    }
}
