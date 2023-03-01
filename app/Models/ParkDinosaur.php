<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ParkDinosaur extends Model
{
    use HasFactory;

    public function dinosaur(): BelongsTo
    {
        return $this->belongsTo(Dinosaur::class);
    }

    public function paddock(): BelongsTo
    {
        return $this->belongsTo(Paddock::class);
    }
}
